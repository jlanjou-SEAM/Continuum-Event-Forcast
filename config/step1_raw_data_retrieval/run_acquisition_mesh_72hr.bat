@echo off
setlocal EnableExtensions EnableDelayedExpansion
title Acquisition Mesh 72HR Backfill - Location Tolerant

REM ==========================================================
REM SEAM 72HR ACQUISITION MESH LAUNCHER
REM Location-tolerant version.
REM
REM This launcher does NOT require a single fixed directory.
REM It searches from its own directory, then parent directories,
REM then common project locations, for the acquisition scripts.
REM ==========================================================

set SEAM_RETRIEVAL_MODE=live_plus_72h
set SEAM_BACKFILL_HOURS=72
set SEAM_72H_SOURCE_CLASS=generic

for /f %%i in ('powershell -NoProfile -Command "(Get-Date).ToUniversalTime().AddHours(-72).ToString(\"yyyy-MM-ddTHH:mm:ssZ\")"') do set SEAM_WINDOW_START_UTC=%%i
for /f %%i in ('powershell -NoProfile -Command "(Get-Date).ToUniversalTime().ToString(\"yyyy-MM-ddTHH:mm:ssZ\")"') do set SEAM_WINDOW_END_UTC=%%i

echo ==========================================
echo   ACQUISITION MESH - 72HR BACKFILL MODE
echo ==========================================
echo.
echo Launcher path:
echo   %~dp0
echo.
echo Window:
echo   %SEAM_WINDOW_START_UTC% to %SEAM_WINDOW_END_UTC%
echo.

set LAUNCHER_DIR=%~dp0
set SEARCH_ROOT=%LAUNCHER_DIR%

REM Climb up to locate likely project root.
for %%A in ("%LAUNCHER_DIR%." "%LAUNCHER_DIR%.." "%LAUNCHER_DIR%..\.." "%LAUNCHER_DIR%..\..\.." "%LAUNCHER_DIR%..\..\..\..") do (
    if exist "%%~fA\collectors" set SEARCH_ROOT=%%~fA
    if exist "%%~fA\config" set SEARCH_ROOT=%%~fA
    if exist "%%~fA\processes" set SEARCH_ROOT=%%~fA
)

echo Search root:
echo   %SEARCH_ROOT%
echo.

set REALTIME=
set NONREALTIME=
set IMAGESTREAM=

REM Direct same-folder check.
if exist "%LAUNCHER_DIR%realtime_acquisition.py" set REALTIME=%LAUNCHER_DIR%realtime_acquisition.py
if exist "%LAUNCHER_DIR%nonrealtime_acquisition.py" set NONREALTIME=%LAUNCHER_DIR%nonrealtime_acquisition.py
if exist "%LAUNCHER_DIR%image_stream_acquisition.py" set IMAGESTREAM=%LAUNCHER_DIR%image_stream_acquisition.py

REM Recursive project search.
if not defined REALTIME (
  for /f "delims=" %%F in ('dir /s /b "%SEARCH_ROOT%\realtime_acquisition.py" 2^>nul') do (
    if not defined REALTIME set REALTIME=%%F
  )
)

if not defined NONREALTIME (
  for /f "delims=" %%F in ('dir /s /b "%SEARCH_ROOT%\nonrealtime_acquisition.py" 2^>nul') do (
    if not defined NONREALTIME set NONREALTIME=%%F
  )
)

if not defined IMAGESTREAM (
  for /f "delims=" %%F in ('dir /s /b "%SEARCH_ROOT%\image_stream_acquisition.py" 2^>nul') do (
    if not defined IMAGESTREAM set IMAGESTREAM=%%F
  )
)

echo Located scripts:
echo   realtime:     %REALTIME%
echo   nonrealtime:  %NONREALTIME%
echo   image stream: %IMAGESTREAM%
echo.

if not defined REALTIME (
  echo ERROR: realtime_acquisition.py not found.
  echo The launcher searched from:
  echo   %SEARCH_ROOT%
  pause
  exit /b 1
)

if not defined NONREALTIME (
  echo ERROR: nonrealtime_acquisition.py not found.
  echo The launcher searched from:
  echo   %SEARCH_ROOT%
  pause
  exit /b 1
)

if not defined IMAGESTREAM (
  echo ERROR: image_stream_acquisition.py not found.
  echo The launcher searched from:
  echo   %SEARCH_ROOT%
  pause
  exit /b 1
)

echo Starting 72hr acquisition mesh...
echo.

for %%F in ("%REALTIME%") do start "realtime acquisition 72hr" cmd /k "cd /d %%~dpF && python %%~nxF"
for %%F in ("%NONREALTIME%") do start "nonrealtime acquisition 72hr" cmd /k "cd /d %%~dpF && python %%~nxF"
for %%F in ("%IMAGESTREAM%") do start "image stream acquisition 72hr" cmd /k "cd /d %%~dpF && python %%~nxF"

echo.
echo Launched all located acquisition routines in 72hr mode.
echo Close the opened windows to stop collection.
echo.
pause
endlocal
