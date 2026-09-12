from pathlib import Path
from seam_common import *

ROOT = Path(r"C:\Continuum Database\continuum")
CFG = load_json(ROOT / "config" / "pipeline_config.json")

def official_entries(master):
    return [e for e in master.get("entries", []) if e.get("source_set") == "official"]

def score_match(event, official):
    blob = lower_blob(official)
    score = 0
    for key in ["classification", "signature", "city", "state", "country", "official_agency"]:
        val = event.get(key)
        if val and str(val).lower() in blob:
            score += 1
    for term in CFG["signature"]["terms"]:
        if term.lower() in blob:
            score += 1
    return score

def reconcile(events, officials):
    seam_to_official = []
    for ev in events:
        hits = []
        for off in officials:
            s = score_match(ev, off)
            if s > 0:
                hits.append({
                    "source_family": off.get("source_family"),
                    "source_file": off.get("source_file"),
                    "captured_utc": off.get("captured_utc"),
                    "match_score": s
                })
        hits.sort(key=lambda x: x["match_score"], reverse=True)
        state = "CONFIRMED" if hits else "PRECURSOR"
        ev["officially_identified"] = bool(hits)
        ev["reconciliation_state"] = state
        if hits:
            ev["official_agency"] = hits[0].get("source_family")
            ev["official_record_timestamp_utc"] = hits[0].get("captured_utc")
            ev["official_event_reference"] = hits[0].get("source_file")
        seam_to_official.append({"event_id": ev.get("event_id"), "state": state, "official_matches": hits})

    official_to_seam = []
    for idx, off in enumerate(officials):
        hits = []
        for ev in events:
            s = score_match(ev, off)
            if s > 0:
                hits.append({"event_id": ev.get("event_id"), "match_score": s})
        hits.sort(key=lambda x: x["match_score"], reverse=True)
        official_to_seam.append({
            "official_record_id": f"OFF-{idx:05d}",
            "source_family": off.get("source_family"),
            "source_file": off.get("source_file"),
            "captured_utc": off.get("captured_utc"),
            "seam_detected": bool(hits),
            "reconciliation_state": "CONFIRMED" if hits else "BLIND_SPOT",
            "seam_matches": hits
        })

    return seam_to_official, official_to_seam, events

def build_table(result):
    lines = []
    lines.append("SEAM RECURSIVE OFFICIAL ANALYSIS")
    lines.append("=" * 180)
    lines.append(json.dumps(result["summary"], indent=2))
    lines.append("\nSEAM -> OFFICIAL")
    for r in result["seam_to_official"]:
        lines.append(f'{r["event_id"]} | {r["state"]} | official_matches={len(r["official_matches"])}')
    lines.append("\nOFFICIAL -> SEAM")
    for r in result["official_to_seam"]:
        lines.append(f'{r["official_record_id"]} | {r["source_family"]} | {r["reconciliation_state"]} | seam_matches={len(r["seam_matches"])}')
    return "\n".join(lines)

def main():
    print("\n=== STEP 5 RECURSIVE OFFICIAL ANALYSIS v33 ===\n")
    matrix = load_json(ROOT / CFG["outputs"]["event_matrix"])
    master = load_json(ROOT / CFG["outputs"]["continuum_master"])
    events = matrix.get("records", [])
    officials = official_entries(master)
    s2o, o2s, updated_events = reconcile(events, officials)
    summary = {
        "seam_event_count": len(events),
        "official_record_count": len(officials),
        "confirmed_count": sum(1 for x in s2o if x["state"] == "CONFIRMED"),
        "precursor_count": sum(1 for x in s2o if x["state"] == "PRECURSOR"),
        "blind_spot_count": sum(1 for x in o2s if x["reconciliation_state"] == "BLIND_SPOT")
    }
    result = {
        "generated_utc": utc_iso(),
        "schema": "SEAM_RECURSIVE_OFFICIAL_ANALYSIS_V33",
        "summary": summary,
        "updated_event_records": updated_events,
        "seam_to_official": s2o,
        "official_to_seam": o2s,
        "blind_spots": [x for x in o2s if x["reconciliation_state"] == "BLIND_SPOT"]
    }
    out = ROOT / CFG["outputs"]["official_recursive"]
    table = ROOT / CFG["outputs"]["official_recursive_table"]
    web = ROOT / CFG["outputs"]["web_index"]
    write_json(out, result)
    table.parent.mkdir(parents=True, exist_ok=True)
    table.write_text(build_table(result), encoding="utf-8")
    write_json(web, {"generated_utc": utc_iso(), "summary": summary, "events": updated_events, "blind_spots": result["blind_spots"]})
    append_jsonl(ROOT / "logs" / "step5_recursive_official_analysis.jsonl", summary)
    print(f"[step5] summary: {summary}")
    print(f"[step5] output: {out}")

if __name__ == "__main__":
    main()
