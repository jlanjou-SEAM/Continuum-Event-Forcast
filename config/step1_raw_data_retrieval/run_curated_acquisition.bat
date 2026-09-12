@echo off
cd /d "%~dp0"

:loop
python curated_acquisition.py

echo restarting in 5 seconds...
timeout /t 5 /nobreak >nul
goto loop
