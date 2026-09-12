from pathlib import Path
import json, os

root = Path(os.environ.get("SEAM_ROOT", r"C:\Continuum Database"))
config = Path(os.environ.get("SEAM_CONFIG_DIR", str(root / "config")))
collectors = Path(os.environ.get("SEAM_COLLECTORS_DIR", str(root / "collectors")))

print("SEAM_ROOT:", root)
print("CONFIG:", config, "exists=", config.exists())
print("COLLECTORS:", collectors, "exists=", collectors.exists())

src = config / "collector_sources.json"
print("collector_sources:", src, "exists=", src.exists())

if src.exists():
    data = json.loads(src.read_text(encoding="utf-8"))
    total = 0
    if isinstance(data, dict):
        for family, items in data.items():
            if isinstance(items, list):
                total += len(items)
                print(f"{family}: {len(items)}")
    print("total listed:", total)
    missing = []
    for family, items in data.items():
        if not isinstance(items, list):
            continue
        for item in items:
            name = item.get("script") or item.get("name") or item.get("collector") or item.get("module")
            if not name:
                continue
            if not str(name).endswith(".py"):
                name = str(name) + ".py"
            p = collectors / name
            if not p.exists():
                missing.append(name)
    print("missing collectors:", len(missing))
    for m in missing[:100]:
        print("[missing]", m)
