import json
import hashlib
from pathlib import Path
from datetime import datetime, timedelta, UTC

CONFIG_DIR = Path(__file__).resolve().parent
ROOT = CONFIG_DIR.parent

RAW_DIR = ROOT / "raw"
CURATED_DIR = ROOT / "curated"
OFFICIAL_DIR = ROOT / "official"
CONTINUUM_DIR = ROOT / "continuum"
LOG_DIR = ROOT / "logs"
STATE_DIR = ROOT / "state"

RAW_CONTINUUM_FILE = CONTINUUM_DIR / "seam_raw_continuum_48h.json"
OFFICIAL_RECORD_FILE = CONTINUUM_DIR / "seam_official_record_48h.json"
DIGEST_LEDGER = STATE_DIR / "digestion_ledger.json"
RUNTIME_LOG = LOG_DIR / "continuum_runtime_log.jsonl"

RETENTION_HOURS = 48


def utc_now():
    return datetime.now(UTC)


def load_json(path, default):
    if not path.exists():
        return default
    try:
        return json.loads(path.read_text(encoding="utf-8"))
    except Exception:
        return default


def save_json(path, payload):
    path.parent.mkdir(parents=True, exist_ok=True)
    path.write_text(json.dumps(payload, indent=2), encoding="utf-8")


def payload_hash(payload):
    encoded = json.dumps(payload, sort_keys=True, default=str).encode("utf-8")
    return hashlib.sha256(encoded).hexdigest()


def continuum_record(source, bucket, payload):
    return {
        "continuum_timestamp": utc_now().isoformat(),
        "source": source,
        "bucket": bucket,
        "record_hash": payload_hash(payload),
        "payload": payload
    }


def read_bucket(directory, bucket):
    records = []

    if not directory.exists():
        return records

    for path in directory.glob("*.json"):
        payload = load_json(path, None)
        if payload is None:
            continue

        records.append(continuum_record(path.stem, bucket, payload))

    return records


def trim_48h(records):
    cutoff = utc_now() - timedelta(hours=RETENTION_HOURS)
    retained = []
    seen = set()

    for record in records:
        try:
            dt = datetime.fromisoformat(record["continuum_timestamp"])
        except Exception:
            continue

        if dt < cutoff:
            continue

        rhash = record.get("record_hash")
        if rhash in seen:
            continue

        seen.add(rhash)
        retained.append(record)

    return retained


def trim_jsonl_log(path):
    if not path.exists():
        return

    cutoff = utc_now() - timedelta(hours=RETENTION_HOURS)
    retained = []

    for line in path.read_text(encoding="utf-8", errors="replace").splitlines():
        try:
            obj = json.loads(line)
            ts = obj.get("timestamp")
            if ts and datetime.fromisoformat(ts) >= cutoff:
                retained.append(json.dumps(obj))
        except Exception:
            continue

    path.write_text("\n".join(retained) + ("\n" if retained else ""), encoding="utf-8")


def update_digest_ledger(records):
    ledger = load_json(DIGEST_LEDGER, {})
    now = utc_now().isoformat()

    for record in records:
        rhash = record["record_hash"]
        if rhash not in ledger:
            ledger[rhash] = {
                "source": record["source"],
                "bucket": record["bucket"],
                "first_seen": now,
                "digested": False,
                "digested_timestamp": None
            }

    active_hashes = {r["record_hash"] for r in records}
    ledger = {k: v for k, v in ledger.items() if k in active_hashes}

    save_json(DIGEST_LEDGER, ledger)


def append_runtime_log(entry):
    LOG_DIR.mkdir(parents=True, exist_ok=True)
    with RUNTIME_LOG.open("a", encoding="utf-8") as handle:
        handle.write(json.dumps(entry) + "\n")


def main():
    raw_records = read_bucket(RAW_DIR, "raw")
    curated_records = read_bucket(CURATED_DIR, "curated")
    official_records = read_bucket(OFFICIAL_DIR, "official")

    prior_raw = load_json(RAW_CONTINUUM_FILE, [])
    prior_official = load_json(OFFICIAL_RECORD_FILE, [])

    raw_continuum = trim_48h(prior_raw + raw_records + curated_records)
    official_record = trim_48h(prior_official + official_records)

    save_json(RAW_CONTINUUM_FILE, raw_continuum)
    save_json(OFFICIAL_RECORD_FILE, official_record)

    update_digest_ledger(raw_continuum + official_record)

    append_runtime_log({
        "timestamp": utc_now().isoformat(),
        "raw_inputs": len(raw_records),
        "curated_inputs": len(curated_records),
        "official_inputs": len(official_records),
        "raw_continuum_records": len(raw_continuum),
        "official_record_records": len(official_record)
    })

    trim_jsonl_log(RUNTIME_LOG)
    trim_jsonl_log(LOG_DIR / "collector_runtime_log.jsonl")

    print("\n=== SEAM PHASE 1 FLAT SOURCES RUNTIME v3.6 ===\n")
    print(f"Raw Inputs              : {len(raw_records)}")
    print(f"Curated Inputs          : {len(curated_records)}")
    print(f"Official Inputs         : {len(official_records)}")
    print(f"Raw Continuum Records   : {len(raw_continuum)}")
    print(f"Official Record Entries : {len(official_record)}")
    print(f"Raw Continuum           : {RAW_CONTINUUM_FILE}")
    print(f"Official Record         : {OFFICIAL_RECORD_FILE}")
    print(f"Digest Ledger           : {DIGEST_LEDGER}")


if __name__ == "__main__":
    main()
