# Continuum Event Forecast

A distributed event data aggregation and anomaly detection system collecting from 118+ global sources.

## ⚠️ Architecture Change

**The collector pipeline has been moved to a private repository** ([seam-private-engines](https://github.com/jlanjou-SEAM/seam-private-engines)) for proprietary IP protection.

This public repository now contains:
- Documentation and architectural guides
- Configuration schemas
- Output data and results
- Processing pipeline specifications

## Data & Components

### Public (this repo)
- Configuration examples and pipeline specifications
- Historical output data and results
- Documentation (CLAUDE.md, GITHUB_ACTIONS_SETUP.md, etc.)

### Private (seam-private-engines/event-forcast/)
- **collectors/** — 118 data source acquisition modules
- **config/step1_raw_data_retrieval/** — Acquisition configuration
- **continuum/processes/** — Processing pipeline (Steps 2-5)
- **seam_orchestrator.py** — Orchestration logic
- **.github/workflows/** — GitHub Actions automation

## Data Sources (118+)

- **Seismic**: USGS, EMSC, GeoNet, GEOFON, IRIS
- **Weather**: NOAA, Open-Meteo, WeatherUnderground, CWOP
- **Space**: NASA EPIC, GOES, SOHO
- **Astronomical**: SDSS, observatories (VLA, Arecibo, LOFAR, MeerKAT)
- **Aviation**: ADS-B Exchange
- **Power**: CAISO, ERCOT, AEMO, EIA
- **Radio/RF**: KiwiSDR, WebSDR, ham networks
- **Environmental**: Air quality, wildfire, marine, drought indices
- **Alerts**: FEMA, Copernicus, GDACS, NHC
- **Marine**: Hycom, anomaly detection

## Pipeline Architecture

```
Step 1: Raw Data Retrieval (4-bucket scheduler)
  ├─ Realtime (22 sources, 30s)
  ├─ Nonrealtime (69 sources, 300s)
  ├─ Official (6 sources, 30s)
  └─ Image streams (8 sources, 60s)
  
Step 2-3: Processing & anomaly detection
Step 4: Runtime substrate wrapping
Step 5: Native reconciliation
```

## Running the System

To run the full pipeline:

1. **Clone the private engine repository**:
   ```bash
   git clone https://github.com/jlanjou-SEAM/seam-private-engines.git
   cd seam-private-engines/event-forcast
   ```

2. **Follow setup in that repo's README.md**

3. **Results are committed back to this public repository** via GitHub Actions

## Output Files

- `realtime/*.json` — Live data (22 sources)
- `nonrealtime/*.json` — Secondary data (69 sources)  
- `official/*.json` — Alerts (6 sources)
- `streams/*.json` — Continuous feeds (8 sources)
- `curated/*.json` — Processed anomalies
- `state/*.sha256` — Integrity checksums

## Documentation

- **[CLAUDE.md](CLAUDE.md)** — Development guide & architecture
- **[GITHUB_ACTIONS_SETUP.md](GITHUB_ACTIONS_SETUP.md)** — Workflow configuration
- **[GITHUB_ACTIONS_ROADMAP.md](GITHUB_ACTIONS_ROADMAP.md)** — Enhancement plans

## Security

- **Proprietary collectors**: Not public; kept in private repo
- **Configuration/credentials**: Private repo only (API endpoints, timeouts, auth)
- **Output data**: Public (results of collection)

## License

Proprietary — SEAM Foundation. Collector code and engine are not available in this public repository.

---

**Last Updated**: 2026-09-25  
**Backend Repository**: https://github.com/jlanjou-SEAM/seam-private-engines
