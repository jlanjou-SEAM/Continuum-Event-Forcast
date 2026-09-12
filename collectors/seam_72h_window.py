"""
SEAM 72-hour retrieval window helper.

This module is intentionally minimal:
- no schema changes
- no directory changes
- no alternate continuum builder
- no alternate SEAM process

Use this only inside existing retrieval scripts to widen source polling:
live -> live + previous 72 hours.
"""

from datetime import datetime, UTC, timedelta
import urllib.parse

BACKFILL_HOURS = 72

def seam_72h_window():
    end = datetime.now(UTC)
    start = end - timedelta(hours=BACKFILL_HOURS)
    return start, end

def iso_utc(dt):
    return dt.strftime("%Y-%m-%dT%H:%M:%SZ")

def date_utc(dt):
    return dt.strftime("%Y-%m-%d")

def add_query_params(url, params):
    split = urllib.parse.urlsplit(url)
    current = dict(urllib.parse.parse_qsl(split.query, keep_blank_values=True))
    current.update({k: v for k, v in params.items() if v is not None})
    query = urllib.parse.urlencode(current)
    return urllib.parse.urlunsplit((split.scheme, split.netloc, split.path, query, split.fragment))

def usgs_72h_url(base_url):
    start, end = seam_72h_window()
    return add_query_params(base_url, {
        "format": "geojson",
        "starttime": iso_utc(start).replace("Z", ""),
        "endtime": iso_utc(end).replace("Z", "")
    })

def noaa_alerts_72h_url(base_url):
    start, end = seam_72h_window()
    return add_query_params(base_url, {
        "start": iso_utc(start),
        "end": iso_utc(end)
    })

def emsc_72h_url(base_url):
    start, end = seam_72h_window()
    return add_query_params(base_url, {
        "starttime": iso_utc(start).replace("Z", ""),
        "endtime": iso_utc(end).replace("Z", ""),
        "format": "json"
    })

def generic_72h_metadata():
    start, end = seam_72h_window()
    return {
        "retrieval_mode": "live_plus_72h",
        "backfill_hours": BACKFILL_HOURS,
        "window_start_utc": iso_utc(start),
        "window_end_utc": iso_utc(end)
    }
