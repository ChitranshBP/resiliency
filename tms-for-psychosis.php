<?php
$page_schema = <<<'SCHEMA'
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"MedicalTherapy","name":"TMS for Psychosis","description":"Deep TMS therapy targeting auditory hallucinations and negative symptoms of schizophrenia and psychotic disorders at Resiliency Mind + Body Medicine in Newport Beach, CA.","url":"https://resiliencymbmedicine.com/tms-for-psychosis.php","relevantSpecialty":"Psychiatry","provider":{"@type":"MedicalBusiness","name":"Resiliency Mind + Body Medicine","telephone":"(949) 996-5355","address":[{"@type":"PostalAddress","streetAddress":"1501 Superior Ave, Suite 210","addressLocality":"Newport Beach","addressRegion":"CA","postalCode":"92663"},{"@type":"PostalAddress","streetAddress":"27184 Ortega Hwy, STE 103","addressLocality":"San Juan Capistrano","addressRegion":"CA","postalCode":"92675"}]}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Will TMS replace my antipsychotic medication?","acceptedAnswer":{"@type":"Answer","text":"No. TMS for psychosis is an adjunct therapy used alongside antipsychotic medications. It targets specific symptoms that medication alone may not fully address, such as persistent hallucinations."}},{"@type":"Question","name":"Is TMS safe for people with psychosis?","acceptedAnswer":{"@type":"Answer","text":"Yes, when administered by experienced psychiatrists. Careful screening for contraindications including seizure risk and metal implants is performed before treatment begins."}},{"@type":"Question","name":"What does a typical treatment course for psychosis look like?","acceptedAnswer":{"@type":"Answer","text":"Standard protocols involve daily sessions over 4-6 weeks. Protocol specifics are personalized based on primary symptoms, history, and treatment response."}},{"@type":"Question","name":"Is TMS safe to use alongside antipsychotic medications?","acceptedAnswer":{"@type":"Answer","text":"In most cases yes. Deep TMS can be safely administered alongside antipsychotic medications as an adjunct treatment. Our psychiatrist reviews all medications before starting."}},{"@type":"Question","name":"Which symptoms of psychosis does TMS target?","acceptedAnswer":{"@type":"Answer","text":"TMS primarily targets persistent auditory hallucinations and negative symptoms such as flat affect and social withdrawal that do not respond fully to antipsychotic medications."}},{"@type":"Question","name":"How many TMS sessions are needed for psychosis treatment?","acceptedAnswer":{"@type":"Answer","text":"Typically 20-30 sessions over 4-6 weeks. Maintenance sessions may be recommended to sustain symptom improvement."}}]}
</script>
SCHEMA;
?>
<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[500px] md:h-[60vh] flex items-center justify-center overflow-hidden pt-28 pb-12 md:pt-24 md:pb-0">
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/stimulator-doctor-patient-in-office-h1-helmet-5.jpg" alt="TMS for Psychosis" class="w-full h-full object-cover object-[50%_60%]">
            <div class="absolute inset-0 bg-[#0B2035]/60 md:bg-gradient-to-r md:from-[#0B2035]/75 md:via-[#0B2035]/50 md:to-[#0B2035]/20"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Advanced Neuromodulation</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    TMS for <span class="text-[#23bfe2] font-light">Psychosis</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    A non-invasive, adjunctive treatment for persistent auditory hallucinations and negative symptoms of psychosis—delivered under careful psychiatric supervision.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Schedule Your Consultation <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:9499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Understanding Section -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Understanding TMS for Psychosis</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">A Targeted Option for Treatment-Resistant Symptoms</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed font-light">
                        Psychosis—including the positive symptoms (auditory hallucinations, delusions) and negative symptoms (social withdrawal, flat affect, anhedonia) seen in schizophrenia and related conditions—does not always respond fully to antipsychotic medications.
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Research over the past two decades supports Transcranial Magnetic Stimulation (TMS) as a meaningful adjunctive therapy. Low-frequency TMS applied to the left temporoparietal cortex can reduce persistent auditory hallucinations, while high-frequency TMS over the prefrontal cortex may ease negative symptoms and cognitive dulling. At Resiliency, TMS is always used alongside—never as a replacement for—evidence-based psychiatric care.
                    </p>
                </div>

                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/brainsway-dr-l-2.webp" alt="TMS Therapy Session" class="w-full h-[450px] object-cover object-[50%_30%] ">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Symptoms TMS May Help -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Symptoms Addressed</h2>
                <h3 class="text-4xl md:text-5xl font-bold">Where TMS Can Help</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:-translate-y-2 transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="volume-x" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Auditory Hallucinations</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Reduce the frequency and intensity of persistent voices and internal sounds.</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:-translate-y-2 transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="users" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Social Withdrawal</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Support reconnection with family, friends, and daily life activities.</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:-translate-y-2 transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="cloud-off" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Cognitive Dulling</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Improve attention, processing speed, and working memory disrupted by negative symptoms.</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:-translate-y-2 transition-all duration-300 reveal reveal-delay-3 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="smile" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Anhedonia & Flat Affect</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Restore emotional range, motivation, and the capacity to experience pleasure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Our Approach</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">Integrated, Physician-Led Care</h3>
                <p class="text-gray-500 font-light text-lg leading-relaxed">TMS for psychosis is delivered as part of a complete treatment plan—never in isolation—under the close supervision of our board-certified psychiatrists.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="clipboard-check" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Comprehensive Evaluation</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Thorough psychiatric assessment to confirm TMS is an appropriate addition to your care.</p>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="layers" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Adjunctive, Not Standalone</h4>
                    <p class="text-gray-500 font-light leading-relaxed">TMS complements antipsychotic medication, therapy, and psychosocial support.</p>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="target" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Targeted Protocols</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Low-frequency temporoparietal for hallucinations; high-frequency prefrontal for negative symptoms.</p>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-3 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="activity" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Ongoing Monitoring</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Regular clinical reviews to track symptoms, safety, and quality of life.</p>
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
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Will TMS replace my antipsychotic medication?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            No. TMS is used as an adjunct to, not a replacement for, antipsychotic medication. Any changes to medication are made only by your psychiatrist.
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Is TMS safe for people with psychosis?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            TMS has a well-established safety profile when delivered by trained clinicians. Each patient is carefully screened for seizure risk, pregnancy, metallic implants, and other contraindications before treatment begins.
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>What does a typical treatment course look like?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Standard protocols involve daily sessions over 4–6 weeks. Your psychiatrist will design a plan based on your primary symptoms, history, and response to prior treatments.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Is TMS safe to use alongside antipsychotic medications?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            In most cases, yes. <a href="tms-therapy.php" class="text-[#23bfe2] underline hover:text-white">Deep TMS</a> can be safely administered alongside antipsychotic medications and is used as an adjunct — not a replacement — for existing treatment. Our psychiatrist will carefully review your full medication list and medical history before proceeding. We also offer <a href="medication-management.php" class="text-[#23bfe2] underline hover:text-white">conservative medication management</a> to optimize your regimen alongside TMS.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-400 font-light">Have more questions? <a href="contact.php" class="text-[#23bfe2] font-semibold hover:text-white transition-colors underline underline-offset-4 decoration-[#23bfe2]/30 hover:decoration-white">Contact our clinical team.</a></p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Explore a New Path to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Stability</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                If antipsychotic medication alone has not fully addressed your symptoms, a consultation can help determine whether TMS fits into your care plan.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule Your Consultation
                        <i data-lucide="arrow-up-right" class="w-6 h-6 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </span>
                </a>
                <a href="tel:9499965355" class="text-[#0B2035] font-bold text-lg hover:text-[#23bfe2] transition-colors flex items-center gap-2">
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
