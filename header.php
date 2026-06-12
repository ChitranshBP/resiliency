<?php
$default_title       = 'Psychiatrist Newport Beach &amp; Orange County | Deep TMS, Spravato | Resiliency Mind + Body Medicine®';
$default_description = 'Orange County\'s leading psychiatric clinic offering Deep TMS Therapy, Spravato (ketamine nasal spray), and personalized treatment for depression, anxiety, OCD, PTSD &amp; ADHD. Two locations: Newport Beach &amp; San Juan Capistrano, CA. Call (949) 996-5355.';
$default_keywords    = 'psychiatrist Newport Beach, psychiatrist Orange County, Deep TMS therapy Newport Beach, TMS therapy Orange County, Spravato treatment Orange County, depression treatment Newport Beach, anxiety treatment Orange County, OCD treatment Newport Beach, PTSD psychiatrist Orange County, ADHD psychiatrist Newport Beach, mental health clinic Orange County, psychiatric care Newport Beach CA, ketamine treatment Orange County, TMS depression treatment, neuromodulation therapy Orange County, psychiatrist San Juan Capistrano, advanced psychiatric care Southern California, IV therapy Newport Beach, medical weight loss Newport Beach, Resiliency Mind Body Medicine';
$default_canonical   = 'https://resiliencymbmedicine.com/';

$page_title       = isset($page_title)       ? $page_title       : $default_title;
$page_description = isset($page_description) ? $page_description : $default_description;
$page_keywords    = isset($page_keywords)    ? $page_keywords    : $default_keywords;
$page_canonical   = isset($page_canonical)   ? $page_canonical   : $default_canonical;
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta name="google-site-verification" content="nSYRfJaDkZhj8oNegsv90RUX3540I86V1VhB18o5XdQ" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11289954101"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-11289954101');
    </script>
    <?php if (isset($page_conversion)): ?>
    <!-- Event snippet for Submit lead form quiz conversion page -->
    <script>
      gtag('event', 'conversion', {'send_to': '<?php echo $page_conversion; ?>'});
    </script>
    <?php endif; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Resiliency Mind + Body Medicine®">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/logo/Resiliency-FAVICON.png">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $page_canonical; ?>">

    <!-- Geo / Location Meta -->
    <meta name="geo.region" content="US-CA">
    <meta name="geo.placename" content="Newport Beach, Orange County, California">
    <meta name="geo.position" content="33.6189;-117.9289">
    <meta name="ICBM" content="33.6189, -117.9289">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $page_canonical; ?>">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:image" content="https://resiliencymbmedicine.com/assets/images/logo/resiliency-new-logo.png">
    <meta property="og:site_name" content="Resiliency Mind + Body Medicine®">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $page_description; ?>">
    <meta name="twitter:image" content="https://resiliencymbmedicine.com/assets/images/logo/resiliency-new-logo.png">

    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Resiliency Mind + Body Medicine®",
      "url": "https://resiliencymbmedicine.com",
      "logo": "https://resiliencymbmedicine.com/assets/images/logo/resiliency-new-logo.png",
      "telephone": "(949) 996-5355",
      "description": "Orange County's leading psychiatric clinic offering Deep TMS Therapy, Spravato, and personalized treatment for depression, anxiety, OCD, PTSD, and ADHD.",
      "medicalSpecialty": ["Psychiatry", "Addiction Medicine", "Neuromodulation"],
      "priceRange": "$$",
      "founder": {
        "@type": "Person",
        "name": "Dr. Stefani LaFrenierre, MD",
        "jobTitle": "Board-Certified Psychiatrist"
      },
      "location": [
        {
          "@type": "MedicalClinic",
          "name": "Resiliency Mind + Body Medicine® – Newport Beach",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "1501 Superior Ave, Suite 210",
            "addressLocality": "Newport Beach",
            "addressRegion": "CA",
            "postalCode": "92663",
            "addressCountry": "US"
          },
          "telephone": "(949) 996-5355",
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 33.6189,
            "longitude": -117.9289
          }
        },
        {
          "@type": "MedicalClinic",
          "name": "Resiliency Mind + Body Medicine® – San Juan Capistrano",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "27184 Ortega Hwy, STE 103",
            "addressLocality": "San Juan Capistrano",
            "addressRegion": "CA",
            "postalCode": "92675",
            "addressCountry": "US"
          },
          "telephone": "(949) 996-5355"
        }
      ],
      "sameAs": [
        "https://resiliencymbmedicine.com"
      ],
      "areaServed": [
        "Newport Beach, CA",
        "San Juan Capistrano, CA",
        "Orange County, CA",
        "Irvine, CA",
        "Laguna Beach, CA",
        "Costa Mesa, CA",
        "Huntington Beach, CA",
        "Dana Point, CA",
        "Mission Viejo, CA",
        "Southern California"
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Psychiatric & Wellness Services",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "MedicalTherapy", "name": "Deep TMS Therapy"}},
          {"@type": "Offer", "itemOffered": {"@type": "MedicalTherapy", "name": "Spravato (Esketamine) Treatment"}},
          {"@type": "Offer", "itemOffered": {"@type": "MedicalTherapy", "name": "Psychiatric Evaluation & Medication Management"}},
          {"@type": "Offer", "itemOffered": {"@type": "MedicalTherapy", "name": "IV Drip Therapy"}},
          {"@type": "Offer", "itemOffered": {"@type": "MedicalTherapy", "name": "Medical Weight Loss"}},
          {"@type": "Offer", "itemOffered": {"@type": "MedicalTherapy", "name": "Accelerated TMS (SAINT Protocol)"}}
        ]
      }
    }
    </script>

    <?php if (isset($page_schema) && $page_schema): ?>
    <?php echo $page_schema; ?>
    <?php endif; ?>

    <!-- Google Fonts (non-blocking) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://res.cloudinary.com">

    <!-- Preload LCP image (hero poster) so it's discovered immediately -->
    <link rel="preload" as="image" href="assets/images/home/hero-poster-mobile.webp" imagesrcset="assets/images/home/hero-poster-mobile.webp" fetchpriority="high">

    <!-- Preload hero video source for desktop LCP (small metadata fetch) -->
    <link rel="preload" as="video" href="https://res.cloudinary.com/de4kw1t2i/video/upload/v1774957698/334716_1_Online-Video-Cutter.Com_wn4n7v.webm" type="video/webm" fetchpriority="high" media="(min-width: 768px)">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet"></noscript>
    
    <!-- Icons (Lucide - loaded after page is interactive) -->
    <script>
    window.addEventListener('DOMContentLoaded', function() {
        var s = document.createElement('script');
        s.src = 'https://unpkg.com/lucide@latest';
        s.defer = true;
        s.onload = function() { if (window.lucide) lucide.createIcons(); };
        document.body.appendChild(s);
    });
    </script>
    
    <!-- Tailwind CSS (prebuilt for performance) -->
    <link rel="preload" href="css/tailwind-built.css" as="style">
    <link rel="stylesheet" href="css/tailwind-built.css">

    <!-- Custom CSS (non-blocking) -->
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="css/styles.css"></noscript>

    <!-- UserWay Accessibility Widget (lazy-loaded after page idle) -->
    <script>
    (function() {
        var loadUW = function() {
            var s = document.createElement('script');
            s.src = 'https://cdn.userway.org/widget.js';
            s.setAttribute('data-account', '4BeUTqjVL9');
            s.async = true;
            document.body.appendChild(s);
        };
        // Load on idle, or on first user interaction (whichever comes first)
        if ('requestIdleCallback' in window) {
            requestIdleCallback(loadUW, { timeout: 4000 });
        } else {
            setTimeout(loadUW, 4000);
        }
        ['mousemove','touchstart','keydown','scroll'].forEach(function(evt) {
            window.addEventListener(evt, function onFirst() {
                loadUW();
                window.removeEventListener(evt, onFirst);
            }, { once: true, passive: true });
        });
    })();
    </script>
</head>
<body class="font-sans text-gray-800 bg-surface antialiased selection:bg-accent selection:text-white">

    <!-- Sticky Navigation -->
    <header id="header" class="group fixed w-full top-0 z-50 transition-all duration-300 bg-transparent border-b border-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24 transition-all duration-300 group-[.scrolled]:h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="block">
                        <!-- We use a brightness filter for the white variant before scrolling, and invert/original on scroll depending on the logo's original color -->
                        <img src="/assets/images/logo/resiliency-new-logo.webp" alt="Resiliency Mind+Body Medicine®" width="256" height="186" class="h-24 w-auto object-contain transition-all duration-300 brightness-0 invert group-[.scrolled]:filter-none" fetchpriority="high">
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <nav class="hidden md:flex items-center space-x-8">
                    
                    <!-- Mental Health Dropdown -->
                    <div class="relative group/mh">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Mental Health <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/mh:rotate-180"></i>
                        </button>
                        <!-- Dropdown Content -->
                        <div class="absolute top-[80px] left-1/2 -translate-x-1/2 w-72 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/mh:opacity-100 group-hover/mh:visible transition-all duration-300 transform translate-y-4 group-hover/mh:translate-y-0 border border-gray-100">
                            <div class="p-2 space-y-1">
                                <a href="tms-therapy" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Deep TMS Therapy</a>
                                <a href="accelerated-tms" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Accelerated Deep TMS (SWIFT)</a>

                                <!-- TMS Applications Submenu (separate popover) -->
                                <div class="relative group/tms-sub">
                                    <button class="w-full flex items-center justify-between px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">
                                        <span>TMS Applications</span>
                                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                                    </button>
                                    <!-- Separate Flyout Popover -->
                                    <div class="absolute top-0 left-full ml-4 w-72 bg-white rounded-2xl shadow-[0_25px_50px_-10px_rgba(11,32,53,0.25)] opacity-0 invisible group-hover/tms-sub:opacity-100 group-hover/tms-sub:visible transition-all duration-300 transform -translate-x-2 group-hover/tms-sub:translate-x-0 border border-gray-100 z-[60]">
                                        <div class="p-2 space-y-1">
                                            <div class="px-4 pt-2 pb-1">
                                                <p class="text-[10px] font-bold tracking-widest text-[#23bfe2] uppercase">TMS Applications</p>
                                            </div>
                                            <a href="tms-for-mental-boost" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">TMS for Mental Boost</a>
                                            <a href="tms-for-psychosis" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">TMS for Psychosis</a>
                                            <a href="tms-for-cannabis-induced-psychosis" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">TMS for Cannabis-Induced Psychosis</a>
                                        </div>
                                    </div>
                                </div>

                                <a href="spravato-therapy" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Spravato® Treatment</a>
                                <a href="medication-management" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Medication Management</a>
                                <a href="pharmacogenetic-testing" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Pharmacogenetic Testing</a>
                                <a href="integrative-psychiatry" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Integrative Psychiatry</a>
                                <a href="proliv-rx" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Proliv™ Rx</a>
                                <a href="telehealth" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Telehealth Visits</a>
                                <a href="vns-therapy" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">VNS Therapy</a>

                            </div>
                        </div>
                    </div>

                    <!-- Wellness Dropdown -->
                    <div class="relative group/well">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Wellness <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/well:rotate-180"></i>
                        </button>
                        <div class="absolute top-[80px] left-1/2 -translate-x-1/2 w-72 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/well:opacity-100 group-hover/well:visible transition-all duration-300 transform translate-y-4 group-hover/well:translate-y-0 border border-gray-100 overflow-hidden max-h-[70vh] overflow-y-auto">
                            <div class="p-2 space-y-1">
                                <a href="iv-vitamin-therapy" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">IV Vitamin Therapy</a>
                                <a href="nad-therapy" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">NAD+ Therapy</a>
                                <a href="weight-loss" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Medical Weight Loss</a>
                                <a href="hormone-therapy" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Hormone Therapy</a>
                                <a href="supplements" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Supplements</a>
                            </div>
                        </div>
                    </div>

                    <!-- Conditions We Treat Dropdown -->
                    <div class="relative group/cond">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Conditions We Treat <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/cond:rotate-180"></i>
                        </button>
                        <div class="absolute top-[80px] left-1/2 -translate-x-1/2 w-80 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/cond:opacity-100 group-hover/cond:visible transition-all duration-300 transform translate-y-4 group-hover/cond:translate-y-0 border border-gray-100 overflow-hidden">
                            <div class="p-2 grid grid-cols-2 gap-x-2 gap-y-1">
                                <a href="depression" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Depression</a>
                                <a href="anxiety" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Anxiety</a>
                                <a href="ocd" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">OCD</a>
                                <a href="ptsd" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">PTSD</a>
                                <a href="adhd" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">ADHD</a>
                                <a href="bipolar" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Bipolar Disorder</a>
                                <a href="substance-abuse" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Substance Abuse</a>
                                <a href="autism" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Autism</a>
                                <a href="suicidal-ideation" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Suicidal Ideation</a>
                                <a href="mental-clarity" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Mental Clarity</a>
                                <a href="cognitive-enhancement" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Cognitive Enhancement</a>
                                <a href="conditions" class="block px-4 py-3 text-sm text-[#23bfe2] hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">View All Conditions →</a>
                            </div>
                        </div>
                    </div>

                    <a href="team" class="text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">Meet The Team</a>

                    <!-- Resources Dropdown -->
                    <div class="relative group/res">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Resources <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/res:rotate-180"></i>
                        </button>
                        <div class="absolute top-[80px] right-0 w-64 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/res:opacity-100 group-hover/res:visible transition-all duration-300 transform translate-y-4 group-hover/res:translate-y-0 border border-gray-100 overflow-hidden max-h-[70vh] overflow-y-auto">
                            <div class="p-2 space-y-1">     
                                <a href="https://resiliencymbm.intakeq.com/portal" target="_blank" rel="noopener" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Patient Portal</a>                           
                                <a href="about" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">About Us</a>
                                <a href="reviews" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Patient Reviews</a>                                
                                <a href="metrics" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Our Outcomes</a>
                                <a href="faqs" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">FAQs</a>
                                <a href="tms-faq" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Deep TMS FAQ</a>
                                <a href="tms-resources" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Deep TMS Resources</a>
                                <a href="insurance" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Insurance</a>
                                <a href="caloptima" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">CalOptima Coverage</a>
                                <a href="https://resiliencymindandbodymedicine.brilliantconnections.com/home?lang=en_US" target="_blank" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">SkinMedica</a>
                                <a href="blog" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Blog</a>
                                <a href="press-media" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Press / Media</a>
                                <a href="new-patient-form" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Patient Forms</a>
                                <a href="compliance" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Compliance</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact / Locations Dropdown -->
                    <div class="relative group/loc">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Contact <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/loc:rotate-180"></i>
                        </button>
                        <div class="absolute top-[80px] right-0 w-64 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/loc:opacity-100 group-hover/loc:visible transition-all duration-300 transform translate-y-4 group-hover/loc:translate-y-0 border border-gray-100 overflow-hidden">
                            <div class="p-2 space-y-1">
                                <a href="contact" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Contact Us</a>
                                <a href="newport-beach" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Newport Beach Office</a>
                                <a href="san-juan-capistrano" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">San Juan Capistrano Office</a>
                                <a href="telehealth" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Telehealth / Virtual Visits</a>
                            </div>
                        </div>
                    </div>

                </nav>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center space-x-4">
                    <p class="text-sm font-semibold flex items-center gap-2 text-white group-[.scrolled]:text-primary transition-colors">
                        <i data-lucide="phone" class="w-4 h-4"></i> (949) 996-5355
                    </p>
                    <a href="contact" class="bg-white text-primary hover:bg-gray-100 group-[.scrolled]:bg-primary group-[.scrolled]:text-white group-[.scrolled]:hover:bg-primary/90 px-6 py-2.5 rounded-full text-sm font-medium transition-all shadow-[0_4px_14px_0_rgba(255,255,255,0.39)] group-[.scrolled]:shadow-[0_4px_14px_0_rgba(11,32,53,0.39)] hover:-translate-y-0.5 transform">
                        Book an Appointment
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="open-mobile-menu" class="focus:outline-none text-white group-[.scrolled]:text-gray-600">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-primary transform translate-x-full transition-transform duration-300 overflow-y-auto hidden">
        <div class="p-6">
            <!-- Header section of mobile menu -->
            <div class="flex items-center justify-between mb-8">
                <img src="/assets/images/logo/resiliency-new-logo.webp" alt="Resiliency Mind+Body Medicine®" width="256" height="186" class="h-14 w-auto brightness-0 invert">
                <button id="close-mobile-menu" class="text-white p-2">
                    <i data-lucide="x" class="w-8 h-8"></i>
                </button>
            </div>

            <!-- Mobile Navigation Links -->
            <nav class="flex flex-col space-y-6">
                
                <!-- Mental Health Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Mental Health <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="tms-therapy" class="text-white/80 hover:text-white transition-colors">Deep TMS Therapy</a>
                        <a href="accelerated-tms" class="text-white/80 hover:text-white transition-colors">Accelerated Deep TMS (SWIFT)</a>

                        <!-- Nested TMS Applications -->
                        <div>
                            <button class="mobile-accordion-toggle flex items-center justify-between w-full text-white/80 hover:text-white transition-colors">
                                TMS Applications <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
                            </button>
                            <div class="mobile-accordion-content hidden flex-col pl-4 pt-3 space-y-3">
                                <a href="tms-for-mental-boost" class="text-white/70 hover:text-white transition-colors text-sm">TMS for Mental Boost</a>
                                <a href="tms-for-psychosis" class="text-white/70 hover:text-white transition-colors text-sm">TMS for Psychosis</a>
                                <a href="tms-for-cannabis-induced-psychosis" class="text-white/70 hover:text-white transition-colors text-sm">TMS for Cannabis-Induced Psychosis</a>
                            </div>
                        </div>

                        <a href="spravato-therapy" class="text-white/80 hover:text-white transition-colors">Spravato® Treatment</a>
                        <a href="medication-management" class="text-white/80 hover:text-white transition-colors">Medication Management</a>
                        <a href="pharmacogenetic-testing" class="text-white/80 hover:text-white transition-colors">Pharmacogenetic Testing</a>
                        <a href="integrative-psychiatry" class="text-white/80 hover:text-white transition-colors">Integrative Psychiatry</a>
                        <a href="proliv-rx" class="text-white/80 hover:text-white transition-colors">Proliv™ Rx</a>
                        <a href="telehealth" class="text-white/80 hover:text-white transition-colors">Telehealth Visits</a>
                        <a href="vns-therapy" class="text-white/80 hover:text-white transition-colors">VNS Therapy</a>

                    </div>
                </div>

                <!-- Wellness Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Wellness <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="iv-vitamin-therapy" class="text-white/80 hover:text-white transition-colors">IV Vitamin Therapy</a>
                        <a href="nad-therapy" class="text-white/80 hover:text-white transition-colors">NAD+ Therapy</a>
                        <a href="weight-loss" class="text-white/80 hover:text-white transition-colors">Medical Weight Loss</a>
                        <a href="hormone-therapy" class="text-white/80 hover:text-white transition-colors">Hormone Therapy</a>
                        <a href="supplements" class="text-white/80 hover:text-white transition-colors">Supplements</a>
                    </div>
                </div>

                <!-- Conditions Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Conditions We Treat <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="depression" class="text-white/80 hover:text-white transition-colors">Depression</a>
                        <a href="anxiety" class="text-white/80 hover:text-white transition-colors">Anxiety</a>
                        <a href="ocd" class="text-white/80 hover:text-white transition-colors">OCD</a>
                        <a href="ptsd" class="text-white/80 hover:text-white transition-colors">PTSD</a>
                        <a href="adhd" class="text-white/80 hover:text-white transition-colors">ADHD</a>
                        <a href="bipolar" class="text-white/80 hover:text-white transition-colors">Bipolar Disorder</a>
                        <a href="substance-abuse" class="text-white/80 hover:text-white transition-colors">Substance Abuse</a>
                        <a href="autism" class="text-white/80 hover:text-white transition-colors">Autism</a>
                        <a href="suicidal-ideation" class="text-white/80 hover:text-white transition-colors">Suicidal Ideation</a>
                        <a href="mental-clarity" class="text-white/80 hover:text-white transition-colors">Mental Clarity</a>
                        <a href="cognitive-enhancement" class="text-white/80 hover:text-white transition-colors">Cognitive Enhancement</a>
                        <a href="conditions" class="text-[#23bfe2] hover:text-white transition-colors">View All Conditions →</a>
                    </div>
                </div>

                <a href="team" class="text-lg font-medium text-white pb-2 border-b border-white/10 block">Meet The Team</a>

                <!-- Resources Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Resources <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="https://resiliencymbm.intakeq.com/portal" class="text-white/80 hover:text-white transition-colors">Patient Portal</a>
                        <a href="about" class="text-white/80 hover:text-white transition-colors">About Us</a>
                        <a href="reviews" class="text-white/80 hover:text-white transition-colors">Patient Reviews</a>                        
                        <a href="metrics" class="text-white/80 hover:text-white transition-colors">Our Outcomes</a>
                        <a href="faqs" class="text-white/80 hover:text-white transition-colors">FAQs</a>
                        <a href="tms-faq" class="text-white/80 hover:text-white transition-colors">Deep TMS FAQ</a>
                        <a href="tms-resources" class="text-white/80 hover:text-white transition-colors">Deep TMS Resources</a>
                        <a href="insurance" class="text-white/80 hover:text-white transition-colors">Insurance</a>
                        <a href="caloptima" class="text-white/80 hover:text-white transition-colors">CalOptima Coverage</a>
                        <a href="blog" class="text-white/80 hover:text-white transition-colors">Blog</a>
                        <a href="press-media" class="text-white/80 hover:text-white transition-colors">Press / Media</a>
                        <a href="new-patient-form" class="text-white/80 hover:text-white transition-colors">Patient Forms</a>
                        <a href="compliance" class="text-white/80 hover:text-white transition-colors">Compliance</a>
                    </div>
                </div>

                <!-- Contact / Locations Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Contact & Locations <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="contact" class="text-white/80 hover:text-white transition-colors">Contact Us</a>
                        <a href="newport-beach" class="text-white/80 hover:text-white transition-colors">Newport Beach Office</a>
                        <a href="san-juan-capistrano" class="text-white/80 hover:text-white transition-colors">San Juan Capistrano Office</a>
                        <a href="telehealth" class="text-white/80 hover:text-white transition-colors">Telehealth / Virtual Visits</a>
                    </div>
                </div>

            </nav>

            <div class="mt-10">
                <a href="contact" class="bg-lightblue text-primary font-bold px-8 py-4 rounded-full text-center block w-full hover:bg-[#1aadd0] transition-colors">
                    Book an Appointment
                </a>
            </div>
        </div>
    </div>

