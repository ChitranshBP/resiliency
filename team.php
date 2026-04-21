<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[500px] md:h-[60vh] flex items-center justify-center overflow-hidden pt-28 pb-12 md:pt-24 md:pb-0">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Meet the Resiliency Team" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/60 md:bg-gradient-to-r md:from-[#0B2035]/75 md:via-[#0B2035]/50 md:to-[#0B2035]/20"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Our Providers</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Meet <span class="text-[#23bfe2] font-light">The Team</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    A multidisciplinary team of psychiatrists, psychiatric nurse practitioners, physician associates, and wellness specialists committed to your care.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
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

            <!-- First row: 4 cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Dr. Stefani LaFrenierre -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group overflow-hidden cursor-pointer" onclick="openBioModal('stefani')">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/stefani.png" alt="Dr. Stefani LaFrenierre, MD" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Dr. Stefani LaFrenierre, MD</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Psychiatrist & Addiction Medicine</p>
                        <p class="text-gray-400 text-xs mt-3 flex items-center gap-1 group-hover:text-[#23bfe2] transition-colors">
                            <i data-lucide="info" class="w-3 h-3"></i> Click to read bio
                        </p>
                    </div>
                </div>

                <!-- Dr. Heather Wong -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group overflow-hidden cursor-pointer" onclick="openBioModal('heather')">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/heather.png" alt="Dr. Heather Wong, DMSc, MPAS, PA-C, CAQ-Psych" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Dr. Heather Wong, DMSc, MPAS, PA-C, CAQ-Psych</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Physician Associate</p>
                        <p class="text-gray-400 text-xs mt-3 flex items-center gap-1 group-hover:text-[#23bfe2] transition-colors">
                            <i data-lucide="info" class="w-3 h-3"></i> Click to read bio
                        </p>
                    </div>
                </div>

                <!-- Milinda Estrada -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group overflow-hidden cursor-pointer" onclick="openBioModal('milinda')">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/milinda.png" alt="Milinda Estrada, PA-C" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Milinda Estrada, PA-C</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Physician Associate</p>
                        <p class="text-gray-400 text-xs mt-3 flex items-center gap-1 group-hover:text-[#23bfe2] transition-colors">
                            <i data-lucide="info" class="w-3 h-3"></i> Click to read bio
                        </p>
                    </div>
                </div>

                <!-- Regina Dizon -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-3 group overflow-hidden cursor-pointer" onclick="openBioModal('regina')">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/regina.png" alt="Regina Dizon, PMHNP-BC" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Regina Dizon, PMHNP-BC</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Psychiatric NP</p>
                        <p class="text-gray-400 text-xs mt-3 flex items-center gap-1 group-hover:text-[#23bfe2] transition-colors">
                            <i data-lucide="info" class="w-3 h-3"></i> Click to read bio
                        </p>
                    </div>
                </div>
            </div>

            <!-- Clinical & Operations Staff -->
            <div class="text-center max-w-3xl mx-auto mt-10  mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Clinical & Operations Staff</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Our Support Team</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">The dedicated professionals who keep our practice running and ensure your experience is seamless.</p>
            </div>

            <!-- First row: 4 cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Rylee Kaczynski -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group overflow-hidden cursor-pointer" onclick="openBioModal('rylee_k')">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="https://cdn-ildmphd.nitrocdn.com/tzzcgexpyBvSGkQdyIokdkbspoHSRNJM/assets/images/optimized/rev-580c2f1/resiliencymbmedicine.com/wp-content/uploads/2026/04/Rylee-Kaczynski-00235-2-scaled.jpg" alt="Rylee Kaczynski, Director of Operations" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Rylee Kaczynski</h4>
                        <p class="text-[#23bfe2] text-sm font-semibold mt-1">Director of Operations</p>
                        <p class="text-gray-400 text-xs mt-3 flex items-center gap-1 group-hover:text-[#23bfe2] transition-colors">
                            <i data-lucide="info" class="w-3 h-3"></i> Click to read bio
                        </p>
                    </div>
                </div>

                <!-- Lauren Kim -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/lauren.png" alt="Lauren Kim" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Lauren Kim</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Interventional Psychiatry Tech</p>
                    </div>
                </div>

                <!-- Jeffrey Phan -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/jeffrey.png" alt="Jeffrey Phan" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Jeffrey Phan</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Interventional Psychiatry Tech</p>
                    </div>
                </div>

                <!-- Dana Yan -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-3 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/dana.png" alt="Dana Yan" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Dana Yan</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Interventional Psychiatry Tech</p>
                    </div>
                </div>
            </div>

            <!-- Second row: 4 cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-6">
                <!-- Cyrus Jimenez -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/cyrus.png" alt="Cyrus Jimenez" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Cyrus Jimenez</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Interventional Psychiatry Tech</p>
                    </div>
                </div>

                <!-- Loren Mendez -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/loren.png" alt="Loren Mendez" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Loren Mendez</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Operations & Patient Care Coordinator</p>
                    </div>
                </div>

                <!-- Rylee Hickman -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/rylee.png" alt="Rylee Hickman" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Rylee Hickman</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Front Office Coordinator</p>
                    </div>
                </div>

                <!-- Cathleen Sliney -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-3 group overflow-hidden">
                    <div class="h-64 overflow-hidden rounded-t-[2rem]">
                        <img src="assets/images/team/cathleen.png" alt="Cathleen Sliney" class="w-full h-full object-cover object-top transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-primary">Cathleen Sliney</h4>
                        <p class="text-gray-500 text-sm font-medium mt-1">Front Office Coordinator</p>
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
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
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

<!-- Bio Modal -->
<div id="bioModal" class="fixed inset-0 z-[9999] flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300" onclick="closeBioModal(event)">
    <div class="absolute inset-0 bg-[#0B2035]/80 backdrop-blur-sm"></div>
    <div class="relative bg-white rounded-3xl max-w-3xl w-full max-h-[85vh] overflow-y-auto shadow-2xl transform scale-95 transition-transform duration-300" id="bioModalContent" onclick="event.stopPropagation()">
        <!-- Close Button -->
        <button onclick="closeBioModal()" class="absolute top-4 right-4 z-10 w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 hover:bg-[#23bfe2] hover:text-white text-gray-500 transition-all duration-200">
            <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <!-- Modal Content -->
        <div class="flex flex-col md:flex-row">
            <!-- Image -->
            <div class="md:w-2/5 flex-shrink-0">
                <img id="bioModalImg" src="" alt="" class="w-full h-64 md:h-full object-cover object-[50%_20%] rounded-t-3xl md:rounded-l-3xl md:rounded-tr-none">
            </div>
            <!-- Bio Text -->
            <div class="md:w-3/5 p-8">
                <h3 id="bioModalName" class="text-2xl font-bold text-[#0B2035] mb-1"></h3>
                <p id="bioModalTitle" class="text-[#23bfe2] font-semibold mb-6"></p>
                <div id="bioModalText" class="text-gray-600 leading-relaxed space-y-4"></div>
                <a id="bioModalBookLink" href="https://resiliencymbm.intakeq.com/connect" target="_blank" rel="noopener" class="inline-flex items-center gap-2 mt-8 bg-[#0B2035] text-white font-bold px-6 py-3 rounded-full hover:bg-[#23bfe2] hover:text-[#0B2035] transition-all duration-300 text-sm" onclick="closeBioModal()">
                    Book with this Provider <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
const teamBios = {
    stefani: {
        name: 'Dr. Stefani LaFrenierre, MD',
        title: 'Psychiatrist & Addiction Medicine | Founder',
        img: 'assets/images/team/stefani.png',
        bookUrl: 'https://resiliencymbmedicine.com/our-team/stefani-lafrenierre-md/',
        bio: `<p>Dr. Stefani LaFrenierre is the founder of Resiliency Mind+Body Medicine and a licensed Medical Doctor who is double board-certified in Adult Psychiatry and Addiction Medicine.</p>
              <p>She received her Medical Degree from the David Geffen School of Medicine at UCLA and completed her Adult Psychiatry residency training at San Mateo Behavioral Health and Recovery Services. She also completed a fellowship through the Harvard Program in Refugee Trauma with a certification in Global Mental Health, Trauma and Recovery.</p>
              <p>Dr. LaFrenierre has expertise in the treatment of depression, anxiety, ADHD, PTSD, bipolar disorders, psychotic disorders, autism spectrum, neuro-divergent spectrum, substance use and dual diagnosis disorders. She has performed in several leadership positions, including Medical Director of an addiction treatment group practice and as Chief Resident during her training.</p>
              <p>Her treatment philosophy focuses on building resiliency through holistic, long-lasting changes to help her patients achieve a balanced and fulfilling life. She provides a warm, empathic, and active therapy style, and brings a conservative approach to medication while considering all aspects of health in treatment planning.</p>`
    },
    heather: {
        name: 'Dr. Heather Wong, DMSc, MPAS, PA-C, CAQ-Psych',
        title: 'Physician Associate',
        img: 'assets/images/team/heather.png',
        bookUrl: 'https://resiliencymbmedicine.com/our-team/heather-wong-dmsc-mpas-pa-c-caq-psych/',
        bio: `<p>Dr. Heather Wong is a Doctorate level Physician Associate who has been working in Psychiatry and Addiction Medicine for more than six years.</p>
              <p>She is experienced in the treatment of depression, anxiety, ADHD, PTSD, bipolar disorders, substance use and dual diagnosis disorders. She has performed in several leadership positions, including as an associate medical director managing medical and psychiatric needs for multiple facilities. She also has developed and implemented culturally competent care processes while in her previous leadership positions.</p>
              <p>Prior to her work in Addiction and Psychiatry, she worked in Family Medicine at a FQHC clinic seeing pediatric, adult, geriatric and pregnant patients. Dr. Wong worked as a Biomedical Engineer developing medical devices in the past, but found her passion in working directly helping patients.</p>
              <p>She is well versed in treatment modalities that include a holistic view of the body and mind.</p>`
    },
    milinda: {
        name: 'Milinda Estrada, PA-C',
        title: 'Physician Associate',
        img: 'assets/images/team/milinda.png',
        bookUrl: 'https://resiliencymbmedicine.com/our-team/milinda-estrada-pa-c/',
        bio: `<p>Milinda Estrada earned her Master of Medical Science in Physician Assistant Studies from Chapman University and completed her undergraduate degree at Hamilton College in Clinton, New York, with a major in Biology and a minor in Women's and Gender Studies.</p>
              <p>As a Physician Associate at Resiliency Mind+Body Medicine, Milinda brings a compassionate, patient-centered approach to psychiatric care. She is dedicated to working collaboratively with patients to develop individualized treatment plans that address the full spectrum of mental health needs.</p>`
    },
    regina: {
        name: 'Regina Dizon, PMHNP-BC',
        title: 'Psychiatric Nurse Practitioner',
        img: 'assets/images/team/regina.png',
        bookUrl: 'https://resiliencymbmedicine.com/our-team/regina-dizon-pmhnp-bc/',
        bio: `<p>Regina Dizon is a passionate and highly experienced board-certified Psychiatric Mental Health Nurse Practitioner, proudly serving patients at Resiliency Mind+Body Medicine.</p>
              <p>Her background also includes roles as an emergency medical technician, medical assistant, and nursing assistant, giving her a broad foundation and a personal touch in caring for patients.</p>
              <p>She integrates both holistic, nonpharmacological strategies and evidence-based pharmacological treatments to support overall mental wellness. Regina is committed to providing comprehensive, compassionate care that addresses the whole person.</p>`
    },
    rylee_k: {
        name: 'Rylee Kaczynski',
        title: 'Director of Operations',
        img: 'https://cdn-ildmphd.nitrocdn.com/tzzcgexpyBvSGkQdyIokdkbspoHSRNJM/assets/images/optimized/rev-580c2f1/resiliencymbmedicine.com/wp-content/uploads/2026/04/Rylee-Kaczynski-00235-2-scaled.jpg',
        bio: `<p>Rylee serves as the Director of Operations at Resiliency, bringing over nine years of experience in the mental health field across clinical operations, program leadership, and direct service settings. She holds a degree in Social Work and is passionate about building systems that support high-quality, patient-centered behavioral health care.</p>
              <p>Her background includes experience in crisis stabilization, residential treatment, and acute behavioral health hospital environments. Throughout her career, she has held leadership roles supporting adolescent residential programs and administrative operations within acute care settings, focusing on strengthening workflows, supporting interdisciplinary teams, and improving continuity of care across levels of service.</p>
              <p>As Director of Operations, Rylee builds and leads systems that keep the practice running smoothly while fostering a culture of collaboration, accountability, and support across the team. She is committed to creating an environment where staff feel empowered and aligned, allowing clinicians to focus on delivering compassionate, consistent, and high-quality care that drives meaningful, lasting outcomes for patients and families.</p>`
    }
};

function openBioModal(key) {
    const data = teamBios[key];
    if (!data) return;

    document.getElementById('bioModalImg').src = data.img;
    document.getElementById('bioModalImg').alt = data.name;
    document.getElementById('bioModalName').textContent = data.name;
    document.getElementById('bioModalTitle').textContent = data.title;
    document.getElementById('bioModalText').innerHTML = data.bio;
    const bookLink = document.getElementById('bioModalBookLink');
    if (data.bookUrl) {
        bookLink.href = data.bookUrl;
        bookLink.style.display = '';
    } else {
        bookLink.style.display = 'none';
    }

    const modal = document.getElementById('bioModal');
    const content = document.getElementById('bioModalContent');
    modal.classList.remove('opacity-0', 'pointer-events-none');
    modal.classList.add('opacity-100', 'pointer-events-auto');
    content.classList.remove('scale-95');
    content.classList.add('scale-100');
    document.body.style.overflow = 'hidden';

    // Re-init Lucide icons inside modal
    if (typeof lucide !== 'undefined') lucide.createIcons();
}

function closeBioModal(event) {
    if (event && event.target !== event.currentTarget) return;
    const modal = document.getElementById('bioModal');
    const content = document.getElementById('bioModalContent');
    modal.classList.remove('opacity-100', 'pointer-events-auto');
    modal.classList.add('opacity-0', 'pointer-events-none');
    content.classList.remove('scale-100');
    content.classList.add('scale-95');
    document.body.style.overflow = '';
}

// Close on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeBioModal();
});
</script>

<?php include 'footer.php'; ?>
