<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden pt-24">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/service_wellness.png" alt="Aesthetic & Skin Treatments" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0B2035]/95 via-[#0B2035]/80 to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-sm font-bold tracking-widest uppercase">Medical Aesthetics</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-6">
                    Aesthetic &<br/><span class="text-[#23bfe2] font-light">Skin Treatments</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed font-light max-w-2xl">
                    Expert cosmetic injectables, microneedling, and skin rejuvenation treatments at our Newport Beach medspa—enhancing your natural beauty with physician-supervised precision.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Book a Consultation <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#services" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        View Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach - White BG -->
    <section id="our-approach" class="py-16 relative overflow-hidden bg-white">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Approach</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Beauty Meets Medicine</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        At Resiliency, we believe that looking your best supports feeling your best. Our aesthetic services are delivered with the same physician-supervised precision as our psychiatric care—customized to produce natural enhancements that complement your overall wellness journey. Whether you're exploring cosmetic injectables for the first time or maintaining a regular rejuvenation routine, our team ensures safe, beautiful results. Consultations are always free.
                    </p>

                    <div class="bg-neutral p-6 rounded-2xl mb-8 border border-gray-100">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Physician-supervised, nurse-administered</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Natural-looking results customized to you</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Free consultations for all aesthetic services</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/service_wellness.png" alt="Aesthetic treatments at Resiliency" class="w-full h-[550px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>

                    <!-- Floating Stat Badge -->
                    <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-3xl border border-gray-100 shadow-[0_20px_40px_-10px_rgba(11,32,53,0.15)] flex items-center gap-5 group hover:-translate-y-2 transition-transform duration-500">
                        <div class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-500">
                            <i data-lucide="gift" class="w-8 h-8"></i>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-[#0B2035] tracking-tight">Free</p>
                            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest mt-1">Consultations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cosmetic Injectables - Dark BG -->
    <section id="services" class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <!-- Decorative Background -->
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Cosmetic Injectables</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Dermal Fillers & Neurotoxins</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="sparkles" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Botox & Jeuveau</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Smooth forehead lines, crow's feet, and frown lines with precision neurotoxin injections. Results appear within days and last 3-4 months.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="droplets" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Dermal Fillers</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Restore volume and contour with Juvederm and Versa fillers for lips, cheeks, jawline, tear troughs, and laugh lines.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="diamond" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Sculptra</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Collagen-stimulating injectable that restores facial volume and reduces wrinkles by repairing underlying skin structure. Results last up to 2 years.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="droplet" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">SKINVIVE</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Injectable hydration gel that improves skin quality, increases hydration, and creates a natural glow. Results last up to 6 months.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Skin Treatments - White BG -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Skin Rejuvenation</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Advanced Skin Treatments</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Card 1 - SkinPen Microneedling -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="scan-line" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">SkinPen Microneedling</h4>
                    <p class="text-gray-500 font-light leading-relaxed">The first FDA-cleared microneedling device. SkinPen Precision creates controlled micro-injuries that trigger your body's natural healing response, stimulating collagen production to improve acne scars, fine lines, wrinkles, sun damage, large pores, and overall skin texture. Results last up to 6 months with minimal downtime.</p>
                </div>

                <!-- Card 2 - Chemical Peels & Skincare -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="sun" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Chemical Peels & Skincare</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Medical-grade peels and customized skincare protocols to address hyperpigmentation, acne, dullness, and uneven texture. Our providers recommend treatments based on your unique skin type and goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Peptides & Vitamin Boosters - Light BG -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Wellness Enhancements</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Peptides & Vitamin Boosters</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="heart" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Oxytocin</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">A natural hormone that helps decrease stress and anxiety, improves social bonding, lowers cortisol levels, and may improve PTSD symptoms and libido.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="trending-up" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Sermorelin</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">A synthetic growth hormone releaser that promotes better sleep, improved body composition, faster healing, enhanced cognition, and elevated mood.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="zap" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">ShapeUp Booster</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Vitamin and amino acid blend that enhances cognitive function, increases metabolism, regulates mood, and promotes brain function.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Triple Defense</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Glutathione, Vitamin C, and Zinc combined for immune support, healing, and antioxidant protection.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Benefits Grid -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">The Advantages</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Why Choose Resiliency?</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">Experience the difference of physician-supervised aesthetics rooted in medical expertise and personalized care.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="user-check" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Medical Expertise</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Every treatment supervised by physicians with deep knowledge of facial anatomy and skin science.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="sparkles" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Natural Results</h4>
                    <p class="text-gray-500 font-light leading-relaxed">We specialize in subtle, natural-looking enhancements—never overdone.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">FDA-Cleared Devices</h4>
                    <p class="text-gray-500 font-light leading-relaxed">We use only FDA-cleared products and devices including SkinPen Precision, Juvederm, and Sculptra.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="timer" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Minimal Downtime</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Most treatments require little to no recovery time—return to your day immediately.</p>
                </div>

                <!-- Benefit 5 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="calendar" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Free Consultations</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Not sure where to start? Every aesthetic consultation is complimentary.</p>
                </div>

                <!-- Benefit 6 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="heart" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Mind-Body Connection</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Aesthetic wellness integrated with mental health care for a truly holistic approach to feeling your best.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-[#0B2035] text-white relative border-t-[8px] border-[#23bfe2]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Common Questions</h2>
                <h3 class="text-4xl md:text-5xl font-bold">Frequently Asked Questions</h3>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>How do I know which treatment is right for me?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Start with a free consultation. Our providers assess your skin, discuss your goals, and recommend a personalized treatment plan—whether that's neurotoxins, fillers, microneedling, or a combination approach.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>How long do results last?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Results vary by treatment. Botox and Jeuveau last 3-4 months, dermal fillers 6-18 months depending on the product and area, Sculptra up to 2 years, SKINVIVE up to 6 months, and microneedling results up to 6 months.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Is there downtime?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Most injectable treatments have minimal downtime—you may experience mild swelling or bruising for 1-2 days. Microneedling may cause redness for 24-48 hours. Our team provides detailed aftercare instructions.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Are aesthetic treatments safe?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Yes. All treatments are physician-supervised and performed by trained, licensed providers using FDA-cleared products and devices. We prioritize your safety and natural-looking results.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-400 font-light">Have more questions? <a href="#contact" class="text-[#23bfe2] font-semibold hover:text-white transition-colors underline underline-offset-4 decoration-[#23bfe2]/30 hover:decoration-white">Contact our clinical team.</a></p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Look and Feel Your Best?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Schedule your complimentary aesthetic consultation and discover treatments customized to enhance your natural beauty.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Book a Free Consultation
                        <i data-lucide="arrow-up-right" class="w-6 h-6 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </span>
                </a>
                <a href="tel:+19499965355" class="inline-flex items-center gap-2 text-[#0B2035] font-bold hover:text-[#23bfe2] transition-colors text-lg">
                    <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const triggers = document.querySelectorAll('.faq-toggle');
        triggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                const icon = trigger.querySelector('[data-lucide="plus"]');
                const content = trigger.nextElementSibling;

                if (content.classList.contains('hidden')) {
                    // Close others
                    triggers.forEach(other => {
                        if (other !== trigger) {
                            other.nextElementSibling.classList.add('hidden');
                            other.querySelector('[data-lucide="plus"]').style.transform = 'rotate(0deg)';
                        }
                    });

                    content.classList.remove('hidden');
                    if (icon) icon.style.transform = 'rotate(45deg)';
                } else {
                    content.classList.add('hidden');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>

<?php include 'footer.php'; ?>