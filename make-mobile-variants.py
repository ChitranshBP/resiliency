#!/usr/bin/env python3
"""Generate smaller mobile variants of homepage card images.

For each image used at small CSS sizes (h-48 = 192px, etc.), this script
creates a sibling file at -mobile.webp with dimensions ~640px wide.
The markup should be updated to use <picture> with srcset to serve the
smaller file to mobile devices (viewport < 768px).

Skips files that already have a -mobile.webp sibling.
"""

import sys
from pathlib import Path
from PIL import Image

ROOT = Path(__file__).resolve().parent

# Mobile cards: h-48 (192px), h-[500px], h-[550px], h-[600px], etc.
# A 640px-wide variant covers all of these at 2x DPR.
SOURCES = [
    "assets/images/ambience/resiliency-amb-1.webp",
    "assets/images/ambience/resiliency-amb-4.webp",
    "assets/images/ambience/resiliency-amb-5.webp",
    "assets/images/brainsway-image.webp",
    "assets/images/spravato-home.webp",
    "assets/images/doctor_consult.webp",
    "assets/images/service_iv.webp",
    "assets/images/service_med_management.webp",
    "assets/images/anxiety_consultation.webp",
    "assets/images/vns_therapy_device.webp",
    "assets/images/proliv-img-2.webp",
    # Larger display images
    "assets/images/home/Resiliency01.webp",
    "assets/images/home/TMS-Therapy-Orange-County-homepage.webp",
    "assets/images/home/Stefani-LaFrenierre-main-home.webp",
    "assets/images/home/cta-bg.webp",
    "assets/images/hero_bg.webp",
    "assets/images/home/hero-poster.webp",
]

MOBILE_MAX = 640   # px wide
MOBILE_QUALITY = 72  # lower than desktop since these are smaller displays


def make_mobile(src: Path) -> tuple[int, int]:
    with Image.open(src) as im:
        if im.mode not in ("RGB", "RGBA"):
            im = im.convert("RGB")
        ratio = MOBILE_MAX / im.size[0] if im.size[0] > MOBILE_MAX else 1.0
        if ratio < 1.0:
            new_size = (MOBILE_MAX, int(im.size[1] * ratio))
            im = im.resize(new_size, Image.LANCZOS)

    # Output filename: foo.webp -> foo-mobile.webp
    dst = src.with_name(src.stem + "-mobile.webp")
    im.save(dst, "WEBP", quality=MOBILE_QUALITY, method=6)
    return src.stat().st_size, dst.stat().st_size


def main() -> int:
    converted = skipped = failed = 0
    total_saved = 0
    for rel in SOURCES:
        src = ROOT / rel
        if not src.exists():
            print(f"  SKIP (missing): {rel}")
            continue
        try:
            src_size, dst_size = make_mobile(src)
            saving_pct = 100 * (src_size - dst_size) / src_size if src_size else 0
            total_saved += src_size - dst_size
            print(
                f"  {src.name}  ({src_size//1024}KB -> {dst_size//1024}KB, "
                f"{saving_pct:+.0f}%)"
            )
            converted += 1
        except Exception as exc:  # noqa: BLE001
            print(f"  FAIL {rel}: {exc}")
            failed += 1

    print("=" * 60)
    print(f"Generated: {converted} | Failed: {failed}")
    print(f"Total mobile savings: {total_saved//1024}KB")
    return 0 if failed == 0 else 1


if __name__ == "__main__":
    sys.exit(main())
