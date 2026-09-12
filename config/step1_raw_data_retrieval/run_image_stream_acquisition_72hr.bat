@echo off
cd /d "%~dp0"

echo Starting image_stream_acquisition_72hr.py ...

:loop
python image_stream_acquisition_72hr.py

echo.
echo image_stream_acquisition_72hr.py exited unexpectedly. Restarting in 5 seconds...
timeout /t 5 /nobreak >nul
goto loop
