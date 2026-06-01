#!/usr/bin/env python3
"""Recursively convert all .jpg / .jpeg images under the project root to .webp.

Skips PNGs. Skips .git and node_modules. Idempotent: skips files whose .webp
sibling is already up-to-date.
"""

import os
import sys
from pathlib import Path
from PIL import Image

ROOT = Path(__file__).resolve().parent
QUALITY = 82
SKIP_DIRS = {".git", "node_modules"}
EXTENSIONS = {".jpg", ".jpeg"}

def main() -> int:
    converted = skipped = failed = 0
    failures: list[str] = []

    targets: list[Path] = []
    for dirpath, dirnames, filenames in os.walk(ROOT):
        dirnames[:] = [d for d in dirnames if d not in SKIP_DIRS]
        for name in filenames:
            ext = Path(name).suffix.lower()
            if ext in EXTENSIONS:
                targets.append(Path(dirpath) / name)

    for src in targets:
        dst = src.with_suffix(".webp")
        rel = src.relative_to(ROOT)

        try:
            if dst.exists() and dst.stat().st_mtime >= src.stat().st_mtime:
                skipped += 1
                continue
            with Image.open(src) as im:
                im = im.convert("RGB")
                im.save(dst, "WEBP", quality=QUALITY, method=6)
            converted += 1
            print(f"  converted: {rel}")
        except Exception as exc:  # noqa: BLE001
            failed += 1
            failures.append(f"{rel}: {exc}")

    print("")
    print("=" * 50)
    print(f"Converted : {converted}")
    print(f"Skipped   : {skipped}")
    print(f"Failed    : {failed}")
    print(f"Quality   : {QUALITY}")
    if failures:
        print("\nFailures:")
        for f in failures:
            print(f"  - {f}")
    print("=" * 50)
    return 0 if failed == 0 else 1

if __name__ == "__main__":
    sys.exit(main())
