Continuum root-bucket runtime fix.

Install paths:
- Copy config/step1_raw_data_retrieval/* over C:\Continuum Database\config\step1_raw_data_retrieval\
- Copy collectors/collector_utils.py and collectors/collector_utils_72hr.py over C:\Continuum Database\collectors\

Fixes included:
- Restores full run_collector API in collector_utils.py and collector_utils_72hr.py.
- Routes collector output to root-level folders: realtime, streams, curated, official.
- Removes raw/* as the acquisition output root.
- Keeps 4-bucket scheduler model: realtime=30s, streams=60s, curated=300s, official=30s.
- Keeps 72hr and 168hr variants using _72hr collectors with window env vars.
- Keeps full collector_sources.json with 118 entries.
