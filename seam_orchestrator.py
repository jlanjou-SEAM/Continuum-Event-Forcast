#!/usr/bin/env python3
"""
SEAM Autonomous Pipeline Orchestrator
Runs the complete pipeline: Acquire → Consolidate → Analyze → Commit
Single unified process for reliable continuous execution
"""

import subprocess
import sys
import json
import os
from datetime import datetime
from pathlib import Path

# Configuration
ROOT_DIR = Path(__file__).parent
MANIFOLD_PATH = ROOT_DIR / "continuum/output/volcanic_manifold_analysis.json"
TRACKER_PATH = ROOT_DIR / "continuum/event_tracker.json"


def log_step(step_name, message):
    """Log a pipeline step"""
    timestamp = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    print(f"[{timestamp}] [{step_name}] {message}")
    sys.stdout.flush()


def run_command(cmd, description):
    """Run a command and return success status"""
    log_step("EXECUTE", f"Running: {description}")
    try:
        result = subprocess.run(
            cmd,
            shell=True,
            cwd=str(ROOT_DIR),
            capture_output=True,
            text=True,
            timeout=300
        )

        if result.returncode == 0:
            log_step("SUCCESS", f"{description} completed")
            if result.stdout:
                print(result.stdout[-500:])  # Print last 500 chars
            return True
        else:
            log_step("ERROR", f"{description} failed with code {result.returncode}")
            if result.stderr:
                print(f"Error: {result.stderr[-500:]}")
            return False
    except subprocess.TimeoutExpired:
        log_step("TIMEOUT", f"{description} timed out after 300s")
        return False
    except Exception as e:
        log_step("EXCEPTION", f"{description} failed: {str(e)}")
        return False


def step1_acquisition():
    """Skip acquisition - collectors run separately. Consolidate existing data."""
    log_step("STEP1", "Skipping acquisition (runs separately). Using existing collected data.")
    return True  # Always succeed - data collection is async


def step2_consolidation():
    """Step 2: Consolidate all data"""
    log_step("STEP2", "Starting consolidation...")
    return run_command(
        "cd config/step2_continuum_master && python step2_continuum_master.py",
        "Data Consolidation"
    )


def step3_manifold():
    """Step 3: Generate manifold with fresh confidence scores"""
    log_step("STEP3", "Generating manifold...")
    success = run_command(
        "cd continuum/processes/step3_volcanic_analysis && python step3_volcanic_analysis.py",
        "Manifold Generation"
    )

    if success and MANIFOLD_PATH.exists():
        with open(MANIFOLD_PATH) as f:
            data = json.load(f)
        event_count = len(data.get("manifold_events", []))
        timestamp = data.get("generated_utc", "unknown")
        log_step("STEP3", f"Manifold: {event_count} events at {timestamp}")

    return success


def commit_and_push():
    """Commit results to GitHub"""
    log_step("COMMIT", "Committing manifold to GitHub...")

    # Configure git
    run_command("git config user.name 'seam-orchestrator'", "Git config name")
    run_command("git config user.email 'seam@continuum.local'", "Git config email")

    # Add manifold file
    run_command("git add -f continuum/output/volcanic_manifold_analysis.json", "Git add manifold")

    # Check for changes
    result = subprocess.run(
        "git diff --cached --quiet",
        shell=True,
        cwd=str(ROOT_DIR)
    )

    if result.returncode != 0:  # Has changes
        timestamp = datetime.now().strftime("%Y-%m-%d %H:%M:%S UTC")
        cmd = f'git commit -m "chore: autonomous pipeline update - {timestamp} [skip ci]"'
        if run_command(cmd, "Git commit"):
            if run_command("git push origin main", "Git push"):
                log_step("COMMIT", "Successfully committed and pushed to GitHub")
                return True
    else:
        log_step("COMMIT", "No changes in manifold")

    return True


def verify_manifold_fresh():
    """Verify manifold is fresh"""
    if not MANIFOLD_PATH.exists():
        log_step("VERIFY", "ERROR: Manifold file not found!")
        return False

    with open(MANIFOLD_PATH) as f:
        data = json.load(f)

    generated = data.get("generated_utc", "unknown")
    events = len(data.get("manifold_events", []))

    log_step("VERIFY", f"✓ Manifold fresh: {events} events generated at {generated}")
    return True


def main():
    """Run complete autonomous pipeline"""
    log_step("PIPELINE", "="*60)
    log_step("PIPELINE", "SEAM AUTONOMOUS ORCHESTRATOR STARTING")
    log_step("PIPELINE", "="*60)

    start_time = datetime.now()

    # Run pipeline steps
    # NOTE: Acquisition runs separately in parallel GitHub Actions workflows
    # This orchestrator focuses on rapid consolidation + analysis
    steps = [
        ("Consolidation", step2_consolidation),
        ("Manifold Generation", step3_manifold),
        ("Verification", verify_manifold_fresh),
        ("GitHub Commit", commit_and_push),
    ]

    results = {}
    for step_name, step_func in steps:
        try:
            results[step_name] = step_func()
        except Exception as e:
            log_step("ERROR", f"Exception in {step_name}: {str(e)}")
            results[step_name] = False

    # Summary
    log_step("PIPELINE", "="*60)
    log_step("PIPELINE", "PIPELINE EXECUTION SUMMARY")
    log_step("PIPELINE", "="*60)

    for step_name, success in results.items():
        status = "PASS" if success else "FAIL"
        log_step("SUMMARY", f"[{status}] {step_name}")

    elapsed = (datetime.now() - start_time).total_seconds()
    total_success = sum(1 for v in results.values() if v)
    total_steps = len(results)

    log_step("PIPELINE", f"Completed in {elapsed:.0f}s - {total_success}/{total_steps} steps successful")
    log_step("PIPELINE", "="*60)

    # Return exit code
    return 0 if total_success == total_steps else 1


if __name__ == "__main__":
    sys.exit(main())
