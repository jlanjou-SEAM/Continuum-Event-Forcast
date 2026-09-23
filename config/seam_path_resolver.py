from pathlib import Path

def project_root_from(file_path):
    p = Path(file_path).resolve()
    for parent in [p.parent] + list(p.parents):
        if (parent / "config").exists() and (
            (parent / "raw").exists()
            or (parent / "collectors").exists()
            or (parent / "config" / "collector_sources.json").exists()
        ):
            return parent
    # common case: C:\Continuum Database\config\step1_raw_data_retrieval\file.py
    if p.parent.name == "step1_raw_data_retrieval" and p.parent.parent.name == "config":
        return p.parent.parent.parent
    return p.parent

def config_dir_from(file_path):
    root = project_root_from(file_path)
    if (root / "config").exists():
        return root / "config"
    p = Path(file_path).resolve()
    if p.parent.name == "step1_raw_data_retrieval":
        return p.parent.parent
    return p.parent

def resolve_config_file(file_path, name):
    p = Path(file_path).resolve()
    candidates = [
        config_dir_from(file_path) / name,
        p.parent / name,
        p.parent.parent / name,
        p.parent.parent / "config" / name,
        project_root_from(file_path) / "config" / name,
    ]
    for c in candidates:
        if c.exists():
            return c
    return candidates[0]
