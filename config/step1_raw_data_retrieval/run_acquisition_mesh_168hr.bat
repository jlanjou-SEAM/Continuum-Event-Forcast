@echo off
title SEAM Weekly 168HR Acquisition Mesh

cd /d "%~dp0"

echo ==========================================
echo   SEAM WEEKLY 168HR ACQUISITION MESH
echo ==========================================
echo.
echo Starting four independent weekly update loops:
echo   realtime 168hr
echo   nonrealtime 168hr
echo   image_stream 168hr
echo   official 168hr
echo.

if not exist logs mkdir logs
echo [%DATE% %TIME%] weekly 168hr acquisition mesh start >> logs\weekly_168hr_tracker.log

set SEAM_RETRIEVAL_MODE=weekly_168hr_update
set SEAM_BACKFILL_HOURS=168

for /f %%i in ('powershell -NoProfile -Command "(Get-Date).ToUniversalTime().AddHours(-168).ToString(\"yyyy-MM-ddTHH:mm:ssZ\")"') do set SEAM_WINDOW_START_UTC=%%i
for /f %%i in ('powershell -NoProfile -Command "(Get-Date).ToUniversalTime().ToString(\"yyyy-MM-ddTHH:mm:ssZ\")"') do set SEAM_WINDOW_END_UTC=%%i

echo Window:
echo   %SEAM_WINDOW_START_UTC%
echo   ->
echo   %SEAM_WINDOW_END_UTC%
echo.

start "realtime acquisition 168hr" cmd /k "cd /d %~dp0 && python realtime_acquisition_168hr.py"
start "nonrealtime acquisition 168hr" cmd /k "cd /d %~dp0 && python nonrealtime_acquisition_168hr.py"
start "image stream acquisition 168hr" cmd /k "cd /d %~dp0 && python image_stream_acquisition_168hr.py"
start "official acquisition 168hr" cmd /k "cd /d %~dp0 && python official_acquisition_168hr.py"

echo Launched all four weekly 168hr acquisition loops.
pause
