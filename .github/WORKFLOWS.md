# GitHub Actions Workflows - Continuum Database

This document describes all automated workflows that run the Continuum Database acquisition and processing pipeline on GitHub Actions.

## Overview

The Continuum Database is fully automated to run on GitHub. All data collection, processing, and state management happens in the cloud via GitHub Actions, with results committed back to the repository.

## Workflow Schedule

### Live Acquisition Workflows (Continuous)

| Workflow | Schedule | Bucket | Purpose |
|----------|----------|--------|---------|
| `acquisition-realtime.yml` | Every 1 min | realtime | Live earthquake, RF, aviation data (30s target) |
| `acquisition-nonrealtime.yml` | Every 5 min | nonrealtime | Weather, space weather, grid monitoring |
| `acquisition-official.yml` | Every 1 min | official | Emergency alerts, NOAA, volcano data (30s target) |
| `acquisition-image-stream.yml` | Every 1 min | streams | Astronomical, weather imagery, radio feeds |

**Note:** GitHub Actions minimum schedule is 1 minute. Real 30-second cycles would require a self-hosted runner or external trigger.

### Batch Window Workflows (Periodic)

| Workflow | Schedule | Window | Purpose |
|----------|----------|--------|---------|
| `batch-acquisition-72hr.yml` | Every 6 hours | 72 hours | Full 3-day rolling analysis window |
| `batch-acquisition-168hr.yml` | Every Sunday 00:00 UTC | 7 days (168 hours) | Full week analysis and archival |

### Processing Pipeline Workflows

| Workflow | Schedule | Stage | Purpose |
|----------|----------|-------|---------|
| `pipeline-step5-reconciliation.yml` | Daily 02:00 UTC | Step 5 | Native SEAM reconciliation & manifold emergence |
| `full-pipeline-orchestration.yml` | Weekly Sunday 04:00 UTC | Steps 1-5 | Complete end-to-end pipeline run |

## Workflow Details

### Real-time Acquisition (`acquisition-*.yml`)

These workflows run frequently to capture live data streams:

```yaml
Trigger:    Cron schedule (every 1 minute minimum)
Timeout:    5-10 minutes per run
Python:     3.12
Output:     Commits to repository on data changes
```

**Environment Variables Set:**
- `SEAM_COLLECTOR_TIMEOUT_SECONDS`: Per-collector timeout
- `SEAM_RETRIEVAL_MODE`: "live" for realtime
- `SEAM_OUTPUT_ROOT`: Repository root

**Failure Handling:**
- `[skip ci]` tag prevents recursive workflow triggers
- If commit fails, error is logged but workflow continues
- Next scheduled run will retry with latest state

### Batch Acquisition (`batch-acquisition-*.yml`)

These run comprehensive multi-window acquisitions:

```yaml
72hr Batch:
  Trigger:    Every 6 hours
  Duration:   ~30 minutes
  Output:     realtime/, nonrealtime/, official/, streams/

168hr Batch:
  Trigger:    Weekly (Sunday 00:00 UTC)
  Duration:   ~60 minutes
  Output:     Full 7-day historical window + rolling updates
```

**Environment Variables:**
- `SEAM_BACKFILL_HOURS`: 72 or 168
- `SEAM_WINDOW_START_UTC` / `SEAM_WINDOW_END_UTC`: Time boundaries

### Step 5 Reconciliation (`pipeline-step5-reconciliation.yml`)

Runs the native SEAM reconciliation on collected data:

```yaml
Schedule:   Daily 02:00 UTC (after morning batch completions)
Process:    step5_native_reconciliation.py
Input:      Aggregated data from all sources
Output:     Curated datasets, manifold emergence analysis
```

### Full Pipeline (`full-pipeline-orchestration.yml`)

Complete orchestrated run of all steps:

```yaml
Schedule:   Weekly Sunday 04:00 UTC
Duration:   ~2-3 hours
Sequence:   
  1. Realtime 72hr/168hr
  2. Nonrealtime 72hr/168hr
  3. Official 72hr/168hr
  4. Image streams 72hr/168hr
  5. Step5 reconciliation
Output:     Complete state snapshot + validation report
```

## Data Flow

```
GitHub Actions Runner
  ↓
[Fetch repo] → [Run collectors] → [Generate outputs]
  ↓
realtime/ → JSON data
streams/  → JSON data
curated/  → Processed datasets
official/ → Alerts & advisories
state/    → SHA256 checksums
  ↓
[Git commit] → [Push to repository]
  ↓
Repository updated with latest data
```

## Triggering Workflows Manually

All workflows support manual triggers via `workflow_dispatch`:

```bash
# Via GitHub CLI
gh workflow run acquisition-realtime.yml
gh workflow run full-pipeline-orchestration.yml

# Or via GitHub Web UI
# Settings > Actions > Select workflow > Run workflow
```

## Monitoring & Debugging

### View Workflow Runs

1. Go to repository **Actions** tab
2. Click workflow name
3. View run history and logs

### Check Latest Commits

```bash
git log --oneline --all | head -20
```

Look for `[skip ci]` tagged commits from `github-actions[bot]`.

### Verify Data Updates

```bash
# Check latest realtime data
git log --follow --oneline -- realtime/ | head -10

# View state checksums
git log --follow --oneline -- state/ | head -10
```

### Troubleshoot Failed Runs

1. Open failed run in Actions tab
2. Expand failed step
3. Check logs for:
   - Network errors (API timeouts, connection refused)
   - Authentication issues
   - Missing dependencies
   - Collector-specific errors

## Workflow Customization

### Change Schedules

Edit the `schedule:` section in any `.yml` file:

```yaml
on:
  schedule:
    - cron: '0 */4 * * *'  # Every 4 hours instead
```

[Cron syntax reference](https://crontab.guru/)

### Adjust Timeouts

In each workflow, modify:

```yaml
timeout-minutes: 30  # Change this value
```

### Add Additional Dependencies

In the `Install dependencies` step:

```yaml
- name: Install dependencies
  run: |
    pip install requests beautifulsoup4 feedparser urllib3 NEW_PACKAGE
```

### Disable Workflows

In `.github/workflows/filename.yml`, comment out the `on:` trigger:

```yaml
# on:
#   schedule:
#     - cron: '*/1 * * * *'
```

Or use GitHub Web UI: Settings > Actions > Disable workflow

## Costs & Limits

### GitHub Actions Free Tier

- **2,000 minutes/month** of workflow runtime
- Realtime workflows (4 × every minute) = ~5,760 min/month → **Exceeds free tier**
- Consider upgrading to paid plan or reducing frequency

### Recommendation

For continuous operation with 30-second cycles, consider:

1. **Self-hosted runner** on dedicated hardware
2. **Reduce workflow frequency** to every 5 minutes
3. **GitHub Actions paid minutes** for heavy usage
4. **External scheduler** (cron server) triggering via `workflow_dispatch`

## Troubleshooting

### Workflows not triggering on schedule

- Check repository is public or Actions enabled for private repo
- Verify cron syntax at [crontab.guru](https://crontab.guru)
- Workflows disabled by default if not committed to main branch

### Commit push fails

- Repository may need write permissions for actions
- Check: Settings > Actions > General > Workflow permissions
- Set to "Read and write permissions"

### Data not appearing in outputs

- Check runner environment has internet access
- Verify API endpoints are accessible (not geo-blocked)
- Review collector logs in Actions output
- Check for rate limiting from data sources

### Conflicting commits

- Multiple workflows may commit simultaneously
- GitHub will queue/retry automatically
- Occasionally may need manual merge if conflicts occur

## Best Practices

1. **Use `[skip ci]` tags** on data commits to prevent recursive triggers
2. **Set reasonable timeouts** based on typical run duration
3. **Monitor storage usage** - each commit keeps full history
4. **Archive old data** periodically to prevent unbounded growth
5. **Test workflows** in a separate branch before enabling on main
6. **Review logs regularly** for errors or performance issues

## Future Enhancements

- [ ] Parallel execution of independent acquisition workflows
- [ ] Conditional steps based on source availability
- [ ] Slack notifications on acquisition failures
- [ ] Automated data compression and archival
- [ ] Performance metrics collection
- [ ] Health check dashboard
