# Continuum Database - Development Guide

This document provides development notes, architecture overview, and configuration guidelines for the Continuum Database project.

## Project Purpose

Continuum is a self-executing, cloud-hosted multi-source data aggregation and analysis system that:

1. **Continuously collects** data from 118+ external sources (seismic, weather, space, astronomical, aviation, power, RF, environmental)
2. **Processes in real-time** with a 5-step pipeline (acquisition → processing → anomaly detection → substrate wrapping → reconciliation)
3. **Stores everything in Git** — code, configuration, state, and data outputs all version-controlled
4. **Runs on GitHub Actions** — automated scheduling, cloud execution, results committed back to repo
5. **Preserves manifold emergence** — native SEAM reconciliation maintains recursive substrate continuity

## Architecture Layers

### Layer 1: Data Acquisition (Step 1)

**Location:** `config/step1_raw_data_retrieval/`

- **118 collectors** in `collectors/` directory — one Python module per data source
- **4-bucket scheduler** with independent refresh cycles:
  - Realtime (30s): Critical live data (earthquakes, aviation, RF)
  - Nonrealtime (300s): Weather, space weather, energy grids
  - Official (30s): Government alerts and advisories
  - Image streams (60s): Astronomy, weather imagery, radio feeds
- **Configuration**: `collector_sources.json` — 118 source definitions with URLs, timeouts, bucket assignments
- **Environment variables** for window-based backfill:
  - `SEAM_RETRIEVAL_MODE`: "live", "live_plus_72h", "weekly_168hr_update"
  - `SEAM_WINDOW_START_UTC` / `SEAM_WINDOW_END_UTC`: Time boundaries
  - `SEAM_BACKFILL_HOURS`: 0 (live), 72, or 168

**Entry Points:**
```python
# Live acquisition (current data)
realtime_acquisition.py          # 22 realtime sources
nonrealtime_acquisition.py       # 69 secondary sources
official_acquisition.py          # 6 official sources
image_stream_acquisition.py       # 8 image/stream sources

# Historical window backfill
realtime_acquisition_72hr.py     # 72-hour window
nonrealtime_acquisition_72hr.py
official_acquisition_72hr.py
image_stream_acquisition_72hr.py

realtime_acquisition_168hr.py    # 7-day window
nonrealtime_acquisition_168hr.py
official_acquisition_168hr.py
image_stream_acquisition_168hr.py
```

### Layer 2-3: Processing & Anomaly Emergence

**Location:** `continuum/processes/`

- Step 2: Raw data validation and normalization
- Step 3: Anomaly emergence detection
- Outputs: Identified anomalies and patterns

**Status:** Documentation in README; implementation pending

### Layer 4: Runtime Substrate Wrapper

- Converts Step 3 output to native SEAM format
- Preserves event substrate with metadata
- Sets runtime flags and continuum instructions
- Maintains recursive manifold structure

**Status:** Implemented; documented in `continuum/processes/step5_recursive_official_analysis/README.md`

### Layer 5: Native Reconciliation

**Location:** `continuum/processes/step5_recursive_official_analysis/`

**Entry Point:** `step5_native_reconciliation.py`

**Purpose:**
- Consumes Step 4 substrate format
- Preserves recursive manifold emergence
- Avoids hard-coded clustering
- Outputs final curated datasets

**Key Feature:** Disables hard clustering and geobucketing to preserve full recursive substrate continuity

## Data Flow

```
Collectors (118 sources)
    ↓
Raw JSON outputs: realtime/, nonrealtime/, official/, streams/
    ↓
Step 1 Acquisition Scripts
    ├── realtime_acquisition*.py
    ├── nonrealtime_acquisition*.py
    ├── official_acquisition*.py
    └── image_stream_acquisition*.py
    ↓
Bucket-organized JSON files
    ├── realtime/*.json          (22 sources, live)
    ├── nonrealtime/*.json       (69 sources, secondary)
    ├── official/*.json          (6 sources, alerts)
    └── streams/*.json           (8 sources, imagery)
    ↓
[Intermediate processing: Step 2-3]
    ↓
Step 4: Runtime Substrate Wrapper
    ├── event_substrate[]
    ├── runtime_flags
    └── continuum_instruction
    ↓
Step 5: Native Reconciliation
    ├── Manifold emergence preservation
    ├── Recursive substrate continuity
    └── Full-feature reconciliation
    ↓
Output:
    ├── curated/*.json           (Processed anomalies)
    ├── state/*.sha256           (Integrity checksums)
    └── continuum_master_72h.zip (Packaged output)
    ↓
[Git commit with results]
```

## Key Concepts

### SEAM (Substrate Event Analysis Module)

SEAM is the native runtime format for Continuum's event substrate:

- **substrate**: Array of detected events/anomalies
- **event_substrate[]**: Individual event records with metadata
- **runtime_flags**: Processing status and options
- **continuum_instruction**: Next-step directives
- **manifold emergence**: Recursive pattern detection

Key principle: **Preserve full recursive substrate continuity** instead of hard clustering.

### Window-Based Analysis

Continuum supports three analysis windows:

1. **Live (realtime)**: Current data only
2. **72-hour rolling**: Last 3 days of continuous data
3. **168-hour (weekly)**: Last 7 days + archival

Each window has corresponding acquisition scripts (e.g., `realtime_acquisition_72hr.py`).

### State Management

**Location:** `state/`

Files: `{source}.{bucket}_{window}.sha256`

Example: `usgs.realtime_0hr.sha256`

Purpose: Track data integrity and prevent duplicate processing.

### Collector Naming Convention

```
{source_name}.py              # Live acquisition
{source_name}_72hr.py         # 72-hour backfill
{source_name}_168hr.py        # 7-day backfill
{source_name}_live.py         # Live subset variant
{source_name}_bulk.py         # Bulk historical variant
{source_name}_index.py        # Index-based fetching
regional_X_{type}_{N}.py      # Regional multi-instance collectors
```

## GitHub Actions Integration

**Location:** `.github/workflows/`

### Workflow Files

1. **acquisition-*.yml** (4 files)
   - Run every 1-5 minutes
   - Single bucket per workflow
   - Auto-commit on data change

2. **batch-acquisition-*.yml** (2 files)
   - 72hr: Every 6 hours
   - 168hr: Every Sunday

3. **pipeline-step5-reconciliation.yml**
   - Daily 02:00 UTC
   - Runs native reconciliation

4. **full-pipeline-orchestration.yml**
   - Weekly Sunday 04:00 UTC
   - Complete end-to-end run

### Workflow Features

- Environment variables properly set for each bucket
- `[skip ci]` tags prevent recursive triggers
- Automatic commit/push on success
- Timeout protection (5-120 min depending on workflow)
- Continue-on-error for non-blocking steps

**Important**: GitHub Actions minimum schedule is 1 minute. For true 30-second cycles, use self-hosted runners or external triggers.

## Configuration Files

### `collector_sources.json`

Main configuration for all 118 sources:

```json
{
  "source_name": {
    "bucket": "realtime|nonrealtime|official|streams",
    "timeout_seconds": 2,
    "urls": ["https://api.example.com/endpoint"],
    "acquisition_class": "realtime|nonrealtime|official|image_stream"
  }
}
```

All 118 entries must have valid bucket and acquisition_class assignments.

### Environment Variables

**Acquisition Scripts:**
- `SEAM_COLLECTOR_TIMEOUT_SECONDS`: Per-collector timeout (default: 45)
- `SEAM_RETRIEVAL_MODE`: "live", "live_plus_72h", "weekly_168hr_update"
- `SEAM_BACKFILL_HOURS`: 0, 72, or 168
- `SEAM_WINDOW_START_UTC` / `SEAM_WINDOW_END_UTC`: Time boundaries
- `SEAM_ACQUISITION_LABEL`: Bucket name (realtime, nonrealtime, official)
- `SEAM_COLLECTOR_CONFIG`: Path to collector_sources.json
- `SEAM_OUTPUT_ROOT`: Repository root directory

## Testing & Development

### Run a Single Collector Locally

```bash
cd config/step1_raw_data_retrieval
python -m collectors.usgs
```

### Run Full Acquisition Locally

```bash
cd config/step1_raw_data_retrieval
python realtime_acquisition.py
```

### Test 72-hour Window

```bash
export SEAM_WINDOW_START_UTC="2026-09-08T00:00:00Z"
export SEAM_WINDOW_END_UTC="2026-09-11T00:00:00Z"
python realtime_acquisition_72hr.py
```

### Validate JSON Output

```bash
# Check realtime data integrity
python -m json.tool realtime/usgs.json | head -20

# Validate all JSON in a directory
for f in realtime/*.json; do python -m json.tool "$f" > /dev/null && echo "✓ $f" || echo "✗ $f"; done
```

### Review State Checksums

```bash
# View all state files
ls -lh state/

# Check latest checksum
cat state/usgs.realtime_0hr.sha256
```

## Git Workflow

### Commit Message Conventions

Data commits:
```
chore: realtime acquisition update [skip ci]
chore: batch 72hr acquisition cycle [skip ci]
```

Code changes:
```
feat: add GDACS disaster alerts collector
fix: improve NOAA alert parsing
refactor: consolidate weather station collectors
docs: update API documentation for ERCOT
```

### Branch Strategy

- `main`: Production, automatically executed by GitHub Actions
- Feature branches: Develop and test changes
- Pull request: Code review before merging to main

### Preventing Recursive Workflows

All data-commit workflows use `[skip ci]` tag to prevent:
```yaml
git commit -m "chore: ... [skip ci]"
```

This prevents data-commit triggers from launching workflows again.

## Performance & Optimization

### Collector Efficiency

- Timeouts: Set per source (default 2-45 seconds)
- Parallel execution: Collectors run sequentially; improve with asyncio in future
- Caching: State files prevent re-processing identical data

### Storage Management

Current estimate:
- Realtime/nonrealtime: ~50-500 KB per cycle
- Official alerts: ~20-50 KB per cycle
- Image streams: ~100-500 KB per cycle
- **Total history**: Unbounded in Git (every commit stored)

Recommendation:
- Archive old data periodically
- Consider shallow clones for new runners (`--depth 1`)
- Prune local history: `git reflog expire --all --expire=now`

### Cost Optimization

For free GitHub Actions tier (2,000 min/month):
- Reduce realtime/official to every 5 min: saves ~1,100 min/month
- Disable image streams temporarily: saves ~1,440 min/month
- Use monthly batch-only approach: ~600 min/month

## Common Tasks

### Add a New Data Source

1. Create collector: `collectors/{source_name}.py`
2. Register in `collector_sources.json`
3. Test locally: `python collectors/{source_name}.py`
4. Commit to `main`
5. Verify in next scheduled workflow run

### Change Acquisition Schedule

Edit `.github/workflows/{type}.yml`:
```yaml
on:
  schedule:
    - cron: '*/5 * * * *'  # Change schedule here
```

### Extend Historical Window

Create backfill script (e.g., for 14-day window):
```python
# collectors/my_source_14d.py
import os
from datetime import datetime, UTC, timedelta
os.environ["SEAM_BACKFILL_HOURS"] = "336"  # 14 days
# ... rest of acquisition logic
```

### Monitor Data Quality

```bash
# Check for missing sources
python -c "import json; sources = json.load(open('config/step1_raw_data_retrieval/collector_sources.json')); print(f'Total sources: {len(sources)}')"

# Verify recent data
find realtime -name "*.json" -mmin -5  # Modified in last 5 min
```

## Troubleshooting

### "Index already exists" during build

- Git index is corrupted
- Fix: `rm .git/index.lock` and retry

### Collectors timeout

- Increase `SEAM_COLLECTOR_TIMEOUT_SECONDS`
- Check if API endpoints are down
- Review network latency in workflow logs

### Data not appearing in outputs

- Check collector was added to `collector_sources.json`
- Verify `acquisition_class` and `bucket` match workflow expectations
- Review workflow logs for specific errors

### Git history too large

- Clone with `--depth 1` on new runners
- Archive old data to S3 or external storage
- Consider squashing commits periodically

## Future Enhancements

- [ ] Parallel collector execution with asyncio
- [ ] Database backend (PostgreSQL) for time-series data
- [ ] Web dashboard for data visualization
- [ ] Real-time alerting on anomalies
- [ ] Automated data archival to cloud storage
- [ ] Multi-language support in collectors (Go, Rust for performance)
- [ ] Distributed processing for heavy workloads
- [ ] Machine learning pipelines for pattern detection

## References

- **Main README**: `README.md` — Project overview
- **Workflows Guide**: `.github/WORKFLOWS.md` — GitHub Actions details
- **Setup Guide**: `GITHUB_ACTIONS_SETUP.md` — Configuration and deployment
- **Step 5 README**: `continuum/processes/step5_recursive_official_analysis/README.md` — Reconciliation details
- **Cron Syntax**: https://crontab.guru/

## Contact & Support

For issues, questions, or contributions:
1. Check logs in GitHub Actions
2. Review workflow output
3. Test collectors locally
4. File issues on GitHub with workflow logs attached

---

**Last Updated**: 2026-09-11
**Maintained by**: Jason Palmer (jlanjou@gmail.com)
**Repository**: https://github.com/jlanjou-SEAM/SEAM-Core
