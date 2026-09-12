STEP3 SIGNATURE CONFIG FIX v58

CURRENT FAILURE:
KeyError: 'signature'

CAUSE:
step3_volcanic_analysis.py reads:
CFG["signature"]["terms"]

but continuum\config\pipeline_config.json only had Step2 fields.

FIX:
Adds the required Step3 signature block while preserving the corrected Step2 fields.

INSTALL:
Copy:
continuum\config\pipeline_config.json

to:
C:\Continuum Database\continuum\config\pipeline_config.json

REQUIRED BY STEP2:
- intake_sets
- outputs.continuum_master

REQUIRED BY STEP3:
- outputs.volcanic_analysis
- signature.type
- signature.terms
