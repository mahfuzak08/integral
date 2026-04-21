<?php 
$current_page = 'contact';
$page_title = 'Contact Us | Integral Solutions';
include 'data.php';
include 'header.php';
?>

    <!-- Main Content -->
    <main>
        <!-- Breadcrumb Header -->
        <div class="relative bg-gradient-to-br from-slate-900 via-emerald-900 to-slate-900 pt-32 pb-20 text-center overflow-hidden">
            <!-- Animated Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-20 left-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
                <div class="absolute top-40 right-20 w-72 h-72 bg-emerald-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
                <div class="absolute bottom-20 left-1/2 w-72 h-72 bg-teal-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <!-- Breadcrumb -->
                <div class="flex items-center justify-center space-x-2 text-blue-400 font-medium mb-6 animate-slide-in">
                    <a href="index.php" class="hover:text-white transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Home
                    </a>
                    <span class="text-gray-500">/</span>
                    <span class="text-white">Contact</span>
                </div>
                
                <!-- Title -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-5 md:mb-6 animate-scale-in">
                    Contact <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-emerald-400 to-teal-400">Our Team</span>
                </h1>
                
                <p class="text-base sm:text-lg md:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed animate-fade-in">
                    We are here to help you with your engineering and contracting needs
                </p>
                
                <!-- Decorative Line -->
                <div class="flex items-center justify-center mt-8 gap-2">
                    <div class="h-1 w-20 bg-gradient-to-r from-transparent to-blue-500 rounded-full"></div>
                    <div class="h-1 w-8 bg-blue-500 rounded-full"></div>
                    <div class="h-1 w-20 bg-gradient-to-l from-transparent to-blue-500 rounded-full"></div>
                </div>
            </div>
        </div>

        <!-- Contact Info Cards -->
        <div class="py-16 sm:py-20 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-7 md:gap-8 mb-16 sm:mb-20 md:mb-24">
                    <!-- Office Hours Card -->
                    <div class="group p-6 sm:p-7 md:p-8 bg-white rounded-2xl sm:rounded-3xl text-center hover:shadow-2xl transition-all duration-500 border-2 border-gray-100 hover:border-blue-500 relative overflow-hidden hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full opacity-10 group-hover:scale-150 group-hover:opacity-20 transition-all duration-700"></div>
                        
                        <div class="relative w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-5 md:mb-6 shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl group-hover:animate-pulse"></div>
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="relative text-lg sm:text-lg md:text-xl font-bold mb-3 sm:mb-3 md:mb-4 text-gray-900 group-hover:text-white transition-colors duration-500">Office Hours</h3>
                        <p class="relative text-gray-600 text-xs sm:text-sm mb-2 group-hover:text-white/90 transition-colors duration-500">Saturday: <?= $company_details['business_hours']['Saturday']; ?></p>
                        <p class="relative text-gray-600 text-xs sm:text-sm group-hover:text-white/90 transition-colors duration-500">Sun - Thu: <?= $company_details['business_hours']['Sunday - Thursday']; ?></p>
                        <p class="relative text-gray-600 text-xs sm:text-sm group-hover:text-white/90 transition-colors duration-500">Friday: <?= $company_details['business_hours']['Friday']; ?></p>
                    </div>
                    
                    <!-- Address Card -->
                    <div class="group p-6 sm:p-7 md:p-8 bg-white rounded-2xl sm:rounded-3xl text-center hover:shadow-2xl transition-all duration-500 border-2 border-gray-100 hover:border-emerald-500 relative overflow-hidden hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-teal-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-full opacity-10 group-hover:scale-150 group-hover:opacity-20 transition-all duration-700"></div>
                        
                        <div class="relative w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-gradient-to-br from-emerald-500 to-teal-600 text-white rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-5 md:mb-6 shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl group-hover:animate-pulse"></div>
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="relative text-lg sm:text-lg md:text-xl font-bold mb-3 sm:mb-3 md:mb-4 text-gray-900 group-hover:text-white transition-colors duration-500">Address</h3>
                        <p class="relative text-gray-600 text-xs sm:text-sm mb-2 group-hover:text-white/90 transition-colors duration-500"><?= $company_details['address']; ?></p>
                        <p class="relative text-gray-600 text-xs sm:text-sm group-hover:text-white/90 transition-colors duration-500"><?= $company_details['city']; ?></p>
                    </div>
                    
                    <!-- Online Card -->
                    <div class="group p-6 sm:p-7 md:p-8 bg-white rounded-2xl sm:rounded-3xl text-center hover:shadow-2xl transition-all duration-500 border-2 border-gray-100 hover:border-purple-500 relative overflow-hidden hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full opacity-10 group-hover:scale-150 group-hover:opacity-20 transition-all duration-700"></div>
                        
                        <div class="relative w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-5 md:mb-6 shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl group-hover:animate-pulse"></div>
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="relative text-lg sm:text-lg md:text-xl font-bold mb-3 sm:mb-3 md:mb-4 text-gray-900 group-hover:text-white transition-colors duration-500">Online</h3>
                        <p class="relative text-gray-600 text-xs sm:text-sm mb-2 group-hover:text-white/90 transition-colors duration-500"><?= $company_details['query_email']; ?></p>
                        <p class="relative text-gray-600 text-xs sm:text-sm mb-2 group-hover:text-white/90 transition-colors duration-500"><?= $company_details['email']; ?></p>
                        <p class="relative text-gray-600 text-xs sm:text-sm mb-2 group-hover:text-white/90 transition-colors duration-500"><?= $company_details['gmail']; ?></p>
                        <p class="relative text-gray-600 text-xs sm:text-sm group-hover:text-white/90 transition-colors duration-500"><?= $company_details['website']; ?></p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-8 sm:mb-10 md:mb-12">
                        <h2 class="text-2xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-3 md:mb-4">Send Us a Message</h2>
                        <p class="text-gray-600 text-sm sm:text-base">Fill out the form below and our team will get back to you within 24 hours.</p>
                    </div>

                    <form id="contactForm" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    required 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all"
                                    placeholder="John Doe"
                                />
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    required 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all"
                                    placeholder="john@company.com"
                                />
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                <input 
                                    type="tel" 
                                    name="phone" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all"
                                    placeholder="+880 1234-567890"
                                />
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Company Name</label>
                                <input 
                                    type="text" 
                                    name="company" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all"
                                    placeholder="Your Company"
                                />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Service Interest</label>
                            <select 
                                name="service" 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all"
                            >
                                <option>MEP Engineering & Installation</option>
                                <option>Engineering Consultancy</option>
                                <option>Import & Supply</option>
                                <option>Contracting</option>
                                <option>General Inquiry</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea 
                                name="message" 
                                required 
                                rows="6" 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all resize-none"
                                placeholder="Please describe your project requirements..."
                            ></textarea>
                        </div>

                        <!-- Google reCAPTCHA -->
                        <div class="flex justify-center">
                            <div class="g-recaptcha" data-sitekey="6LfkKpcsAAAAAKQNArWTOioNHf4IZQAzZqNn3OIx"></div>
                        </div>

                        <!-- Error/Success Message -->
                        <div id="formMessage" class="hidden p-4 rounded-xl text-center font-medium"></div>

                        <button 
                            type="submit" 
                            id="submitBtn"
                            class="w-full px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold flex items-center justify-center transition-all shadow-xl hover:-translate-y-1 disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            <span id="btnText">Send Message</span>
                            <svg id="btnIcon" class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                            <svg id="btnSpinner" class="hidden ml-2 w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map Section -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 mt-16 sm:mt-20 md:mt-24">
                <div class="text-center mb-6 sm:mb-7 md:mb-8">
                    <h3 class="text-xl sm:text-xl md:text-2xl font-bold text-gray-900 mb-2">Find Us Here</h3>
                    <p class="text-gray-600 text-sm sm:text-base">374/1, West Rampura, Dhaka-1219, Bangladesh</p>
                </div>
                <div class="rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl border border-gray-200">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6681.499755599558!2d90.41772395825969!3d23.767409128106934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c786214159bb%3A0x8fedeffa1a90c833!2s374%2C%201%20W%20Rampura%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1770720629347!5m2!1sen!2sbd" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-64 sm:h-80 md:h-96 lg:h-[450px]"
                    ></iframe>
                </div>
            </div>
        </div>
    </main>

<?php include 'footer.php'; ?>

    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- JavaScript -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const btnIcon = document.getElementById('btnIcon');
            const btnSpinner = document.getElementById('btnSpinner');
            const formMessage = document.getElementById('formMessage');
            
            // Disable button and show loading state
            submitBtn.disabled = true;
            btnText.textContent = 'Sending...';
            btnIcon.classList.add('hidden');
            btnSpinner.classList.remove('hidden');
            formMessage.classList.add('hidden');
            
            // Collect form data
            const formData = new FormData(this);
            
            try {
                // Send AJAX request
                const response = await fetch('contact_handler.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                // Show message
                formMessage.classList.remove('hidden');
                if (result.success) {
                    formMessage.className = 'p-4 rounded-xl text-center font-medium bg-green-100 border border-green-500 text-green-700';
                    formMessage.textContent = result.message;
                    this.reset();
                    // Reset reCAPTCHA
                    if (typeof grecaptcha !== 'undefined') {
                        grecaptcha.reset();
                    }
                } else {
                    formMessage.className = 'p-4 rounded-xl text-center font-medium bg-red-100 border border-red-500 text-red-700';
                    formMessage.textContent = result.message;
                }
                
                // Scroll to message
                formMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
            } catch (error) {
                console.error('Error:', error);
                formMessage.classList.remove('hidden');
                formMessage.className = 'p-4 rounded-xl text-center font-medium bg-red-100 border border-red-500 text-red-700';
                formMessage.textContent = 'An error occurred. Please try again later.';
            } finally {
                // Re-enable button
                submitBtn.disabled = false;
                btnText.textContent = 'Send Message';
                btnIcon.classList.remove('hidden');
                btnSpinner.classList.add('hidden');
            }
        });
    </script>
