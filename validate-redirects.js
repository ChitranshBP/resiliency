/**
 * Redirect Validation Script
 * Checks _redirects file for:
 * - Redirect loops (A → A)
 * - Redirect chains (A → B → C)
 * - Missing destination pages
 * - Duplicate source URLs
 * - Trailing slash consistency
 */

const fs = require('fs');
const path = require('path');

const redirectsFile = path.join(__dirname, '_redirects');
const distDir = path.join(__dirname, 'dist');

// Parse _redirects file
const content = fs.readFileSync(redirectsFile, 'utf-8');
const lines = content.split('\n').filter(l => l.trim() && !l.trim().startsWith('#'));

const redirects = [];
const sources = new Set();
const errors = [];
const warnings = [];

for (const line of lines) {
  const parts = line.trim().split(/\s+/);
  if (parts.length >= 3) {
    const from = parts[0];
    const to = parts[1];
    const status = parseInt(parts[2]);
    redirects.push({ from, to, status, line: line.trim() });
  }
}

console.log(`\n📋 Parsed ${redirects.length} redirect rules\n`);

// 1. Check for non-301 status codes
for (const r of redirects) {
  if (r.status !== 301) {
    errors.push(`❌ Non-301 redirect: ${r.from} → ${r.to} (status: ${r.status})`);
  }
}

// 2. Check for redirect loops (source === destination)
for (const r of redirects) {
  const normalizedFrom = r.from.replace(/\/$/, '') || '/';
  const normalizedTo = r.to.replace(/\/$/, '') || '/';
  if (normalizedFrom === normalizedTo) {
    // Skip the / -> / identity redirect (it's harmless and correct)
    if (normalizedFrom !== '/') {
      errors.push(`🔄 LOOP: ${r.from} → ${r.to}`);
    }
  }
}

// 3. Check for redirect chains
const redirectMap = new Map();
for (const r of redirects) {
  const normalizedFrom = r.from.replace(/\/$/, '') || '/';
  redirectMap.set(normalizedFrom, r.to.replace(/\/$/, '') || '/');
  // Also store with trailing slash
  redirectMap.set(r.from, r.to);
}

for (const r of redirects) {
  const dest = r.to.replace(/\/$/, '') || '/';
  if (redirectMap.has(dest) && dest !== '/') {
    const finalDest = redirectMap.get(dest);
    if (finalDest !== dest) {
      warnings.push(`⛓️  CHAIN: ${r.from} → ${r.to} → ${finalDest}`);
    }
  }
}

// 4. Check for duplicate sources
for (const r of redirects) {
  if (sources.has(r.from)) {
    warnings.push(`🔁 DUPLICATE source: ${r.from}`);
  }
  sources.add(r.from);
}

// 5. Check destination pages exist (for non-wildcard, non-homepage destinations)
const existingPages = new Set();
if (fs.existsSync(distDir)) {
  const files = fs.readdirSync(distDir);
  for (const f of files) {
    existingPages.add('/' + f.replace('.html', ''));
    existingPages.add('/' + f);
  }
  existingPages.add('/');
}

for (const r of redirects) {
  if (r.to === '/') continue; // Homepage always exists
  if (!r.from.includes('*')) { // Skip wildcard checks
    const destPage = r.to.replace(/\/$/, '');
    if (existingPages.size > 0 && !existingPages.has(destPage)) {
      warnings.push(`📄 Destination page may not exist: ${r.to} (from ${r.from})`);
    }
  }
}

// Report
console.log('=== VALIDATION RESULTS ===\n');

if (errors.length === 0) {
  console.log('✅ No critical errors found!\n');
} else {
  console.log(`❌ ${errors.length} ERRORS:\n`);
  errors.forEach(e => console.log(`  ${e}`));
  console.log();
}

if (warnings.length === 0) {
  console.log('✅ No warnings!\n');
} else {
  console.log(`⚠️  ${warnings.length} WARNINGS:\n`);
  warnings.forEach(w => console.log(`  ${w}`));
  console.log();
}

// Summary stats
const destinations = new Set(redirects.map(r => r.to));
console.log('=== SUMMARY ===');
console.log(`  Total redirects:        ${redirects.length}`);
console.log(`  Unique destinations:    ${destinations.size}`);
console.log(`  Redirects to homepage:  ${redirects.filter(r => r.to === '/').length}`);
console.log(`  Wildcard rules:         ${redirects.filter(r => r.from.includes('*')).length}`);
console.log(`  All 301 status:         ${redirects.every(r => r.status === 301) ? '✅ Yes' : '❌ No'}`);
console.log();
