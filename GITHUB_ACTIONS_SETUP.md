# GitHub Actions Setup Guide

This document explains how to enable and configure the automated Continuum Database pipeline on GitHub Actions.

## Quick Start

### 1. Verify Repository Settings

Go to your GitHub repository:
- **Settings** → **Actions** → **General**
- Under "Actions permissions": Select **Allow all actions and reusable workflows**
- Under "Workflow permissions": Select **Read and write permissions**
- Check **Allow GitHub Actions to create and approve pull requests**

### 2. Enable Workflows

Workflows are automatically discovered and enabled. To manually enable:

1. Go to **Actions** tab in your repository
2. You should see workflows:
   - Realtime Acquisition (30s cycle)
   - Nonrealtime Acquisition (5min cycle)
   - Official Acquisition (30s cycle)
   - Image Stream Acquisition (60s cycle)
   - Batch Acquisition 72hr Window (6h cycle)
   - Batch Acquisition 168hr Window (weekly)
   - Pipeline Step5 - Native Reconciliation (daily)
   - Full Pipeline Orchestration (weekly)

3. Each workflow shows "This workflow has a schedule"

### 3. Trigger First Run

To start the system:

```bash
# Via GitHub CLI (must be authenticated)
gh workflow run full-pipeline-orchestration.yml

# Or manually via GitHub web UI:
# Actions → Select workflow → "Run workflow" button
```

### 4. Monitor Initial Execution

1. Go to **Actions** tab
2. Click **Full Pipeline Orchestration**
3. Watch the execution progress
4. Check logs for any errors
5. After completion, verify data commits in repository

## Architecture Overview

```
┌─────────────────────────────────────────────────────────┐
│                 GitHub Actions Runners                   │
└─────────────────────────────────────────────────────────┘
         ↓                    ↓                    ↓
    ┌─────────┐          ┌─────────┐          ┌─────────┐
    │Realtime │          │Non-Real-│          │Official │
    │Acq 1min │          │ time 5min│          │Acq 1min │
    └─────────┘          └─────────┘          └─────────┘
         ↓                    ↓                    ↓
    [git commit] ←────────────────────────── [git push]
         ↓
    Repository Data:
    ├── realtime/
    ├── nonrealtime/
    ├── official/
    ├── streams/
    ├── curated/
    └── state/
```

## Workflow Execution Timeline

### Daily Pattern (UTC)

```
00:00 - Batch 168hr acquisition (Sunday only)
00:10 - Batch 72hr acquisition (every 6h)
02:00 - Step5 reconciliation (daily)
04:00 - Full pipeline run (Sunday only)

Every 1 minute:
  - Realtime acquisition
  - Official acquisition
  - Image stream acquisition

Every 5 minutes:
  - Nonrealtime acquisition
```

### Example: 24-Hour Cycle (Monday)

```
00:10 - Batch 72hr (realtime + nonrealtime + official + images)
00:25 - Commits pushed
02:00 - Step5 reconciliation runs
02:15 - Manifold emergence analysis complete
06:10 - Next batch 72hr cycle
12:10 - Next batch 72hr cycle
18:10 - Next batch 72hr cycle

Throughout the day:
  - Every 1 min: realtime + official checks
  - Every 5 min: nonrealtime checks
  - Every 1 min: image streams update
```

## Understanding Workflow Output

### Successful Run Output

```
✅ Run realtime acquisition
   → realtime/ updated with 22 sources
   → state/ updated with checksums
   → 50 KB committed

✅ Run nonrealtime acquisition  
   → nonrealtime/ updated with 69 sources
   → curated/ updated with processed data
   → 300 KB committed

✅ Run official acquisition
   → official/ updated with 6 alert feeds
   → 25 KB committed

✅ Step5 native reconciliation
   → manifold_emergence analysis complete
   → recursive substrate preserved
   → state snapshot committed
```

### Common Issues & Fixes

#### Issue: "No changes to commit"
- **Cause**: All data sources returned empty or identical results
- **Expected**: Happens during quiet periods, not an error
- **Fix**: None needed, next cycle will try again

#### Issue: "Network timeout on source X"
- **Cause**: API endpoint unreachable or very slow
- **Expected**: Temporary; usually resolves in next cycle
- **Fix**: Check if source API is down; may auto-recover

#### Issue: Workflow fails with "permission denied"
- **Cause**: GitHub Actions lacks write permissions
- **Fix**: 
  1. Go to **Settings** → **Actions** → **General**
  2. Set "Workflow permissions" to **Read and write permissions**
  3. Re-run workflow

#### Issue: Commits conflict/blocked
- **Cause**: Multiple workflows trying to push simultaneously
- **Expected**: Git handles this automatically
- **Fix**: GitHub queues conflicting pushes; wait for retry

## Customizing Schedules

### Change Acquisition Frequency

Edit `.github/workflows/acquisition-realtime.yml`:

```yaml
on:
  schedule:
    - cron: '*/2 * * * *'  # Change from */1 to */2 (every 2 minutes)
```

[Cron syntax helper](https://crontab.guru/)

### Disable a Workflow

Method 1: Via GitHub web UI
- Go to **Actions** → Select workflow → **...** → **Disable workflow**

Method 2: Via Git
```yaml
# In .github/workflows/filename.yml
on:
  schedule:
    - cron: '0 0 0 0 0'  # Effectively never (invalid date)
  # Or comment out:
  # - cron: '*/1 * * * *'
```

### Add Afternoon Batch Run

In `.github/workflows/batch-acquisition-72hr.yml`:

```yaml
on:
  schedule:
    - cron: '0 */6 * * *'  # Every 6 hours (current)
    - cron: '30 14 * * *'   # Add: 2:30 PM UTC daily
```

## Cost Implications

### GitHub Actions Free Tier
- **2,000 minutes/month** (30 hours)
- Current schedule estimate:
  - Realtime: 1 × 1 min × 1,440 = 1,440 min/month
  - Official: 1 × 1 min × 1,440 = 1,440 min/month
  - Nonrealtime: 5 × 288 = 1,440 min/month
  - Image streams: 1 × 1 min × 1,440 = 1,440 min/month
  - **Total: ~5,760 minutes/month → EXCEEDS FREE TIER**

### Cost Management Options

1. **Reduce frequency** (recommended for free tier):
   - Realtime: every 5 min instead of 1 min
   - Nonrealtime: every 15 min instead of 5 min
   - Save: ~4,000 min/month → fits in free tier

2. **Upgrade to paid**:
   - Pro: $4/month → 50,000 minutes
   - Team: $21/month → unlimited minutes

3. **Self-hosted runner**:
   - Run on your own hardware
   - GitHub Actions is free
   - Only pay for power/hosting

### Adjusted Schedule for Free Tier

Edit workflows to use 5-minute minimums:

```yaml
# acquisition-realtime.yml
schedule:
  - cron: '*/5 * * * *'  # Every 5 min (saves 1,100 min/month)

# acquisition-official.yml  
schedule:
  - cron: '*/5 * * * *'  # Every 5 min (saves 1,100 min/month)
```

## Monitoring & Alerts

### GitHub Notifications

Workflows can post to Slack via third-party actions:

```yaml
- name: Notify Slack on failure
  if: failure()
  uses: slackapi/slack-github-action@v1
  with:
    webhook-url: ${{ secrets.SLACK_WEBHOOK }}
    payload: |
      {
        "text": "Continuum acquisition failed!"
      }
```

To set up:
1. Create Slack incoming webhook
2. Go to repo **Settings** → **Secrets** → **New repository secret**
3. Name: `SLACK_WEBHOOK`, Value: your webhook URL
4. Add action to workflow

### Email Notifications (Built-in)

GitHub sends email when:
- Workflow fails
- You subscribe to notifications
- Configure in **Settings** → **Notifications**

### Manual Status Check

```bash
# View recent workflow runs
gh run list --repo jlanjou-SEAM/SEAM-Core

# View specific workflow status
gh run list --workflow=batch-acquisition-72hr.yml

# View logs from last run
gh run view --log
```

## Deployment Checklist

- [ ] Fork/clone repository to your GitHub account
- [ ] Verify branch is `main`
- [ ] Go to **Settings** → **Actions** → **General**
- [ ] Set "Workflow permissions" to **Read and write**
- [ ] Go to **Actions** tab and verify workflows are listed
- [ ] Run `full-pipeline-orchestration.yml` manually
- [ ] Monitor execution (should complete in ~30 min)
- [ ] Verify data commits appear in repository
- [ ] Check **realtime/**, **nonrealtime/**, **official/**, **curated/** for data
- [ ] Review **state/** for updated checksums

## Next Steps

1. **Review data flow**: Check `.github/WORKFLOWS.md` for detailed schedule
2. **Optimize costs**: Adjust schedules for your free tier budget
3. **Set up monitoring**: Add Slack integration for alerts
4. **Configure retention**: Archive old data to prevent unbounded growth
5. **Test locally**: Run scripts manually to verify collectors work before relying on Actions

## Support & Debugging

### View workflow logs

1. Go to **Actions** tab
2. Click workflow name
3. Click a run
4. Expand any step to see full output
5. Search for "Error:" or "Exception:" messages

### Common collector issues

- **HTTP 403 Forbidden**: API key missing or invalid
- **Connection timeout**: Network issue or API down
- **JSON parsing error**: API response format changed
- **Out of memory**: Collector processing too much data

Check individual collector Python files in `collectors/` for:
- Required environment variables
- API endpoints and auth
- Expected response formats

### Get help

- Check `.github/WORKFLOWS.md` troubleshooting section
- Review workflow logs in GitHub Actions UI
- Examine Python collector scripts for specific issues
- Test collectors locally before deploying to Actions

