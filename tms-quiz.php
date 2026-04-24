<?php
$page_title       = 'TMS Therapy Candidacy Quiz | Free Self-Assessment | Resiliency Mind + Body Medicine';
$page_description = 'Take our free, confidential TMS therapy candidacy assessment. Answer 6 short questions to see if Deep TMS may be right for your depression, anxiety, or OCD. Takes 3–5 minutes.';
$page_keywords    = 'TMS quiz, TMS candidacy assessment, Deep TMS self-assessment, TMS therapy eligibility, depression treatment quiz Newport Beach, TMS screening Orange County';
$page_canonical   = 'https://resiliencymbmedicine.com/tms-quiz.php';
?>
<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[420px] md:h-[55vh] flex items-center justify-center overflow-hidden pt-28 pb-12 md:pt-24 md:pb-0">
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/anxiety_consultation.png" alt="TMS Therapy Candidacy Quiz" class="w-full h-full object-cover object-[50%_40%]">
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
            <!-- Quiz Card -->
            <div class="bg-white rounded-[2rem] shadow-[0_25px_50px_-10px_rgba(11,32,53,0.15)] border border-gray-100 overflow-hidden reveal">

                <!-- Progress Bar -->
                <div class="bg-[#0B2035] px-6 sm:px-10 py-5">
                    <div class="flex items-center justify-between mb-3 text-white">
                        <span id="quiz-step-label" class="text-xs sm:text-sm font-bold tracking-widest uppercase text-[#23bfe2]">Step 1 of 7</span>
                        <span id="quiz-percent" class="text-xs sm:text-sm font-medium text-white/70">14% complete</span>
                    </div>
                    <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                        <div id="quiz-progress" class="bg-[#23bfe2] h-2 rounded-full transition-all duration-500" style="width: 14%;"></div>
                    </div>
                </div>

                <!-- Quiz Form -->
                <form id="tms-quiz-form" accept-charset="UTF-8" action="https://app.formester.com/forms/ZyOFGCPD2/submissions" method="POST" class="p-6 sm:p-10">

                    <!-- Step 1: Medication History -->
                    <div class="quiz-step" data-step="1">
                        <div class="mb-6">
                            <span class="inline-block bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-4">Question 1</span>
                            <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2035] mb-3">How many antidepressant medications have you tried without achieving adequate relief?</h2>
                            <p class="text-gray-500 text-sm">This helps us understand your treatment history.</p>
                        </div>
                        <div class="space-y-3">
                            <label class="quiz-option">
                                <input type="radio" name="q1_medications" value="None yet" required>
                                <span>None yet</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q1_medications" value="1 medication">
                                <span>1 medication</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q1_medications" value="2 medications">
                                <span>2 medications</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q1_medications" value="3 or more medications">
                                <span>3 or more medications</span>
                            </label>
                        </div>
                    </div>

                    <!-- Step 2: Duration -->
                    <div class="quiz-step hidden" data-step="2">
                        <div class="mb-6">
                            <span class="inline-block bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-4">Question 2</span>
                            <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2035] mb-3">How long have you been experiencing your current symptoms?</h2>
                            <p class="text-gray-500 text-sm">Chronic symptoms may respond particularly well to TMS.</p>
                        </div>
                        <div class="space-y-3">
                            <label class="quiz-option">
                                <input type="radio" name="q2_duration" value="Less than 1 month" required>
                                <span>Less than 1 month</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q2_duration" value="1 to 3 months">
                                <span>1 to 3 months</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q2_duration" value="3 to 6 months">
                                <span>3 to 6 months</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q2_duration" value="More than 6 months">
                                <span>More than 6 months</span>
                            </label>
                        </div>
                    </div>

                    <!-- Step 3: Severity -->
                    <div class="quiz-step hidden" data-step="3">
                        <div class="mb-6">
                            <span class="inline-block bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-4">Question 3</span>
                            <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2035] mb-3">How would you rate the overall severity of your symptoms?</h2>
                            <p class="text-gray-500 text-sm">There are no wrong answers — please select what best reflects your current state.</p>
                        </div>
                        <div class="space-y-3">
                            <label class="quiz-option">
                                <input type="radio" name="q3_severity" value="Mild" required>
                                <span>Mild &mdash; noticeable but manageable</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q3_severity" value="Moderate">
                                <span>Moderate &mdash; interferes regularly with my day</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q3_severity" value="Severe">
                                <span>Severe &mdash; very difficult to cope</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q3_severity" value="Very severe">
                                <span>Very severe &mdash; overwhelming most days</span>
                            </label>
                        </div>
                    </div>

                    <!-- Step 4: Symptom Profile -->
                    <div class="quiz-step hidden" data-step="4">
                        <div class="mb-6">
                            <span class="inline-block bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-4">Question 4</span>
                            <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2035] mb-3">Which of the following best describes what you experience most days?</h2>
                            <p class="text-gray-500 text-sm">Choose the option that fits you best.</p>
                        </div>
                        <div class="space-y-3">
                            <label class="quiz-option">
                                <input type="radio" name="q4_symptoms" value="Persistent sadness or low mood" required>
                                <span>Persistent sadness or low mood</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q4_symptoms" value="Loss of interest or pleasure in activities">
                                <span>Loss of interest or pleasure in activities</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q4_symptoms" value="Feelings of hopelessness or worthlessness">
                                <span>Feelings of hopelessness or worthlessness</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q4_symptoms" value="Thoughts of self-harm or suicide">
                                <span>Thoughts of self-harm or suicide</span>
                            </label>
                        </div>
                        <div class="mt-6 bg-[#23bfe2]/5 border-l-4 border-[#23bfe2] rounded-lg p-4 text-sm text-gray-600">
                            <strong class="text-[#0B2035]">If you are in crisis</strong>, please call the 988 Suicide &amp; Crisis Lifeline or dial 911. Our team will also reach out to you promptly.
                        </div>
                    </div>

                    <!-- Step 5: Side Effects -->
                    <div class="quiz-step hidden" data-step="5">
                        <div class="mb-6">
                            <span class="inline-block bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-4">Question 5</span>
                            <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2035] mb-3">Have you experienced side effects from psychiatric medications?</h2>
                            <p class="text-gray-500 text-sm">TMS is a drug-free option that avoids systemic side effects.</p>
                        </div>
                        <div class="space-y-3">
                            <label class="quiz-option">
                                <input type="radio" name="q5_side_effects" value="No side effects" required>
                                <span>No side effects</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q5_side_effects" value="Mild side effects">
                                <span>Mild side effects</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q5_side_effects" value="Moderate side effects">
                                <span>Moderate side effects</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q5_side_effects" value="Severe side effects requiring discontinuation">
                                <span>Severe side effects that required me to stop</span>
                            </label>
                        </div>
                    </div>

                    <!-- Step 6: Functional Impact -->
                    <div class="quiz-step hidden" data-step="6">
                        <div class="mb-6">
                            <span class="inline-block bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-4">Question 6</span>
                            <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2035] mb-3">How much do your symptoms interfere with your work, relationships, or daily life?</h2>
                            <p class="text-gray-500 text-sm">Your honest answer helps us tailor a plan for you.</p>
                        </div>
                        <div class="space-y-3">
                            <label class="quiz-option">
                                <input type="radio" name="q6_impact" value="Minimal impact" required>
                                <span>Minimal impact</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q6_impact" value="Some impact on work or relationships">
                                <span>Some impact on work or relationships</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q6_impact" value="Significant impact on daily functioning">
                                <span>Significant impact on daily functioning</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="q6_impact" value="Severe — unable to function normally">
                                <span>Severe &mdash; unable to function normally</span>
                            </label>
                        </div>
                    </div>

                    <!-- Step 7: Contact Info -->
                    <div class="quiz-step hidden" data-step="7">
                        <div class="mb-6">
                            <span class="inline-block bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-4">Final Step</span>
                            <h2 class="text-2xl sm:text-3xl font-bold text-[#0B2035] mb-3">Where should we send your results?</h2>
                            <p class="text-gray-500 text-sm">A member of our clinical team will review your responses and follow up with personalized recommendations.</p>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-[#0B2035] mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-neutral focus:bg-white focus:border-[#23bfe2] focus:ring-2 focus:ring-[#23bfe2]/20 focus:outline-none transition">
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-[#0B2035] mb-2">Email *</label>
                                    <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-neutral focus:bg-white focus:border-[#23bfe2] focus:ring-2 focus:ring-[#23bfe2]/20 focus:outline-none transition">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-semibold text-[#0B2035] mb-2">Phone *</label>
                                    <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-neutral focus:bg-white focus:border-[#23bfe2] focus:ring-2 focus:ring-[#23bfe2]/20 focus:outline-none transition">
                                </div>
                            </div>
                            <div>
                                <label for="diagnosis" class="block text-sm font-semibold text-[#0B2035] mb-2">Primary Condition or Concern</label>
                                <select id="diagnosis" name="diagnosis" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-neutral focus:bg-white focus:border-[#23bfe2] focus:ring-2 focus:ring-[#23bfe2]/20 focus:outline-none transition">
                                    <option value="">Please select...</option>
                                    <option value="Depression">Depression</option>
                                    <option value="Anxiety">Anxiety</option>
                                    <option value="OCD">OCD</option>
                                    <option value="PTSD">PTSD</option>
                                    <option value="ADHD">ADHD</option>
                                    <option value="Bipolar Disorder">Bipolar Disorder</option>
                                    <option value="Other / Not Sure">Other / Not Sure</option>
                                </select>
                            </div>
                            <div>
                                <label for="comments" class="block text-sm font-semibold text-[#0B2035] mb-2">Additional Comments (optional)</label>
                                <textarea id="comments" name="comments" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-neutral focus:bg-white focus:border-[#23bfe2] focus:ring-2 focus:ring-[#23bfe2]/20 focus:outline-none transition resize-none"></textarea>
                            </div>
                            <label class="flex items-start gap-3 text-sm text-gray-600 mt-4">
                                <input type="checkbox" name="consent" required class="mt-1 w-4 h-4 accent-[#23bfe2]">
                                <span>I understand that a member of the Resiliency clinical team may contact me by phone or email about my responses. My information will be kept confidential.</span>
                            </label>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mt-10 pt-6 border-t border-gray-100">
                        <button type="button" id="quiz-prev" class="text-[#0B2035] font-semibold flex items-center gap-2 hover:text-[#23bfe2] transition-colors disabled:opacity-40 disabled:cursor-not-allowed" disabled>
                            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back
                        </button>
                        <button type="button" id="quiz-next" class="bg-[#23bfe2] hover:bg-[#0B2035] text-[#0B2035] hover:text-white font-bold px-8 py-3 rounded-full transition-all hover:-translate-y-0.5 shadow-md flex items-center gap-2 w-full sm:w-auto justify-center">
                            Next <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                        <button type="submit" id="quiz-submit" class="bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-8 py-3 rounded-full transition-all hover:-translate-y-0.5 shadow-md flex items-center gap-2 w-full sm:w-auto justify-center hidden">
                            Get My Results <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </div>
                </form>

                <!-- Success Screen (hidden by default) -->
                <div id="quiz-success" class="hidden p-6 sm:p-10 text-center">
                    <div class="w-20 h-20 bg-[#23bfe2]/10 rounded-full flex items-center justify-center text-[#23bfe2] mx-auto mb-6">
                        <i data-lucide="check" class="w-10 h-10"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-[#0B2035] mb-4">Thank You!</h2>
                    <p class="text-gray-600 text-lg font-light leading-relaxed mb-8 max-w-xl mx-auto">
                        Your responses have been received. A member of our clinical team will review your assessment and reach out within one business day.
                    </p>
                    <a href="index.php" class="inline-flex items-center gap-2 bg-[#0B2035] text-white font-bold px-8 py-3 rounded-full hover:bg-[#23bfe2] hover:text-[#0B2035] transition-all">
                        Return Home <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

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
                <a href="contact.php" class="inline-flex items-center justify-center gap-2 bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-4 rounded-full transition-all hover:-translate-y-1 shadow-xl">
                    Schedule a Consultation <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
                </a>
                <a href="tel:9499965355" class="inline-flex items-center gap-2 text-[#0B2035] font-bold hover:text-[#23bfe2] transition-colors">
                    <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                </a>
            </div>
        </div>
    </section>
</main>

<style>
    .quiz-option {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem 1.25rem;
        border: 2px solid #e5e7eb;
        border-radius: 1rem;
        cursor: pointer;
        transition: all 0.2s ease;
        background: #fff;
    }
    .quiz-option:hover {
        border-color: #23bfe2;
        background: #f0fbff;
    }
    .quiz-option input[type="radio"] {
        width: 1.25rem;
        height: 1.25rem;
        accent-color: #23bfe2;
        flex-shrink: 0;
    }
    .quiz-option input[type="radio"]:checked + span {
        color: #0B2035;
        font-weight: 600;
    }
    .quiz-option:has(input[type="radio"]:checked) {
        border-color: #23bfe2;
        background: #e9f8fd;
        box-shadow: 0 4px 14px -4px rgba(35,191,226,0.3);
    }
    .quiz-option span {
        color: #4b5563;
        font-size: 0.95rem;
        line-height: 1.4;
    }
</style>

<script>
(function() {
    const form = document.getElementById('tms-quiz-form');
    const steps = form.querySelectorAll('.quiz-step');
    const totalSteps = steps.length;
    const stepLabel = document.getElementById('quiz-step-label');
    const percentLabel = document.getElementById('quiz-percent');
    const progressBar = document.getElementById('quiz-progress');
    const prevBtn = document.getElementById('quiz-prev');
    const nextBtn = document.getElementById('quiz-next');
    const submitBtn = document.getElementById('quiz-submit');
    const successScreen = document.getElementById('quiz-success');
    let current = 1;

    function showStep(n) {
        steps.forEach(s => {
            s.classList.toggle('hidden', parseInt(s.dataset.step, 10) !== n);
        });
        const pct = Math.round((n / totalSteps) * 100);
        stepLabel.textContent = `Step ${n} of ${totalSteps}`;
        percentLabel.textContent = `${pct}% complete`;
        progressBar.style.width = `${pct}%`;
        prevBtn.disabled = n === 1;
        if (n === totalSteps) {
            nextBtn.classList.add('hidden');
            submitBtn.classList.remove('hidden');
        } else {
            nextBtn.classList.remove('hidden');
            submitBtn.classList.add('hidden');
        }
        // Scroll the quiz card into view on step change
        form.closest('.bg-white').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function validateCurrentStep() {
        const activeStep = form.querySelector(`.quiz-step[data-step="${current}"]`);
        const required = activeStep.querySelectorAll('input[required], select[required], textarea[required]');
        for (const el of required) {
            if (el.type === 'radio') {
                const name = el.name;
                if (!activeStep.querySelector(`input[name="${name}"]:checked`)) {
                    alert('Please select an answer to continue.');
                    return false;
                }
            } else if (el.type === 'checkbox') {
                if (!el.checked) {
                    alert('Please check the consent box to submit.');
                    return false;
                }
            } else if (!el.value.trim()) {
                el.focus();
                alert('Please complete all required fields.');
                return false;
            }
        }
        return true;
    }

    nextBtn.addEventListener('click', () => {
        if (!validateCurrentStep()) return;
        if (current < totalSteps) {
            current++;
            showStep(current);
            if (typeof lucide !== 'undefined') lucide.createIcons();
        }
    });

    prevBtn.addEventListener('click', () => {
        if (current > 1) {
            current--;
            showStep(current);
            if (typeof lucide !== 'undefined') lucide.createIcons();
        }
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (!validateCurrentStep()) return;

        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Submitting&hellip;';

        // Submit to Formester (no-cors so browser fires the request without CORS preflight)
        fetch(form.action, {
            method: 'POST',
            mode: 'no-cors',
            body: new FormData(form)
        }).then(() => {
            showSuccess();
        }).catch(() => {
            alert('There was a problem submitting your answers. Please try again or call (949) 996-5355.');
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Get My Results <i data-lucide="send" class="w-4 h-4"></i>';
            if (typeof lucide !== 'undefined') lucide.createIcons();
        });
    });

    function showSuccess() {
        form.classList.add('hidden');
        successScreen.classList.remove('hidden');
        if (typeof lucide !== 'undefined') lucide.createIcons();
        successScreen.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
})();
</script>

<?php include 'footer.php'; ?>
