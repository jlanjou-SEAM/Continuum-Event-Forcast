#!/bin/bash
# Minimal build script for C runner
set -e

echo "Building multi_cycle_runner..."
gcc -O3 -pthread -o multi_cycle_runner multi_cycle_runner.c -lcurl

if [ -f multi_cycle_runner ]; then
    echo "✓ Build successful"
    ls -lh multi_cycle_runner
else
    echo "✗ Build failed"
    exit 1
fi
