import json
import urllib.request
import hashlib
import time
from pathlib import Path
from datetime import datetime, UTC

ROOT = Path(__file__).resolve().parent.parent

CONFIG_CANDIDATES = [
    ROOT / "config" / "collector_sources.json",
    ROOT / "config" / "step1_raw_data_retrieval" / "collector_sources.json",
    ROOT / "config" / "step1_raw_data_retrieval" / "collector_sources_additive_patch.json",
]

def resolve_config():
    for candidate in CONFIG_CANDIDATES:
        if candidate.exists():
            return candidate

    # Preserve the original expected path in the error message, while listing all searched paths.
    searched = "\n".join(str(p) for p in CONFIG_CANDIDATES)
    raise FileNotFoundError(
        "collector_sources.json was not found. Searched:\n" + searched
    )

CONFIG = resolve_config()

STATE = ROOT / "state"
STATE.mkdir(parents=True, exist_ok=True)

MAX_BYTES_DEFAULT = 65536
MAX_BYTES_STREAM = 262144

BINARY_PREFIXES = (
    "image/",
    "video/",
    "audio/",
    "application/octet-stream",
)

EXT_BY_CONTENT_TYPE = {
    "image/jpeg": ".jpg",
    "image/jpg": ".jpg",
    "image/png": ".png",
    "image/gif": ".gif",
    "image/webp": ".webp",
    "image/tiff": ".tif",
    "video/mp4": ".mp4",
    "video/mpeg": ".mpeg",
    "audio/mpeg": ".mp3",
    "audio/wav": ".wav",
    "application/json": ".json",
    "application/geo+json": ".geojson",
    "application/xml": ".xml",
    "text/xml": ".xml",
    "text/csv": ".csv",
    "text/plain": ".txt",
    "text/html": ".html",
}

def utc_now():
    return datetime.now(UTC).isoformat()

def utc_stamp():
    return datetime.now(UTC).strftime("%Y%m%d_%H%M%S")

def load_sources():
    return json.loads(CONFIG.read_text(encoding="utf-8"))

def payload_hash(payload):
    encoded = json.dumps(payload, sort_keys=True, default=str).encode("utf-8")
    return hashlib.sha256(encoded).hexdigest()

def hash_bytes(raw):
    return hashlib.sha256(raw).hexdigest()

def hash_file(name):
    return STATE / f"{name}.sha256"

def previous_hash(name):
    hfile = hash_file(name)
    if hfile.exists():
        return hfile.read_text(encoding="utf-8").strip()
    return None

def save_hash(name, value):
    hash_file(name).write_text(value, encoding="utf-8")

def normalize_bucket(bucket):
    if bucket == "raw":
        return "realtime"
    if bucket == "images":
        return "streams"
    if bucket == "image_stream":
        return "streams"
    if bucket == "nonrealtime":
        return "curated"
    return bucket

def target_dir(bucket, name=None):
    bucket = normalize_bucket(bucket)

    # Final corrected root-level storage layout.
    # C:\Continuum Database\realtime
    # C:\Continuum Database\streams
    # C:\Continuum Database\curated
    # C:\Continuum Database\official
    base = ROOT / bucket

    # Media streams should keep per-source folders so latest + timestamped binaries do not collide.
    if bucket == "streams" and name:
        base = base / name

    return base

def infer_ext(content_type, url=""):
    ct = (content_type or "").split(";")[0].strip().lower()
    if ct in EXT_BY_CONTENT_TYPE:
        return EXT_BY_CONTENT_TYPE[ct]

    lower_url = url.lower().split("?")[0]
    for ext in (".jpg", ".jpeg", ".png", ".gif", ".webp", ".tif", ".tiff", ".mp4", ".xml", ".json", ".geojson", ".csv", ".txt", ".html"):
        if lower_url.endswith(ext):
            return ".jpg" if ext == ".jpeg" else ext

    return ".bin"

def is_binary_payload(content_type, bucket, url=""):
    bucket = normalize_bucket(bucket)
    ct = (content_type or "").split(";")[0].strip().lower()
    if bucket == "streams":
        return True
    if any(ct.startswith(prefix) for prefix in BINARY_PREFIXES):
        return True

    lower_url = url.lower().split("?")[0]
    return lower_url.endswith((".jpg", ".jpeg", ".png", ".gif", ".webp", ".tif", ".tiff", ".mp4", ".mpeg", ".bin"))

def fetch(url, timeout_seconds=2, bucket="realtime"):
    started = time.perf_counter()

    req = urllib.request.Request(
        url,
        headers={
            "User-Agent": "python-acquisition",
            "Accept": "*/*",
            "Cache-Control": "no-cache"
        }
    )

    bucket = normalize_bucket(bucket)
    max_bytes = MAX_BYTES_STREAM if bucket == "streams" else MAX_BYTES_DEFAULT

    with urllib.request.urlopen(req, timeout=timeout_seconds) as r:
        raw = r.read(max_bytes)
        elapsed_ms = round((time.perf_counter() - started) * 1000, 2)
        content_type = r.headers.get("Content-Type", "")

        result = {
            "url": url,
            "ok": True,
            "status": getattr(r, "status", None),
            "content_type": content_type,
            "final_url": r.geturl(),
            "captured_utc": utc_now(),
            "elapsed_ms": elapsed_ms,
            "bytes_read": len(raw),
            "sha256": hash_bytes(raw),
            "_raw_bytes": raw,
        }

        if not is_binary_payload(content_type, bucket, url):
            result["payload_preview"] = raw[:8192].decode("utf-8", errors="replace")

        return result

def save_output(bucket, name, payload):
    bucket = normalize_bucket(bucket)
    outdir = target_dir(bucket, name)
    outdir.mkdir(parents=True, exist_ok=True)

    captures = payload.get("captures", [])
    saved_media = []

    if bucket == "streams":
        for index, capture in enumerate(captures):
            raw = capture.pop("_raw_bytes", None)
            if raw is None or not capture.get("ok"):
                continue

            ext = infer_ext(capture.get("content_type", ""), capture.get("url", ""))
            stamped = outdir / f"{utc_stamp()}_{index}{ext}"
            latest = outdir / f"latest_{index}{ext}"

            stamped.write_bytes(raw)
            latest.write_bytes(raw)

            capture["saved_file"] = str(stamped)
            capture["latest_file"] = str(latest)
            saved_media.append(str(stamped))

        manifest_file = outdir / f"{name}.json"
        manifest_file.write_text(json.dumps(payload, indent=2), encoding="utf-8")
        return manifest_file

    # Non-stream buckets remain JSON envelopes, preserving the original behavior.
    for capture in captures:
        capture.pop("_raw_bytes", None)

    outfile = outdir / f"{name}.json"
    outfile.write_text(json.dumps(payload, indent=2), encoding="utf-8")
    return outfile

def run_collector(name):
    sources = load_sources()
    spec = sources[name]

    bucket = normalize_bucket(spec.get("bucket", spec.get("acquisition_class", "realtime")))
    urls = spec.get("urls", [])
    timeout_seconds = int(spec.get("timeout_seconds", 2))

    payload = {
        "source": name,
        "bucket": bucket,
        "acquisition_class": spec.get("acquisition_class", bucket),
        "captured_utc": utc_now(),
        "config_file": str(CONFIG),
        "captures": []
    }

    ok = 0
    failed = 0
    total_latency = 0.0

    for url in urls:
        try:
            capture = fetch(url, timeout_seconds, bucket)
            payload["captures"].append(capture)
            ok += 1
            total_latency += float(capture.get("elapsed_ms", 0.0))

        except Exception as exc:
            failed += 1
            payload["captures"].append({
                "url": url,
                "ok": False,
                "captured_utc": utc_now(),
                "error": str(exc)
            })

    current_hash = payload_hash({
        "source": name,
        "bucket": bucket,
        "captures": [
            {k: v for k, v in c.items() if k != "_raw_bytes"}
            for c in payload["captures"]
        ]
    })

    old_hash = previous_hash(name)
    outfile = save_output(bucket, name, payload)
    save_hash(name, current_hash)

    if ok > 0 and failed == 0:
        state = "unchanged" if old_hash == current_hash else "changed"
    elif ok > 0 and failed > 0:
        state = "degraded"
    else:
        state = "failed"

    size_kb = round(outfile.stat().st_size / 1024, 2)
    avg_ms = round(total_latency / ok, 2) if ok else 0.0

    print(
        f"[{state}] "
        f"{name} "
        f"{ok}/{len(urls)} ok "
        f"| {avg_ms} ms "
        f"-> {bucket} "
        f"| {outfile.name} "
        f"| {size_kb} KB"
    )
