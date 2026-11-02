#!/usr/bin/env python3
"""Publish the Step 3 event tracker for the browser-facing live snapshot."""

from __future__ import annotations

import json
import os
from datetime import UTC, datetime
from pathlib import Path
from typing import Any


PROJECT_ROOT = Path(os.environ.get("SEAM_ROOT", Path(__file__).resolve().parents[1])).resolve()
TRACKER_PATH = PROJECT_ROOT / "continuum" / "event_tracker.json"
OUTPUT_PATH = PROJECT_ROOT / "public" / "data" / "live.json"


def read_json(path: Path) -> dict[str, Any]:
    if not path.exists():
        return {}
    return json.loads(path.read_text(encoding="utf-8"))


def write_json(path: Path, payload: dict[str, Any]) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    temporary = path.with_suffix(".tmp")
    temporary.write_text(json.dumps(payload, indent=2, ensure_ascii=False), encoding="utf-8")
    temporary.replace(path)


def main() -> None:
    tracker = read_json(TRACKER_PATH)
    events = tracker.get("events") or {}

    payload = {
        "schema": "SEAM_LIVE_FEED_V1",
        "generated_utc": datetime.now(UTC).isoformat(),
        "source": "event_tracker",
        "source_file": str(TRACKER_PATH),
        "source_schema": tracker.get("schema"),
        "source_generated_utc": tracker.get("generated_utc"),
        "event_count": len(events),
        "events": events,
        "pipeline": {
            "status": "live",
            "collector_cycle": os.environ.get("GITHUB_RUN_ID", "local"),
            "repository": os.environ.get("GITHUB_REPOSITORY", "local"),
        },
    }

    write_json(OUTPUT_PATH, payload)
    print(f"[live-feed] published {len(events)} tracker events to {OUTPUT_PATH}")


if __name__ == "__main__":
    main()
