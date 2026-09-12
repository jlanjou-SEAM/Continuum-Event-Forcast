from pathlib import Path
import subprocess
import json
import time
from datetime import datetime, UTC

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


ROOT = Path(__file__).resolve().parent.parent
BASE_DIR = Path(__file__).resolve().parent
CONFIG_DIR = BASE_DIR.parent
COLLECTOR_DIR = ROOT / "collectors"

INTERVAL_SECONDS = 60

def utc_now():
    return datetime.now(UTC).isoformat()

sources = json.loads(
    _seam_resolve_config_file_v40("collector_sources.json").read_text(encoding="utf-8")
)

collector_names = list(sources.keys())

print("\n=== ACQUISITION RUNTIME v6.3 ===\n")

while True:

    print("[runtime] acquisition cycle start\n")

    changed = 0
    unchanged = 0
    degraded = 0
    failed = 0
    missing = 0

    for name in collector_names:

        collector = COLLECTOR_DIR / f"{name}.py"

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

            stdout = result.stdout.strip()
            stderr = result.stderr.strip()

            if stdout:

                print(stdout)

                if stdout.startswith("[changed]"):
                    changed += 1

                elif stdout.startswith("[unchanged]"):
                    unchanged += 1

                elif stdout.startswith("[degraded]"):
                    degraded += 1

                elif stdout.startswith("[failed]"):
                    failed += 1

            if stderr:
                print(stderr)

        except subprocess.TimeoutExpired:
            failed += 1
            print(f"[timeout] {collector.name}")

        except Exception as exc:
            failed += 1
            print(f"[failure] {collector.name}: {exc}")

    total = (
        changed +
        unchanged +
        degraded +
        failed +
        missing
    )

    print("\n=== ACQUISITION SUMMARY ===\n")

    print(f"Changed    : {changed}")
    print(f"Unchanged  : {unchanged}")
    print(f"Degraded   : {degraded}")
    print(f"Failed     : {failed}")
    print(f"Missing    : {missing}")
    print(f"Total      : {total}")

    print(f"\n[runtime] sleep {INTERVAL_SECONDS}s\n")

    time.sleep(INTERVAL_SECONDS)
