<?php /* Template Name: Supplements */ ?>
<?php
$page_title       = 'Psychiatric &amp; Wellness Supplements Newport Beach | Nutraceuticals | Resiliency Mind + Body Medicine';
$page_description = 'Physician-curated nutraceuticals &amp; supplements for brain health, mood, focus &amp; sleep from Resiliency Mind + Body Medicine in Newport Beach, CA. Shop evidence-based wellness supplements. Call (949) 996-5355.';
$page_keywords    = 'psychiatric supplements Newport Beach, wellness supplements Orange County, brain health supplements Newport Beach CA, mood supplements Orange County, nutraceuticals Newport Beach, mental health supplements Orange County CA, sleep supplements Newport Beach';
$page_canonical   = 'https://resiliencymbmedicine.com/supplements.php';
$page_schema = <<<'SCHEMA'
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Product","name":"Psychiatric & Wellness Supplements","description":"Physician-curated nutraceuticals and supplements for brain health, mood, focus, and sleep from Resiliency Mind + Body Medicine in Newport Beach, CA.","url":"https://resiliencymbmedicine.com/supplements.php","brand":{"@type":"Brand","name":"Resiliency Mind + Body Medicine"},"offers":{"@type":"Offer","seller":{"@type":"MedicalBusiness","name":"Resiliency Mind + Body Medicine"},"availability":"https://schema.org/InStock"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How are your supplements different from over-the-counter options?","acceptedAnswer":{"@type":"Answer","text":"Our supplements are physician-curated based on clinical evidence, third-party tested for purity and potency, and selected for therapeutic-grade quality. We source from trusted manufacturers who prioritize transparency and quality control."}},{"@type":"Question","name":"Can supplements replace medication for mental health conditions?","acceptedAnswer":{"@type":"Answer","text":"Supplements can be powerful adjuncts to psychiatric treatment, but they are not a replacement for medication when clinically indicated. We integrate nutraceuticals into comprehensive treatment plans alongside therapy and medication when appropriate."}},{"@type":"Question","name":"How long before I notice benefits from supplements?","acceptedAnswer":{"@type":"Answer","text":"This varies by individual and supplement type. Some patients notice subtle improvements within 2-4 weeks, while others require 8-12 weeks for full effect. Consistency and appropriate dosing are key to seeing results."}},{"@type":"Question","name":"Do you offer guidance on which supplements are right for me?","acceptedAnswer":{"@type":"Answer","text":"Yes. During your psychiatric evaluation, your provider can recommend specific supplements based on your symptoms, lab results, current medications, and treatment goals."}},{"@type":"Question","name":"Are your supplements safe to take with prescription medications?","acceptedAnswer":{"@type":"Answer","text":"We carefully review your current medications before recommending any supplements. While most of our curated supplements are safe alongside psychiatric medications, some interactions are possible. Your provider will ensure compatibility."}},{"@type":"Question","name":"Do you ship supplements or do I need to pick them up in person?","acceptedAnswer":{"@type":"Answer","text":"Supplements can be shipped directly to your door or picked up at our Newport Beach or San Juan Capistrano office. Ask about our subscription options for regular deliveries and cost savings."}}]}
</script>
SCHEMA;
?>
<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[500px] md:h-[60vh] flex items-center justify-center overflow-hidden pt-28 pb-12 md:pt-24 md:pb-0">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/supplements_hero.png" alt="Psychiatric and Wellness Supplements" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/60 md:bg-gradient-to-r md:from-[#0B2035]/75 md:via-[#0B2035]/50 md:to-[#0B2035]/20"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Physician-Curated Wellness</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Wellness <span class="text-[#23bfe2] font-light">Supplements</span>
                    <span class="block text-base sm:text-lg md:text-xl font-normal text-white/70 mt-2 tracking-normal">in Newport Beach &amp; San Juan Capistrano, CA</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Evidence-based nutraceuticals and supplements curated by our physicians to support brain health, mood, sleep, and overall well-being—delivered with clinical guidance you can trust.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="/contact/" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Shop Supplements <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#learn-more" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section id="learn-more" class="py-16 relative overflow-hidden bg-white">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">The Resiliency Difference</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Physician-Curated Supplements</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed font-light">
                        Not all supplements are created equal. Our physicians have curated a selection of evidence-based, therapeutic-grade nutraceuticals designed to complement your psychiatric care and support long-term wellness.
                    </p>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed font-light">
                        Unlike over-the-counter supplements sold without guidance, our products are selected based on clinical research, third-party purity testing, and compatibility with psychiatric treatment protocols.
                    </p>

                    <div class="bg-neutral p-6 rounded-2xl mb-8 border border-gray-100">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Third-party tested for purity and potency</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Physician-selected for therapeutic quality</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Integrated with your psychiatric treatment plan</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1 flex justify-center">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/supplements_group.png" alt="Wellness supplements" class="w-full h-[550px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Supplement Categories -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Our Supplement Categories</h2>
                <h3 class="text-4xl md:text-5xl font-bold">Targeted Support for Every Goal</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Mood &amp; Mental Health</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Supplements that support neurotransmitter function, emotional balance, and mood regulation alongside psychiatric treatment.</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="moon" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Sleep &amp; Relaxation</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Natural support for sleep quality, circadian rhythm optimization, and stress reduction without dependency.</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="zap" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Energy &amp; Focus</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Cognitive support for mental clarity, sustained energy, attention, and executive function throughout the day.</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal reveal-delay-3 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Brain Health &amp; Longevity</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Neuroprotective nutrients supporting long-term cognitive health, neuroplasticity, and healthy aging.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Popular Supplements</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Frequently Recommended Products</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Omega-3 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="heart" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-primary mb-2">Omega-3 Fatty Acids</h4>
                    <p class="text-[#23bfe2] text-xs font-semibold uppercase tracking-widest mb-3">Brain &amp; Mood Support</p>
                    <p class="text-gray-500 font-light text-sm leading-relaxed mb-4">High-quality fish oil or algae-based omega-3s (EPA/DHA) to support neuronal membrane health, reduce inflammation, and complement depression and anxiety treatment.</p>
                    <p class="text-xs text-gray-400 font-light">Physician-recommended for mood support and neuroinflammation.</p>
                </div>

                <!-- Vitamin D -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="sun" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-primary mb-2">Vitamin D3 + K2</h4>
                    <p class="text-[#23bfe2] text-xs font-semibold uppercase tracking-widest mb-3">Immune &amp; Mood Health</p>
                    <p class="text-gray-500 font-light text-sm leading-relaxed mb-4">Essential for mood regulation, immune function, and bone health. Many patients in Orange County are deficient, making supplementation critical.</p>
                    <p class="text-xs text-gray-400 font-light">Often recommended alongside psychiatric treatment plans.</p>
                </div>

                <!-- Magnesium -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="zap" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-primary mb-2">Magnesium Glycinate</h4>
                    <p class="text-[#23bfe2] text-xs font-semibold uppercase tracking-widest mb-3">Sleep &amp; Anxiety Support</p>
                    <p class="text-gray-500 font-light text-sm leading-relaxed mb-4">Highly absorbable magnesium supporting nervous system calm, sleep quality, and anxiety reduction without sedating effects.</p>
                    <p class="text-xs text-gray-400 font-light">Popular among patients managing stress and sleep difficulties.</p>
                </div>

                <!-- B-Complex -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="activity" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-primary mb-2">B-Complex</h4>
                    <p class="text-[#23bfe2] text-xs font-semibold uppercase tracking-widest mb-3">Energy &amp; Neurological</p>
                    <p class="text-gray-500 font-light text-sm leading-relaxed mb-4">Full-spectrum B vitamins supporting neurotransmitter synthesis, cellular energy, and brain function. Essential for mood and cognitive performance.</p>
                    <p class="text-xs text-gray-400 font-light">Foundation supplement for brain health protocols.</p>
                </div>

                <!-- Probiotics -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="layers" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-primary mb-2">Probiotic Formula</h4>
                    <p class="text-[#23bfe2] text-xs font-semibold uppercase tracking-widest mb-3">Gut-Brain Axis</p>
                    <p class="text-gray-500 font-light text-sm leading-relaxed mb-4">Strain-specific probiotics supporting the gut-brain connection. Emerging research links gut health to mood, anxiety, and cognitive function.</p>
                    <p class="text-xs text-gray-400 font-light">Recommended for patients with mood and digestive symptoms.</p>
                </div>

                <!-- L-theanine -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="leaf" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-primary mb-2">L-Theanine</h4>
                    <p class="text-[#23bfe2] text-xs font-semibold uppercase tracking-widest mb-3">Calm Focus</p>
                    <p class="text-gray-500 font-light text-sm leading-relaxed mb-4">Natural amino acid promoting calm alertness without drowsiness. Supports focus during the day and complements anxiety treatment protocols.</p>
                    <p class="text-xs text-gray-400 font-light">Great for patients with generalized anxiety or racing thoughts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Medical-Grade Supplements -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Why Quality Matters</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Medical-Grade vs. Store-Bought</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 reveal">
                    <div class="w-16 h-16 bg-gray-200 rounded-2xl flex items-center justify-center text-gray-500 mb-6">
                        <i data-lucide="x-circle" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-bold text-primary mb-4">Store-Bought Supplements</h4>
                    <ul class="space-y-3 text-gray-500 font-light">
                        <li class="flex items-start gap-3"><i data-lucide="x" class="w-4 h-4 text-red-400 mt-1 flex-shrink-0"></i> Variable quality and potency</li>
                        <li class="flex items-start gap-3"><i data-lucide="x" class="w-4 h-4 text-red-400 mt-1 flex-shrink-0"></i> Often contain fillers and additives</li>
                        <li class="flex items-start gap-3"><i data-lucide="x" class="w-4 h-4 text-red-400 mt-1 flex-shrink-0"></i> Limited third-party testing</li>
                        <li class="flex items-start gap-3"><i data-lucide="x" class="w-4 h-4 text-red-400 mt-1 flex-shrink-0"></i> No physician guidance on use</li>
                        <li class="flex items-start gap-3"><i data-lucide="x" class="w-4 h-4 text-red-400 mt-1 flex-shrink-0"></i> May interact with medications unpredictably</li>
                    </ul>
                </div>

                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 reveal reveal-delay-1">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6">
                        <i data-lucide="check-circle" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-bold text-primary mb-4">Resiliency Curated Supplements</h4>
                    <ul class="space-y-3 text-gray-600 font-light">
                        <li class="flex items-start gap-3"><i data-lucide="check" class="w-4 h-4 text-[#23bfe2] mt-1 flex-shrink-0"></i> Therapeutic-grade, third-party tested</li>
                        <li class="flex items-start gap-3"><i data-lucide="check" class="w-4 h-4 text-[#23bfe2] mt-1 flex-shrink-0"></i> Clean formulations, no harmful additives</li>
                        <li class="flex items-start gap-3"><i data-lucide="check" class="w-4 h-4 text-[#23bfe2] mt-1 flex-shrink-0"></i> Full transparency in labeling and sourcing</li>
                        <li class="flex items-start gap-3"><i data-lucide="check" class="w-4 h-4 text-[#23bfe2] mt-1 flex-shrink-0"></i> Integrated into your personalized care plan</li>
                        <li class="flex items-start gap-3"><i data-lucide="check" class="w-4 h-4 text-[#23bfe2] mt-1 flex-shrink-0"></i> Reviewed for medication compatibility</li>
                    </ul>
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
                        <span>How are your supplements different from over-the-counter options?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Our supplements are physician-curated based on clinical evidence, third-party tested for purity and potency, and selected for therapeutic-grade quality. We source from trusted manufacturers who prioritize transparency and quality control.
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Can supplements replace medication for mental health conditions?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Supplements can be powerful adjuncts to psychiatric treatment, but they are not a replacement for medication when clinically indicated. We integrate nutraceuticals into comprehensive treatment plans alongside therapy and medication when appropriate.
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>How long before I notice benefits from supplements?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            This varies by individual and supplement type. Some patients notice subtle improvements within 2-4 weeks, while others require 8-12 weeks for full effect. Consistency and appropriate dosing are key to seeing results.
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Do you offer guidance on which supplements are right for me?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Yes. During your psychiatric evaluation, your provider can recommend specific supplements based on your symptoms, lab results, current medications, and treatment goals.
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Are your supplements safe to take with prescription medications?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            We carefully review your current medications before recommending any supplements. While most of our curated supplements are safe alongside psychiatric medications, some interactions are possible. Your provider will ensure compatibility.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-400 font-light">Have more questions? <a href="/contact/" class="text-[#23bfe2] font-semibold hover:text-white transition-colors underline underline-offset-4 decoration-[#23bfe2]/30 hover:decoration-white">Contact our clinical team.</a></p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Support Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Brain &amp; Body</span> the Right Way
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Trust physician-curated supplements backed by science. Schedule a consultation to discover the right nutraceuticals for your wellness goals.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="/contact/" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule Your Consultation
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

    <!-- Also Explore -->
    <section class="py-12 bg-gray-50 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-xs font-bold tracking-widest text-[#23bfe2] uppercase mb-6">Also Explore</p>
            <div class="flex flex-wrap gap-3">
                <a href="/integrative-psychiatry/" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-[#0B2035]/15 text-[#0B2035] text-sm font-medium hover:bg-[#0B2035] hover:text-white transition-all">Integrative Psychiatry</a>
                <a href="/iv-therapy-newport-beach-ca/" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-[#0B2035]/15 text-[#0B2035] text-sm font-medium hover:bg-[#0B2035] hover:text-white transition-all">IV Vitamin Therapy</a>
                <a href="/nad-iv-therapy/" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-[#0B2035]/15 text-[#0B2035] text-sm font-medium hover:bg-[#0B2035] hover:text-white transition-all">NAD+ Therapy</a>
                <a href="/tms-for-depression-orange-county/" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-[#0B2035]/15 text-[#0B2035] text-sm font-medium hover:bg-[#0B2035] hover:text-white transition-all">TMS for Depression</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>