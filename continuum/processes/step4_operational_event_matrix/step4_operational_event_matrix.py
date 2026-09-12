from pathlib import Path
from datetime import timedelta
from seam_common import *

ROOT = Path(r"C:\Continuum Database\continuum")
CFG = load_json(ROOT / "config" / "pipeline_config.json")

LOCATION_HINTS = {
    "hawaii": ("United States", "Hawaii", "Hawaii County", "Volcano", "Kilauea Summit", "Crater Rim Drive", "USGS HVO"),
    "kilauea": ("United States", "Hawaii", "Hawaii County", "Volcano", "Kilauea Summit", "Crater Rim Drive", "USGS HVO"),
    "mauna loa": ("United States", "Hawaii", "Hawaii County", "Volcano", "Mauna Loa Observatory Road", None, "USGS HVO"),
    "yellowstone": ("United States", "Wyoming", "Park County", "Yellowstone", "Grand Loop Road", "Norris Canyon Road", "USGS YVO"),
    "kamchatka": ("Russia", "Kamchatka", None, "Petropavlovsk", "Klyuchevskoy Region", None, "KVERT"),
    "iceland": ("Iceland", "Reykjanes", None, "Grindavik", "Route 43", "Grindavikurvegur", "IMO Iceland")
}

def first_coord(match):
    coords = match.get("location_analysis", {}).get("coordinates", [])
    for a, b in coords:
        try:
            x = float(a); y = float(b)
            if abs(x) <= 90:
                return x, y
            return y, x
        except Exception:
            continue
    return None, None

def infer_location(match):
    names = match.get("location_analysis", {}).get("named_locations", [])
    blob = lower_blob(match)
    for key, vals in LOCATION_HINTS.items():
        if key in names or key in blob:
            return vals
    return (None, None, None, None, None, None, None)

def phi(match):
    blob = lower_blob(match)
    if "eruption" in blob:
        return 0.97
    if "lava" in blob or "ash" in blob:
        return 0.83
    if "volcano" in blob or "volcanic" in blob:
        return 0.61
    return 0.0

def lock_state(p):
    pct = round(p * 100, 1)
    if p >= 0.95:
        return f"HARD LOCK ({pct}%)"
    if p >= 0.75:
        return f"TARGET ACQUISITION ({pct}%)"
    if p >= 0.50:
        return f"FOLLOW PROTOCOL ({pct}%)"
    return f"MONITOR ({pct}%)"

def build_record(i, match):
    p = phi(match)
    now = utc_now()
    lat, lon = first_coord(match)
    country, state, county, city, street, cross, agency = infer_location(match)
    return {
        "event_id": f"VOLK-{i:05d}",
        "signature_type": "volcanic",
        "classification": "Volcanic Activity",
        "event_title": "Volcanic Manifold Event",
        "event_description": match.get("signal_summary"),
        "manifold_percent": p,
        "lock_state": lock_state(p),
        "continuum_state": "active" if p >= 0.5 else "monitor",
        "forecast_strength": "High" if p >= 0.95 else "Elevated" if p >= 0.75 else "Moderate",
        "forecast_track": "Localized Rift / Magmatic Corridor",
        "forecast_duration": "24-72 Hours" if p >= 0.75 else "6-24 Hours",
        "forecast_magnitude": "VEI-2" if p >= 0.75 else "VEI-1",
        "forecast_confidence": round(p * 100, 1),
        "initial_record_creation_utc": now.isoformat(),
        "acquisition_utc": now.isoformat(),
        "predicted_time_utc": (now + timedelta(hours=4)).isoformat(),
        "last_updated_utc": now.isoformat(),
        "country": country,
        "state": state,
        "county": county,
        "city": city,
        "street": street,
        "cross_street": cross,
        "latitude": lat,
        "longitude": lon,
        "course": "Localized",
        "signature": "Magmatic Pressure / Volcanic Activity",
        "officially_identified": None,
        "official_agency": agency,
        "official_record_timestamp_utc": None,
        "official_event_reference": None,
        "reconciliation_state": None,
        "supporting_sources": [match.get("source_file")],
        "supporting_signals": [match.get("signal_summary")],
        "supporting_coordinates": match.get("location_analysis", {}).get("coordinates", []),
        "raw_match": match
    }

def build_table(records):
    cols = ["event_id","acquisition_utc","lock_state","predicted_time_utc","forecast_strength","forecast_magnitude","forecast_duration","country","state","county","city","street","cross_street","latitude","longitude","course","signature","officially_identified","official_agency","official_record_timestamp_utc","official_event_reference","reconciliation_state"]
    lines = [" | ".join(cols), "-" * 260]
    for r in records:
        lines.append(" | ".join(str(r.get(c, "")) for c in cols))
    return "\n".join(lines)

def main():
    print("\n=== STEP 4 OPERATIONAL EVENT MATRIX v33 ===\n")
    data = load_json(ROOT / CFG["outputs"]["volcanic_analysis"])
    records = [build_record(i, m) for i, m in enumerate(data.get("matches", []))]
    out = ROOT / CFG["outputs"]["event_matrix"]
    table = ROOT / CFG["outputs"]["event_matrix_table"]
    write_json(out, {"generated_utc": utc_iso(), "schema": "SEAM_EVENT_MATRIX_V33", "record_count": len(records), "records": records})
    table.parent.mkdir(parents=True, exist_ok=True)
    table.write_text(build_table(records), encoding="utf-8")
    append_jsonl(ROOT / "logs" / "step4_event_matrix.jsonl", {"record_count": len(records)})
    print(f"[step4] event records: {len(records)}")
    print(f"[step4] output: {out}")

if __name__ == "__main__":
    main()
