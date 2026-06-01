#!/usr/bin/env python3
"""Convert homepage PNGs to WebP (lossless for sharp edges, quality 85)."""
import os
import sys
from pathlib import Path
from PIL import Image

ROOT = Path(__file__).resolve().parent
QUALITY = 85

# PNGs used on the homepage (index.php)
TARGETS = [
    "assets/images/hero_bg.png",
    "assets/images/doctor_consult.png",
    "assets/images/anxiety_consultation.png",
    "assets/images/service_med_management.png",
    "assets/images/service_iv.png",
    "assets/images/service_supplement.jpg",  # leftover from earlier JPG conversion
    "assets/images/dr-l-tms-session.png",
    "assets/images/substance_abuse_understanding.png",
    "assets/images/Proliv™Rx-IMG-FINAL.png",
    "assets/images/supplement-banner.png",
    "assets/images/spravato-banner.png",
]

def main() -> int:
    converted = skipped = failed = 0
    for rel in TARGETS:
        src = ROOT / rel
        if not src.exists():
            print(f"  SKIP (not found): {rel}")
            skipped += 1
            continue
        dst = src.with_suffix(".webp")
        try:
            with Image.open(src) as im:
                if im.mode not in ("RGB", "RGBA"):
                    im = im.convert("RGB")
                im.save(dst, "WEBP", quality=QUALITY, method=6)
            src_size = src.stat().st_size
            dst_size = dst.stat().st_size
            savings = 100 * (1 - dst_size / src_size)
            print(f"  {rel}: {src_size//1024}KB -> {dst_size//1024}KB ({savings:.0f}% smaller)")
            converted += 1
        except Exception as exc:  # noqa: BLE001
            print(f"  FAIL {rel}: {exc}")
            failed += 1

    print("=" * 50)
    print(f"Converted: {converted} | Skipped: {skipped} | Failed: {failed}")
    return 0 if failed == 0 else 1

if __name__ == "__main__":
    sys.exit(main())
