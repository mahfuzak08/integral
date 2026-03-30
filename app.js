// ======================
// Global State
// ======================

let currentPage = 'home';
let isScrolled = false;
let isMobileMenuOpen = false;

// ======================
// Initialization
// ======================

document.addEventListener('DOMContentLoaded', function() {
    // Set current year in footer
    const yearElement = document.getElementById('current-year');
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }
    
    // Setup scroll listener
    window.addEventListener('scroll', handleScroll);

    // Initial scroll check
    handleScroll();

    // Initialize hero slider
    initializeHeroSlider();
    
    // Setup contact form if it exists
    setupContactForm();
});

// document.addEventListener('DOMContentLoaded', function() {
//     // Set current year in footer
//     document.getElementById('current-year').textContent = new Date().getFullYear();
    
//     // Setup scroll listener
//     window.addEventListener('scroll', handleScroll);
    
//     // Initial page load
//     navigateTo('home');
    
//     // Check URL hash
//     const hash = window.location.hash.substring(1);
//     if (hash && ['home', 'about', 'services', 'products', 'contact'].includes(hash)) {
//         navigateTo(hash);
//     }
// });

// ======================
// Navigation Functions
// ======================

// function navigateTo(page) {
//     currentPage = page;
//     window.location.hash = page;
    
//     // Update active nav links
//     updateActiveNavLinks(page);
    
//     // Load page content
//     loadPageContent(page);
    
//     // Close mobile menu if open
//     if (isMobileMenuOpen) {
//         toggleMobileMenu();
//     }
    
//     // Scroll to top
//     window.scrollTo({ top: 0, behavior: 'smooth' });
// }

function updateActiveNavLinks(page) {
    // Desktop nav
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.dataset.page === page) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
    
    // Mobile nav
    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        if (link.dataset.page === page) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// function loadPageContent(page) {
//     const mainContent = document.getElementById('main-content');
    
//     switch(page) {
//         case 'home':
//             mainContent.innerHTML = renderHomePage();
//             initializeHeroSlider();
//             break;
//         case 'about':
//             mainContent.innerHTML = renderAboutPage();
//             break;
//         case 'services':
//             mainContent.innerHTML = renderServicesPage();
//             break;
//         case 'products':
//             mainContent.innerHTML = renderProductsPage();
//             break;
//         case 'contact':
//             mainContent.innerHTML = renderContactPage();
//             setupContactForm();
//             break;
//         default:
//             mainContent.innerHTML = renderHomePage();
//             initializeHeroSlider();
//     }
// }

// ======================
// Header Functions
// ======================

function handleScroll() {
    const header = document.getElementById('header');
    const newIsScrolled = window.scrollY > 20;
    const isIndexPage = header.classList.contains('index');
    if (newIsScrolled !== isScrolled) {
        isScrolled = newIsScrolled;
        
        if (isScrolled && isIndexPage) {
            header.classList.add('header-scrolled');
            header.classList.remove('bg-transparent', 'py-5');
            header.classList.add('bg-slate-900', 'shadow-lg', 'py-3');
        } else if (isIndexPage) {
            header.classList.remove('header-scrolled');
            header.classList.remove('bg-slate-900', 'shadow-lg', 'py-3');
            header.classList.add('bg-transparent', 'py-5');
        }
    }
}

function toggleMobileMenu() {
    isMobileMenuOpen = !isMobileMenuOpen;
    const menu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    if (isMobileMenuOpen) {
        menu.classList.remove('hidden');
        menu.classList.add('animate-slide-in');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
        menu.classList.remove('animate-slide-in');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }
}

// ======================
// Hero Slider Functions
// ======================

let currentSlide = 0;
let heroSliderInterval = null;

function initializeHeroSlider() {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dot');
    if (slides.length === 0) return;

    // Reset all slides and dots
    slides.forEach(slide => slide.classList.remove('active'));
    if (dots.length) dots.forEach(dot => dot.classList.remove('active'));

    // Set first slide and dot as active
    currentSlide = 0;
    slides[0].classList.add('active');
    if (dots.length) dots[0].classList.add('active');

    // Start auto-rotation
    if (heroSliderInterval) clearInterval(heroSliderInterval);
    heroSliderInterval = setInterval(nextSlide, 6000);
}

function changeSlide(index) {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dot');
    
    // Hide current slide
    slides[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');
    
    // Show new slide
    currentSlide = index;
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
    
    // Reset timer
    if (heroSliderInterval) clearInterval(heroSliderInterval);
    heroSliderInterval = setInterval(nextSlide, 6000);
}

function nextSlide() {
    const slides = document.querySelectorAll('.hero-slide');
    const nextIndex = (currentSlide + 1) % slides.length;
    changeSlide(nextIndex);
}

function prevSlide() {
    const slides = document.querySelectorAll('.hero-slide');
    const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
    changeSlide(prevIndex);
}

// ======================
// Contact Form
// ======================

function setupContactForm() {
    const form = document.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', handleContactSubmit);
    }
}

function handleContactSubmit(e) {
    e.preventDefault();
    
    const formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        company: document.getElementById('company').value,
        service: document.getElementById('service').value,
        message: document.getElementById('message').value
    };
    
    // Here you would typically send this to a backend
    console.log('Form submitted:', formData);
    
    // Show success message
    alert('Thank you for your inquiry! We will get back to you soon.');
    
    // Reset form
    e.target.reset();
}

// ======================
// Utility Functions
// ======================

function smoothScrollTo(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Product Filter Function
function filterProducts(searchTerm) {
    const productsGrid = document.getElementById('products-grid');
    const noResults = document.getElementById('no-results');
    const productItems = document.querySelectorAll('.product-item');
    
    if (!productsGrid || !productItems.length) return;
    
    const term = searchTerm.toLowerCase().trim();
    let visibleCount = 0;
    
    productItems.forEach(item => {
        const productName = item.querySelector('h3').textContent.toLowerCase();
        if (productName.includes(term) || term === '') {
            item.style.display = 'block';
            visibleCount++;
        } else {
            item.style.display = 'none';
        }
    });
    
    // Show/hide no results message
    if (visibleCount === 0 && noResults) {
        noResults.classList.remove('hidden');
        productsGrid.style.display = 'none';
    } else if (noResults) {
        noResults.classList.add('hidden');
        productsGrid.style.display = 'grid';
    }
}

// SVG Icon helper
function createSVGIcon(type, className = 'w-6 h-6') {
    const icons = {
        phone: '<svg class="' + className + '" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>',
        mail: '<svg class="' + className + '" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
        location: '<svg class="' + className + '" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>',
        check: '<svg class="' + className + '" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>',
        chevronRight: '<svg class="' + className + '" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
        chevronLeft: '<svg class="' + className + '" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>',
        arrow: '<svg class="' + className + '" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>'
    };
    
    return icons[type] || '';
}
