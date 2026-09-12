from pathlib import Path
from collections import Counter
from datetime import datetime, timezone
import hashlib
import re
import json

# ---------------------------------------------------------------------
# Self-contained seam_common fallback
# ---------------------------------------------------------------------

try:
    from seam_common import *
except Exception:

    def utc_iso():
        return datetime.now(timezone.utc).isoformat()

    def load_json(path):
        return json.loads(Path(path).read_text(encoding="utf-8", errors="replace"))

    def write_json(path, obj):
        Path(path).parent.mkdir(parents=True, exist_ok=True)
        Path(path).write_text(
            json.dumps(obj, indent=2, ensure_ascii=False),
            encoding="utf-8"
        )

    def append_jsonl(path, obj):
        Path(path).parent.mkdir(parents=True, exist_ok=True)
        with open(path, "a", encoding="utf-8") as f:
            f.write(json.dumps(obj, ensure_ascii=False) + "\n")

ROOT = Path(r"C:\Continuum Database\continuum")

CFG = load_json(ROOT / "config" / "pipeline_config.json")

STEP2_FILE = ROOT / CFG["outputs"]["continuum_master"]

OUTFILE = ROOT / "output" / "volcanic_manifold_analysis.json"

LOGFILE = ROOT / "logs" / "step3_multisignature_analysis.jsonl"

SIGNATURES = {
    "drought": ["drought", "dryness", "soil moisture"],
    "flood": ["flood", "flooding", "inundation"],
    "geomagnetic": ["geomagnetic", "solar storm", "space weather"],
    "rf_disruption": ["radio blackout", "rf", "ionospheric"],
    "seismic": ["earthquake", "seismic", "emsc", "usgs", '"mag"'],
    "severe_weather": ["severe weather", "hail", "thunderstorm"],
    "tornadic": ["tornado", "tornadic"],
    "tropical_cyclone": ["hurricane", "cyclone", "typhoon"],
    "volcanic": ["volcano", "volcanic", "eruption", "lava"],
    "wildfire": ["wildfire", "hotspot", "modis", "viirs"],
    "winter_weather": ["winter storm", "blizzard", "snow"],
}

def safe_float(v):
    try:
        return float(v)
    except Exception:
        return None

def deep_get(obj, path):
    cur = obj
    for part in path:
        if isinstance(cur, dict):
            cur = cur.get(part)
        elif isinstance(cur, list) and isinstance(part, int):
            if 0 <= part < len(cur):
                cur = cur[part]
            else:
                return None
        else:
            return None
    return cur

def lower_blob(obj):
    try:
        return json.dumps(obj, ensure_ascii=False, sort_keys=True).lower()
    except Exception:
        return str(obj).lower()

def hash24(obj):
    return hashlib.sha256(
        json.dumps(obj, ensure_ascii=False, sort_keys=True).encode("utf-8", errors="replace")
    ).hexdigest()[:24]

def flatten_coords(coords):

    points = []

    if isinstance(coords, (list, tuple)):

        if (
            len(coords) >= 2
            and isinstance(coords[0], (int, float))
            and isinstance(coords[1], (int, float))
        ):
            points.append((coords[1], coords[0]))

        else:
            for item in coords:
                points.extend(flatten_coords(item))

    return points


def centroid(points):

    if not points:
        return None, None

    lat = sum(p[0] for p in points) / len(points)
    lon = sum(p[1] for p in points) / len(points)

    return lat, lon


def regex_coordinates(text):

    if not text:
        return None, None

    patterns = [
        r'(-?\d{1,3}\.\d+)\s*,\s*(-?\d{1,3}\.\d+)',
        r'lat[:= ]+(-?\d{1,3}\.\d+).*?lon[:= ]+(-?\d{1,3}\.\d+)',
    ]

    for pat in patterns:

        m = re.search(pat, text, re.IGNORECASE | re.DOTALL)

        if m:
            a = safe_float(m.group(1))
            b = safe_float(m.group(2))

            if a is None or b is None:
                continue

            if abs(a) <= 90 and abs(b) <= 180:
                return a, b

            if abs(b) <= 90 and abs(a) <= 180:
                return b, a

    return None, None


def extract_coordinates(record):

    payload_json = record.get("payload_json") or {}
    payload_text = record.get("payload_text") or ""

    feature_paths = (
        ("geometry", "coordinates"),
        ("properties", "geometry", "coordinates"),
        ("features", 0, "geometry", "coordinates"),
        ("features", 0, "properties", "geometry", "coordinates"),
    )

    for path in feature_paths:

        coords = deep_get(payload_json, path)

        if coords:

            points = flatten_coords(coords)

            lat, lon = centroid(points)

            if lat is not None and lon is not None:
                return lat, lon

    pairs = [
        (("latitude",), ("longitude",)),
        (("lat",), ("lon",)),
        (("lat",), ("lng",)),
        (("properties", "lat"), ("properties", "lon")),
        (("properties", "latitude"), ("properties", "longitude")),
        (("geometry", "latitude"), ("geometry", "longitude")),
    ]

    for lat_path, lon_path in pairs:

        lat = safe_float(deep_get(payload_json, lat_path))
        lon = safe_float(deep_get(payload_json, lon_path))

        if lat is not None and lon is not None:
            return lat, lon

    search_text = (
        json.dumps(payload_json, ensure_ascii=False)
        + "\\n"
        + payload_text
    )

    lat, lon = regex_coordinates(search_text)

    if lat is not None and lon is not None:
        return lat, lon

    return None, None

def extract_timestamp(record):
    payload_json = record.get("payload_json") or {}

    for path in (
        ("timestamp_utc",),
        ("timestamp",),
        ("event_time",),
        ("time",),
        ("created_utc",),
        ("observed_utc",),
        ("properties", "time"),
    ):
        value = deep_get(payload_json, path)

        if value:
            return str(value)

    return record.get("captured_utc") or utc_iso()

def extract_summary(record):
    payload_json = record.get("payload_json") or {}

    parts = []

    for path in (
        ("signal_summary",),
        ("title",),
        ("event_title",),
        ("event_description",),
        ("description",),
        ("summary",),
        ("properties", "place"),
    ):
        value = deep_get(payload_json, path)

        if value:
            parts.append(str(value))

    if not parts:
        payload_text = record.get("payload_text", "")
        parts.append(payload_text[:300])

    return " | ".join(parts)[:500]

def extract_source_refs(record):
    refs = set()

    for key in (
        "source_set",
        "source_family",
        "source_file",
    ):
        value = record.get(key)

        if value:
            refs.add(str(value)[:180])

    return sorted(refs)

def extract_magnitude(record):
    payload_json = record.get("payload_json") or {}

    for path in (
        ("magnitude",),
        ("mag",),
        ("properties", "mag"),
    ):
        value = deep_get(payload_json, path)

        if value is not None:
            return value

    return None

def classify_record(record):
    payload_json = record.get("payload_json") or {}
    payload_text = record.get("payload_text") or ""

    blob = lower_blob(payload_json) + "\n" + payload_text.lower()

    hits = []

    for sig, terms in SIGNATURES.items():
        score = sum(1 for term in terms if term.lower() in blob)

        if score:
            hits.append((sig, score))

    hits.sort(key=lambda x: x[1], reverse=True)

    return hits

def calc_phi(record, signature, score):
    phi = 0.35 + (0.12 * score)

    lat, lon = extract_coordinates(record)

    if lat is not None and lon is not None:
        phi += 0.08

    if extract_magnitude(record) is not None:
        phi += 0.05

    refs = extract_source_refs(record)

    if refs:
        phi += min(0.08, 0.02 * len(refs))

    return round(max(0.0, min(0.99, phi)), 4)

def canonical_event(record, signature, score):
    lat, lon = extract_coordinates(record)
    ts = extract_timestamp(record)
    summary = extract_summary(record)
    refs = extract_source_refs(record)
    mag = extract_magnitude(record)

    identity = {
        "signature": signature,
        "timestamp": ts,
        "latitude": lat,
        "longitude": lon,
        "summary": summary,
        "refs": refs,
        "mag": mag,
    }

    evidence_hash = hash24(identity)

    return {
        "event_id": f"SEAM-{evidence_hash}",
        "signature_class": signature,
        "primary_regime": signature,
        "timestamp_utc": ts,
        "latitude": lat,
        "longitude": lon,
        "spatial_region": (
            f"{round(lat,2)}_{round(lon,2)}"
            if lat is not None and lon is not None
            else None
        ),
        "geohash": (
            f"{round(lat,3)}:{round(lon,3)}"
            if lat is not None and lon is not None
            else None
        ),
        "seam_phi": calc_phi(record, signature, score),
        "signal_summary": summary,
        "source_refs": refs,
        "magnitude": mag,
        "official_reference": (
            deep_get(record.get("payload_json") or {}, ("properties", "source_id"))
            or record.get("sha256")
        ),
        "evidence_hash": evidence_hash,
    }

def main():
    print("\n=== STEP 3 MULTI-SIGNATURE ANALYSIS v76 ===\n")

    if not STEP2_FILE.exists():
        print(f"[step3] missing continuum master:")
        print(f"[step3] {STEP2_FILE}")
        return

    master = load_json(STEP2_FILE)

    records = master.get("entries", [])

    matches = []
    counts = Counter()

    for record in records:
        for signature, score in classify_record(record):
            matches.append(canonical_event(record, signature, score))
            counts[signature] += 1

    matches.sort(
        key=lambda e: (
            e.get("signature_class", ""),
            e.get("timestamp_utc", ""),
            e.get("event_id", "")
        )
    )

    output = {
        "generated_utc": utc_iso(),
        "schema": "SEAM_STEP3_MULTI_SIGNATURE_CANONICAL_V76",
        "source": str(STEP2_FILE),
        "records_scanned": len(records),
        "signature_classes": len(counts),
        "signature_counts": dict(sorted(counts.items())),
        "total_manifold_events": len(matches),
        "matches": matches,
        "manifold_events": matches,
    }

    write_json(OUTFILE, output)

    append_jsonl(
        LOGFILE,
        {
            "records_scanned": len(records),
            "total_manifold_events": len(matches),
            "signature_counts": dict(counts),
        }
    )

    print(f"[step3] continuum substrate: {STEP2_FILE}")
    print(f"[step3] substrate entries: {len(records)}")
    print(f"[step3] signature classes: {len(counts)}")
    print()

    for k, v in sorted(counts.items()):
        print(f"[step3] {k}: {v}")

    print()
    print(f"[step3] total manifold events: {len(matches)}")
    print(f"[step3] output: {OUTFILE}")

if __name__ == "__main__":
    main()
