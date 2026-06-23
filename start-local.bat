@echo off
REM Starts the local dev server the same way production serves the app
REM (document root = project root), so /public/... asset URLs resolve and
REM images/css/js load correctly. Open http://127.0.0.1:8000 afterwards.

cd /d "%~dp0"
echo Starting Medical Appraisals locally at http://127.0.0.1:8000
echo Press Ctrl+C to stop.
"C:\xampp\php\php.exe" -S 127.0.0.1:8000 -t . local-server.php
