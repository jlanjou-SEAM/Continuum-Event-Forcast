from pathlib import Path
import subprocess
import json
import time

PROJECT_ROOT = Path(__file__).resolve().parents[2]

CONFIG_FILES = [
    PROJECT_ROOT / "config" / "collector_sources.json",
    PROJECT_ROOT / "config" / "step1_raw_data_retrieval" / "collector_sources.json",
    PROJECT_ROOT / "config" / "step1_raw_data_retrieval" / "collector_sources_additive_patch.json",
    PROJECT_ROOT / "config" / "step1_raw_data_retrieval" / "official_manifest_patch.json",
]

COLLECTOR_DIR = PROJECT_ROOT / "collectors"

INTERVAL = 30


def load_sources():

    merged = {}

    for path in CONFIG_FILES:

        if not path.exists():
            continue

        try:
            data = json.loads(
                path.read_text(encoding="utf-8")
            )

            if isinstance(data, dict):
                merged.update(data)

        except Exception as exc:
            print(f"[config_error] {path} -> {exc}")

    return merged


while True:

    print("[official] cycle start")

    sources = load_sources()

    matched = 0

    for collector_name, spec in sources.items():

        acquisition_class = spec.get(
            "acquisition_class",
            spec.get("bucket", "")
        )

        if acquisition_class != "official":
            continue

        matched += 1

        collector = COLLECTOR_DIR / f"{collector_name}.py"

        if collector.exists():

            subprocess.run(
                ["python", str(collector)],
                cwd=str(PROJECT_ROOT)
            )

        else:
            print(f"[missing] {collector.name}")

    print(f"[official] matched={matched}")

    print(f"[official] sleep {INTERVAL}s")

    time.sleep(INTERVAL)
