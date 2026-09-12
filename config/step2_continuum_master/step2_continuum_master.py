from pathlib import Path
from datetime import datetime, UTC
import json
import hashlib

ROOT = Path(r"C:\Continuum Database")

TEXT_EXTS = {
    ".json",
    ".txt",
    ".xml",
    ".csv",
    ".html",
    ".htm",
    ".log"
}

INTAKE_SETS = {
    "realtime": ROOT / "realtime",
    "streams": ROOT / "streams",
    "curated": ROOT / "curated",
    "official": ROOT / "official"
}

OUTPUT_FILE = (
    ROOT
    / "continuum"
    / "outputs"
    / "continuum_master.json"
)

LOG_FILE = (
    ROOT
    / "continuum"
    / "logs"
    / "step2_continuum_master.jsonl"
)


def utc_iso():
    return datetime.now(UTC).isoformat()


def sha256_text(text):
    return hashlib.sha256(
        text.encode("utf-8", errors="replace")
    ).hexdigest()


def sha256_bytes(raw):
    return hashlib.sha256(raw).hexdigest()


def append_jsonl(path, payload):
    path.parent.mkdir(parents=True, exist_ok=True)

    with path.open("a", encoding="utf-8") as f:
        f.write(json.dumps(payload) + "\n")


def recursive_files(folder):
    if not folder.exists():
        return []

    return [p for p in folder.rglob("*") if p.is_file()]


def parse_possible_json(text):
    try:
        return json.loads(text)
    except Exception:
        return None


def is_text_file(path):
    return path.suffix.lower() in TEXT_EXTS


def read_binary_summary(path):
    raw = path.read_bytes()

    return {
        "source_file": str(path),
        "file_name": path.name,
        "captured_utc": utc_iso(),
        "binary": True,
        "bytes": len(raw),
        "sha256": sha256_bytes(raw)
    }


def read_text_entry(path, intake):

    try:
        text = path.read_text(
            encoding="utf-8",
            errors="replace"
        )

        parsed = parse_possible_json(text)

        return {
            "source_set": intake,
            "source_family": path.stem,
            "source_file": str(path),
            "file_name": path.name,
            "captured_utc": utc_iso(),
            "payload_text": text[:100000],
            "payload_json": parsed,
            "sha256": sha256_text(text)
        }

    except Exception as exc:

        return {
            "source_set": intake,
            "source_file": str(path),
            "captured_utc": utc_iso(),
            "error": str(exc)
        }


def read_entry(path, intake):

    if is_text_file(path):
        return read_text_entry(path, intake)

    return {
        "source_set": intake,
        **read_binary_summary(path)
    }


def write_master_with_header(path, payload):

    path.parent.mkdir(parents=True, exist_ok=True)

    header = (
        "# CONTINUUM MASTER OUTPUT\n"
        f"# GENERATED_UTC={payload['generated_utc']}\n"
        f"# ENTRY_COUNT={payload['entry_count']}\n"
        "# ========================================\n"
    )

    with path.open("w", encoding="utf-8") as f:
        f.write(header)
        json.dump(payload, f, indent=2)


def main():

    print("\n=== STEP 2 CONTINUUM MASTER ===\n")

    entries = []
    source_manifest = []

    for intake, folder in INTAKE_SETS.items():

        folder.mkdir(parents=True, exist_ok=True)

        files = recursive_files(folder)

        print(f"[step2] ingest {intake}: {len(files)} files")

        source_manifest.append({
            "source_set": intake,
            "folder": str(folder),
            "file_count": len(files)
        })

        for f in files:
            entries.append(read_entry(Path(f), intake))

    master = {
        "generated_utc": utc_iso(),
        "schema": "SEAM_CONTINUUM_MASTER_V36",
        "source_manifest": source_manifest,
        "entry_count": len(entries),
        "entries": entries
    }

    write_master_with_header(OUTPUT_FILE, master)

    append_jsonl(
        LOG_FILE,
        {
            "generated_utc": utc_iso(),
            "entry_count": len(entries)
        }
    )

    print(f"[step2] continuum entries: {len(entries)}")
    print(f"[step2] output: {OUTPUT_FILE}")


if __name__ == "__main__":
    main()
