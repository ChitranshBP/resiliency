<?php
$page_title       = 'TMS Therapy Candidacy Quiz | Free Self-Assessment | Resiliency Mind + Body Medicine®';
$page_description = 'Take our free, confidential TMS therapy candidacy assessment. Answer 6 short questions to see if Deep TMS may be right for your depression, anxiety, or OCD. Takes 3–5 minutes.';
$page_keywords    = 'TMS quiz, TMS candidacy assessment, Deep TMS self-assessment, TMS therapy eligibility, depression treatment quiz Newport Beach, TMS screening Orange County';
$page_canonical   = 'https://resiliencymbmedicine.com/tms-quiz';
?>
<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[420px] md:h-[55vh] flex items-center justify-center overflow-hidden pt-28 pb-12 md:pt-24 md:pb-0">
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/anxiety_consultation.png" alt="TMS Therapy Candidacy Quiz" class="w-full h-full object-cover object-right md:object-[50%_40%]">
            <div class="absolute inset-0 bg-[#0B2035]/70 md:bg-gradient-to-r md:from-[#0B2035]/85 md:via-[#0B2035]/65 md:to-[#0B2035]/35"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Free Self-Assessment</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    TMS Candidacy <span class="text-[#23bfe2] font-light">Quiz</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-4 leading-relaxed font-light max-w-2xl">
                    Answer 6 short questions to learn if Deep TMS therapy may be right for you. Confidential. Takes 3&ndash;5 minutes.
                </p>
                <div class="flex flex-wrap gap-4 sm:gap-6 text-white/90 text-sm">
                    <span class="flex items-center gap-2"><i data-lucide="lock" class="w-4 h-4 text-[#23bfe2]"></i> 100% Confidential</span>
                    <span class="flex items-center gap-2"><i data-lucide="clock" class="w-4 h-4 text-[#23bfe2]"></i> 3&ndash;5 minutes</span>
                    <span class="flex items-center gap-2"><i data-lucide="user-check" class="w-4 h-4 text-[#23bfe2]"></i> Physician-reviewed</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quiz Section -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- LeadConnector embedded survey -->
            <iframe src="https://api.leadconnectorhq.com/widget/survey/vUZHtYWe7iCEfSAkr1nE" style="border:none;width:100%;min-height:640px;display:block;" scrolling="no" id="vUZHtYWe7iCEfSAkr1nE" title="TMS Candidacy Survey"></iframe>
            <script src="https://link.msgsndr.com/js/form_embed.js"></script>

            <!-- Trust Note -->
            <p class="text-center text-gray-500 text-sm mt-8 font-light">
                <i data-lucide="shield-check" class="w-4 h-4 inline-block text-[#23bfe2]"></i>
                Your answers are confidential and reviewed only by our clinical team.
            </p>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-6 leading-tight">
                Prefer to Talk to Someone <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Right Now?</span>
            </h2>
            <p class="text-lg text-gray-600 mb-10 font-light max-w-2xl mx-auto leading-relaxed">
                Our care coordinators are available to answer questions and help you decide whether TMS is a good fit.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 items-center">
                <a href="contact" class="inline-flex items-center justify-center gap-2 bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-4 rounded-full transition-all hover:-translate-y-1 shadow-xl">
                    Schedule a Consultation <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
                </a>
                <a href="tel:9499965355" class="inline-flex items-center gap-2 text-[#0B2035] font-bold hover:text-[#23bfe2] transition-colors">
                    <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
