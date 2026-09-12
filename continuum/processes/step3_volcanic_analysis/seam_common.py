from pathlib import Path
from datetime import datetime, UTC, timedelta
import json, hashlib, re, urllib.request, urllib.parse, xml.etree.ElementTree as ET

def utc_now():
    return datetime.now(UTC)

def utc_iso():
    return utc_now().isoformat()

def load_json(path, default=None):
    if default is None:
        default = {}
    p = Path(path)
    if not p.exists():
        return default
    try:
        return json.loads(p.read_text(encoding="utf-8"))
    except Exception:
        return default

def write_json(path, obj):
    p = Path(path)
    p.parent.mkdir(parents=True, exist_ok=True)
    p.write_text(json.dumps(obj, indent=2, ensure_ascii=False), encoding="utf-8")

def append_jsonl(path, obj):
    p = Path(path)
    p.parent.mkdir(parents=True, exist_ok=True)
    obj["logged_utc"] = utc_iso()
    with p.open("a", encoding="utf-8") as f:
        f.write(json.dumps(obj, ensure_ascii=False) + "\n")

def sha256_text(text):
    return hashlib.sha256(text.encode("utf-8", errors="replace")).hexdigest()

def stringify(obj):
    try:
        return json.dumps(obj, ensure_ascii=False)
    except Exception:
        return str(obj)

def lower_blob(obj):
    return stringify(obj).lower()

def fetch_url(url, timeout=60, headers=None):
    req = urllib.request.Request(
        url,
        headers=headers or {
            "User-Agent": "SEAM-Continuum/1.0 archive-backfill"
        }
    )
    with urllib.request.urlopen(req, timeout=timeout) as r:
        data = r.read()
        content_type = r.headers.get("content-type", "")
        final_url = r.geturl()
    text = data.decode("utf-8", errors="replace")
    return {
        "ok": True,
        "url": url,
        "final_url": final_url,
        "content_type": content_type,
        "bytes_read": len(data),
        "payload_text": text,
        "sha256": sha256_text(text),
        "retrieved_utc": utc_iso()
    }

def safe_fetch(url, timeout=60):
    try:
        return fetch_url(url, timeout=timeout)
    except Exception as exc:
        return {
            "ok": False,
            "url": url,
            "error": str(exc),
            "retrieved_utc": utc_iso()
        }

def parse_possible_json(text):
    try:
        return json.loads(text)
    except Exception:
        return None

def extract_rss_items(text):
    out = []
    try:
        root = ET.fromstring(text)
        for item in root.findall(".//item"):
            out.append({
                "title": item.findtext("title"),
                "link": item.findtext("link"),
                "description": item.findtext("description"),
                "pubDate": item.findtext("pubDate")
            })
    except Exception:
        pass
    return out

def recursive_files(folder):
    p = Path(folder)
    if not p.exists():
        return []
    return [x for x in p.rglob("*") if x.is_file()]
