// ======================
// Home Page
// ======================

// function renderHomePage() {
//     return `
//         ${renderHeroSection()}
//         ${renderAboutSection(true)}
//         ${renderServicesSection(true)}
//         ${renderProductsSection(true)}
//         ${renderContactSection()}
//     `;
// }

// ======================
// Hero Section
// ======================

// function renderHeroSection() {
//     const slides = HERO_SLIDES;
    
//     return `
//         <section id="home" class="relative h-screen flex items-center overflow-hidden bg-slate-900">
//             ${slides.map((slide, index) => `
//                 <div class="hero-slide ${index === 0 ? 'active' : ''}">
//                     <div class="absolute inset-0 z-0 bg-cover bg-center" style="background-image: url('${slide.image}')">
//                         <div class="absolute inset-0 hero-overlay"></div>
//                     </div>
                    
//                     <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
//                         <div class="max-w-3xl">
//                             <div class="inline-flex items-center px-4 py-1.5 rounded-full border border-blue-500/30 bg-blue-500/10 text-blue-300 text-sm font-medium mb-8">
//                                 <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
//                                 </svg>
//                                 First Class Engineering & Contracting
//                             </div>
//                             <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
//                                 ${slide.title}
//                             </h1>
//                             <p class="text-xl text-gray-300 mb-10 leading-relaxed max-w-2xl">
//                                 ${slide.subtitle}
//                             </p>
                            
//                             <div class="flex flex-col sm:flex-row gap-4">
//                                 <a href="#services" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-bold flex items-center justify-center transition-all shadow-xl hover:-translate-y-1">
//                                     View Our Services
//                                     <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
//                                     </svg>
//                                 </a>
//                                 <a href="#contact" class="px-8 py-4 bg-white/10 hover:bg-white/20 text-white backdrop-blur-md border border-white/20 rounded-lg font-bold flex items-center justify-center transition-all hover:-translate-y-1">
//                                     Get a Quote
//                                 </a>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//             `).join('')}

//             <!-- Navigation Arrows -->
//             <button onclick="prevSlide()" class="absolute left-4 z-20 p-2 text-white/50 hover:text-white transition-colors bg-white/5 hover:bg-white/10 rounded-full hidden md:block">
//                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
//                 </svg>
//             </button>
//             <button onclick="nextSlide()" class="absolute right-4 z-20 p-2 text-white/50 hover:text-white transition-colors bg-white/5 hover:bg-white/10 rounded-full hidden md:block">
//                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
//                 </svg>
//             </button>

//             <!-- Pagination Dots -->
//             <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex gap-3">
//                 ${slides.map((_, i) => `
//                     <button onclick="changeSlide(${i})" class="slider-dot ${i === 0 ? 'active' : ''}"></button>
//                 `).join('')}
//             </div>
//         </section>
//     `;
// }

// ======================
// About Section
// ======================

// function renderAboutSection(snippet = false) {
//     return `
//         <section id="about" class="py-24 overflow-hidden ${snippet ? 'bg-white' : 'bg-transparent'}">
//             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
//                 <div class="grid lg:grid-cols-2 gap-16 items-center">
//                     <div class="relative">
//                         <div class="rounded-2xl overflow-hidden shadow-2xl">
//                             <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" alt="Engineering Team" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700" />
//                         </div>
//                         <div class="absolute -bottom-8 -right-8 bg-blue-600 p-8 rounded-2xl shadow-xl hidden md:block max-w-[280px]">
//                             <div class="text-white italic font-medium leading-relaxed">
//                                 "Our mission is to deliver high-quality, cost-efficient and sustainable engineering solutions tailored to our clients' needs."
//                             </div>
//                         </div>
//                     </div>

//                     <div class="space-y-8">
//                         <div>
//                             <h3 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-3">About Integral Solutions</h3>
//                             <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">
//                                 Providing Turnkey Solutions for a Sustainable Bangladesh
//                             </h2>
//                             <p class="text-gray-600 text-lg leading-relaxed mb-8">
//                                 Integral Solutions is a multidisciplinary engineering and contracting company providing turnkey solutions to public and private sector clients across Bangladesh. With strong capabilities in engineering, technical consultancy, global sourcing and first-class contracting.
//                             </p>
//                         </div>

//                         ${snippet ? `
//                             <div class="grid sm:grid-cols-2 gap-6">
//                                 <div class="p-6 bg-slate-50 rounded-xl border-l-4 border-blue-600">
//                                     <svg class="w-8 h-8 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
//                                     </svg>
//                                     <h4 class="text-xl font-bold mb-2 text-slate-900">Our Vision</h4>
//                                     <p class="text-gray-600 text-sm">To be the most trusted name in multidisciplinary engineering across the nation.</p>
//                                 </div>
//                                 <div class="p-6 bg-slate-50 rounded-xl border-l-4 border-blue-600">
//                                     <svg class="w-8 h-8 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
//                                     </svg>
//                                     <h4 class="text-xl font-bold mb-2 text-slate-900">Our Strategy</h4>
//                                     <p class="text-gray-600 text-sm">Combining global sourcing with local expertise to deliver world-class infrastructure.</p>
//                                 </div>
//                             </div>
//                             <a href="#about" class="inline-flex items-center font-bold text-blue-600 hover:text-blue-700 transition-all group">
//                                 Read More About Us
//                                 <svg class="ml-2 w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
//                                 </svg>
//                             </a>
//                         ` : `
//                             <div class="space-y-4">
//                                 <p class="text-gray-600 leading-relaxed">
//                                     Founded on the principles of integrity and technical excellence, we bridge the gap between complex engineering requirements and reliable execution. Our multidisciplinary approach allows us to serve diverse sectors, from large-scale power plants to high-security CCTV infrastructure.
//                                 </p>
//                                 <div class="grid grid-cols-2 gap-4">
//                                     ${['Project Execution', 'Energy Systems', 'IT Integration', 'Technical Advisory'].map(tag => `
//                                         <div class="flex items-center text-gray-700 font-medium bg-gray-50 p-3 rounded-lg border border-gray-100">
//                                             <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
//                                             </svg>
//                                             ${tag}
//                                         </div>
//                                     `).join('')}
//                                 </div>
//                             </div>
//                         `}
//                     </div>
//                 </div>
//             </div>
//         </section>
//     `;
// }

// ======================
// Services Section
// ======================

// function renderServicesSection(snippet = false) {
//     const displayServices = snippet ? SERVICES.slice(0, 4) : SERVICES;
    
//     return `
//         <section id="services" class="py-24 ${snippet ? 'bg-gray-50' : 'bg-transparent'}">
//             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
//                 ${snippet ? `
//                     <div class="text-center mb-16">
//                         <h3 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-3">Core Expertise</h3>
//                         <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Business Areas</h2>
//                         <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
//                     </div>
//                 ` : `
//                     <div class="text-center mb-16">
//                         <h3 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-3">What We Do</h3>
//                         <h2 class="text-4xl font-bold text-gray-900 mb-4">Complete Engineering Solutions</h2>
//                         <p class="text-gray-600 text-lg max-w-2xl mx-auto">
//                             From concept to completion, we provide comprehensive engineering and contracting services
//                         </p>
//                     </div>
//                 `}

//                 <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
//                     ${displayServices.map(service => `
//                         <div class="service-card group bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
//                             <div class="service-icon w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-blue-600">
//                                 ${getServiceIcon(service.icon)}
//                             </div>
//                             <h4 class="text-xl font-bold text-gray-900 mb-3">${service.title}</h4>
//                             <p class="text-gray-600 text-sm mb-6 flex-grow">${service.description}</p>
//                             <ul class="space-y-2">
//                                 ${service.items.slice(0, 4).map(item => `
//                                     <li class="flex items-start text-xs text-gray-500 font-medium">
//                                         <div class="w-1.5 h-1.5 bg-blue-400 rounded-full mt-1.5 mr-2 shrink-0"></div>
//                                         ${item}
//                                     </li>
//                                 `).join('')}
//                             </ul>
//                             ${snippet ? `
//                                 <a href="#services" class="mt-8 text-blue-600 font-bold text-sm flex items-center group-hover:translate-x-2 transition-transform">
//                                     Explore Deeply 
//                                     <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
//                                     </svg>
//                                 </a>
//                             ` : ''}
//                         </div>
//                     `).join('')}
//                 </div>
//             </div>
//         </section>
//     `;
// }

// ======================
// Products Section
// ======================

// function renderProductsSection(snippet = false) {
//     const displayProducts = snippet ? PRODUCTS.slice(0, 12) : PRODUCTS;
    
//     return `
//         <section id="products" class="py-24 ${snippet ? 'bg-white' : 'bg-transparent'}">
//             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
//                 <div class="text-center mb-16">
//                     <h3 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-3">Products & Equipment</h3>
//                     <h2 class="text-4xl font-bold text-gray-900 mb-4">Import & Supply Chain</h2>
//                     ${!snippet ? '<p class="text-gray-600 text-lg max-w-2xl mx-auto">High-quality products sourced globally for your infrastructure needs</p>' : ''}
//                 </div>

//                 <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
//                     ${displayProducts.map(product => `
//                         <div class="product-card bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition-all border border-gray-100 text-center">
//                             <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-4">
//                                 <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
//                                 </svg>
//                             </div>
//                             <h4 class="font-bold text-gray-900 text-sm">${product}</h4>
//                         </div>
//                     `).join('')}
//                 </div>

//                 ${snippet ? `
//                     <div class="text-center mt-12">
//                         <a href="#products" class="inline-flex items-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-bold transition-all shadow-lg hover:-translate-y-1">
//                             View All Products
//                             <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
//                             </svg>
//                         </a>
//                     </div>
//                 ` : ''}
//             </div>
//         </section>
//     `;
// }

// ======================
// Contact Section
// ======================

// function renderContactSection() {
//     return `
//         <section id="contact" class="py-24 bg-gray-50">
//             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
//                 <div class="text-center mb-16">
//                     <h3 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-3">Get In Touch</h3>
//                     <h2 class="text-4xl font-bold text-gray-900 mb-4">Contact Us Today</h2>
//                     <p class="text-gray-600 text-lg max-w-2xl mx-auto">
//                         Ready to start your project? Reach out to our team for a consultation
//                     </p>
//                 </div>

//                 <div class="grid lg:grid-cols-2 gap-12">
//                     <!-- Contact Form -->
//                     <div class="bg-white p-8 rounded-2xl shadow-lg">
//                         <h3 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h3>
//                         <form id="contact-form" class="space-y-6">
//                             <div>
//                                 <label class="form-label">Full Name *</label>
//                                 <input type="text" id="name" required class="form-input" placeholder="John Doe">
//                             </div>
//                             <div>
//                                 <label class="form-label">Email Address *</label>
//                                 <input type="email" id="email" required class="form-input" placeholder="john@example.com">
//                             </div>
//                             <div>
//                                 <label class="form-label">Phone Number *</label>
//                                 <input type="tel" id="phone" required class="form-input" placeholder="+880 1XXX XXXXXX">
//                             </div>
//                             <div>
//                                 <label class="form-label">Company Name</label>
//                                 <input type="text" id="company" class="form-input" placeholder="Your Company">
//                             </div>
//                             <div>
//                                 <label class="form-label">Service Interest</label>
//                                 <select id="service" class="form-select">
//                                     <option value="">Select a service</option>
//                                     ${SERVICES.map(service => `<option value="${service.id}">${service.title}</option>`).join('')}
//                                 </select>
//                             </div>
//                             <div>
//                                 <label class="form-label">Message *</label>
//                                 <textarea id="message" required rows="4" class="form-textarea" placeholder="Tell us about your project..."></textarea>
//                             </div>
//                             <button type="submit" class="w-full btn-primary">
//                                 Send Message
//                                 <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
//                                 </svg>
//                             </button>
//                         </form>
//                     </div>

//                     <!-- Contact Info -->
//                     <div class="space-y-8">
//                         <div class="bg-white p-8 rounded-2xl shadow-lg">
//                             <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
//                             <div class="space-y-6">
//                                 <div class="flex items-start gap-4">
//                                     <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center shrink-0">
//                                         <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
//                                         </svg>
//                                     </div>
//                                     <div>
//                                         <h4 class="font-bold text-gray-900 mb-1">Address</h4>
//                                         <p class="text-gray-600">${COMPANY_DETAILS.address}</p>
//                                     </div>
//                                 </div>
//                                 <div class="flex items-start gap-4">
//                                     <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center shrink-0">
//                                         <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
//                                         </svg>
//                                     </div>
//                                     <div>
//                                         <h4 class="font-bold text-gray-900 mb-1">Phone</h4>
//                                         ${COMPANY_DETAILS.phone.map(phone => `
//                                             <p class="text-gray-600"><a href="tel:${phone.replace(/\s/g, '')}" class="hover:text-blue-600">${phone}</a></p>
//                                         `).join('')}
//                                     </div>
//                                 </div>
//                                 <div class="flex items-start gap-4">
//                                     <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center shrink-0">
//                                         <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
//                                         </svg>
//                                     </div>
//                                     <div>
//                                         <h4 class="font-bold text-gray-900 mb-1">Email</h4>
//                                         <p class="text-gray-600"><a href="mailto:${COMPANY_DETAILS.email}" class="hover:text-blue-600">${COMPANY_DETAILS.email}</a></p>
//                                     </div>
//                                 </div>
//                             </div>
//                         </div>

//                         <div class="bg-blue-600 text-white p-8 rounded-2xl">
//                             <h3 class="text-2xl font-bold mb-4">Business Hours</h3>
//                             <div class="space-y-2">
//                                 <div class="flex justify-between">
//                                     <span>Sunday - Thursday:</span>
//                                     <span class="font-bold">9:00 AM - 6:00 PM</span>
//                                 </div>
//                                 <div class="flex justify-between">
//                                     <span>Friday:</span>
//                                     <span class="font-bold">Closed</span>
//                                 </div>
//                                 <div class="flex justify-between">
//                                     <span>Saturday:</span>
//                                     <span class="font-bold">10:00 AM - 4:00 PM</span>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </section>
//     `;
// }

// ======================
// Full Pages
// ======================

// function renderAboutPage() {
//     return `
//         <div class="pt-24 pb-12">
//             <!-- Breadcrumb Header -->
//             <div class="bg-slate-900 py-16 text-center">
//                 <div class="max-w-7xl mx-auto px-4">
//                     <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Our Company</h1>
//                     <div class="flex items-center justify-center space-x-2 text-blue-400 font-medium">
//                         <button onclick="navigateTo('home')" class="hover:text-white transition-colors">Home</button>
//                         <span>/</span>
//                         <span class="text-gray-400">About Us</span>
//                     </div>
//                 </div>
//             </div>

//             ${renderAboutSection(false)}

//             <!-- Values Section -->
//             <section class="py-24 bg-gray-50">
//                 <div class="max-w-7xl mx-auto px-4">
//                     <div class="text-center mb-16">
//                         <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Core Values</h2>
//                         <p class="text-gray-600 max-w-2xl mx-auto">The pillars that define every project we undertake and every client relationship we build.</p>
//                     </div>

//                     <div class="grid md:grid-cols-3 gap-8">
//                         <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 text-center">
//                             <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6 text-blue-600">
//                                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
//                                 </svg>
//                             </div>
//                             <h3 class="text-xl font-bold mb-4">Integrity</h3>
//                             <p class="text-gray-600 leading-relaxed">Operating with transparency and honesty in all our turnkey solutions.</p>
//                         </div>
//                         <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 text-center">
//                             <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6 text-blue-600">
//                                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
//                                 </svg>
//                             </div>
//                             <h3 class="text-xl font-bold mb-4">Excellence</h3>
//                             <p class="text-gray-600 leading-relaxed">Striving for the highest quality in engineering and supply standards.</p>
//                         </div>
//                         <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 text-center">
//                             <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6 text-blue-600">
//                                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
//                                 </svg>
//                             </div>
//                             <h3 class="text-xl font-bold mb-4">Innovation</h3>
//                             <p class="text-gray-600 leading-relaxed">Implementing cutting-edge IT and energy management systems.</p>
//                         </div>
//                     </div>
//                 </div>
//             </section>

//             <!-- Why Us Section -->
//             <section class="py-24">
//                 <div class="max-w-7xl mx-auto px-4">
//                     <div class="grid lg:grid-cols-2 gap-16 items-center">
//                         <div>
//                             <h2 class="text-3xl font-bold text-gray-900 mb-8">Why Choose Integral Solutions?</h2>
//                             <div class="space-y-6">
//                                 <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border border-gray-100 group hover:border-blue-500 transition-all">
//                                     <div class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-4 group-hover:rotate-12 transition-transform">
//                                         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
//                                         </svg>
//                                     </div>
//                                     <span class="font-semibold text-gray-700">Turnkey execution from concept to commissioning</span>
//                                 </div>
//                                 <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border border-gray-100 group hover:border-blue-500 transition-all">
//                                     <div class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-4 group-hover:rotate-12 transition-transform">
//                                         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
//                                         </svg>
//                                     </div>
//                                     <span class="font-semibold text-gray-700">First Class Contracting license grade</span>
//                                 </div>
//                                 <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border border-gray-100 group hover:border-blue-500 transition-all">
//                                     <div class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-4 group-hover:rotate-12 transition-transform">
//                                         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
//                                         </svg>
//                                     </div>
//                                     <span class="font-semibold text-gray-700">Multidisciplinary team of mechanical & electrical engineers</span>
//                                 </div>
//                                 <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border border-gray-100 group hover:border-blue-500 transition-all">
//                                     <div class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-4 group-hover:rotate-12 transition-transform">
//                                         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
//                                         </svg>
//                                     </div>
//                                     <span class="font-semibold text-gray-700">Deep network of global equipment manufacturers</span>
//                                 </div>
//                                 <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border border-gray-100 group hover:border-blue-500 transition-all">
//                                     <div class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-4 group-hover:rotate-12 transition-transform">
//                                         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
//                                         </svg>
//                                     </div>
//                                     <span class="font-semibold text-gray-700">Reliable long-term maintenance & support services</span>
//                                 </div>
//                             </div>
//                         </div>
//                         <div class="grid grid-cols-2 gap-4">
//                             <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=400" alt="Team Meeting" class="rounded-2xl shadow-lg mt-8 w-full h-auto object-cover" />
//                             <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&q=80&w=400" alt="Office Work" class="rounded-2xl shadow-lg w-full h-auto object-cover" />
//                         </div>
//                     </div>
//                 </div>
//             </section>
//         </div>
//     `;
// }

// function renderServicesPage() {
//     return `
//         <div class="pt-24 pb-12">
//             <!-- Breadcrumb Header -->
//             <div class="bg-slate-900 py-16 text-center">
//                 <div class="max-w-7xl mx-auto px-4">
//                     <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Engineering Services</h1>
//                     <p class="text-blue-200 max-w-2xl mx-auto opacity-80">We deliver comprehensive design, installation, and maintenance across multidisciplinary systems.</p>
//                 </div>
//             </div>

//             <div class="py-16">
//                 <div class="max-w-7xl mx-auto px-4">
//                     <div class="space-y-32">
//                         ${SERVICES.map((service, idx) => {
//                             const isEven = idx % 2 === 0;
//                             return `
//                                 <div class="flex flex-col ${isEven ? 'lg:flex-row' : 'lg:flex-row-reverse'} gap-16 items-center">
//                                     <div class="lg:w-1/2">
//                                         <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white mb-6 shadow-xl">
//                                             ${getServiceIcon(service.icon)}
//                                         </div>
//                                         <h2 class="text-3xl font-bold text-gray-900 mb-6">${service.title}</h2>
//                                         <p class="text-gray-600 text-lg mb-8 leading-relaxed">${service.description}</p>
//                                         <div class="grid sm:grid-cols-2 gap-4">
//                                             ${service.items.map(item => `
//                                                 <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
//                                                     <svg class="w-4 h-4 text-blue-600 mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
//                                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
//                                                     </svg>
//                                                     ${item}
//                                                 </div>
//                                             `).join('')}
//                                         </div>
//                                     </div>
//                                     <div class="lg:w-1/2 relative">
//                                         <div class="absolute -inset-4 bg-blue-100 rounded-3xl -z-10 rotate-3 opacity-50"></div>
//                                         <img src="https://images.unsplash.com/photo-${idx === 0 ? '1581092795360-fd1ca04f0952' : idx === 1 ? '1454165804606-c3d57bc86b40' : idx === 2 ? '1494412574643-ff11b0a5c1c3' : '1541888946425-d81bb19240f5'}?auto=format&fit=crop&q=80&w=800" alt="${service.title}" class="rounded-2xl shadow-2xl w-full h-80 object-cover" />
//                                     </div>
//                                 </div>
//                             `;
//                         }).join('')}
//                     </div>
//                 </div>
//             </div>

//             <!-- CTA section -->
//             <section class="py-24 bg-blue-900 text-white text-center mt-12">
//                 <div class="max-w-4xl mx-auto px-4">
//                     <h2 class="text-3xl font-bold mb-6">Need a Specialized Engineering Assessment?</h2>
//                     <p class="text-blue-100 mb-10 text-lg opacity-80">Our consultancy team is available for technical audits and feasibility assessments for your upcoming industrial projects.</p>
//                     <div class="flex justify-center gap-4 flex-wrap">
//                         <button onclick="navigateTo('contact')" class="bg-white text-blue-900 px-8 py-4 rounded-xl font-bold shadow-xl hover:bg-blue-50 transition-colors">Request Service</button>
//                         <button class="bg-blue-800 text-white px-8 py-4 rounded-xl font-bold shadow-xl hover:bg-blue-700 transition-colors border border-blue-700">Download Brochure</button>
//                     </div>
//                 </div>
//             </section>
//         </div>
//     `;
// }

// function renderProductsPage() {
//     return `
//         <div class="pt-24 pb-12">
//             <!-- Breadcrumb Header -->
//             <div class="bg-slate-900 py-16 text-center">
//                 <div class="max-w-7xl mx-auto px-4">
//                     <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Product Catalog</h1>
//                     <p class="text-blue-200 opacity-80">Sourcing premium industrial equipment for Bangladesh's utility sectors.</p>
//                 </div>
//             </div>

//             <div class="py-12 bg-white border-b sticky top-[72px] z-30">
//                 <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row gap-4 items-center justify-between">
//                     <div class="relative w-full md:w-1/2">
//                         <svg class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
//                         </svg>
//                         <input type="text" id="product-search" placeholder="Search equipment by name or category..." class="w-full pl-12 pr-4 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all shadow-sm" oninput="filterProducts(this.value)">
//                     </div>
//                     <div class="flex gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0">
//                         <button class="px-5 py-2.5 rounded-full border border-gray-200 bg-blue-600 text-white font-bold text-sm whitespace-nowrap">All</button>
//                         <button class="px-5 py-2.5 rounded-full border border-gray-200 bg-white text-gray-700 font-bold text-sm whitespace-nowrap hover:bg-blue-50 hover:border-blue-200 transition-all">Electrical</button>
//                         <button class="px-5 py-2.5 rounded-full border border-gray-200 bg-white text-gray-700 font-bold text-sm whitespace-nowrap hover:bg-blue-50 hover:border-blue-200 transition-all">Mechanical</button>
//                         <button class="px-5 py-2.5 rounded-full border border-gray-200 bg-white text-gray-700 font-bold text-sm whitespace-nowrap hover:bg-blue-50 hover:border-blue-200 transition-all">IT/Security</button>
//                     </div>
//                 </div>
//             </div>

//             <div class="py-16 bg-gray-50 min-h-[600px]">
//                 <div class="max-w-7xl mx-auto px-4">
//                     <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
//                         ${PRODUCTS.map((product, idx) => `
//                             <div class="product-item bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all group">
//                                 <div class="h-48 bg-slate-100 flex items-center justify-center group-hover:bg-blue-50 transition-colors">
//                                     <svg class="w-12 h-12 text-gray-300 group-hover:text-blue-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
//                                     </svg>
//                                 </div>
//                                 <div class="p-6">
//                                     <div class="flex items-center text-[10px] font-bold text-blue-600 uppercase tracking-widest mb-2">
//                                         <svg class="w-2.5 h-2.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
//                                         </svg>
//                                         Industrial Supply
//                                     </div>
//                                     <h3 class="text-lg font-bold text-gray-900 mb-4">${product}</h3>
//                                     <button onclick="navigateTo('contact')" class="w-full py-2.5 rounded-xl border border-blue-600 text-blue-600 font-bold text-sm hover:bg-blue-600 hover:text-white transition-all">
//                                         Request Quote
//                                     </button>
//                                 </div>
//                             </div>
//                         `).join('')}
//                     </div>
//                     <div id="no-results" class="hidden text-center py-32">
//                         <svg class="w-16 h-16 mx-auto text-gray-200 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
//                         </svg>
//                         <h3 class="text-2xl font-bold text-gray-900 mb-2">No products found</h3>
//                         <p class="text-gray-600">Try adjusting your search terms or contact us for custom sourcing.</p>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     `;
// }

// function renderContactPage() {
//     return `
//         <div class="pt-24 pb-12">
//             <!-- Breadcrumb Header -->
//             <div class="bg-slate-900 py-16 text-center">
//                 <div class="max-w-7xl mx-auto px-4">
//                     <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact Our Team</h1>
//                     <p class="text-blue-200 opacity-80">We are here to help you with your engineering and contracting needs.</p>
//                 </div>
//             </div>

//             <div class="py-24 bg-white">
//                 <div class="max-w-7xl mx-auto px-4">
//                     <div class="grid md:grid-cols-3 gap-8 mb-24">
//                         <div class="p-8 bg-blue-50 rounded-3xl text-center">
//                             <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
//                                 <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
//                                 </svg>
//                             </div>
//                             <h3 class="text-xl font-bold mb-4">Office Hours</h3>
//                             <p class="text-gray-600 text-sm">Sun - Thu: 9:00 AM - 6:00 PM</p>
//                             <p class="text-gray-600 text-sm">Saturday: 10:00 AM - 4:00 PM</p>
//                             <p class="text-gray-600 text-sm">Friday: Closed</p>
//                         </div>
//                         <div class="p-8 bg-blue-50 rounded-3xl text-center">
//                             <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
//                                 <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
//                                 </svg>
//                             </div>
//                             <h3 class="text-xl font-bold mb-4">Address</h3>
//                             <p class="text-gray-600 text-sm">374/1, West Rampura</p>
//                             <p class="text-gray-600 text-sm">Dhaka-1219, Bangladesh</p>
//                         </div>
//                         <div class="p-8 bg-blue-50 rounded-3xl text-center">
//                             <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
//                                 <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
//                                 </svg>
//                             </div>
//                             <h3 class="text-xl font-bold mb-4">Online</h3>
//                             <p class="text-gray-600 text-sm">info@integralsolutions.com.bd</p>
//                             <p class="text-gray-600 text-sm">www.integralsolutions.com.bd</p>
//                         </div>
//                     </div>
//                 </div>

//                 ${renderContactSection()}
                
//                 <!-- Map Placeholder -->
//                 <div class="max-w-7xl mx-auto px-4 mt-24">
//                     <div class="h-[450px] bg-slate-100 rounded-3xl overflow-hidden shadow-inner relative flex items-center justify-center border border-gray-200">
//                         <div class="text-center p-8">
//                             <svg class="w-12 h-12 mx-auto text-blue-600 mb-4 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
//                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
//                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
//                             </svg>
//                             <p class="text-gray-400 font-medium">Interactive Map for 374/1, West Rampura, Dhaka</p>
//                             <p class="text-gray-300 text-sm">A map integration will be displayed here</p>
//                         </div>
//                         <!-- Decorative map-like elements -->
//                         <div class="absolute top-1/4 left-1/3 w-0.5 h-32 bg-gray-200 -rotate-45"></div>
//                         <div class="absolute top-1/2 right-1/4 w-0.5 h-32 bg-gray-200 rotate-45"></div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     `;
// }

// ======================
// Helper Functions
// ======================

// function getServiceIcon(iconName) {
//     const icons = {
//         'Zap': '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
//         'Globe': '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
//         'Cpu': '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>',
//         'HardHat': '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>'
//     };
//     return icons[iconName] || icons['Zap'];
// }
