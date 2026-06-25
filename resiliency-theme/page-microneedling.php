<?php /* Template Name: Microneedling */ ?>
<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[500px] md:h-[60vh] flex items-center justify-center overflow-hidden pt-28 pb-12 md:pt-24 md:pb-0">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service_wellness.png" alt="SkinPen Microneedling" class="w-full h-full object-cover object-[50%_30%]">
            <div class="absolute inset-0 bg-[#0B2035]/60 md:bg-gradient-to-r md:from-[#0B2035]/75 md:via-[#0B2035]/50 md:to-[#0B2035]/20"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Skin Rejuvenation</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    SkinPen <span class="text-[#23bfe2] font-light">Microneedling</span>
                    <span class="block text-base sm:text-lg md:text-xl font-normal text-white/70 mt-2 tracking-normal">in Newport Beach, CA</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    The first FDA-cleared microneedling device—stimulate your body's natural collagen production for smoother, firmer, more youthful skin at our Newport Beach clinic.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="<?php echo home_url('/contact'); ?>" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Book Your Session <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:9499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Microneedling - White BG -->
    <section id="what-is" class="py-16 relative overflow-hidden bg-white">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">About the Treatment</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">What is Microneedling?</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        SkinPen Precision creates controlled micro-injuries that trigger your body's natural healing response. Your immune system disinfects the wounds, removes debris, increases blood flow, and begins creating new tissue. The micro-wounds are rebuilt with new granulation cells containing collagen proteins, and remodeling produces new dermal tissues and blood vessels rich in collagen and elastin. Results last up to 6 months with quick treatment and little to no downtime.
                    </p>

                    <div class="bg-neutral p-6 rounded-2xl mb-8 border border-gray-100">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">FDA-cleared SkinPen Precision device</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Stimulates natural collagen production</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Minimal downtime, visible results</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="<?php echo get_template_directory_uri(); ?>/../../assets/images/resiliency-microneedling-image.webp" alt="Microneedling treatment at Resiliency" class="w-full h-[550px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>

                    <!-- Floating Stat Badge -->
                    <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-3xl border border-gray-100 shadow-[0_20px_40px_-10px_rgba(11,32,53,0.15)] flex items-center gap-5 group hover:-translate-y-2 transition-transform duration-500">
                        <div class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-500">
                            <i data-lucide="shield-check" class="w-8 h-8"></i>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-[#0B2035] tracking-tight">FDA</p>
                            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest mt-1">Cleared Device</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conditions Treated - Dark BG -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <!-- Decorative Background -->
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">What We Treat</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Conditions Treated</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="scan-line" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Acne Scars</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Reduce appearance of acne scarring with collagen remodeling.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="clock" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Fine Lines & Wrinkles</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Smooth fine lines and reduce wrinkles naturally.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="sun" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Sun Damage</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Repair sun-damaged skin and reduce hyperpigmentation.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="maximize" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Large Pores</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Minimize pore appearance for smoother texture.</p>
                </div>

                <!-- Card 5 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="sparkles" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Skin Texture</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Improve overall skin texture and tone.</p>
                </div>

                <!-- Card 6 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="droplet" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Stretch Marks</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Reduce the appearance of stretch marks on the body.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatment Process - Light BG -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">How It Works</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Treatment Process</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="text-6xl font-bold text-[#23bfe2]/20 mb-4">01</div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Consultation</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Your provider assesses your skin concerns and goals to create a customized treatment plan.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="text-6xl font-bold text-[#23bfe2]/20 mb-4">02</div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Treatment</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Numbing cream is applied, then SkinPen creates precise micro-channels. The procedure takes 30-60 minutes.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="text-6xl font-bold text-[#23bfe2]/20 mb-4">03</div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Recovery & Results</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Mild redness for 24-48 hours. New collagen forms over weeks, with optimal results visible at 4-6 weeks. Results last up to 6 months.</p>
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
                        <span>How many sessions do I need?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Most patients see significant improvement with 3 sessions spaced 4-6 weeks apart, though some concerns may require additional treatments.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Does microneedling hurt?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            A topical numbing cream is applied before treatment, making the procedure very comfortable. Most patients describe a mild vibrating sensation.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>When will I see results?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Initial improvement is visible within days as redness subsides. Full collagen remodeling occurs over 4-6 weeks, with continued improvement for months.
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
    <section id="consultation" class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Rejuvenate Your Skin?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Book your microneedling session and discover smoother, firmer, more youthful skin with FDA-cleared SkinPen Precision.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="<?php echo home_url('/contact'); ?>" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Book Your Microneedling Session
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

<?php get_footer(); ?>
