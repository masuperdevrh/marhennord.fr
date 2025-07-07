document.addEventListener('DOMContentLoaded', function() {

    // --- Logique du Menu Burger ---
    const burgerBtn = document.getElementById('burger-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const burgerIcon = document.getElementById('burger-icon');
    const closeIcon = document.getElementById('close-icon');

    if (burgerBtn && mobileMenu && burgerIcon && closeIcon) {
        // Ouvre/ferme le menu en cliquant sur le bouton burger
        burgerBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            burgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
            
            const isExpanded = burgerBtn.getAttribute('aria-expanded') === 'true';
            burgerBtn.setAttribute('aria-expanded', !isExpanded);
        });
    }

    // --- Gestion unifiée du défilement pour tous les liens d'ancre (Desktop & Mobile) ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault(); 
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const headerOffset = 80; 
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                // On défile vers la cible
                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });

                // Si le menu mobile est ouvert, on le ferme après avoir cliqué sur un lien
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    burgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    burgerBtn.setAttribute('aria-expanded', 'false');
                }
            }
        });
    });
    
    // --- Intersection Observer for active nav link ---
    const sections = document.querySelectorAll('section');
    const navLinkItems = document.querySelectorAll('nav .menu-item');

    const observerOptions = {
        root: null,
        rootMargin: '-30% 0px -30% 0px', 
        threshold: 0
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const navId = entry.target.id;
                navLinkItems.forEach(li => {
                    const link = li.querySelector('a');
                    if (link && link.getAttribute('href').includes(navId)) {
                        li.classList.add('current-menu-item');
                    } else {
                        li.classList.remove('current-menu-item');
                    }
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });
    
    // --- Placeholder image fallback ---
    document.querySelectorAll('img').forEach(img => {
        img.onerror = function() {
            const width = this.naturalWidth > 0 ? this.naturalWidth : 600;
            const height = this.naturalHeight > 0 ? this.naturalHeight : 400;
            this.src = `https://placehold.co/${width}x${height}/FEF8E9/222?text=Image+indisponible`;
            this.onerror = null; 
        };
    });

    // --- Logic for the legal modal ---
    const openModalBtn = document.getElementById('open-modal-btn');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const legalModal = document.getElementById('legal-modal');

    if(openModalBtn && closeModalBtn && legalModal) {
        openModalBtn.addEventListener('click', () => {
            legalModal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            legalModal.classList.add('hidden');
        });

        legalModal.addEventListener('click', (event) => {
            if (event.target === legalModal) {
                legalModal.classList.add('hidden');
            }
        });
    }
});
