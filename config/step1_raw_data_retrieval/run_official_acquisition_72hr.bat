@echo off
cd /d "%~dp0"

echo Starting official_acquisition_72hr.py ...

:loop
python official_acquisition_72hr.py

echo.
echo official_acquisition_72hr.py exited unexpectedly. Restarting in 5 seconds...
timeout /t 5 /nobreak >nul
goto loop
