@echo off
REM 72-hour historical retrieval sibling for run_all_collectors.bat
REM Keeps existing architecture intact and only widens acquisition window.

set SEAM_RETRIEVAL_MODE=live_plus_72h
set SEAM_BACKFILL_HOURS=72
set SEAM_72H_SOURCE_CLASS=generic

echo [72hr] Running run_all_collectors.bat with SEAM_BACKFILL_HOURS=72
call "%~dp0run_all_collectors.bat"
