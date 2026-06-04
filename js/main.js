// --- Lazy-load non-critical 3rd-party scripts (TBT reduction) ---
// Scans the page for <span data-lazy-script="..."> elements and loads them
// only when the page is fully idle (or on first user interaction).
// Note: PsychologyToday + LegitScript currently use <script defer> instead,
// so the badges render reliably. Keep this loader available for future scripts.
(function lazyLoadThirdParty() {
    if (!document.querySelector('[data-lazy-script]')) return;
    var load = function() {
        document.querySelectorAll('[data-lazy-script]').forEach(function(el) {
            if (el.dataset.loaded) return;
            el.dataset.loaded = '1';
            var s = document.createElement('script');
            s.src = el.dataset.lazyScript;
            s.async = true;
            Object.keys(el.dataset).forEach(function(k) {
                if (k === 'lazyScript' || k === 'loaded') return;
                s.setAttribute('data-' + k.replace(/[A-Z]/g, function(m) { return '-' + m.toLowerCase(); }), el.dataset[k]);
            });
            el.parentNode.replaceChild(s, el);
        });
    };
    if ('requestIdleCallback' in window) {
        requestIdleCallback(load, { timeout: 4000 });
    } else {
        setTimeout(load, 4000);
    }
    ['mousemove','touchstart','keydown','scroll'].forEach(function(evt) {
        window.addEventListener(evt, function onFirst() {
            load();
            window.removeEventListener(evt, onFirst);
        }, { once: true, passive: true });
    });
})();

document.addEventListener('DOMContentLoaded', () => {
    // Scroll Reveal Animation
    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');

                // Find and animate any donut charts inside this revealed element
                const chart = entry.target.querySelector('circle:nth-child(2)');
                if(chart) {
                    chart.classList.add('draw-animation');
                }
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(element => {
        revealObserver.observe(element);
    });

    // Sticky Header Shrink
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled', 'bg-white/90', 'backdrop-blur-md', 'border-gray-100');
            header.classList.remove('bg-transparent', 'border-transparent');
        } else {
            header.classList.remove('scrolled', 'bg-white/90', 'backdrop-blur-md', 'border-gray-100');
            header.classList.add('bg-transparent', 'border-transparent');
        }
    });

    // Fire scroll event once on load to ensure state is correct
    window.dispatchEvent(new Event('scroll'));

    // --- Mobile Menu Logic ---
    const mobileMenuBtn = document.getElementById('open-mobile-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMobileBtn = document.getElementById('close-mobile-menu');

    if (mobileMenuBtn && mobileMenu && closeMobileBtn) {
        // Open
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
            // Re-create Lucide icons inside the mobile menu
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
            // Small delay to allow display to apply before animating transform
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    mobileMenu.classList.remove('translate-x-full');
                });
            });
            document.body.style.overflow = 'hidden';
        });

        // Close
        closeMobileBtn.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
            document.body.style.overflow = '';
        });

        // Close on clicking a link (for better UX)
        mobileMenu.querySelectorAll('a[href]').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
                document.body.style.overflow = '';
            });
        });

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('translate-x-full');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
                document.body.style.overflow = '';
            }
        });
    }

    // --- Mobile Accordion Logic ---
    const accordions = document.querySelectorAll('.mobile-accordion-toggle');
    accordions.forEach(acc => {
        acc.addEventListener('click', function(e) {
            e.stopPropagation();
            const content = this.nextElementSibling;
            const icon = this.querySelector('[data-lucide="chevron-down"], i');

            // Close only sibling accordions at the same nesting level
            const parent = this.parentElement.parentElement;
            accordions.forEach(otherAcc => {
                if (otherAcc !== this && otherAcc.parentElement.parentElement === parent) {
                    const otherContent = otherAcc.nextElementSibling;
                    const otherIcon = otherAcc.querySelector('[data-lucide="chevron-down"], i');
                    if (otherContent && !otherContent.classList.contains('hidden')) {
                        otherContent.classList.add('hidden');
                        otherContent.classList.remove('flex');
                        if (otherIcon) otherIcon.classList.remove('rotate-180');
                    }
                }
            });

            // Toggle current accordion
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                content.classList.add('flex');
                if (icon) icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                content.classList.remove('flex');
                if (icon) icon.classList.remove('rotate-180');
            }
        });
    });
});
