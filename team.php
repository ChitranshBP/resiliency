<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden pt-24">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Meet the Resiliency Team" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0B2035]/95 via-[#0B2035]/80 to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-sm font-bold tracking-widest uppercase">Our Providers</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-6">
                    Meet <br/><span class="text-[#23bfe2] font-light">The Team</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed font-light max-w-2xl">
                    A multidisciplinary team of psychiatrists, psychiatric nurse practitioners, physician associates, and wellness specialists committed to your care.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#consultation" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Book an Appointment <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Grid Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Providers -->
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Clinical Providers</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Our Providers</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">Board-certified psychiatrists, physician associates, and psychiatric nurse practitioners delivering expert care.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-20">
                <!-- Dr. Stefani LaFrenierre -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/03/Dr.-Stefani-LaFrenierre-MD-1024x862.png" alt="Dr. Stefani LaFrenierre, MD" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Dr. Stefani LaFrenierre, MD</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Psychiatrist & Addiction Medicine</p>
                    </div>
                </div>

                <!-- Dr. Erin Griffiths -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2026/01/Dr.-Erin-Griffiths-DO-MA-1024x862.png" alt="Dr. Erin Griffiths, DO, MA" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Dr. Erin Griffiths, DO, MA</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Holistic Psychiatrist</p>
                    </div>
                </div>

                <!-- Dr. Heather Wong -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/03/Dr.-Heather-Wong-DMSc-MPAS-PA-C-CAQ-Psych-1024x862.png" alt="Dr. Heather Wong, DMSc, MPAS, PA-C, CAQ-Psych" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Dr. Heather Wong, DMSc, MPAS, PA-C, CAQ-Psych</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Physician Associate</p>
                    </div>
                </div>

                <!-- Milinda Estrada -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-3 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/10/Milinda.png" alt="Milinda Estrada, PA-C" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Milinda Estrada, PA-C</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Physician Associate</p>
                    </div>
                </div>

                <!-- Regina Dizon -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/03/Regina-Dizon-PMHNP-BC-1024x862.png" alt="Regina Dizon, PMHNP-BC" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Regina Dizon, PMHNP-BC</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Psychiatric NP</p>
                    </div>
                </div>

                <!-- Brian Tran -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/08/Brian-Tran-team-headshot-1024x862.png" alt="Brian Tran, PMHNP-BC" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Brian Tran, PMHNP-BC</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Psychiatric NP</p>
                    </div>
                </div>

                <!-- Lina Kurdi -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2026/01/Lina-Kurdi-PMHNP-BC-Resiliency-1024x862.png" alt="Lina Kurdi, PMHNP-BC" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Lina Kurdi, PMHNP-BC</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Psychiatric NP</p>
                    </div>
                </div>
            </div>

            <!-- Clinical & Operations Staff -->
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Clinical & Operations Staff</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Our Support Team</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">The dedicated professionals who keep our practice running and ensure your experience is seamless.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Lauren Kim -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/10/Lauren-1024x862.png" alt="Lauren Kim" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Lauren Kim</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Interventional Psychiatry Tech</p>
                    </div>
                </div>

                <!-- Jeffrey Phan -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2026/01/Jeffrey-Phan-1024x862.png" alt="Jeffrey Phan" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Jeffrey Phan</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Interventional Psychiatry Tech</p>
                    </div>
                </div>

                <!-- Dana Yan -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2026/01/Dana-Yan-1024x862.png" alt="Dana Yan" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Dana Yan</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Interventional Psychiatry Tech</p>
                    </div>
                </div>

                <!-- Cyrus Jimenez -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-3 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/09/Cyrus-1024x862.png" alt="Cyrus Jimenez" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Cyrus Jimenez</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">TMS Technician</p>
                    </div>
                </div>

                <!-- Loren Mendez -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/09/Loren-1024x862.png" alt="Loren Mendez" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Loren Mendez</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Operations & Patient Care Coordinator</p>
                    </div>
                </div>

                <!-- Rylee Hickman -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/09/Rylee-1024x862.png" alt="Rylee Hickman" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Rylee Hickman</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Front Office Coordinator</p>
                    </div>
                </div>

                <!-- Cathleen Sliney -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://resiliencymbmedicine.com/wp-content/uploads/2026/01/Cathleen-Sliney-1024x862.png" alt="Cathleen Sliney" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Cathleen Sliney</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Front Office Coordinator</p>
                    </div>
                </div>

                <!-- Yuli Plascencia -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-3 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://www.resiliencymbmedicine.com/wp-content/uploads/2025/10/Yuli.png" alt="Yuli Plascencia" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Yuli Plascencia</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Revenue Cycle & Operations</p>
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
                Ready to Meet <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Your Team?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Schedule an appointment with one of our expert providers and take the first step toward better mental health.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="#consultation" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Book an Appointment
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
