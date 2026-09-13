"""
Event Tracker Manager - Maintains 30-day rolling event history
"""
from pathlib import Path
from datetime import datetime, UTC, timedelta
import json

ROOT = Path(r"C:\Continuum Database\continuum")
TRACKER_FILE = ROOT / "event_tracker.json"

def load_tracker():
    """Load existing tracker or create new one"""
    if TRACKER_FILE.exists():
        try:
            return json.loads(TRACKER_FILE.read_text(encoding="utf-8"))
        except Exception:
            return create_empty_tracker()
    return create_empty_tracker()

def create_empty_tracker():
    """Create empty tracker structure"""
    return {
        "version": "1.0",
        "schema": "SEAM_EVENT_TRACKER_V1",
        "generated_utc": datetime.now(UTC).isoformat(),
        "retention_days": 30,
        "events": {}
    }

def get_phase(seam_phi):
    """Determine phase from confidence score"""
    if seam_phi >= 0.95:
        return "event"
    elif seam_phi >= 0.85:
        return "watch"
    elif seam_phi >= 0.75:
        return "warning"
    elif seam_phi >= 0.50:
        return "track"
    return "unknown"

def get_government_agency(event_type):
    """Map event type to responsible government agency"""
    agency_map = {
        "volcanic": "USGS",
        "seismic": "USGS",
        "severe_weather": "NWS",
        "tornadic": "NWS",
        "winter_weather": "NWS",
        "tropical_cyclone": "NWS",
        "flood": "NWS",
        "wildfire": "NOAA",
        "drought": "NOAA",
        "geomagnetic": "NOAA",
        "rf_disruption": "NOAA"
    }
    return agency_map.get(event_type, "UNKNOWN")

def get_event_type_abbrev(event_type):
    """Get abbreviation for event type"""
    abbrev_map = {
        "volcanic": "vol",
        "seismic": "seis",
        "severe_weather": "wthr",
        "tornadic": "torn",
        "winter_weather": "wint",
        "tropical_cyclone": "trop",
        "flood": "fld",
        "wildfire": "fire",
        "drought": "drgt",
        "geomagnetic": "gmag",
        "rf_disruption": "rf"
    }
    return abbrev_map.get(event_type, "evt")

def get_location_abbrev(lat, lon):
    """Get region abbreviation from coordinates"""
    if lat is None or lon is None:
        return "unk"

    # Pacific Ring of Fire
    if (10 < lat < 65 and 125 < lon < 180) or (-60 < lat < -10 and 125 < lon < 180):
        return "pac"
    # Atlantic
    elif -80 < lat < 80 and -120 < lon < -20:
        return "atl"
    # Indian Ocean
    elif -60 < lat < 40 and 20 < lon < 120:
        return "ind"
    # Mediterranean/Europe
    elif 30 < lat < 70 and -10 < lon < 50:
        return "eur"
    # Asia
    elif -10 < lat < 60 and 50 < lon < 150:
        return "asia"
    # Africa
    elif -35 < lat < 40 and -20 < lon < 55:
        return "afr"
    # Americas
    elif -60 < lat < 80 and -180 < lon < -30:
        if lat > 15:
            return "nam"  # North America
        else:
            return "sam"  # South America
    # Australia
    elif -50 < lat < -10 and 110 < lon < 160:
        return "aus"

    return "gbl"  # Global

def generate_event_id(event_type, lat, lon, timestamp_utc):
    """Generate formatted event ID: type_region_year_###"""
    type_abbrev = get_event_type_abbrev(event_type)
    region_abbrev = get_location_abbrev(lat, lon)

    try:
        year = datetime.fromisoformat(timestamp_utc).year % 100
    except:
        year = datetime.now(UTC).year % 100

    # Event number would be assigned sequentially - placeholder for now
    event_num = "001"

    return f"{type_abbrev}_{region_abbrev}_{year}_{event_num}"

def extract_location(event, signal_summary):
    """Extract location hierarchy from event and signal_summary"""
    location = {
        "best_effort_lat": event.get("latitude"),
        "best_effort_lon": event.get("longitude"),
        "region": None,
        "country": None,
        "state_province": None,
        "county_district": None,
        "city": None
    }

    # Try to extract from signal_summary
    try:
        summary = signal_summary
        if isinstance(summary, str):
            summary = json.loads(summary)

        # Parse location from various fields
        if "spatial_region" in summary:
            location["region"] = summary.get("spatial_region")
        if "location" in summary:
            loc = summary["location"]
            if isinstance(loc, dict):
                location["region"] = loc.get("region")
                location["country"] = loc.get("country")
                location["state_province"] = loc.get("state")
                location["county_district"] = loc.get("county")
                location["city"] = loc.get("city")
    except Exception:
        pass

    return location

def update_or_create_event(tracker, event, signal_summary_dict):
    """Update existing event or create new one"""
    event_id = event.get("event_id")
    seam_phi = event.get("seam_phi", 0)
    phase = get_phase(seam_phi)

    if event_id not in tracker["events"]:
        # New event
        lat = event.get("latitude")
        lon = event.get("longitude")
        event_type = event.get("signature_class")
        timestamp = event.get("timestamp_utc")

        formatted_id = generate_event_id(event_type, lat, lon, timestamp)

        tracker["events"][event_id] = {
            "event_id": event_id,
            "formatted_id": formatted_id,
            "signature_class": event.get("signature_class"),
            "primary_regime": event.get("primary_regime"),
            "first_detected_utc": event.get("timestamp_utc"),
            "event_date": datetime.fromisoformat(event.get("timestamp_utc")).date().isoformat() if event.get("timestamp_utc") else None,
            "status": "active",
            "location": extract_location(event, signal_summary_dict),
            "confidence_history": [],
            "phase_transitions": [],
            "prediction_history": [],
            "official_declarations": [],
            "official_alert": {},
            "projections": {
                "projected_event_time": None,
                "projected_location": None,
                "projected_severity": None
            },
            "time_to_lock_minutes": None,
            "identification_to_alert_minutes": None,
            "offset_to_official_minutes": None,
            "closed_at_utc": None,
            "retention_until_utc": None
        }

    event_record = tracker["events"][event_id]

    # Update location (refine as we get more data)
    event_record["location"] = extract_location(event, signal_summary_dict)

    # Add confidence history entry
    current_phase = get_phase(seam_phi)
    last_history = event_record["confidence_history"][-1] if event_record["confidence_history"] else None

    if not last_history or last_history["seam_phi"] != seam_phi:
        event_record["confidence_history"].append({
            "timestamp_utc": event.get("timestamp_utc"),
            "seam_phi": seam_phi,
            "phase": current_phase,
            "magnitude": event.get("magnitude")
        })

        # Record prediction history on confidence change
        event_record["prediction_history"].append({
            "timestamp_utc": datetime.now(UTC).isoformat(),
            "seam_phi": seam_phi,
            "predicted_event_time": event.get("timestamp_utc"),
            "confidence_phase": current_phase
        })

    # Track phase transitions
    if last_history:
        last_phase = last_history["phase"]
        if last_phase != current_phase:
            event_record["phase_transitions"].append({
                "from_phase": last_phase,
                "to_phase": current_phase,
                "timestamp_utc": datetime.now(UTC).isoformat()
            })

    # Update projections
    if "window_end_utc" in signal_summary_dict:
        event_record["projections"]["projected_event_time"] = signal_summary_dict["window_end_utc"]

    lat = event.get("latitude")
    lon = event.get("longitude")
    if lat is not None and lon is not None:
        event_record["projections"]["projected_location"] = f"{lat:.4f}, {lon:.4f}"

    if event.get("magnitude"):
        event_record["projections"]["projected_severity"] = event.get("magnitude")

    # Check if resolved
    if seam_phi > 0.90 or seam_phi < 0.50:
        event_record["status"] = "resolved"

    return event_record

def prune_old_events(tracker):
    """Remove events older than 30 days"""
    cutoff_date = datetime.now(UTC) - timedelta(days=30)
    to_remove = []

    for event_id, event_data in tracker["events"].items():
        first_detected = datetime.fromisoformat(event_data["first_detected_utc"])
        if first_detected < cutoff_date:
            to_remove.append(event_id)

    for event_id in to_remove:
        del tracker["events"][event_id]

    return len(to_remove)

def save_tracker(tracker):
    """Save tracker to file"""
    tracker["generated_utc"] = datetime.now(UTC).isoformat()
    TRACKER_FILE.parent.mkdir(parents=True, exist_ok=True)

    with open(TRACKER_FILE, "w", encoding="utf-8") as f:
        json.dump(tracker, f, indent=2, ensure_ascii=False)

def update_tracker_with_events(events):
    """Main function: update tracker with new events"""
    tracker = load_tracker()

    for event in events:
        signal_summary = event.get("signal_summary", "{}")
        if isinstance(signal_summary, str):
            try:
                signal_summary = json.loads(signal_summary)
            except Exception:
                signal_summary = {}

        update_or_create_event(tracker, event, signal_summary)

    # Prune old events
    removed = prune_old_events(tracker)

    # Save updated tracker
    save_tracker(tracker)

    return tracker, removed

if __name__ == "__main__":
    tracker = load_tracker()
    print(f"[tracker] loaded {len(tracker['events'])} events")
    print(f"[tracker] file: {TRACKER_FILE}")
