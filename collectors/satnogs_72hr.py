"""
72-hour historical retrieval sibling for:
satnogs.py

This file is placed beside the original retrieval script.
It does not replace the original script.

Intent:
- keep the existing architecture intact
- use the same retrieval/output conventions where possible
- widen source polling to previous 72 hours
"""

from pathlib import Path
import runpy
import os
import sys

try:
    from seam_72h_window import (
        seam_72h_window,
        generic_72h_metadata,
        usgs_72h_url,
        noaa_alerts_72h_url,
        emsc_72h_url,
        add_query_params,
    )
except Exception:
    sys.path.insert(0, str(Path(__file__).resolve().parent))
    from seam_72h_window import (
        seam_72h_window,
        generic_72h_metadata,
        usgs_72h_url,
        noaa_alerts_72h_url,
        emsc_72h_url,
        add_query_params,
    )

ORIGINAL_SCRIPT = Path(__file__).with_name("satnogs.py")
SOURCE_CLASS = "generic"

# Environment flags are intentionally generic so existing scripts can opt in
# without requiring schema or directory changes.
os.environ["SEAM_RETRIEVAL_MODE"] = "live_plus_72h"
os.environ["SEAM_BACKFILL_HOURS"] = "72"
start, end = seam_72h_window()
os.environ["SEAM_WINDOW_START_UTC"] = start.strftime("%Y-%m-%dT%H:%M:%SZ")
os.environ["SEAM_WINDOW_END_UTC"] = end.strftime("%Y-%m-%dT%H:%M:%SZ")
os.environ["SEAM_72H_SOURCE_CLASS"] = SOURCE_CLASS

# If the original script already reads env vars for start/end, this is enough.
# Otherwise, patch the original source minimally by exposing URL helpers
# in globals while executing it.
globals().update({
    "SEAM_RETRIEVAL_MODE": "live_plus_72h",
    "SEAM_BACKFILL_HOURS": 72,
    "SEAM_WINDOW_START_UTC": os.environ["SEAM_WINDOW_START_UTC"],
    "SEAM_WINDOW_END_UTC": os.environ["SEAM_WINDOW_END_UTC"],
    "seam_72h_window": seam_72h_window,
    "generic_72h_metadata": generic_72h_metadata,
    "usgs_72h_url": usgs_72h_url,
    "noaa_alerts_72h_url": noaa_alerts_72h_url,
    "emsc_72h_url": emsc_72h_url,
    "add_query_params": add_query_params,
})

print("[72hr] running sibling retrieval:", ORIGINAL_SCRIPT)
print("[72hr] window:", os.environ["SEAM_WINDOW_START_UTC"], "->", os.environ["SEAM_WINDOW_END_UTC"])
print("[72hr] source class:", SOURCE_CLASS)

runpy.run_path(str(ORIGINAL_SCRIPT), run_name="__main__")
