from pathlib import Path
import os
import subprocess
import json
import time
from datetime import datetime, UTC

BASE_DIR = Path(__file__).resolve().parent
CONFIG_DIR = BASE_DIR.parent
PROJECT_ROOT = BASE_DIR.parent.parent

# collector routing
LIVE_COLLECTOR_DIR = PROJECT_ROOT / "collectors"
BACKFILL_COLLECTOR_DIR = PROJECT_ROOT / "collectors"

# runtime mode detection
RETRIEVAL_MODE = os.environ.get("SEAM_RETRIEVAL_MODE", "live")
BACKFILL_HOURS = int(os.environ.get("SEAM_BACKFILL_HOURS", "0"))

# collector directory selection
if BACKFILL_HOURS >= 168:
    COLLECTOR_SUFFIX = "_72hr"
    COLLECTOR_DIR = BACKFILL_COLLECTOR_DIR
else:
    COLLECTOR_SUFFIX = ""
    COLLECTOR_DIR = LIVE_COLLECTOR_DIR

LOG_DIR = PROJECT_ROOT / "logs"
LOG_DIR.mkdir(parents=True, exist_ok=True)

INTERVAL_SECONDS = 300
CLASS_NAME = "nonrealtime"
LABEL = "nonrealtime"

def utc_now():
    return datetime.now(UTC).isoformat()


# --- SEAM PATH RESOLUTION PATCH v40 ---
def _seam_resolve_config_file_v40(name):
    from pathlib import Path
    here = Path(__file__).resolve().parent
    candidates = [
        here / name,
        here.parent / name,
        here.parent / "config" / name,
        here.parent.parent / "config" / name,
        Path(r"C:\Continuum Database\config") / name,
    ]
    for c in candidates:
        if c.exists():
            return c
    return candidates[0]
# --- END SEAM PATCH ---

def load_sources():
    return json.loads(_seam_resolve_config_file_v40("collector_sources.json").read_text(encoding="utf-8"))

def parse_state(line):
    for state in ("[changed]", "[unchanged]", "[degraded]", "[failed]"):
        if line.startswith(state):
            return state.strip("[]")
    return None

while True:
    cycle_start = time.perf_counter()
    sources = load_sources()
    names = [
        name for name, spec in sources.items()
        if spec.get("acquisition_class") == CLASS_NAME
    ]

    print(f"[{LABEL}] cycle start | sources={len(names)}")

    changed = unchanged = degraded = failed = missing = 0

    for name in names:
        collector_name = f"{name}{COLLECTOR_SUFFIX}.py"
        collector = COLLECTOR_DIR / collector_name

        if not collector.exists():
            missing += 1
            print(f"[missing] {collector.name}")
            continue

        try:
            result = subprocess.run(
                ["python", str(collector)],
                timeout=20,
                capture_output=True,
                text=True
            )

            out = result.stdout.strip()
            err = result.stderr.strip()

            if out:
                print(out)
                state = parse_state(out)
                if state == "changed":
                    changed += 1
                elif state == "unchanged":
                    unchanged += 1
                elif state == "degraded":
                    degraded += 1
                elif state == "failed":
                    failed += 1

            if err:
                print(err)

        except subprocess.TimeoutExpired:
            failed += 1
            print(f"[failed] {name} timeout")

        except Exception as exc:
            failed += 1
            print(f"[failed] {name} {exc}")

    elapsed = round(time.perf_counter() - cycle_start, 2)
    total = changed + unchanged + degraded + failed + missing

    summary = (
        f"[{LABEL}] summary | changed={changed} "
        f"unchanged={unchanged} degraded={degraded} failed={failed} "
        f"missing={missing} total={total} elapsed={elapsed}s"
    )

    print(summary)

    with (LOG_DIR / f"{CLASS_NAME}_runtime_log.jsonl").open("a", encoding="utf-8") as handle:
        handle.write(json.dumps({
            "timestamp": utc_now(),
            "class": CLASS_NAME,
            "changed": changed,
            "unchanged": unchanged,
            "degraded": degraded,
            "failed": failed,
            "missing": missing,
            "total": total,
            "elapsed_seconds": elapsed
        }) + "\n")

    print(f"[{LABEL}] sleep {INTERVAL_SECONDS}s")
    time.sleep(INTERVAL_SECONDS)
