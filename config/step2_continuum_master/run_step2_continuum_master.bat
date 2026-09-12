@echo off
cd /d "%~dp0"

:loop

python step2_continuum_master.py

echo.
echo [step2] sleep 30s
timeout /t 30 /nobreak >nul

goto loop
