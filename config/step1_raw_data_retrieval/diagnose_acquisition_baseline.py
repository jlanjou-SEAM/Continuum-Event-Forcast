from pathlib import Path
import json

BASE_DIR = Path(__file__).resolve().parent
ROOT = BASE_DIR.parent.parent
CONFIG_FILE = BASE_DIR / "collector_sources.json"
COLLECTOR_DIR = ROOT / "collectors"

print("ROOT:", ROOT)
print("CONFIG_FILE:", CONFIG_FILE, CONFIG_FILE.exists())
print("COLLECTOR_DIR:", COLLECTOR_DIR, COLLECTOR_DIR.exists())

sources = json.loads(CONFIG_FILE.read_text(encoding="utf-8"))
missing = []
bucket_counts = {}
class_counts = {}

for name, spec in sources.items():
    bucket_counts[spec.get("bucket", "raw")] = bucket_counts.get(spec.get("bucket", "raw"), 0) + 1
    class_counts[spec.get("acquisition_class", "nonrealtime")] = class_counts.get(spec.get("acquisition_class", "nonrealtime"), 0) + 1
    if not (COLLECTOR_DIR / f"{name}.py").exists():
        missing.append(name)

print("sources:", len(sources))
print("buckets:", bucket_counts)
print("classes:", class_counts)
print("missing collectors:", len(missing))
for m in missing:
    print("[missing]", m + ".py")
