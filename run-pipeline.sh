#!/bin/bash
# Run full SEAM pipeline locally: Sample → Consolidate → Manifold

echo "=========================================="
echo "SEAM Full Pipeline - $(date)"
echo "=========================================="

cd "$(dirname "$0")"

echo ""
echo "[1/4] Running STEP 1 - Realtime Acquisition..."
cd config/step1_raw_data_retrieval
python realtime_acquisition.py
cd ../../

echo ""
echo "[2/4] Running STEP 1 - Nonrealtime Acquisition..."
cd config/step1_raw_data_retrieval
python nonrealtime_acquisition.py
cd ../../

echo ""
echo "[3/4] Running STEP 1 - Official Acquisition..."
cd config/step1_raw_data_retrieval
python official_acquisition.py
cd ../../

echo ""
echo "[4/4] Running STEP 1 - Image Streams..."
cd config/step1_raw_data_retrieval
python image_stream_acquisition.py
cd ../../

echo ""
echo "[5/7] Running STEP 2 - Consolidation..."
cd config/step2_continuum_master
python step2_continuum_master.py
cd ../../

echo ""
echo "[6/7] Running STEP 3 - Manifold Generation..."
cd continuum/processes/step3_volcanic_analysis
python step3_volcanic_analysis.py
cd ../../../

echo ""
echo "[7/7] Committing results to GitHub..."
git config user.name "SEAM-Pipeline"
git config user.email "seam@localhost"
git add -f continuum/output/volcanic_manifold_analysis.json
git add -f continuum/outputs/continuum_master.json

if ! git diff --cached --quiet; then
    git commit -m "chore: pipeline run - fresh manifold at $(date -u +%Y-%m-%dT%H:%M:%SZ) [skip ci]"
    git push origin main
    echo ""
    echo "SUCCESS: Manifold updated and pushed to GitHub"
    echo "Dashboard will refresh within 30 seconds"
else
    echo ""
    echo "No changes detected - manifold already current"
fi

echo ""
echo "Pipeline complete: $(date)"
