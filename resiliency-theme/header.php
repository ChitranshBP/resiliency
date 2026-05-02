<?php
/**
 * Header Template
 *
 * @package Resiliency
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    // Structured Data Meta Variables (can be overridden per page/template)
    $page_schema = isset($page_schema) ? $page_schema : '';
    ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11289954101"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-11289954101');
    </script>

    <!-- Geo / Location Meta -->
    <meta name="geo.region" content="US-CA">
    <meta name="geo.placename" content="Newport Beach, Orange County, California">
    <meta name="geo.position" content="33.6189;-117.9289">
    <meta name="ICBM" content="33.6189, -117.9289">

    <?php wp_head(); ?>
</head>
<body <?php body_class('font-sans text-gray-800 bg-surface antialiased selection:bg-accent selection:text-white'); ?>>

<?php wp_body_open(); ?>

<!-- Sticky Navigation -->
<header id="header" class="group fixed w-full top-0 z-50 transition-all duration-300 bg-transparent border-b border-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-24 transition-all duration-300 group-[.scrolled]:h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/Resiliency-MindBody-Medicine-Logo.png" alt="<?php bloginfo('name'); ?>" class="h-16 w-auto object-contain transition-all duration-300 brightness-0 invert group-[.scrolled]:filter-none">
                        <?php
                    }
                    ?>
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex items-center space-x-8">

                <!-- Mental Health Dropdown -->
                <div class="relative group/mh">
                    <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                        Mental Health <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/mh:rotate-180"></i>
                    </button>
                    <div class="absolute top-[80px] left-1/2 -translate-x-1/2 w-72 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/mh:opacity-100 group-hover/mh:visible transition-all duration-300 transform translate-y-4 group-hover/mh:translate-y-0 border border-gray-100">
                        <div class="p-2 space-y-1">
                            <a href="<?php echo esc_url(home_url('/tms-newportbeach/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Deep TMS Therapy</a>
                            <a href="<?php echo esc_url(home_url('/accelerated-tms-orange-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Accelerated Deep TMS (SWIFT)</a>

                            <!-- TMS Applications Submenu -->
                            <div class="relative group/tms-sub">
                                <button class="w-full flex items-center justify-between px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">
                                    <span>TMS Applications</span>
                                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                                </button>
                                <div class="absolute top-0 left-full ml-4 w-72 bg-white rounded-2xl shadow-[0_25px_50px_-10px_rgba(11,32,53,0.25)] opacity-0 invisible group-hover/tms-sub:opacity-100 group-hover/tms-sub:visible transition-all duration-300 transform -translate-x-2 group-hover/tms-sub:translate-x-0 border border-gray-100 z-[60]">
                                    <div class="p-2 space-y-1">
                                        <div class="px-4 pt-2 pb-1">
                                            <p class="text-[10px] font-bold tracking-widest text-[#23bfe2] uppercase">TMS Applications</p>
                                        </div>
                                        <a href="<?php echo esc_url(home_url('/tms-for-mental-boost/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">TMS for Mental Boost</a>
                                        <a href="<?php echo esc_url(home_url('/tms-for-psychosis/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">TMS for Psychosis</a>
                                        <a href="<?php echo esc_url(home_url('/tms-for-cannabis-induced-psychosis/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">TMS for Cannabis-Induced Psychosis</a>
                                    </div>
                                </div>
                            </div>

                            <a href="<?php echo esc_url(home_url('/spravato-treatment-in-orange-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Spravato® Treatment</a>
                            <a href="<?php echo esc_url(home_url('/conservative-medication-management/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Medication Management</a>
                            <a href="<?php echo esc_url(home_url('/pharmacogenetic-testing/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Pharmacogenetic Testing</a>
                            <a href="<?php echo esc_url(home_url('/integrative-psychiatry-orange-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Integrative Psychiatry</a>
                            <a href="<?php echo esc_url(home_url('/proliv-rx/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Proliv™ Rx</a>
                            <a href="<?php echo esc_url(home_url('/telehealth/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Telehealth Visits</a>
                            <a href="<?php echo esc_url(home_url('/vns-therapy/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">VNS Therapy</a>
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
                            <a href="<?php echo esc_url(home_url('/iv-therapy-newport-beach-ca/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">IV Vitamin Therapy</a>
                            <a href="<?php echo esc_url(home_url('/nad-iv-therapy/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">NAD+ Therapy</a>
                            <a href="<?php echo esc_url(home_url('/weight-loss-in-orange-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Medical Weight Loss</a>
                            <a href="<?php echo esc_url(home_url('/hormone-therapy/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Hormone Therapy</a>
                            <a href="<?php echo esc_url(home_url('/supplements-newport-beach-ca/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Supplements</a>
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
                            <a href="<?php echo esc_url(home_url('/tms-for-depression-orange-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Depression</a>
                            <a href="<?php echo esc_url(home_url('/tms-for-anxiety-newport-beach-ca/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Anxiety</a>
                            <a href="<?php echo esc_url(home_url('/tms-for-ocd-newport-beach-ca/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">OCD</a>
                            <a href="<?php echo esc_url(home_url('/tms-for-ptsd-orange-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">PTSD</a>
                            <a href="<?php echo esc_url(home_url('/adhd-treatment-in-orange-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">ADHD</a>
                            <a href="<?php echo esc_url(home_url('/tms-for-bipolar-disorder/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Bipolar Disorder</a>
                            <a href="<?php echo esc_url(home_url('/tms-for-substance-abuse/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Substance Abuse</a>
                            <a href="<?php echo esc_url(home_url('/autism-spectrum-support-orange-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Autism</a>
                            <a href="<?php echo esc_url(home_url('/treatment-for-suicidal-ideation-oragne-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Suicidal Ideation</a>
                            <a href="<?php echo esc_url(home_url('/mental-clarity/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Mental Clarity</a>
                            <a href="<?php echo esc_url(home_url('/cognitive-enhancement/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Cognitive Enhancement</a>
                            <a href="<?php echo esc_url(home_url('/conditions/')); ?>" class="block px-4 py-3 text-sm text-[#23bfe2] hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">View All Conditions →</a>
                        </div>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/our-team/')); ?>" class="text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">Meet The Team</a>

                <!-- Resources Dropdown -->
                <div class="relative group/res">
                    <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                        Resources <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/res:rotate-180"></i>
                    </button>
                    <div class="absolute top-[80px] right-0 w-64 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/res:opacity-100 group-hover/res:visible transition-all duration-300 transform translate-y-4 group-hover/res:translate-y-0 border border-gray-100 overflow-hidden max-h-[70vh] overflow-y-auto">
                        <div class="p-2 space-y-1">
                            <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">About Us</a>
                            <a href="<?php echo esc_url(home_url('/our-reviews/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Patient Reviews</a>
                            <a href="<?php echo esc_url(home_url('/metrics/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Our Outcomes</a>
                            <a href="<?php echo esc_url(home_url('/faqs/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">FAQs</a>
                            <a href="<?php echo esc_url(home_url('/tms-faq/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Deep TMS FAQ</a>
                            <a href="<?php echo esc_url(home_url('/tms-resources/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Deep TMS Resources</a>
                            <a href="<?php echo esc_url(home_url('/insurance/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Insurance</a>
                            <a href="<?php echo esc_url(home_url('/insurance/caloptima-orange-county/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">CalOptima Coverage</a>
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Blog</a>
                            <a href="<?php echo esc_url(home_url('/press-media/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Press / Media</a>
                            <a href="<?php echo esc_url(home_url('/new-patient-form/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Patient Forms</a>
                            <a href="<?php echo esc_url(home_url('/no-surprises-act-compliance/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Compliance</a>
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
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Contact Us</a>
                            <a href="<?php echo esc_url(home_url('/newport-beach/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Newport Beach Office</a>
                            <a href="<?php echo esc_url(home_url('/san-juan-capistrano/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">San Juan Capistrano Office</a>
                            <a href="<?php echo esc_url(home_url('/telehealth/')); ?>" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Telehealth / Virtual Visits</a>
                        </div>
                    </div>
                </div>

            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center space-x-4">
                <p class="text-sm font-semibold flex items-center gap-2 text-white group-[.scrolled]:text-primary transition-colors">
                    <i data-lucide="phone" class="w-4 h-4"></i> (949) 996-5355
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="bg-white text-primary hover:bg-gray-100 group-[.scrolled]:bg-primary group-[.scrolled]:text-white group-[.scrolled]:hover:bg-primary/90 px-6 py-2.5 rounded-full text-sm font-medium transition-all shadow-[0_4px_14px_0_rgba(255,255,255,0.39)] group-[.scrolled]:shadow-[0_4px_14px_0_rgba(11,32,53,0.39)] hover:-translate-y-0.5 transform">
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/Resiliency-MindBody-Medicine-Logo.png" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto brightness-0 invert">
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
                    <a href="<?php echo esc_url(home_url('/tms-newportbeach/')); ?>" class="text-white/80 hover:text-white transition-colors">Deep TMS Therapy</a>
                    <a href="<?php echo esc_url(home_url('/accelerated-tms-orange-county/')); ?>" class="text-white/80 hover:text-white transition-colors">Accelerated Deep TMS (SWIFT)</a>

                    <!-- Nested TMS Applications -->
                    <div>
                        <button class="mobile-accordion-toggle flex items-center justify-between w-full text-white/80 hover:text-white transition-colors">
                            TMS Applications <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
                        </button>
                        <div class="mobile-accordion-content hidden flex-col pl-4 pt-3 space-y-3">
                            <a href="<?php echo esc_url(home_url('/tms-for-mental-boost/')); ?>" class="text-white/70 hover:text-white transition-colors text-sm">TMS for Mental Boost</a>
                            <a href="<?php echo esc_url(home_url('/tms-for-psychosis/')); ?>" class="text-white/70 hover:text-white transition-colors text-sm">TMS for Psychosis</a>
                            <a href="<?php echo esc_url(home_url('/tms-for-cannabis-induced-psychosis/')); ?>" class="text-white/70 hover:text-white transition-colors text-sm">TMS for Cannabis-Induced Psychosis</a>
                        </div>
                    </div>

                    <a href="<?php echo esc_url(home_url('/spravato-treatment-in-orange-county/')); ?>" class="text-white/80 hover:text-white transition-colors">Spravato® Treatment</a>
                    <a href="<?php echo esc_url(home_url('/conservative-medication-management/')); ?>" class="text-white/80 hover:text-white transition-colors">Medication Management</a>
                    <a href="<?php echo esc_url(home_url('/pharmacogenetic-testing/')); ?>" class="text-white/80 hover:text-white transition-colors">Pharmacogenetic Testing</a>
                    <a href="<?php echo esc_url(home_url('/integrative-psychiatry-orange-county/')); ?>" class="text-white/80 hover:text-white transition-colors">Integrative Psychiatry</a>
                    <a href="<?php echo esc_url(home_url('/proliv-rx/')); ?>" class="text-white/80 hover:text-white transition-colors">Proliv™ Rx</a>
                    <a href="<?php echo esc_url(home_url('/telehealth/')); ?>" class="text-white/80 hover:text-white transition-colors">Telehealth Visits</a>
                    <a href="<?php echo esc_url(home_url('/vns-therapy/')); ?>" class="text-white/80 hover:text-white transition-colors">VNS Therapy</a>
                </div>
            </div>

            <!-- Wellness Accordion -->
            <div>
                <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                    Wellness <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                </button>
                <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                    <a href="<?php echo esc_url(home_url('/iv-therapy-newport-beach-ca/')); ?>" class="text-white/80 hover:text-white transition-colors">IV Vitamin Therapy</a>
                    <a href="<?php echo esc_url(home_url('/nad-iv-therapy/')); ?>" class="text-white/80 hover:text-white transition-colors">NAD+ Therapy</a>
                    <a href="<?php echo esc_url(home_url('/weight-loss-in-orange-county/')); ?>" class="text-white/80 hover:text-white transition-colors">Medical Weight Loss</a>
                    <a href="<?php echo esc_url(home_url('/hormone-therapy/')); ?>" class="text-white/80 hover:text-white transition-colors">Hormone Therapy</a>
                    <a href="<?php echo esc_url(home_url('/supplements-newport-beach-ca/')); ?>" class="text-white/80 hover:text-white transition-colors">Supplements</a>
                </div>
            </div>

            <!-- Conditions Accordion -->
            <div>
                <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                    Conditions We Treat <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                </button>
                <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                    <a href="<?php echo esc_url(home_url('/tms-for-depression-orange-county/')); ?>" class="text-white/80 hover:text-white transition-colors">Depression</a>
                    <a href="<?php echo esc_url(home_url('/tms-for-anxiety-newport-beach-ca/')); ?>" class="text-white/80 hover:text-white transition-colors">Anxiety</a>
                    <a href="<?php echo esc_url(home_url('/tms-for-ocd-newport-beach-ca/')); ?>" class="text-white/80 hover:text-white transition-colors">OCD</a>
                    <a href="<?php echo esc_url(home_url('/tms-for-ptsd-orange-county/')); ?>" class="text-white/80 hover:text-white transition-colors">PTSD</a>
                    <a href="<?php echo esc_url(home_url('/adhd-treatment-in-orange-county/')); ?>" class="text-white/80 hover:text-white transition-colors">ADHD</a>
                    <a href="<?php echo esc_url(home_url('/tms-for-bipolar-disorder/')); ?>" class="text-white/80 hover:text-white transition-colors">Bipolar Disorder</a>
                    <a href="<?php echo esc_url(home_url('/tms-for-substance-abuse/')); ?>" class="text-white/80 hover:text-white transition-colors">Substance Abuse</a>
                    <a href="<?php echo esc_url(home_url('/autism-spectrum-support-orange-county/')); ?>" class="text-white/80 hover:text-white transition-colors">Autism</a>
                    <a href="<?php echo esc_url(home_url('/treatment-for-suicidal-ideation-oragne-county/')); ?>" class="text-white/80 hover:text-white transition-colors">Suicidal Ideation</a>
                    <a href="<?php echo esc_url(home_url('/mental-clarity/')); ?>" class="text-white/80 hover:text-white transition-colors">Mental Clarity</a>
                    <a href="<?php echo esc_url(home_url('/cognitive-enhancement/')); ?>" class="text-white/80 hover:text-white transition-colors">Cognitive Enhancement</a>
                    <a href="<?php echo esc_url(home_url('/conditions/')); ?>" class="text-[#23bfe2] hover:text-white transition-colors">View All Conditions →</a>
                </div>
            </div>

            <a href="<?php echo esc_url(home_url('/our-team/')); ?>" class="text-lg font-medium text-white pb-2 border-b border-white/10 block">Meet The Team</a>

            <!-- Resources Accordion -->
            <div>
                <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                    Resources <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                </button>
                <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                    <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="text-white/80 hover:text-white transition-colors">About Us</a>
                    <a href="<?php echo esc_url(home_url('/our-reviews/')); ?>" class="text-white/80 hover:text-white transition-colors">Patient Reviews</a>
                    <a href="<?php echo esc_url(home_url('/metrics/')); ?>" class="text-white/80 hover:text-white transition-colors">Our Outcomes</a>
                    <a href="<?php echo esc_url(home_url('/faqs/')); ?>" class="text-white/80 hover:text-white transition-colors">FAQs</a>
                    <a href="<?php echo esc_url(home_url('/tms-faq/')); ?>" class="text-white/80 hover:text-white transition-colors">Deep TMS FAQ</a>
                    <a href="<?php echo esc_url(home_url('/tms-resources/')); ?>" class="text-white/80 hover:text-white transition-colors">Deep TMS Resources</a>
                    <a href="<?php echo esc_url(home_url('/insurance/')); ?>" class="text-white/80 hover:text-white transition-colors">Insurance</a>
                    <a href="<?php echo esc_url(home_url('/insurance/caloptima-orange-county/')); ?>" class="text-white/80 hover:text-white transition-colors">CalOptima Coverage</a>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="text-white/80 hover:text-white transition-colors">Blog</a>
                    <a href="<?php echo esc_url(home_url('/press-media/')); ?>" class="text-white/80 hover:text-white transition-colors">Press / Media</a>
                    <a href="<?php echo esc_url(home_url('/new-patient-form/')); ?>" class="text-white/80 hover:text-white transition-colors">Patient Forms</a>
                    <a href="<?php echo esc_url(home_url('/no-surprises-act-compliance/')); ?>" class="text-white/80 hover:text-white transition-colors">Compliance</a>
                </div>
            </div>

            <!-- Contact / Locations Accordion -->
            <div>
                <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                    Contact & Locations <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                </button>
                <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text-white/80 hover:text-white transition-colors">Contact Us</a>
                    <a href="<?php echo esc_url(home_url('/newport-beach/')); ?>" class="text-white/80 hover:text-white transition-colors">Newport Beach Office</a>
                    <a href="<?php echo esc_url(home_url('/san-juan-capistrano/')); ?>" class="text-white/80 hover:text-white transition-colors">San Juan Capistrano Office</a>
                    <a href="<?php echo esc_url(home_url('/telehealth/')); ?>" class="text-white/80 hover:text-white transition-colors">Telehealth / Virtual Visits</a>
                </div>
            </div>

        </nav>

        <div class="mt-10">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="bg-lightblue text-primary font-bold px-8 py-4 rounded-full text-center block w-full hover:bg-[#1aadd0] transition-colors">
                Book an Appointment
            </a>
        </div>
    </div>
</div>

<main id="main-content">