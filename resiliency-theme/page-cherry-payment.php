<?php /* Template Name: Cherry Payment Plans */ ?>
<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[500px] md:h-[60vh] flex items-center justify-center overflow-hidden pt-28 pb-12 md:pt-24 md:pb-0">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_bg.png" alt="Cherry Payment Plans" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/60 md:bg-gradient-to-r md:from-[#0B2035]/75 md:via-[#0B2035]/50 md:to-[#0B2035]/20"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Payment Options</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Cherry <span class="text-[#23bfe2] font-light">Payment Plans</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Flexible healthcare financing options to help you access the mental health treatments you need.
                </p>
            </div>
        </div>
    </section>

    <!-- Cherry Intro Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-6">
                        Healthcare Financing <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Made Simple</span>
                    </h2>
                    <p class="text-lg text-gray-600 font-light leading-relaxed max-w-2xl mx-auto">
                        We partner with Cherry to offer flexible payment plans designed specifically for healthcare expenses. Breaking down barriers to care so you can focus on what matters most — your mental health and well-being.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 rounded-2xl p-8 text-center border border-gray-100">
                        <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="shield-check" class="w-8 h-8 text-[#23bfe2]"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#0B2035] mb-3">No Hard Credit Check</h3>
                        <p class="text-gray-600 font-light text-sm leading-relaxed">
                            Apply quickly and get a decision without impacting your credit score.
                        </p>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 text-center border border-gray-100">
                        <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="calendar" class="w-8 h-8 text-[#23bfe2]"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#0B2035] mb-3">Flexible Terms</h3>
                        <p class="text-gray-600 font-light text-sm leading-relaxed">
                            Choose payment plans that fit your budget with transparent terms.
                        </p>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 text-center border border-gray-100">
                        <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="credit-card" class="w-8 h-8 text-[#23bfe2]"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#0B2035] mb-3">0% Interest Options</h3>
                        <p class="text-gray-600 font-light text-sm leading-relaxed">
                            Select promotional offers with 0% interest for qualified patients.
                        </p>
                    </div>
                </div>

                <div class="bg-[#0B2035] rounded-3xl p-8 md:p-12 text-center">
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Ready to Get Started?</h3>
                    <p class="text-gray-300 font-light leading-relaxed mb-8 max-w-xl mx-auto">
                        Our team can walk you through the Cherry payment process and help you find a plan that works for your financial situation.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center gap-2 bg-[#23bfe2] text-[#0B2035] font-bold px-10 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform">
                        Contact Us Today <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>