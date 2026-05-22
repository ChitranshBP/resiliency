<?php
/**
 * PHP Router with 301 Permanent Redirects
 * 
 * Usage (local dev server): php -S localhost:8000 router.php
 * 
 * This file handles:
 * 1. All 301 permanent redirects (old URLs → new destinations)
 * 2. Trailing slash normalization
 * 3. Wildcard redirect matching (wp-content/*, wp-*.php, etc.)
 * 4. Clean URL routing (serves .php files without extension)
 */

// ============================================================================
// REDIRECT MAP: old URL => new destination
// All redirects are 301 (permanent) to preserve SEO equity
// ============================================================================

$redirects = [

    // --- Homepage Redirects ---
    '/index'                                                        => '/',
    '/index.html'                                                   => '/',
    '/home'                                                         => '/',
    '/medspa-newport-beach-ca'                                      => '/',
    '/methylene-blue'                                               => '/',
    '/no-surprises-act-compliance'                                   => '/',
    '/tms-treatment-dlp'                                            => '/',
    '/tms-for-restless-legs-syndrome-newport-beach-ca'              => '/',
    '/prp-treatment-newport-beach-ca'                               => '/',
    '/infrared-light-therapy-newport-beach-ca'                      => '/',
    '/5-benefits-of-longevity-medicine-you-need-to-know'            => '/',
    '/amino-acid-iv-therapy-a-promising-approach-for-addiction-detox-a' => '/',

    // --- Core Service Pages ---
    '/conservative-medication-management'                           => '/medication-management',
    '/tms-newportbeach'                                             => '/newport-beach',
    '/accelerated-tms-newport-beach-ca'                             => '/accelerated-tms',
    '/accelerated-tms-orange-county'                                => '/accelerated-tms',
    '/accelerated-tms-brainsway-swift-protocol'                     => '/accelerated-tms',
    '/tms-for-substance-abuse'                                      => '/substance-abuse',
    '/tms-for-substance-abuse-newport-beach-ca'                     => '/substance-abuse',
    '/ketamine-for-substance-abuse-newport-beach-ca'                => '/substance-abuse',
    '/weight-loss-in-orange-county'                                 => '/weight-loss',
    '/spravato-treatment-in-orange-county'                          => '/spravato-therapy',
    '/spravato-treatment-orange-county'                             => '/spravato-therapy',
    '/spravato-treatment'                                           => '/spravato-therapy',
    '/iv-ketamine-therapy-newport-beach-ca'                         => '/spravato-therapy',
    '/ketamine-for-anxiety-newport-beach-ca'                        => '/spravato-therapy',
    '/nad-iv-therapy'                                               => '/nad-therapy',
    '/iv-therapy-newport-beach-ca'                                  => '/iv-vitamin-therapy',
    '/cosmetic-injectables-newport-beach-ca'                        => '/iv-vitamin-therapy',
    '/tms-therapy-newport-beach-ca'                                 => '/newport-beach',
    '/cognitive-psychiatry-newport-beach-ca'                        => '/newport-beach',
    '/tms-for-condition-treatment'                                  => '/tms-therapy',
    '/what-to-expect-tms'                                           => '/tms-therapy',
    '/integrative-psychiatry-orange-county'                         => '/integrative-psychiatry',
    '/integrative-psychiatry-newport-beach-ca'                      => '/integrative-psychiatry',
    '/supplements-newport-beach-ca'                                 => '/supplements',
    '/supplements-that-can-offer-support-for-psychosis'             => '/supplements',
    '/cognitive-enhancement-orange-county'                          => '/cognitive-enhancement',
    '/cannabis-induced-psychosis-dopamine'                          => '/tms-for-cannabis-induced-psychosis',

    // --- Condition Pages ---
    '/tms-for-ptsd-orange-county'                                   => '/ptsd',
    '/tms-for-ptsd-newport-beach-ca'                                => '/ptsd',
    '/ptsd-tms'                                                     => '/ptsd',
    '/adhd-treatment-orange-county'                                 => '/adhd',
    '/treatment-for-suicidal-ideation-orange-county'                => '/suicidal-ideation',
    '/tms-for-anxiety-newport-beach-ca'                             => '/anxiety',
    '/tms-for-ocd-newport-beach-ca'                                 => '/ocd',
    '/tms-for-depression-orange-county'                             => '/depression',
    '/tms-for-depression-newport-beach-ca'                          => '/depression',
    '/tms-for-bipolar-disorder'                                     => '/bipolar',
    '/tms-for-bipolar-disorder-newport-beach-ca'                    => '/bipolar',
    '/autism-spectrum-support-orange-county'                        => '/autism',
    '/mental-clarity-treatment-orange-county'                       => '/mental-clarity',

    // --- Info / About Pages ---
    '/our-team'                                                     => '/team',
    '/our-team/stefani-lafreniere-md'                               => '/team',
    '/our-team/heather-wong-dmsc-mpas-pa-c-caq-psych'               => '/team',
    '/our-team/regina-dizon-pmhnp-bc'                               => '/team',
    '/our-team/milinda-estrada-pa-c'                                => '/team',
    '/about-us'                                                     => '/about',
    '/our-reviews'                                                  => '/reviews',
    '/acceptable-use-policy'                                        => '/insurance',
    '/privacy-policy'                                               => '/compliance',
    '/faq-1'                                                        => '/tms-faq',

    // --- Blog Redirects (specific posts) ---
    '/blog-deep-tms-cost.php'                                       => '/blog-deep-tms-cost',
    '/blog/tms-for-depression-in-orange-county-patient-journey-results-and' => '/depression',
    '/blog/tms-anxiety-south-orange-county'                         => '/anxiety',
    '/blog/treating-ocd-with-tms-what-orange-county-patients-should-ex' => '/blog-ocd-disability',
    '/blog/tms-helps-veterans-ptsd-orange-county'                   => '/ptsd',
    '/blog/tms-for-anxiety-in-orange-county-integrating-brain-stimulation' => '/anxiety',
    '/blog/10-reasons-prp-facials'                                  => '/',
    '/blog/tms-therapy-for-high-performers-ending-the-cycle-of-workpla' => '/blog',
    '/blog/building-mental-resilience-how-to-strengthen-your-mindset-in' => '/blog',
    '/blog/2023/10/28'                                              => '/blog',
    '/blog/spravato-first-session-orange-county'                    => '/spravato-therapy',
    '/blog/transcranial-magnetic-stimulation-tms-demystifying-a-revoluti' => '/',
    '/blog/spravato-esketamine-therapy-the-cutting-edge-approach-to-d' => '/spravato-therapy',
    '/blog/tms-for-ptsd-orange-county'                              => '/ptsd',
    '/blog/spravato-treatment-guide-orange-county'                  => '/spravato-therapy',
    '/blog/aesthetics-and-mental-wellness'                          => '/blog',
    '/blog/a-complete-guide-to-tms-therapy-for-depression-in-orange-co' => '/blog',
    '/blog/navigating-depression-recognizing-the-signs-preventing-relap' => '/blog',
    '/blog/am-i-depressed'                                          => '/blog',
    '/the-power-of-plant-based-antioxidants'                        => '/blog',

    // --- Blog Category/Feed Redirects ---
    '/blog/category/ptsd/feed'                                      => '/ptsd',
    '/blog/category/ptsd'                                           => '/ptsd',
    '/blog/aesthetic'                                               => '/blog',
    '/blog/nad'                                                     => '/blog',
];

// ============================================================================
// WILDCARD REDIRECT PATTERNS (checked via regex)
// Order matters: more specific patterns first
// ============================================================================

$wildcardRedirects = [
    '#^/wp-content/themes/hello-elementor/.*$#'     => '/',
    '#^/wp-content/themes/resiliency-theme/.*$#'    => '/',
    '#^/wp-content/plugins/.*$#'                    => '/',
    '#^/wp-content/.*$#'                            => '/',
    '#^/wp-includes/.*$#'                           => '/',
    '#^/wp-[^/]*\.php$#'                            => '/',
];


// ============================================================================
// REDIRECT LOGIC
// ============================================================================

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Normalize: strip trailing slash (except for root "/")
$normalizedUri = ($requestUri !== '/') ? rtrim($requestUri, '/') : '/';

// 1. Check exact match redirects (with and without trailing slash)
if (isset($redirects[$normalizedUri]) && $normalizedUri !== $redirects[$normalizedUri]) {
    $destination = $redirects[$normalizedUri];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $destination);
    header('Cache-Control: public, max-age=31536000');
    exit;
}

// Also check the original URI with trailing slash (for exact matches in the map)
if ($requestUri !== $normalizedUri && isset($redirects[$requestUri]) && $requestUri !== $redirects[$requestUri]) {
    $destination = $redirects[$requestUri];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $destination);
    header('Cache-Control: public, max-age=31536000');
    exit;
}

// 2. Check wildcard pattern redirects
foreach ($wildcardRedirects as $pattern => $destination) {
    if (preg_match($pattern, $normalizedUri) || preg_match($pattern, $requestUri)) {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $destination);
        header('Cache-Control: public, max-age=31536000');
        exit;
    }
}

// ============================================================================
// NORMAL ROUTING (no redirect matched)
// Serve the requested PHP file or static asset
// ============================================================================

// Serve static files directly (CSS, JS, images, etc.)
$filePath = __DIR__ . $requestUri;
if (is_file($filePath)) {
    return false; // Let PHP built-in server handle static files
}

// Try serving .php file for clean URLs (e.g., /about -> about.php)
$phpFile = __DIR__ . $normalizedUri . '.php';
if ($normalizedUri !== '/' && is_file($phpFile)) {
    include $phpFile;
    exit;
}

// Serve index.php for root
if ($normalizedUri === '/') {
    include __DIR__ . '/index.php';
    exit;
}

// 404 - File not found
http_response_code(404);
echo '<!DOCTYPE html><html><head><title>404 - Page Not Found</title>';
echo '<style>body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;display:flex;justify-content:center;align-items:center;min-height:100vh;margin:0;background:#0B2035;color:#fff;text-align:center}.container{max-width:500px;padding:2rem}h1{font-size:4rem;margin:0;color:#23bfe2}p{color:#94a3b8;font-size:1.1rem;margin:1.5rem 0}a{color:#23bfe2;text-decoration:none;border:2px solid #23bfe2;padding:0.75rem 2rem;border-radius:50px;display:inline-block;transition:all 0.3s}a:hover{background:#23bfe2;color:#0B2035}</style>';
echo '</head><body><div class="container"><h1>404</h1><p>The page you\'re looking for doesn\'t exist or has been moved.</p><a href="/">Return to Homepage</a></div></body></html>';
exit;
