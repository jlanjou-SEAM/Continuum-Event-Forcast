from pathlib import Path
import subprocess
import json
import time
import os
import sys
from datetime import datetime, UTC, timedelta

BASE_DIR = Path(__file__).resolve().parent
PROJECT_ROOT = BASE_DIR.parent.parent
CONFIG_FILE = BASE_DIR / "collector_sources.json"
COLLECTOR_DIR = PROJECT_ROOT / "collectors"
LOG_DIR = PROJECT_ROOT / "logs"
LOG_DIR.mkdir(parents=True, exist_ok=True)

BUCKET = "official"
INTERVAL_SECONDS = 30
LABEL = "official_acquisition_72hr"
BACKFILL_HOURS = 72
SUBPROCESS_TIMEOUT_SECONDS = int(os.environ.get("SEAM_COLLECTOR_TIMEOUT_SECONDS", "45"))

if BACKFILL_HOURS:
    os.environ["SEAM_RETRIEVAL_MODE"] = "weekly_168hr_update" if BACKFILL_HOURS == 168 else "live_plus_72h"
    os.environ["SEAM_BACKFILL_HOURS"] = str(BACKFILL_HOURS)
    end = datetime.now(UTC)
    start = end - timedelta(hours=BACKFILL_HOURS)
    os.environ["SEAM_WINDOW_START_UTC"] = start.strftime("%Y-%m-%dT%H:%M:%SZ")
    os.environ["SEAM_WINDOW_END_UTC"] = end.strftime("%Y-%m-%dT%H:%M:%SZ")
else:
    os.environ.setdefault("SEAM_RETRIEVAL_MODE", "live")
    os.environ.setdefault("SEAM_BACKFILL_HOURS", "0")

os.environ["SEAM_ACQUISITION_LABEL"] = BUCKET
os.environ["SEAM_COLLECTOR_CONFIG"] = str(CONFIG_FILE)
os.environ.setdefault("SEAM_OUTPUT_ROOT", str(PROJECT_ROOT))

def utc_now():
    return datetime.now(UTC).isoformat()

def load_sources():
    return json.loads(CONFIG_FILE.read_text(encoding="utf-8"))

def selected_sources(sources):
    return [
        name
        for name, spec in sources.items()
        if spec.get("bucket") == BUCKET
    ]

def collector_filename(name):
    suffix = "_72hr" if BACKFILL_HOURS >= 72 else ""
    return f"{name}{suffix}.py"

def run_cycle():
    sources = load_sources()
    names = selected_sources(sources)

    print(f"[{LABEL}] cycle start | bucket={BUCKET} sources={len(names)}")
    print(f"[{LABEL}] project_root: {PROJECT_ROOT}")
    print(f"[{LABEL}] config: {CONFIG_FILE}")
    print(f"[{LABEL}] collectors: {COLLECTOR_DIR}")
    print(f"[{LABEL}] output: {Path(os.environ['SEAM_OUTPUT_ROOT']) / BUCKET}")

    changed = unchanged = degraded = failed = missing = 0
    started = time.perf_counter()

    for name in names:
        collector = COLLECTOR_DIR / collector_filename(name)

        if not collector.exists():
            print(f"[missing] {collector.name}")
            missing += 1
            continue

        try:
            proc = subprocess.run(
                [sys.executable, str(collector)],
                cwd=str(PROJECT_ROOT),
                env=os.environ.copy(),
                text=True,
                capture_output=True,
                timeout=SUBPROCESS_TIMEOUT_SECONDS,
            )

            output = (proc.stdout or "") + (proc.stderr or "")
            if output:
                print(output.rstrip())

            if "[changed]" in output:
                changed += 1
            elif "[unchanged]" in output:
                unchanged += 1
            elif "[degraded]" in output:
                degraded += 1
            elif "[failed]" in output or proc.returncode != 0:
                failed += 1

        except subprocess.TimeoutExpired:
            print(f"[failed] {name} timeout after {SUBPROCESS_TIMEOUT_SECONDS}s")
            failed += 1
        except Exception as exc:
            print(f"[failed] {name} {exc}")
            failed += 1

    elapsed = round(time.perf_counter() - started, 2)
    print(
        f"[{LABEL}] summary | changed={changed} unchanged={unchanged} "
        f"degraded={degraded} failed={failed} missing={missing} "
        f"total={len(names)} elapsed={elapsed}s"
    )

def main():
    if BACKFILL_HOURS:
        end = datetime.now(UTC)
        start = end - timedelta(hours=BACKFILL_HOURS)
        print(f"[{BACKFILL_HOURS}hr] running {Path(__file__).name}")
        print(f"[{BACKFILL_HOURS}hr] window {start.strftime('%Y-%m-%dT%H:%M:%SZ')} -> {end.strftime('%Y-%m-%dT%H:%M:%SZ')}")

    while True:
        run_cycle()
        print(f"[{LABEL}] sleep {INTERVAL_SECONDS}s")
        time.sleep(INTERVAL_SECONDS)

if __name__ == "__main__":
    main()
