@echo off
cd /d "%~dp0"

echo Starting nonrealtime_acquisition_72hr.py ...

:loop
python nonrealtime_acquisition_72hr.py

echo.
echo nonrealtime_acquisition_72hr.py exited unexpectedly. Restarting in 5 seconds...
timeout /t 5 /nobreak >nul
goto loop
