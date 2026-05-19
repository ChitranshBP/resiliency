<?php
$page_title = 'Deep TMS, Spravato & ProLivRx Irvine | Resiliency Mind + Body Medicine®';
$page_description = "Irvine's premier psychiatric clinic specializing in Deep TMS Therapy, Spravato® treatment, and ProLivRx™ for depression. FDA-approved, non-invasive treatments led by Dr. LaFrenierre. Call (949) 996-5355.";
$page_keywords = 'Deep TMS Irvine, Spravato treatment Irvine, ProLivRx Irvine, TMS therapy Orange County, treatment-resistant depression Irvine, depression treatment Irvine, ketamine nasal spray Irvine, transcranial magnetic stimulation Irvine, psychiatric clinic Irvine';
$page_canonical = 'https://resiliencymbmedicine.com/location/irvine/';
$page_schema = '';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Resiliency Mind + Body Medicine®">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $page_canonical; ?>">

    <!-- Geo Meta Tags -->
    <meta name="geo.region" content="US-CA">
    <meta name="geo.placename" content="Irvine, Orange County, California">
    <meta name="geo.position" content="33.6846;-117.8229">
    <meta name="ICBM" content="33.6846, -117.8229">

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

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/images/logo/Resiliency-FAVICON.png">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11289954101"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-11289954101');
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons (Lucide) -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0B2035',
                        secondary: '#23bfe2',
                        accent: '#23bfe2',
                        lightblue: '#23bfe2',
                        surface: '#FDFDFD',
                        neutral: '#F3F4F6'
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 10px 40px -10px rgba(11,32,53,0.08)',
                        'hover': '0 20px 40px -10px rgba(11,32,53,0.12)',
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="font-sans text-gray-800 bg-surface antialiased selection:bg-accent selection:text-white">

    <!-- HEADER INCLUDE -->
    <?php include '../header.php'; ?>

    <!-- HERO -->
    <section class="relative min-h-[550px] sm:min-h-[650px] lg:min-h-[75vh] flex items-center justify-center overflow-hidden pt-24 pb-8 sm:pt-28 sm:pb-12 lg:pt-24 lg:pb-0" id="hero">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-primary">
            <img src="../assets/images/breadcrumbs/med-management-bread.webp" alt="Irvine psychiatric clinic" class="hidden lg:block w-full h-full object-cover object-center sm:object-[50%_20%]">
            <img src="../assets/images/dr-L-patient-2.webp" alt="Irvine psychiatric clinic" class="lg:hidden w-full h-full object-cover object-right sm:object-[50%_30%]">
            <div class="absolute inset-0 bg-primary/60 sm:bg-primary/50 lg:bg-gradient-to-r lg:from-primary/75 lg:via-primary/50 lg:to-primary/20"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-2 sm:gap-3 mb-3 sm:mb-4"><div class="w-8 sm:w-12 h-0.5 bg-secondary"></div><span class="text-secondary text-[10px] sm:text-xs font-semibold tracking-[0.15em] sm:tracking-[0.2em] uppercase">Irvine, California</span></div>
                <h1 class="font-sans text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-white leading-tight mb-4 sm:mb-6">Deep TMS, Spravato® & ProLivRx™ <span class="block sm:inline text-secondary">Mental Health Treatment in Irvine, CA</span></h1>
                <p class="text-white/80 text-sm sm:text-base lg:text-lg leading-relaxed mb-4 sm:mb-6 max-w-lg sm:max-w-xl">Advanced, FDA-approved treatments for depression in Irvine. Deep TMS, Spravato® (esketamine), and ProLivRx™—personalized care for lasting relief.</p>
                <div class="inline-flex items-start gap-2 sm:gap-3 bg-secondary/15 border border-secondary/40 rounded-xl sm:rounded-2xl px-3 sm:px-5 py-3 sm:py-4 mb-6 sm:mb-8 max-w-full sm:max-w-xl backdrop-blur-sm">
                    <div class="w-8 sm:w-10 h-8 sm:h-10 min-w-8 sm:min-w-10 rounded-full bg-secondary flex items-center justify-center text-primary flex-shrink-0">
                        <i data-lucide="zap" class="w-4 sm:w-5 h-4 sm:h-5"></i>
                    </div>
                    <div>
                        <p class="text-white font-semibold text-xs sm:text-sm leading-tight mb-0.5 sm:mb-1">BrainsWay Ultra Provider with 78% Remission Rate</p>
                        <p class="text-white/75 text-[10px] sm:text-xs leading-relaxed">Same expert care as our Newport Beach location. Now serving Irvine, Costa Mesa, and Huntington Beach.</p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mb-4 sm:mb-0">
                    <a href="#treatments" class="px-6 sm:px-8 py-3 sm:py-3.5 bg-secondary text-primary rounded-full font-semibold text-sm sm:text-base hover:bg-white hover:shadow-xl transition-all whitespace-nowrap text-center">Explore Treatments →</a>
                    <a href="tel:+19499965355" class="px-6 sm:px-8 py-3 sm:py-3.5 bg-transparent border-2 border-white/30 text-white rounded-full font-semibold text-sm sm:text-base hover:border-secondary hover:text-secondary transition-all text-center">Call (949) 996-5355</a>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK INFO BAR -->
    <!-- <section class="py-6 bg-primary">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 text-white">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-secondary/20 flex items-center justify-center text-secondary">
                        <i data-lucide="map-pin" class="w-5 h-5"></i>
                    </div>
                    <span class="text-sm font-medium">Irvine, CA</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-secondary/20 flex items-center justify-center text-secondary">
                        <i data-lucide="phone" class="w-5 h-5"></i>
                    </div>
                    <a href="tel:+19499965355" class="text-sm font-medium hover:text-secondary">(949) 996-5355</a>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-secondary/20 flex items-center justify-center text-secondary">
                        <i data-lucide="clock" class="w-5 h-5"></i>
                    </div>
                    <span class="text-sm font-medium">Mon-Fri: 8:00 AM - 6:00 PM</span>
                </div>
            </div>
        </div>
    </section> -->

    <!-- MAIN TREATMENTS -->
    <section class="py-16 bg-white reveal" id="treatments">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <div class="flex items-center gap-3 mb-4 justify-center"><div class="w-12 h-0.5 bg-secondary"></div><span class="text-secondary text-xs font-semibold tracking-[0.2em] uppercase">Our Treatments</span></div>
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-primary mb-4">Advanced Treatments for <span class="text-secondary">Depression</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Three FDA-approved, non-invasive treatments for treatment-resistant depression. Each offers a different pathway to lasting relief.</p>
            </div>

            <!-- Tab Navigation -->
            <div class="flex flex-wrap justify-center gap-2 sm:gap-4 mb-8">
                <button onclick="switchTab('tms')" id="tab-tms" class="tab-btn px-4 sm:px-6 py-3 sm:py-4 rounded-xl sm:rounded-2xl font-bold text-sm sm:text-lg transition-all bg-primary text-white shadow-lg whitespace-nowrap">
                    Deep TMS
                </button>
                <button onclick="switchTab('spravato')" id="tab-spravato" class="tab-btn px-4 sm:px-6 py-3 sm:py-4 rounded-xl sm:rounded-2xl font-bold text-sm sm:text-lg transition-all bg-neutral text-primary hover:bg-gray-200 whitespace-nowrap">
                    Spravato®
                </button>
                <button onclick="switchTab('prolivrx')" id="tab-prolivrx" class="tab-btn px-4 sm:px-6 py-3 sm:py-4 rounded-xl sm:rounded-2xl font-bold text-sm sm:text-lg transition-all bg-neutral text-primary hover:bg-gray-200 whitespace-nowrap">
                    ProLivRx™
                </button>
            </div>

            <!-- Tab Content -->
            <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl min-h-[400px] sm:min-h-[500px]">

                <!-- Deep TMS Content -->
                <div id="content-tms" class="tab-content absolute inset-0 transition-all duration-500">
                    <div class="absolute inset-0 bg-cover bg-right sm:bg-center" style="background-image:url('../assets/images/breadcrumbs/deep-tms-breadcrumbs.webp'); background-position: center 20%;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/90 to-transparent lg:bg-gradient-to-r lg:from-primary lg:via-primary/80 lg:to-transparent"></div>
                    <div class="relative z-10 p-4 sm:p-6 lg:p-12 xl:p-16 h-full flex items-center">
                        <div class="w-full">
                            <div class="inline-flex items-center gap-2 bg-secondary text-primary text-xs font-bold px-3 py-1.5 sm:px-4 sm:py-2 rounded-full mb-3 sm:mb-6">FDA-Cleared</div>
                            <h3 class="font-sans text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2 sm:mb-4">Deep TMS Therapy</h3>
                            <p class="text-base sm:text-lg lg:text-xl text-white/80 leading-relaxed mb-4 sm:mb-6 max-w-xl">Transcranial magnetic stimulation using H-Coil technology. Non-invasive, no sedation, covered by insurance.</p>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-4 mb-4 sm:mb-8">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">78%</div>
                                    <p class="text-white/70 text-xs sm:text-sm">Remission Rate</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">87.8%</div>
                                    <p class="text-white/70 text-xs sm:text-sm">Response Rate</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">20 min</div>
                                    <p class="text-white/70 text-xs sm:text-sm">Per Session</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">6 Days</div>
                                    <p class="text-white/70 text-xs sm:text-sm">SWIFT Protocol</p>
                                </div>
                            </div>
                            <a href="tms-therapy.php" class="inline-flex items-center gap-2 px-4 sm:px-6 lg:px-8 py-2.5 sm:py-3 lg:py-4 bg-secondary text-primary font-bold rounded-xl sm:rounded-2xl hover:bg-white hover:shadow-xl transition-all text-sm sm:text-base">Learn More <i data-lucide="arrow-right" class="w-4 sm:w-5 h-4 sm:h-5"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Spravato Content -->
                <div id="content-spravato" class="tab-content absolute inset-0 transition-all duration-500 opacity-0 pointer-events-none translate-x-8">
                    <div class="absolute inset-0 bg-cover bg-right sm:bg-center" style="background-image:url('../assets/images/spravato-banner.png'); background-position: center 30%;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/90 to-transparent lg:bg-gradient-to-r lg:from-primary lg:via-primary/80 lg:to-transparent"></div>
                    <div class="relative z-10 p-4 sm:p-6 lg:p-12 xl:p-16 h-full flex items-center">
                        <div class="w-full">
                            <div class="inline-flex items-center gap-2 bg-secondary text-primary text-xs font-bold px-3 py-1.5 sm:px-4 sm:py-2 rounded-full mb-3 sm:mb-6">FDA-Approved</div>
                            <h3 class="font-sans text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2 sm:mb-4">Spravato®</h3>
                            <p class="text-base sm:text-lg lg:text-xl text-white/80 leading-relaxed mb-4 sm:mb-6 max-w-xl">Esketamine nasal spray for treatment-resistant depression. Works within hours, not weeks.</p>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-4 mb-4 sm:mb-8">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">24hrs</div>
                                    <p class="text-white/70 text-xs sm:text-sm">Fast Relief</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">$10</div>
                                    <p class="text-white/70 text-xs sm:text-sm">Per Session</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">100%</div>
                                    <p class="text-white/70 text-xs sm:text-sm">REMS Certified</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">2hrs</div>
                                    <p class="text-white/70 text-xs sm:text-sm">Per Visit</p>
                                </div>
                            </div>
                            <a href="spravato-therapy.php" class="inline-flex items-center gap-2 px-4 sm:px-6 lg:px-8 py-2.5 sm:py-3 lg:py-4 bg-secondary text-primary font-bold rounded-xl sm:rounded-2xl hover:bg-white hover:shadow-xl transition-all text-sm sm:text-base">Learn More <i data-lucide="arrow-right" class="w-4 sm:w-5 h-4 sm:h-5"></i></a>
                        </div>
                    </div>
                </div>

                <!-- ProLivRx Content -->
                <div id="content-prolivrx" class="tab-content absolute inset-0 transition-all duration-500 opacity-0 pointer-events-none translate-x-8">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('../assets/images/Proliv™Rx-IMG-FINAL.png');"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/90 to-transparent lg:bg-gradient-to-r lg:from-primary lg:via-primary/80 lg:to-transparent"></div>
                    <div class="relative z-10 p-4 sm:p-6 lg:p-12 xl:p-16 h-full flex items-center">
                        <div class="w-full">
                            <div class="inline-flex items-center gap-2 bg-secondary text-primary text-xs font-bold px-3 py-1.5 sm:px-4 sm:py-2 rounded-full mb-3 sm:mb-6">FDA-Approved</div>
                            <h3 class="font-sans text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2 sm:mb-4">ProLivRx™</h3>
                            <p class="text-base sm:text-lg lg:text-xl text-white/80 leading-relaxed mb-4 sm:mb-6 max-w-xl">Physician-directed at-home brain stimulation for Major Depressive Disorder.</p>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-4 mb-4 sm:mb-8">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">Home</div>
                                    <p class="text-white/70 text-xs sm:text-sm">Use At Home</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">VNS</div>
                                    <p class="text-white/70 text-xs sm:text-sm">Non-Invasive</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">MDD</div>
                                    <p class="text-white/70 text-xs sm:text-sm">FDA Cleared</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl sm:rounded-2xl p-2 sm:p-4 text-center">
                                    <div class="text-xl sm:text-2xl lg:text-3xl font-bold text-secondary mb-1">Portable</div>
                                    <p class="text-white/70 text-xs sm:text-sm">Easy to Use</p>
                                </div>
                            </div>
                            <a href="proliv-rx.php" class="inline-flex items-center gap-2 px-4 sm:px-6 lg:px-8 py-2.5 sm:py-3 lg:py-4 bg-secondary text-primary font-bold rounded-xl sm:rounded-2xl hover:bg-white hover:shadow-xl transition-all text-sm sm:text-base">Learn More <i data-lucide="arrow-right" class="w-4 sm:w-5 h-4 sm:h-5"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CONDITIONS -->
    <section class="py-16 bg-neutral reveal" id="conditions">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <div class="flex items-center gap-3 mb-4 justify-center"><div class="w-12 h-0.5 bg-secondary"></div><span class="text-secondary text-xs font-semibold tracking-[0.2em] uppercase">Conditions We Treat</span></div>
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-primary mb-4">Comprehensive Mental Health <span class="text-secondary">Care</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Expert psychiatric care for a range of mental health conditions using advanced, evidence-based treatments.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="depression.php" class="bg-white rounded-2xl p-6 text-center shadow-soft hover:shadow-xl transition-all hover:-translate-y-1 block">
                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary mx-auto mb-4">
                        <i data-lucide="heart-pulse" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-2">Depression</h3>
                    <p class="text-gray-500 text-sm">Treatment-resistant depression, major depressive disorder</p>
                </a>
                <a href="anxiety.php" class="bg-white rounded-2xl p-6 text-center shadow-soft hover:shadow-xl transition-all hover:-translate-y-1 block">
                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary mx-auto mb-4">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-2">Anxiety</h3>
                    <p class="text-gray-500 text-sm">Generalized anxiety, panic disorders, social anxiety</p>
                </a>
                <a href="ocd.php" class="bg-white rounded-2xl p-6 text-center shadow-soft hover:shadow-xl transition-all hover:-translate-y-1 block">
                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary mx-auto mb-4">
                        <i data-lucide="repeat" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-2">OCD</h3>
                    <p class="text-gray-500 text-sm">Obsessive-compulsive disorder with TMS protocols</p>
                </a>
                <a href="ptsd.php" class="bg-white rounded-2xl p-6 text-center shadow-soft hover:shadow-xl transition-all hover:-translate-y-1 block">
                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary mx-auto mb-4">
                        <i data-lucide="shield" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-2">PTSD</h3>
                    <p class="text-gray-500 text-sm">Post-traumatic stress disorder and trauma</p>
                </a>
                <a href="adhd.php" class="bg-white rounded-2xl p-6 text-center shadow-soft hover:shadow-xl transition-all hover:-translate-y-1 block">
                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary mx-auto mb-4">
                        <i data-lucide="focus" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-2">Adult ADHD</h3>
                    <p class="text-gray-500 text-sm">Attention deficit hyperactivity disorder</p>
                </a>
                <a href="bipolar.php" class="bg-white rounded-2xl p-6 text-center shadow-soft hover:shadow-xl transition-all hover:-translate-y-1 block">
                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary mx-auto mb-4">
                        <i data-lucide="wind" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-2">Bipolar</h3>
                    <p class="text-gray-500 text-sm">Bipolar disorder management and treatment</p>
                </a>
                <a href="medication-management.php" class="bg-white rounded-2xl p-6 text-center shadow-soft hover:shadow-xl transition-all hover:-translate-y-1 block">
                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary mx-auto mb-4">
                        <i data-lucide="pill" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-2">Medication Management</h3>
                    <p class="text-gray-500 text-sm">Psychiatric medications with holistic approach</p>
                </a>
                <a href="autism.php" class="bg-white rounded-2xl p-6 text-center shadow-soft hover:shadow-xl transition-all hover:-translate-y-1 block">
                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary mx-auto mb-4">
                        <i data-lucide="users" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-2">Autism Support</h3>
                    <p class="text-gray-500 text-sm">Co-occurring mental health conditions support</p>
                </a>
            </div>
        </div>
    </section>

    <!-- PROVIDER -->
    <section class="py-16 bg-white reveal" id="about">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <a href="team.php"><img src="../assets/images/mental-Health/TMS/Dr.-L-tms.webp" alt="Dr. Stefani LaFrenierre" class="rounded-3xl w-full h-[450px] object-cover object-[50%_20%] shadow-soft hover:opacity-90 transition-opacity cursor-pointer"></a>
                </div>
                <div>
                    <div class="flex items-center gap-3 mb-4"><div class="w-12 h-0.5 bg-secondary"></div><span class="text-secondary text-xs font-semibold tracking-[0.2em] uppercase">Your Psychiatrist</span></div>
                    <h2 class="font-sans text-3xl md:text-4xl font-bold text-primary mb-6">Care Led by <span class="text-secondary">Dr. LaFrenierre</span></h2>
                    <div class="border-l-4 border-secondary bg-white rounded-r-xl p-6 mb-6 shadow-soft">
                        <p class="text-gray-600 leading-relaxed">Dr. Stefani LaFrenierre is a board-certified psychiatrist leading all treatment programs at our Irvine location. With extensive training in interventional psychiatry and neuromodulation, she ensures every patient receives expert, personalized care.</p>
                    </div>
                    <p class="leading-relaxed mb-6">Dr. LaFrenierre combines cutting-edge treatments like Deep TMS, Spravato, and ProLivRx with integrative psychiatry to address the whole person—not just symptoms.</p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-semibold text-primary shadow-soft">BrainsWay Ultra Provider</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-semibold text-primary shadow-soft">REMS Certified</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-semibold text-primary shadow-soft">8,000+ TMS Treatments</span>
                    </div>
                    <a href="contact.php" class="inline-flex items-center gap-2 px-8 py-3.5 bg-secondary text-primary font-bold rounded-2xl hover:bg-primary hover:text-white hover:shadow-xl transition-all">Schedule Consultation <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- INSURANCE -->
    <section class="py-16 bg-neutral reveal" id="insurance">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4"><div class="w-12 h-0.5 bg-secondary"></div><span class="text-secondary text-xs font-semibold tracking-[0.2em] uppercase">Insurance & Pricing</span></div>
                    <h2 class="font-sans text-3xl md:text-4xl font-bold text-primary mb-6">Insurance <span class="text-secondary">Accepted</span></h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">We work with most major insurance providers to make treatment accessible. Our team handles benefits verification and prior authorization at no cost.</p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="bg-primary/10 px-4 py-2 rounded-full text-sm font-semibold text-primary">Aetna</span>
                        <span class="bg-primary/10 px-4 py-2 rounded-full text-sm font-semibold text-primary">Anthem</span>
                        <span class="bg-primary/10 px-4 py-2 rounded-full text-sm font-semibold text-primary">Cigna</span>
                        <span class="bg-primary/10 px-4 py-2 rounded-full text-sm font-semibold text-primary">United Healthcare</span>
                        <span class="bg-primary/10 px-4 py-2 rounded-full text-sm font-semibold text-primary">Medicare</span>
                        <span class="bg-primary/10 px-4 py-2 rounded-full text-sm font-semibold text-primary">TriCare</span>
                        <span class="bg-primary/10 px-4 py-2 rounded-full text-sm font-semibold text-primary">Blue Cross</span>
                        <span class="bg-primary/10 px-4 py-2 rounded-full text-sm font-semibold text-primary">Kaiser</span>
                    </div>
                    <a href="contact.php" class="inline-flex items-center gap-2 px-8 py-3.5 bg-secondary text-primary font-bold rounded-full hover:bg-primary hover:text-white transition-all">Verify Your Benefits <i data-lucide="arrow-right" class="w-5 h-5"></i></a>
                </div>
                <div class="bg-neutral rounded-3xl p-8 shadow-soft">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-2xl bg-secondary/20 flex items-center justify-center text-secondary">
                            <i data-lucide="file-check-2" class="w-6 h-6"></i>
                        </div>
                        <h3 class="font-bold text-xl text-primary">Free Benefits Verification</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6">Before starting treatment, we'll verify your insurance coverage and explain any out-of-pocket costs. No surprises.</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-secondary flex-shrink-0"></i>
                            <span class="text-gray-600">No cost for benefits verification</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-secondary flex-shrink-0"></i>
                            <span class="text-gray-600">We handle prior authorization</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-secondary flex-shrink-0"></i>
                            <span class="text-gray-600">Transparent pricing before treatment</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-secondary flex-shrink-0"></i>
                            <span class="text-gray-600">Flexible payment plans available</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCATION / MAP -->
    <section class="py-16 bg-white reveal" id="location">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <div class="flex items-center gap-3 mb-4 justify-center"><div class="w-12 h-0.5 bg-secondary"></div><span class="text-secondary text-xs font-semibold tracking-[0.2em] uppercase">Find Us</span></div>
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-primary mb-4">Visit Our <span class="text-secondary">Nearest Clinics</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our Irvine location is served by our flagship clinics in Newport Beach and San Juan Capistrano. Easy access from the 405, 5, and 55 freeways.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Newport Beach -->
                <div class="bg-neutral rounded-3xl p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-2xl bg-secondary/20 flex items-center justify-center text-secondary">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <h4 class="font-bold text-xl text-primary">Newport Beach</h4>
                    </div>
                    <p class="text-gray-600 mb-4">1501 Superior Ave, Suite 210<br>Newport Beach, CA 92663</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://maps.google.com/?q=1501+Superior+Ave+Newport+Beach+CA+92663" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-5 py-2.5 bg-secondary text-primary font-semibold rounded-full hover:bg-primary hover:text-white transition-all text-sm">
                            <i data-lucide="navigation" class="w-4 h-4"></i> Get Directions
                        </a>
                        <a href="tel:+19499965355" class="inline-flex items-center gap-2 px-5 py-2.5 bg-transparent border-2 border-primary text-primary font-semibold rounded-full hover:bg-primary hover:text-white transition-all text-sm">
                            <i data-lucide="phone" class="w-4 h-4"></i> (949) 996-5355
                        </a>
                    </div>
                </div>
                <!-- San Juan Capistrano -->
                <div class="bg-neutral rounded-3xl p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-2xl bg-secondary/20 flex items-center justify-center text-secondary">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <h4 class="font-bold text-xl text-primary">San Juan Capistrano</h4>
                    </div>
                    <p class="text-gray-600 mb-4">27184 Ortega Hwy, STE 103<br>San Juan Capistrano, CA 92675</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://maps.google.com/?q=27184+Ortega+Hwy+San+Juan+Capistrano+CA+92675" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-5 py-2.5 bg-secondary text-primary font-semibold rounded-full hover:bg-primary hover:text-white transition-all text-sm">
                            <i data-lucide="navigation" class="w-4 h-4"></i> Get Directions
                        </a>
                        <a href="tel:+19499965355" class="inline-flex items-center gap-2 px-5 py-2.5 bg-transparent border-2 border-primary text-primary font-semibold rounded-full hover:bg-primary hover:text-white transition-all text-sm">
                            <i data-lucide="phone" class="w-4 h-4"></i> (949) 996-5355
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-soft">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="font-bold text-2xl text-primary mb-4">Serving Irvine and Surrounding Areas</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">While we don't have a clinic directly in Irvine, our team proudly serves patients from Irvine, Costa Mesa, Huntington Beach, Tustin, Lake Forest, and surrounding Orange County communities at our Newport Beach and San Juan Capistrano locations.</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="contact.php" class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-primary font-bold rounded-2xl hover:bg-primary hover:text-white transition-all">
                                <i data-lucide="calendar" class="w-5 h-5"></i> Schedule Appointment
                            </a>
                            <a href="tel:+19499965355" class="inline-flex items-center gap-2 px-6 py-3 bg-transparent border-2 border-primary text-primary font-bold rounded-2xl hover:bg-primary hover:text-white transition-all">
                                <i data-lucide="phone" class="w-5 h-5"></i> Call (949) 996-5355
                            </a>
                        </div>
                    </div>
                    <div class="rounded-3xl overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.1234567890!2d-117.8229!3d33.6846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDQwJzU2LjMiTiAxMTfCsDQ5JzI1LjYiVw!5e0!3m2!1sen!2sus!4v1234567890" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-neutral reveal" id="faq">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <div class="flex items-center gap-3 mb-4 justify-center"><div class="w-12 h-0.5 bg-secondary"></div><span class="text-secondary text-xs font-semibold tracking-[0.2em] uppercase">Common Questions</span></div>
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-primary mb-4">Frequently Asked <span class="text-secondary">Questions</span></h2>
            </div>
            <div class="space-y-4">
                <div class="bg-white rounded-2xl shadow-soft overflow-hidden reveal">
                    <button class="faq-toggle w-full px-6 py-5 text-left font-bold text-lg flex items-center justify-between hover:bg-gray-50 transition-colors group">
                        <span>What treatments are available at the Irvine location?</span>
                        <div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-primary transition-colors">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed hidden faq-content">
                        <div class="pt-4 border-t border-gray-100">Our Irvine clinic offers Deep TMS Therapy, Spravato® (esketamine) treatment, and ProLivRx™ for depression and related conditions.</div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-soft overflow-hidden reveal">
                    <button class="faq-toggle w-full px-6 py-5 text-left font-bold text-lg flex items-center justify-between hover:bg-gray-50 transition-colors group">
                        <span>Is Deep TMS covered by insurance?</span>
                        <div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-primary transition-colors">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed hidden faq-content">
                        <div class="pt-4 border-t border-gray-100">Yes, Deep TMS is FDA-cleared and most insurance providers cover it for depression and OCD. We handle benefits verification and prior authorization at no cost.</div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-soft overflow-hidden reveal">
                    <button class="faq-toggle w-full px-6 py-5 text-left font-bold text-lg flex items-center justify-between hover:bg-gray-50 transition-colors group">
                        <span>How is Spravato different from regular ketamine?</span>
                        <div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-primary transition-colors">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed hidden faq-content">
                        <div class="pt-4 border-t border-gray-100">Spravato is FDA-approved esketamine nasal spray administered in-office under medical supervision. It works within hours rather than weeks, unlike traditional antidepressants.</div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-soft overflow-hidden reveal">
                    <button class="faq-toggle w-full px-6 py-5 text-left font-bold text-lg flex items-center justify-between hover:bg-gray-50 transition-colors group">
                        <span>Do I need a referral to schedule an appointment?</span>
                        <div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-primary transition-colors">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed hidden faq-content">
                        <div class="pt-4 border-t border-gray-100">No referral is required. You can schedule directly by calling (949) 996-5355 or booking online. We also accept referrals from primary care physicians and other mental health providers.</div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-soft overflow-hidden reveal">
                    <button class="faq-toggle w-full px-6 py-5 text-left font-bold text-lg flex items-center justify-between hover:bg-gray-50 transition-colors group">
                        <span>What should I expect during my first visit?</span>
                        <div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-primary transition-colors">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed hidden faq-content">
                        <div class="pt-4 border-t border-gray-100">Your first visit includes a comprehensive psychiatric evaluation, review of your medical history, and discussion of treatment options tailored to your needs.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / CONTACT -->
    <section class="py-16 relative overflow-hidden reveal" id="contact">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="../assets/images/home/cta-bg.png" alt="Clinical Environment" class="w-full h-full object-cover object-center">
        </div>
        <!-- Dark Overlay -->
        <div class="absolute inset-0 z-0 bg-primary/70"></div>
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 z-0 bg-gradient-to-t from-primary via-transparent to-transparent opacity-80"></div>

        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
            <span class="inline-block py-1 px-4 rounded-full bg-white/10 text-secondary text-sm font-semibold tracking-wider uppercase mb-8 border border-secondary/30 backdrop-blur-sm">
                Begin Your Healing Journey
            </span>
            <h2 class="font-sans text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                Take the First Step Toward <br class="hidden md:block"/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">Better Mental Health</span>
            </h2>
            <p class="text-xl text-gray-300 mb-12 font-light max-w-3xl mx-auto leading-relaxed">
                Schedule your consultation at our Irvine clinic. We'll help you determine which treatment—Deep TMS, Spravato®, or ProLivRx™—is right for you.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="tel:+19499965355" class="group inline-flex items-center justify-center bg-secondary hover:bg-white text-primary font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl text-lg w-full sm:w-auto">
                    <i data-lucide="phone" class="w-5 h-5 mr-2"></i> Call (949) 996-5355
                </a>
                <a href="contact.php" class="group inline-flex items-center justify-center bg-white/5 hover:bg-white/10 border-2 border-white/20 hover:border-white/40 text-white font-semibold px-10 py-5 rounded-full transition-all duration-300 text-lg w-full sm:w-auto">
                    Schedule Consultation
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER INCLUDE -->
    <?php include '../footer.php'; ?>

    <!-- Floating CTA -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="tel:+19499965355" class="bg-secondary hover:bg-secondary/90 text-primary w-14 h-14 rounded-full flex items-center justify-center shadow-lg transition-all hover:scale-110">
            <i data-lucide="phone" class="w-6 h-6"></i>
        </a>
    </div>

    <!-- Custom Scripts -->
    <script src="../js/main.js"></script>
    <script>
        lucide.createIcons();

        // Reveal animations
        const obs = new IntersectionObserver(e => e.forEach(el => {
            if (el.isIntersecting) el.target.classList.add('visible');
        }), { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(a => a.addEventListener('click', function(e) {
            const t = document.querySelector(this.getAttribute('href'));
            if (t) {
                e.preventDefault();
                t.scrollIntoView({ behavior: 'smooth' });
            }
        }));

        // Tab switching
        function switchTab(tab) {
            const tabs = ['tms', 'spravato', 'prolivrx'];
            tabs.forEach(t => {
                const tabBtn = document.getElementById('tab-' + t);
                const content = document.getElementById('content-' + t);
                if (t === tab) {
                    tabBtn.classList.add('bg-primary', 'text-white', 'shadow-lg');
                    tabBtn.classList.remove('bg-neutral', 'text-primary', 'hover:bg-gray-200');
                    content.classList.remove('opacity-0', 'pointer-events-none', 'translate-x-8');
                    content.classList.add('opacity-100', 'translate-x-0');
                } else {
                    tabBtn.classList.remove('bg-primary', 'text-white', 'shadow-lg');
                    tabBtn.classList.add('bg-neutral', 'text-primary', 'hover:bg-gray-200');
                    content.classList.add('opacity-0', 'pointer-events-none', 'translate-x-8');
                    content.classList.remove('opacity-100', 'translate-x-0');
                }
            });
        }

        // FAQ toggle
        document.querySelectorAll('.faq-toggle').forEach(btn => {
            btn.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('i');
                const isOpen = !content.classList.contains('hidden');

                // Close all
                document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
                document.querySelectorAll('.faq-toggle i').forEach(i => {
                    i.setAttribute('data-lucide', 'plus');
                });

                // Toggle current
                if (!isOpen) {
                    content.classList.remove('hidden');
                    icon.setAttribute('data-lucide', 'minus');
                }
                lucide.createIcons();
            });
        });
    </script>
</body>
</html>