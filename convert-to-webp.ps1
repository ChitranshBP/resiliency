#Requires -Version 5.0
<#
.SYNOPSIS
  Converts all .jpg / .jpeg images under the current directory to .webp
  using Google's cwebp tool. PNG files are left untouched.

.DESCRIPTION
  - Recursively finds all *.jpg and *.jpeg files.
  - For each file, runs cwebp to produce a sibling *.webp file.
  - Uses -q 82 (visually lossless-ish, ~30-40% size reduction for photos).
  - Skips conversion if the .webp output already exists and is newer.
  - Prints a summary at the end (converted / skipped / failed).

.PREREQUISITES
  cwebp.exe must be on PATH. Get it from:
    https://developers.google.com/speed/webp/download
  (Drop cwebp.exe next to this script or anywhere on PATH.)

.USAGE
  PS> .\convert-to-webp.ps1
#>

# --- Config ------------------------------------------------------------------
$cwebp = (Get-Command cwebp.exe -ErrorAction SilentlyContinue).Source
if (-not $cwebp) {
    $scriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
    $localTool = Join-Path $scriptDir 'cwebp.exe'
    if (Test-Path $localTool) { $cwebp = $localTool }
}
if (-not $cwebp) {
    Write-Error "cwebp.exe not found. Download it from https://developers.google.com/speed/webp/download and place on PATH or next to this script."
    exit 1
}

$quality = 82  # 0-100; 80-85 is the sweet spot for photos
$root    = (Get-Location).Path

# --- Main --------------------------------------------------------------------
$files = Get-ChildItem -Path $root -Recurse -File -Include '*.jpg','*.jpeg' |
         Where-Object { $_.FullName -notmatch '[\\/]node_modules[\\/]' -and
                        $_.FullName -notmatch '[\\/]\.git[\\/]' }

$converted = 0
$skipped   = 0
$failed    = 0

foreach ($file in $files) {
    $out = [System.IO.Path]::ChangeExtension($file.FullName, '.webp')

    # Skip if up-to-date webp already exists
    if ((Test-Path $out) -and ((Get-Item $out).LastWriteTime -ge $file.LastWriteTime)) {
        $skipped++
        continue
    }

    Write-Host "Converting: $($file.FullName.Substring($root.Length + 1))"
    $proc = Start-Process -FilePath $cwebp -ArgumentList @(
        "-q", $quality,
        "-quiet",
        "-mt",   # multi-thread
        "`"$($file.FullName)`"",
        "-o", "`"$($out)`""
    ) -NoNewWindow -Wait -PassThru

    if ($proc.ExitCode -eq 0) {
        $converted++
    } else {
        $failed++
        Write-Warning "  FAILED (exit $($proc.ExitCode))"
    }
}

Write-Host ""
Write-Host "============================================"
Write-Host "Converted : $converted"
Write-Host "Skipped   : $skipped (already up-to-date)"
Write-Host "Failed    : $failed"
Write-Host "Tool used : $cwebp"
Write-Host "Quality   : $quality"
Write-Host "============================================"
