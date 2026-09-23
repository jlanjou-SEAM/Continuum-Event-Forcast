# Run full SEAM pipeline: Sample → Consolidate → Manifold

Write-Host "==========================================" -ForegroundColor Green
Write-Host "SEAM Full Pipeline - $(Get-Date)" -ForegroundColor Green
Write-Host "==========================================" -ForegroundColor Green

Push-Location $PSScriptRoot

Write-Host ""
Write-Host "[STEP 1] Realtime Acquisition..." -ForegroundColor Cyan
Push-Location config/step1_raw_data_retrieval
python realtime_acquisition.py
Pop-Location

Write-Host ""
Write-Host "[STEP 2] Nonrealtime Acquisition..." -ForegroundColor Cyan
Push-Location config/step1_raw_data_retrieval
python nonrealtime_acquisition.py
Pop-Location

Write-Host ""
Write-Host "[STEP 3] Official Acquisition..." -ForegroundColor Cyan
Push-Location config/step1_raw_data_retrieval
python official_acquisition.py
Pop-Location

Write-Host ""
Write-Host "[STEP 4] Image Streams..." -ForegroundColor Cyan
Push-Location config/step1_raw_data_retrieval
python image_stream_acquisition.py
Pop-Location

Write-Host ""
Write-Host "[STEP 5] Consolidation..." -ForegroundColor Cyan
Push-Location config/step2_continuum_master
python step2_continuum_master.py
Pop-Location

Write-Host ""
Write-Host "[STEP 6] Manifold Generation..." -ForegroundColor Cyan
Push-Location continuum/processes/step3_volcanic_analysis
python step3_volcanic_analysis.py
Pop-Location

Write-Host ""
Write-Host "[STEP 7] Committing to GitHub..." -ForegroundColor Cyan
git config user.name "SEAM-Pipeline"
git config user.email "seam@localhost"

git add -f continuum/output/volcanic_manifold_analysis.json
git add -f continuum/outputs/continuum_master.json

$timestamp = Get-Date -Format "yyyy-MM-ddTHH:mm:ssZ"
if (!(git diff --cached --quiet)) {
    git commit -m "chore: pipeline run - fresh manifold at $timestamp [skip ci]"
    git push origin main
    Write-Host ""
    Write-Host "SUCCESS: Manifold updated and pushed!" -ForegroundColor Green
    Write-Host "Dashboard refreshes in 30 seconds" -ForegroundColor Yellow
} else {
    Write-Host ""
    Write-Host "No changes detected" -ForegroundColor Yellow
}

Write-Host ""
Write-Host "Complete: $(Get-Date)" -ForegroundColor Green

Pop-Location
