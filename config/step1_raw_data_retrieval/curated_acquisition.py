from pathlib import Path
import subprocess, json, time

PROJECT_ROOT = Path(__file__).resolve().parents[2]

CONFIG = PROJECT_ROOT / "config" / "step1_raw_data_retrieval" / "collector_sources.json"
COLLECTORS = PROJECT_ROOT / "collectors"

BUCKET="curated"
INTERVAL=300

def load_sources():
    return json.loads(CONFIG.read_text(encoding="utf-8"))

while True:
    print(f"[{BUCKET}] cycle start")

    for name, spec in load_sources().items():
        if spec.get("bucket") != BUCKET:
            continue

        collector = COLLECTORS / f"{name}.py"

        if collector.exists():
            subprocess.run(["python", str(collector)], cwd=str(PROJECT_ROOT))

    print(f"[{BUCKET}] sleep {INTERVAL}s")
    time.sleep(INTERVAL)
