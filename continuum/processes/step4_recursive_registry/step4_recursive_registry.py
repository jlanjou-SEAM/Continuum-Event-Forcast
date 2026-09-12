from pathlib import Path
from datetime import datetime, timezone
import hashlib
import json

ROOT = Path(r"C:\Continuum Database\continuum")

STEP3_FILE = ROOT / "output" / "volcanic_manifold_analysis.json"

OUTFILE = ROOT / "output" / "SEAM_Master_Registry.json"

LOGFILE = ROOT / "logs" / "step4_recursive_registry.jsonl"

CONFIG_FILE = ROOT / "config" / "pipeline_config.json"


# ---------------------------------------------------------------------
# Utility
# ---------------------------------------------------------------------

def utc_iso():
    return datetime.now(timezone.utc).isoformat()


def load_json(path):

    return json.loads(
        Path(path).read_text(
            encoding="utf-8",
            errors="replace"
        )
    )


def write_json(path, obj):

    Path(path).parent.mkdir(
        parents=True,
        exist_ok=True
    )

    Path(path).write_text(
        json.dumps(
            obj,
            indent=2,
            ensure_ascii=False
        ),
        encoding="utf-8"
    )


def append_jsonl(path, obj):

    Path(path).parent.mkdir(
        parents=True,
        exist_ok=True
    )

    with open(path, "a", encoding="utf-8") as f:
        f.write(
            json.dumps(
                obj,
                ensure_ascii=False
            ) + "\n"
        )


def hash24(obj):

    return hashlib.sha256(
        json.dumps(
            obj,
            ensure_ascii=False,
            sort_keys=True
        ).encode("utf-8", errors="replace")
    ).hexdigest()[:24]


def lower_blob(obj):

    try:
        return json.dumps(
            obj,
            ensure_ascii=False,
            sort_keys=True
        ).lower()

    except Exception:
        return str(obj).lower()


# ---------------------------------------------------------------------
# Continuum substrate
# ---------------------------------------------------------------------

CFG = load_json(CONFIG_FILE)

CONTINUUM_MASTER = ROOT / CFG["outputs"]["continuum_master"]


# ---------------------------------------------------------------------
# Matching
# ---------------------------------------------------------------------

def build_official_index(entries):

    idx = []

    for rec in entries:

        payload_json = rec.get("payload_json") or {}

        payload_text = rec.get("payload_text") or ""

        idx.append({

            "source_set": rec.get("source_set"),

            "source_family": rec.get("source_family"),

            "source_file": rec.get("source_file"),

            "captured_utc": rec.get("captured_utc"),

            "sha256": rec.get("sha256"),

            "blob": (
                lower_blob(payload_json)
                + "\n"
                + payload_text.lower()
            )[:10000]
        })

    return idx


def reconcile_event(event, official_index):

    sig = str(
        event.get("signature_class", "")
    ).lower()

    summary = str(
        event.get("signal_summary", "")
    ).lower()

    matches = []

    for rec in official_index:

        score = 0.0

        blob = rec["blob"]

        if sig and sig in blob:
            score += 0.45

        words = [
            w for w in summary.split()
            if len(w) > 4
        ][:10]

        overlap = sum(
            1 for w in words
            if w in blob
        )

        score += min(
            0.45,
            overlap * 0.05
        )

        if score >= 0.35:

            matches.append({

                "source_set": rec["source_set"],

                "source_family": rec["source_family"],

                "source_file": rec["source_file"],

                "captured_utc": rec["captured_utc"],

                "sha256": rec["sha256"],

                "confidence": round(score, 4)
            })

    matches.sort(
        key=lambda x: x["confidence"],
        reverse=True
    )

    topology_state = (
        "persistent"
        if len(matches) >= 2
        else "isolated"
    )

    registry_seed = {
        "event_id": event.get("event_id"),
        "signature_class": event.get("signature_class"),
        "matches": [
            m.get("sha256")
            for m in matches[:5]
        ]
    }

    registry_id = (
        "REG-"
        + hash24(registry_seed)
    )

    return {

        "registry_id": registry_id,

        "canonical_event_id": event.get("event_id"),

        "signature_class": event.get("signature_class"),

        "timestamp_utc": event.get("timestamp_utc"),

        "latitude": event.get("latitude"),

        "longitude": event.get("longitude"),

        "spatial_region": event.get("spatial_region"),

        "signal_summary": event.get("signal_summary"),

        "magnitude": event.get("magnitude"),

        "official_matches": matches[:25],

        "continuity_links": [
            m.get("sha256")
            for m in matches[:25]
        ],

        "topology_state": topology_state,

        "confidence": round(
            max(
                [m["confidence"] for m in matches],
                default=0.0
            ),
            4
        )
    }


# ---------------------------------------------------------------------
# Runtime
# ---------------------------------------------------------------------

def main():

    print()
    print("=== STEP 4 RECURSIVE REGISTRY v1 ===")
    print()

    if not STEP3_FILE.exists():

        print("[step4] missing step3 file")
        print(f"[step4] {STEP3_FILE}")

        return

    if not CONTINUUM_MASTER.exists():

        print("[step4] missing continuum master")
        print(f"[step4] {CONTINUUM_MASTER}")

        return

    manifold = load_json(STEP3_FILE)

    continuum_master = load_json(CONTINUUM_MASTER)

    events = (
        manifold.get("matches")
        or manifold.get("manifold_events")
        or []
    )

    entries = (
        continuum_master.get("entries")
        or []
    )

    official_index = build_official_index(entries)

    registry = []

    for event in events:

        registry.append(
            reconcile_event(
                event,
                official_index
            )
        )

    output = {

        "generated_utc": utc_iso(),

        "schema": "SEAM_MASTER_REGISTRY_V1",

        "source_manifold": str(STEP3_FILE),

        "source_continuum": str(CONTINUUM_MASTER),

        "event_count": len(events),

        "registry_count": len(registry),

        "registry": registry
    }

    write_json(
        OUTFILE,
        output
    )

    append_jsonl(
        LOGFILE,
        {
            "generated_utc": utc_iso(),
            "event_count": len(events),
            "registry_count": len(registry),
        }
    )

    print(f"[step4] manifold events: {len(events)}")

    print(f"[step4] official records: {len(entries)}")

    print(f"[step4] registry entities: {len(registry)}")

    print(f"[step4] output: {OUTFILE}")

    print()


if __name__ == "__main__":
    main()
