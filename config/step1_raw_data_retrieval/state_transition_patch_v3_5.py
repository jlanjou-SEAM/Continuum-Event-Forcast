import hashlib

SOURCE_HASHES_FILE = STATE_DIR / "source_hashes.json"

def sha256_payload(payload):
    encoded = json.dumps(payload, sort_keys=True, default=str).encode("utf-8")
    return hashlib.sha256(encoded).hexdigest()

def load_source_hashes():
    return load_json(SOURCE_HASHES_FILE, {})

def save_source_hashes(payload):
    save_json(SOURCE_HASHES_FILE, payload)

# INSIDE run_collector()

source_hashes = load_source_hashes()

# AFTER successful payload acquisition:

payload_hash = sha256_payload(output)

prior_hash = source_hashes.get(name, {}).get("last_hash")

if payload_hash == prior_hash:
    source_hashes[name] = {
        "last_hash": payload_hash,
        "last_change_utc": source_hashes.get(name, {}).get("last_change_utc"),
        "unchanged_cycles": source_hashes.get(name, {}).get("unchanged_cycles", 0) + 1
    }

    save_source_hashes(source_hashes)

    print(f"[SEAM] unchanged {name} -> skipped write")
    return

# ONLY WRITE NEW FILES IF HASH CHANGED

source_hashes[name] = {
    "last_hash": payload_hash,
    "last_change_utc": utc_now(),
    "unchanged_cycles": 0
}

save_source_hashes(source_hashes)

# THEN proceed with:
# out_path.write_text(...)
