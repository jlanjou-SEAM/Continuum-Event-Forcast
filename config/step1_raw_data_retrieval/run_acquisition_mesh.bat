@echo off
title Acquisition Mesh Launcher

cd /d %~dp0

echo ==========================================
echo        ACQUISITION MESH LAUNCHER
echo ==========================================
echo.
echo Starting three independent acquisition loops:
echo   realtime
echo   nonrealtime
echo   image_stream
echo.
echo Close the opened windows to stop collection.
echo.

start "realtime acquisition" cmd /k python realtime_acquisition.py
start "nonrealtime acquisition" cmd /k python nonrealtime_acquisition.py
start "image stream acquisition" cmd /k python image_stream_acquisition.py

echo Launched:
echo   realtime acquisition
echo   nonrealtime acquisition
echo   image stream acquisition
echo.
pause
