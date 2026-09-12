from pathlib import Path
import subprocess
import json
import time

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


INTERVAL_SECONDS = 60

CONFIG_DIR = Path(__file__).resolve().parent
ROOT = CONFIG_DIR.parent
COLLECTOR_DIR = ROOT / "collectors"

sources = json.loads(_seam_resolve_config_file_v40("collector_sources.json").read_text(encoding="utf-8"))
collectors = [f"{name}.py" for name in sources.keys()]

print("\n=== SEAM ACQUISITION RUNTIME v4.2 ===\n")

while True:
    print("[SEAM] starting acquisition cycle")

    for collector in collectors:
        try:
            subprocess.run(
                ["python", str(COLLECTOR_DIR / collector)],
                timeout=12
            )
        except Exception as exc:
            print(f"[SEAM] collector failure {collector}: {exc}")

    print(f"[SEAM] sleeping {INTERVAL_SECONDS}s")
    time.sleep(INTERVAL_SECONDS)
