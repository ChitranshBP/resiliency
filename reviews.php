<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden pt-24">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Patient Reviews" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0B2035]/95 via-[#0B2035]/80 to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-sm font-bold tracking-widest uppercase">Patient Experiences</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-6">
                    Our <br/><span class="text-[#23bfe2] font-light">Reviews</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed font-light max-w-2xl">
                    Read what our patients say about their experience at Resiliency Mind + Body Medicine.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#reviews" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Read Reviews <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="contact.php" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Overall Rating Section -->
    <section id="reviews" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <div class="inline-flex flex-col items-center">
                    <p class="text-8xl md:text-9xl font-bold text-[#0B2035] leading-none mb-4">4.9</p>
                    <div class="flex items-center gap-1 mb-3">
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-500 font-light text-lg">out of 5 based on Google Reviews</p>
                </div>
            </div>

            <!-- Reviews Grid -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8 reveal">
                <!-- Review 1 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "After struggling with depression for years and trying multiple medications, Deep TMS finally gave me my life back. The staff at Resiliency is so compassionate."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">MT</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Michael T.</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "Dr. LaFrenierre took the time to understand my complete history before prescribing anything. For the first time, I felt like a doctor actually cared."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">JM</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Jennifer M.</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "The clinic space is beautiful and calming&mdash;not at all like a cold hospital. The TMS process was easy to understand and the results have been transformative."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">SL</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Sarah L.</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "The accelerated protocol fit perfectly into my schedule. Five days and I felt like a completely different person."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">AW</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Alex W.</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "I appreciate the holistic approach here. They asked about my diet, sleep, exercise, and stress levels. It's truly comprehensive care."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">AP</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Amanda P.</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "The team helped me safely taper off medications I'd been on for years while introducing TMS and lifestyle changes. Fewer pills, better results."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">RK</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Robert K.</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Start Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Journey</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Take the first step toward lasting mental wellness. Book a free discovery call with our team today.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Book a Free Discovery Call
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

<?php include 'footer.php'; ?>
