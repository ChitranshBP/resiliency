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
    const mobileMenuBtn = document.querySelector('.md\\:hidden button');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMobileBtn = document.getElementById('close-mobile-menu');

    if(mobileMenuBtn && mobileMenu && closeMobileBtn) {
        // Open
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
            // small delay to allow display:block to apply before animating transform
            setTimeout(() => {
                mobileMenu.classList.remove('translate-x-full');
            }, 10);
            document.body.style.overflow = 'hidden'; // prevent background scrolling
        });

        // Close
        closeMobileBtn.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300); // match transition duration
            document.body.style.overflow = '';
        });
    }

    // --- Mobile Accordion Logic ---
    const accordions = document.querySelectorAll('.mobile-accordion-toggle');
    accordions.forEach(acc => {
        acc.addEventListener('click', function() {
            // Toggle chevron rotation
            const icon = this.querySelector('i');
            icon.classList.toggle('rotate-180');
            
            // Toggle related content visibility
            const content = this.nextElementSibling;
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                content.classList.add('flex');
            } else {
                content.classList.add('hidden');
                content.classList.remove('flex');
            }
        });
    });
});
