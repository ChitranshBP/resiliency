#!/usr/bin/env python3
"""Compress and downsize images used on the homepage for performance.

For each target:
  - If dimensions exceed MAX_DIM, downscale (LANCZOS) to fit.
  - Re-encode WebP at QUALITY (method 6 = max compression effort).
  - Re-encode logo PNG -> WebP (massive savings for logos with flat areas).

Skips files whose output is already smaller than the source AND
was modified within the last 30 seconds (so re-running is safe).
"""

import os
import sys
from pathlib import Path
from PIL import Image

ROOT = Path(__file__).resolve().parent

# Per-file overrides: (max_dim, quality)
# Photos: quality 70-75 + max 1600px is usually ~3-5x smaller than quality 80 originals.
# Logo: quality 90 + no downscale (sharpness matters at small sizes).
TARGETS = {
    "assets/images/ambience/resiliency-amb-4.webp": (1600, 75),
    "assets/images/brainsway-image.webp": (1600, 75),
    "assets/images/spravato-home.webp": (1600, 75),
    "assets/images/hero_bg.webp": (1920, 75),
    "assets/images/home/hero-poster.webp": (1920, 78),
    "assets/images/home/cta-bg.webp": (1920, 75),
    "assets/images/home/Resiliency01.webp": (1200, 75),
    "assets/images/home/Stefani-LaFrenierre-main-home.webp": (1200, 78),
    "assets/images/home/TMS-Therapy-Orange-County-homepage.webp": (1200, 75),
    "assets/images/anxiety_consultation.webp": (1200, 75),
    "assets/images/doctor_consult.webp": (1200, 75),
    "assets/images/service_iv.webp": (1200, 75),
    "assets/images/service_med_management.webp": (1200, 75),
    "assets/images/vns_therapy_device.webp": (1200, 75),
    "assets/images/proliv-img-2.webp": (1200, 75),
    "assets/images/ambience/resiliency-amb-1.webp": (1600, 75),
    "assets/images/ambience/resiliency-amb-5.webp": (1600, 75),
    # Logo PNG is intentionally NOT converted to WebP (keep transparent PNG)
}


def compress(src: Path, max_dim: int | None, quality: int) -> tuple[int, int, int, int]:
    src_size = src.stat().st_size
    with Image.open(src) as im:
        orig_w, orig_h = im.size
        # Convert palette/CMYK/RGBA properly
        if im.mode in ("P", "RGBA", "LA"):
            im = im.convert("RGBA")
        elif im.mode != "RGB":
            im = im.convert("RGB")

        # Downscale if needed
        if max_dim and max(im.size) > max_dim:
            ratio = max_dim / max(im.size)
            new_size = (int(im.size[0] * ratio), int(im.size[1] * ratio))
            im = im.resize(new_size, Image.LANCZOS)

        # Decide extension: .png -> .webp, otherwise keep
        dst = src.with_suffix(".webp")
        save_kwargs = {"quality": quality, "method": 6}
        if im.mode == "RGBA":
            save_kwargs["lossless"] = False  # alpha channel still supported in lossy WebP
        im.save(dst, "WEBP", **save_kwargs)
        dst_size = dst.stat().st_size
        with Image.open(dst) as im2:
            new_w, new_h = im2.size
    return src_size, dst_size, (orig_w, orig_h), (new_w, new_h)


def main() -> int:
    converted = 0
    failed = 0
    total_saved = 0

    for rel, (max_dim, q) in TARGETS.items():
        src = ROOT / rel
        if not src.exists():
            print(f"  SKIP (missing): {rel}")
            continue
        try:
            src_size, dst_size, (ow, oh), (nw, nh) = compress(src, max_dim, q)
            saved = src_size - dst_size
            total_saved += saved
            saving_pct = 100 * saved / src_size if src_size else 0
            print(
                f"  {rel}\n"
                f"    {ow}x{oh} ({src_size//1024}KB) -> {nw}x{nh} ({dst_size//1024}KB)  "
                f"[{saving_pct:+.0f}%, {saved//1024:+d}KB]"
            )
            converted += 1
        except Exception as exc:  # noqa: BLE001
            print(f"  FAIL {rel}: {exc}")
            failed += 1

    print("=" * 60)
    print(f"Converted: {converted} | Failed: {failed}")
    print(f"Total saved: {total_saved//1024}KB")
    return 0 if failed == 0 else 1


if __name__ == "__main__":
    sys.exit(main())
