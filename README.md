# Continuum Database

A comprehensive real-time and historical multi-source data aggregation system that continuously collects, processes, and curates environmental, geophysical, astronomical, and atmospheric data from 118+ global sources.

## Overview

Continuum ingests data across multiple acquisition buckets with independent refresh cycles, processes the raw data through an anomaly detection pipeline, and outputs curated datasets with native SEAM (Substrate Event Analysis Module) reconciliation.

### Data Sources (118+)

- **Seismic Events**: USGS, EMSC, GeoNet NZ, GEOFON, IRIS, Raspberry Shake
- **Weather & Atmospheric**: Open-Meteo, NOAA MADIS, CWOP, USCRN, WeatherUnderground, ambient weather networks
- **Space Weather**: NASA EPIC, GOES X-ray/Magnetometer, SOHO, LASCO
- **Astronomical**: Sloan Digital Sky Survey, SETI@home, various observatories (VLA, Arecibo, LOFAR, MeerKAT, etc.)
- **Aviation**: ADS-B Exchange real-time flight tracking
- **Power & Energy**: CAISO, ERCOT, AEMO, EIA grid monitoring
- **Radio & RF**: KiwiSDR, WebSDR, ham radio networks, DX Maps
- **Environmental**: Air quality, wildfire risk, marine anomalies, drought/heat indices
- **Emergency Alerts**: FEMA disasters, Copernicus EMS, GDACS, NOAA alerts, NHC hurricane advisories
- **RF Propagation**: Ionospheric skip observations, HF band conditions
- **Marine**: Hycom models, marine anomaly detection

## Architecture

### Pipeline Stages

```
Step 1: Raw Data Retrieval (4-bucket scheduler)
    ├── Realtime bucket (22 sources, 30s cycle)
    ├── Nonrealtime bucket (69 sources, 300s cycle)
    ├── Official bucket (6 sources, 30s cycle)
    └── Image streams (8 sources, 60s cycle)
    
Step 2-3: Preliminary processing & anomaly emergence
Step 4: Runtime substrate wrapper (native SEAM format)
Step 5: Native reconciliation & manifold emergence
```

### Data Buckets

- **`realtime/`**: Live streaming data from rapid-update sources
- **`streams/`**: Continuous streaming feeds (radio, image, network data)
- **`curated/`**: Processed, analyzed, and clustered anomaly datasets
- **`official/`**: Authoritative alerts and advisories from government agencies
- **`state/`**: SHA256 checksums for data integrity verification

## Project Structure

```
continuum-database/
├── collectors/              # Data collection modules
├── config/                  # Configuration and acquisition scripts
│   └── step1_raw_data_retrieval/
│       ├── collector_sources.json    # 118+ source definitions
│       ├── official_acquisition.py
│       ├── realtime_acquisition.py
│       ├── nonrealtime_acquisition.py
│       └── image_stream_acquisition.py
├── continuum/               # Processing pipeline
│   └── processes/
│       └── step5_recursive_official_analysis/
├── curated/                 # Output: processed datasets
├── official/                # Output: official alerts
├── realtime/                # Output: live streaming data
├── streams/                 # Output: continuous feeds
├── state/                   # Data integrity checksums
└── CLAUDE.md                # Development guidelines
```

## Running the System

### Realtime Acquisition (30-second cycle)
```bash
cd config/step1_raw_data_retrieval
python realtime_acquisition.py
```

### Full 72-hour Window Acquisition
```bash
python realtime_acquisition_72hr.py
python nonrealtime_acquisition_72hr.py
python official_acquisition_72hr.py
python image_stream_acquisition_72hr.py
```

### Full 7-day (168-hour) Window
```bash
python realtime_acquisition_168hr.py
python nonrealtime_acquisition_168hr.py
python official_acquisition_168hr.py
python image_stream_acquisition_168hr.py
```

## Configuration

All data sources are defined in `config/step1_raw_data_retrieval/collector_sources.json`:

```json
{
  "source_name": {
    "bucket": "realtime|nonrealtime|official|streams",
    "timeout_seconds": 2,
    "urls": ["https://api.example.com/endpoint"],
    "acquisition_class": "realtime|nonrealtime|image_stream|official"
  }
}
```

## Data Formats

- **Primary format**: GeoJSON for geospatial data
- **Metadata**: JSON with timestamps, source attribution, validation flags
- **Packaging**: 72hr/168hr rolling windows compressed to `continuum_master_72h.zip`

## Key Features

- **Native SEAM Reconciliation**: Preserves recursive manifold emergence without hard-coded clustering
- **Multi-window analysis**: 72-hour and 7-day historical windows
- **Integrity verification**: SHA256 checksums for all state data
- **Scalable architecture**: 118+ sources with independent refresh cycles
- **Real-time capability**: 30-second refresh cycles for critical data streams

## Recent Updates

- **v35 Step5 Patch**: Updated native SEAM reconciliation to consume Step4 runtime substrate format
- **Root-bucket routing**: Fixed collector output routing to root-level folders (realtime, streams, curated, official)
- **Manifest merging**: Official acquisition now merges multiple manifests instead of stopping at first

## Development

For development guidelines and architecture notes, see `CLAUDE.md`.

## License

[License information to be added]

## Contributing

[Contribution guidelines to be added]
