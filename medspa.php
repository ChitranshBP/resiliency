<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden pt-24">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/service_wellness.png" alt="Medical Spa Newport Beach" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0B2035]/95 via-[#0B2035]/80 to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-sm font-bold tracking-widest uppercase">Aesthetic Wellness</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-6">
                    Medical Spa<span class="text-[#23bfe2] font-light">Newport Beach</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed font-light max-w-2xl">
                    Where medical expertise meets aesthetic artistry—physician-supervised cosmetic treatments, skin rejuvenation, and wellness therapies at Resiliency Mind + Body Medicine.
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

    <!-- Intro - White BG -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Welcome</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Our Medical Spa</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Our medspa combines the safety and precision of medical-grade treatments with a luxurious, calming environment. Every procedure is physician-supervised and performed by trained, licensed professionals. Whether you're seeking cosmetic enhancement, skin rejuvenation, or total body wellness, our Newport Beach medspa offers a comprehensive menu of services tailored to your goals. All aesthetic consultations are complimentary.
                    </p>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/service_wellness.png" alt="Resiliency Medical Spa" class="w-full h-[550px] object-cover">
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

    <!-- Services Grid - Dark BG -->
    <section id="services" class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Our Services</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Medspa Treatments</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <a href="cosmetic-injectables.php" class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center block">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="sparkles" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Cosmetic Injectables</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed mb-4">Botox, Jeuveau, dermal fillers, Sculptra, and SKINVIVE.</p>
                    <span class="text-[#23bfe2] font-semibold text-sm group-hover:text-white transition-colors">Learn More &rarr;</span>
                </a>

                <!-- Card 2 -->
                <a href="microneedling.php" class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-1 group text-center block">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="scan-line" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Microneedling</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed mb-4">FDA-cleared SkinPen Precision for collagen stimulation and skin renewal.</p>
                    <span class="text-[#23bfe2] font-semibold text-sm group-hover:text-white transition-colors">Learn More &rarr;</span>
                </a>

                <!-- Card 3 -->
                <a href="neurotoxins.php" class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-2 group text-center block">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="droplets" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Neurotoxins</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed mb-4">Expert Botox and Jeuveau for wrinkle reduction and prevention.</p>
                    <span class="text-[#23bfe2] font-semibold text-sm group-hover:text-white transition-colors">Learn More &rarr;</span>
                </a>

                <!-- Card 4 -->
                <a href="iv-vitamin-therapy.php" class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center block">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="droplet" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">IV Therapy</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed mb-4">Restorative IV vitamin drips for energy, immunity, and beauty.</p>
                    <span class="text-[#23bfe2] font-semibold text-sm group-hover:text-white transition-colors">Learn More &rarr;</span>
                </a>

                <!-- Card 5 -->
                <a href="nad-therapy.php" class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center block">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">NAD+ Therapy</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed mb-4">Cellular repair and anti-aging IV therapy.</p>
                    <span class="text-[#23bfe2] font-semibold text-sm group-hover:text-white transition-colors">Learn More &rarr;</span>
                </a>

                <!-- Card 6 -->
                <a href="weight-loss.php" class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-1 group text-center block">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="trending-down" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Weight Loss</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed mb-4">Physician-supervised semaglutide and tirzepatide programs.</p>
                    <span class="text-[#23bfe2] font-semibold text-sm group-hover:text-white transition-colors">Learn More &rarr;</span>
                </a>

                <!-- Card 7 -->
                <a href="methylene-blue.php" class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-2 group text-center block">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="flask-conical" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Methylene Blue</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed mb-4">Cognitive enhancement IV therapy.</p>
                    <span class="text-[#23bfe2] font-semibold text-sm group-hover:text-white transition-colors">Learn More &rarr;</span>
                </a>

                <!-- Card 8 -->
                <a href="aesthetics.php" class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center block">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="heart" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Peptides & Boosters</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed mb-4">Oxytocin, Sermorelin, vitamin booster shots.</p>
                    <span class="text-[#23bfe2] font-semibold text-sm group-hover:text-white transition-colors">Learn More &rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Medspa - Light BG -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">The Difference</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Why Choose Our Medspa?</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="user-check" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Physician-Supervised Care</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Every treatment overseen by experienced physicians for your safety.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield-check" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">FDA-Cleared Products & Devices</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Only premium, FDA-cleared products and devices used in every procedure.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="calendar" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Free Consultations</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">All aesthetic consultations are complimentary—no obligation.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Integrated with Mental Health</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Aesthetic wellness paired with psychiatric care for a holistic approach.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section id="consultation" class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Look and Feel Your Best?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Schedule your complimentary consultation and discover the full menu of treatments at our Newport Beach medspa.
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
