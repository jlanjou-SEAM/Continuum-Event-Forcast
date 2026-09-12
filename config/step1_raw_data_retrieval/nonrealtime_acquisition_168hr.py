from pathlib import Path
import os
import runpy
from datetime import datetime, UTC, timedelta

ORIGINAL = Path(__file__).with_name("nonrealtime_acquisition.py")

os.environ["SEAM_RETRIEVAL_MODE"] = "weekly_168hr_update"
os.environ["SEAM_BACKFILL_HOURS"] = "168"
os.environ["SEAM_COLLECTOR_SUFFIX"] = "_72hr"

end = datetime.now(UTC)
start = end - timedelta(hours=168)

os.environ["SEAM_WINDOW_START_UTC"] = start.strftime("%Y-%m-%dT%H:%M:%SZ")
os.environ["SEAM_WINDOW_END_UTC"] = end.strftime("%Y-%m-%dT%H:%M:%SZ")

print("[168hr] running", ORIGINAL.name)
print("[168hr] window", os.environ["SEAM_WINDOW_START_UTC"], "->", os.environ["SEAM_WINDOW_END_UTC"])

runpy.run_path(str(ORIGINAL), run_name="__main__")
