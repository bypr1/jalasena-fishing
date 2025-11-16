import './bootstrap';

// Countdown Timer
function initializeCountdown() {
    // Set the date for December 14, 2025
    const tournamentDate = new Date("2025-12-14T06:00:00+08:00").getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = tournamentDate - now;

        // Calculate time units
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Update the DOM elements
        const daysElement = document.getElementById("days");
        const hoursElement = document.getElementById("hours");
        const minutesElement = document.getElementById("minutes");
        const secondsElement = document.getElementById("seconds");

        if (daysElement) daysElement.innerHTML = days.toString().padStart(2, '0');
        if (hoursElement) hoursElement.innerHTML = hours.toString().padStart(2, '0');
        if (minutesElement) minutesElement.innerHTML = minutes.toString().padStart(2, '0');
        if (secondsElement) secondsElement.innerHTML = seconds.toString().padStart(2, '0');

        // If countdown finished
        if (distance < 0) {
            clearInterval(countdownInterval);
            if (daysElement) daysElement.innerHTML = "00";
            if (hoursElement) hoursElement.innerHTML = "00";
            if (minutesElement) minutesElement.innerHTML = "00";
            if (secondsElement) secondsElement.innerHTML = "00";
            
            // Show tournament started message
            const countdownContainer = document.getElementById("countdown");
            if (countdownContainer) {
                countdownContainer.innerHTML = '<div class="text-2xl font-bold text-center bg-green-500 text-white p-4 rounded-lg">🎣 Tournament Telah Dimulai! 🎣</div>';
            }
        }
    }

    // Update countdown every second
    const countdownInterval = setInterval(updateCountdown, 1000);
    updateCountdown(); // Run immediately
}

// Smooth scrolling for navigation links
function initializeSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Parallax effect for hero section
function initializeParallax() {
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.getElementById('hero');
        if (hero) {
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        }
    });
}

// Fade in animation on scroll
function initializeFadeInOnScroll() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all sections
    document.querySelectorAll('section').forEach(section => {
        section.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-1000');
        observer.observe(section);
    });
}

// Active navigation highlighting
function initializeActiveNav() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', function() {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            if (pageYOffset >= sectionTop) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('text-orange-400', 'border-b-2', 'border-orange-400');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('text-orange-400');
            }
        });
    });
}

// WhatsApp button enhanced functionality
function initializeWhatsAppButtons() {
    document.querySelectorAll('a[href*="wa.me"]').forEach(button => {
        button.addEventListener('click', function(e) {
            // Add click animation
            this.classList.add('animate-pulse');
            setTimeout(() => {
                this.classList.remove('animate-pulse');
            }, 600);
            
            // Analytics tracking could be added here
            console.log('WhatsApp button clicked:', this.href);
        });
    });
}

// Gallery lightbox functionality
function initializeGalleryLightbox() {
    const galleryImages = document.querySelectorAll('#gallery img');
    
    galleryImages.forEach(image => {
        image.addEventListener('click', function() {
            // Create lightbox overlay
            const overlay = document.createElement('div');
            overlay.className = 'fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4';
            overlay.innerHTML = `
                <div class="relative max-w-4xl max-h-full">
                    <img src="${this.src}" alt="${this.alt}" class="max-w-full max-h-full object-contain rounded-lg">
                    <button class="absolute top-4 right-4 text-white text-4xl hover:text-gray-300 transition-colors">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            
            // Close lightbox on click
            overlay.addEventListener('click', function(e) {
                if (e.target === overlay || e.target.closest('button')) {
                    document.body.removeChild(overlay);
                }
            });
            
            // Add to DOM
            document.body.appendChild(overlay);
        });
    });
}

// Loading screen
function initializeLoader() {
    window.addEventListener('load', function() {
        const loader = document.getElementById('loader');
        if (loader) {
            loader.style.display = 'none';
        }
    });
}

// Initialize all functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeCountdown();
    initializeSmoothScrolling();
    initializeParallax();
    initializeFadeInOnScroll();
    initializeActiveNav();
    initializeWhatsAppButtons();
    initializeGalleryLightbox();
    initializeLoader();
});

// Add CSS classes for animations
const style = document.createElement('style');
style.textContent = `
    .animate-fade-in {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
    
    .gradient-text {
        background: linear-gradient(45deg, #0077b6, #00b4d8);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
`;
document.head.appendChild(style);
