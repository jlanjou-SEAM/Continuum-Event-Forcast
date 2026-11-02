# Live pipeline

`full-pipeline-realtime.yml` is the single scheduled path from collection to the
published dashboard:

1. Run each acquisition class once, in parallel.
2. Consolidate the newly collected files into valid JSON.
3. Generate the manifold and rolling event tracker.
4. Build `public/data/live.json` as the stable browser contract.
5. Validate the feed and deploy the page plus snapshot to GitHub Pages.

The workflow runs every five minutes (the shortest supported GitHub Actions
schedule) and can also be started with **Run workflow**. Concurrency is limited
to one pipeline run so slow collector cycles cannot race one another.

## One-time repository setting

In **Settings > Pages > Build and deployment**, select **GitHub Actions** as the
source. Then run **Live SEAM Pipeline and Site** once. No data API key is
required by the dashboard; it reads the same-origin published snapshot and
uses the raw repository files only as a compatibility fallback.

The older per-stage workflows remain available for manual diagnostics, but
their overlapping minute schedules are disabled.

## Local verification

Set `SEAM_ROOT` to the repository root, then run:

```bash
python config/step2_continuum_master/step2_continuum_master.py
python continuum/processes/step3_volcanic_analysis/step3_volcanic_analysis.py
python scripts/build_live_feed.py
python -m http.server 8000
```

Open `http://localhost:8000/`. The dashboard polls the generated snapshot once
per minute while collection and analysis refresh independently.
