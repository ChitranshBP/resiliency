<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden pt-24">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Cherry Payment Plans" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0B2035]/95 via-[#0B2035]/80 to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-sm font-bold tracking-widest uppercase">Flexible Financing</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-6">
                    Cherry <span class="text-[#23bfe2] font-light">Payment Plans</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed font-light max-w-2xl">
                    Flexible payment plans through Cherry to make your care affordable&mdash;apply in seconds with no impact to your credit score.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#how-it-works" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Learn More <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:+19499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Simple Process</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">How It Works</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="text-center reveal">
                    <div class="w-20 h-20 bg-[#23bfe2]/10 rounded-full flex items-center justify-center text-[#23bfe2] mx-auto mb-6">
                        <span class="text-3xl font-bold">1</span>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Apply in Seconds</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Quick application with no hard credit check. Get approved in minutes.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center reveal reveal-delay-1">
                    <div class="w-20 h-20 bg-[#23bfe2]/10 rounded-full flex items-center justify-center text-[#23bfe2] mx-auto mb-6">
                        <span class="text-3xl font-bold">2</span>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Choose Your Plan</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Select a payment plan that fits your budget with competitive rates.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center reveal reveal-delay-2">
                    <div class="w-20 h-20 bg-[#23bfe2]/10 rounded-full flex items-center justify-center text-[#23bfe2] mx-auto mb-6">
                        <span class="text-3xl font-bold">3</span>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Start Treatment</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Begin your care immediately while making affordable monthly payments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What You Can Finance Section -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Eligible Services</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-6">What You Can Finance</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="sparkles" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">Aesthetic Treatments</h4>
                    <p class="text-gray-400 font-light mt-2">Botox, fillers, Sculptra</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal reveal-delay-1 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="droplets" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">IV Vitamin Therapy</h4>
                    <p class="text-gray-400 font-light mt-2">Revitalize with IV infusions</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal reveal-delay-2 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="zap" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">NAD+ Therapy</h4>
                    <p class="text-gray-400 font-light mt-2">Cellular renewal treatments</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="scale" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">Medical Weight Loss</h4>
                    <p class="text-gray-400 font-light mt-2">Physician-guided programs</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal reveal-delay-1 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="pill" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">Supplements</h4>
                    <p class="text-gray-400 font-light mt-2">Professional-grade supplements</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal reveal-delay-2 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="heart-handshake" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">Other Self-Pay Services</h4>
                    <p class="text-gray-400 font-light mt-2">Additional eligible treatments</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Why Cherry</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">Benefits</h3>
            </div>

            <div class="max-w-3xl mx-auto space-y-4 reveal">
                <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-soft">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                        <i data-lucide="check" class="w-5 h-5"></i>
                    </div>
                    <p class="text-[#0B2035] font-medium">No hard credit check to apply</p>
                </div>
                <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-soft">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                        <i data-lucide="check" class="w-5 h-5"></i>
                    </div>
                    <p class="text-[#0B2035] font-medium">Plans from 3&ndash;24 months</p>
                </div>
                <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-soft">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                        <i data-lucide="check" class="w-5 h-5"></i>
                    </div>
                    <p class="text-[#0B2035] font-medium">Competitive interest rates</p>
                </div>
                <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-soft">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                        <i data-lucide="check" class="w-5 h-5"></i>
                    </div>
                    <p class="text-[#0B2035] font-medium">Apply from your phone</p>
                </div>
                <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-soft">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                        <i data-lucide="check" class="w-5 h-5"></i>
                    </div>
                    <p class="text-[#0B2035] font-medium">Use for multiple treatments</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Apply Now</h2>
            <p class="text-gray-300 text-lg font-light mb-8 max-w-2xl mx-auto">Ask our team about Cherry at your next visit.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+19499965355" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i> Call (949) 996-5355
                </a>
                <a href="contact.php" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                    <i data-lucide="message-circle" class="w-5 h-5"></i> Contact Us
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
