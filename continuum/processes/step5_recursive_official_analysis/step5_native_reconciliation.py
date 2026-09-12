from pathlib import Path
from seam_common import *
import json
from collections import defaultdict

ROOT = Path(r"C:\Continuum Database\continuum")
CFG = load_json(ROOT / "config" / "pipeline_config.json")

def load_step4_runtime():

    path = ROOT / CFG["outputs"]["event_matrix"]
    payload = load_json(path)

    if not payload:
        return None, path

    return payload, path

def event_signature(event):

    for k in (
        "signature_type",
        "signature_class",
        "primary_regime",
        "classification",
        "signature"
    ):
        if event.get(k):
            return str(event[k]).lower()

    return "unknown"

def build_native_targets(substrate):

    """
    Native SEAM behavior:
    - no manual geobucketing
    - no hard clustering
    - preserve recursive manifold emergence
    """

    event_substrate = substrate.get("event_substrate", [])

    manifolds = defaultdict(list)

    for event in event_substrate:
        sig = event_signature(event)
        manifolds[sig].append(event)

    targets = []

    for sig, events in manifolds.items():

        target = {
            "target_id": f"SEAM-{sig.upper()}",
            "target_class": sig,
            "continuum_state": "active",
            "manifold_size": len(events),
            "recursive_manifold": True,
            "native_reconciliation": True,
            "event_substrate_count": len(events),

            # IMPORTANT:
            # preserve the entire substrate
            "events": events
        }

        targets.append(target)

    return targets

def main():

    print()
    print("=== STEP 5 NATIVE SEAM RECONCILIATION v35 ===")
    print()

    substrate, source_path = load_step4_runtime()

    if not substrate:
        print("[step5] no step4 runtime substrate found")
        return

    targets = build_native_targets(substrate)

    output = {
        "generated_utc": utc_iso(),
        "schema": "SEAM_NATIVE_RECONCILIATION_V35",
        "source_runtime": str(source_path),
        "target_count": len(targets),
        "targets": targets
    }

    out = ROOT / "output" / "SEAM_Target_Reconciliation.json"

    write_json(out, output)

    append_jsonl(
        ROOT / "logs" / "step5_native_reconciliation.jsonl",
        {
            "target_count": len(targets),
            "schema": output["schema"]
        }
    )

    print(f"[step5] native targets: {len(targets)}")
    print(f"[step5] output: {out}")
    print()

if __name__ == "__main__":
    main()
