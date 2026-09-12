@echo off
REM 72-hour historical retrieval sibling for SEAM_Continuum_Runtime.bat
REM Keeps existing architecture intact and only widens acquisition window.

set SEAM_RETRIEVAL_MODE=live_plus_72h
set SEAM_BACKFILL_HOURS=72
set SEAM_72H_SOURCE_CLASS=generic

echo [72hr] Running SEAM_Continuum_Runtime.bat with SEAM_BACKFILL_HOURS=72
call "%~dp0SEAM_Continuum_Runtime.bat"
