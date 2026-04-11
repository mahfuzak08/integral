<?php 
$current_page = 'about';
$page_title = 'About Us | Integral Solutions';
include 'data.php';
include 'header.php';
?>
    <!-- Main Content -->
    <main>
        <!-- Breadcrumb Header -->
        <div class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 pt-32 pb-20 text-center overflow-hidden">
            <!-- Animated Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-20 left-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
                <div class="absolute top-40 right-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
                <div class="absolute bottom-20 left-1/2 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
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
                    <span class="text-white">About Us</span>
                </div>
                
                <!-- Title -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-5 md:mb-6 animate-scale-in">
                    About Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">Company</span>
                </h1>
                
                <p class="text-base sm:text-lg md:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed animate-fade-in">
                    Engineering excellence and innovation since 2013 - Your trusted partner for complete turnkey solutions
                </p>
                
                <!-- Decorative Line -->
                <div class="flex items-center justify-center mt-8 gap-2">
                    <div class="h-1 w-20 bg-gradient-to-r from-transparent to-blue-500 rounded-full"></div>
                    <div class="h-1 w-8 bg-blue-500 rounded-full"></div>
                    <div class="h-1 w-20 bg-gradient-to-l from-transparent to-blue-500 rounded-full"></div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <section class="py-16 sm:py-20 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" alt="Engineering Team" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700" />
                        </div>
                        <div class="absolute -bottom-8 -right-8 bg-blue-600 p-8 rounded-2xl shadow-xl hidden md:block max-w-[280px]">
                            <div class="text-white italic font-medium leading-relaxed">
                                "Our mission is to deliver high-quality, cost-efficient and sustainable engineering solutions tailored to our clients' needs."
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="inline-flex items-center px-4 py-1.5 rounded-full border border-blue-500/30 bg-blue-50 text-blue-600 text-sm font-bold mb-6">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Since 2013
                        </div>

                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 sm:mb-5 md:mb-6">
                            Your Trusted Partner in <span class="text-blue-600">Engineering Excellence</span>
                        </h2>

                        <p class="text-gray-600 text-lg leading-relaxed mb-6">
                            Integral Solutions is a multidisciplinary engineering and contracting company providing turnkey solutions to public and private sector clients across Bangladesh. With strong capabilities in engineering, technical consultancy, global sourcing and first class contracting, we deliver reliable support from concept to completion.
                        </p>

                        <p class="text-gray-600 text-lg leading-relaxed mb-6">
                            We serve a diverse range of sectors including <strong>commercial buildings, industrial facilities, hospitals, data centers, and residential complexes</strong>. Our technical expertise spans complete turnkey execution from conceptual design through to final handover and ongoing maintenance support.
                        </p>

                        <div class="grid sm:grid-cols-2 gap-4 sm:gap-5 md:gap-6 mt-6 sm:mt-8 md:mt-10">
                            <div class="group p-6 sm:p-7 md:p-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl sm:rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 relative overflow-hidden">
                                <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="absolute -top-4 -right-4 w-24 h-24 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                                <div class="relative z-10">
                                    <div class="text-4xl sm:text-4xl md:text-5xl font-extrabold text-white mb-2 group-hover:scale-110 transition-transform duration-500">10+</div>
                                    <div class="text-blue-100 font-semibold text-xs sm:text-sm uppercase tracking-wider">Years of Excellence</div>
                                </div>
                            </div>
                            <div class="group p-6 sm:p-7 md:p-8 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl sm:rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 relative overflow-hidden">
                                <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="absolute -top-4 -right-4 w-24 h-24 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                                <div class="relative z-10">
                                    <div class="text-4xl sm:text-4xl md:text-5xl font-extrabold text-white mb-2 group-hover:scale-110 transition-transform duration-500">50+</div>
                                    <div class="text-purple-100 font-semibold text-xs sm:text-sm uppercase tracking-wider">Projects Completed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision & Core Values Section -->
        <section class="py-16 sm:py-20 md:py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="text-center mb-12 sm:mb-14 md:mb-16">
                    <h2 class="text-2xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-3 md:mb-4">Our Vision & Core Values</h2>
                    <p class="text-gray-600 text-sm sm:text-base max-w-3xl mx-auto mb-6 sm:mb-8">
                        <strong class="text-blue-600">Vision:</strong> To be a trusted partner in engineering-driven progress across Bangladesh.
                    </p>
                    <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto">The pillars that define every project we undertake and every client relationship we build.</p>
                </div>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-7 md:gap-6">
                    <!-- Integrity Card -->
                    <div class="group bg-white p-6 sm:p-7 md:p-8 rounded-2xl sm:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-blue-500 text-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full opacity-10 group-hover:scale-150 group-hover:opacity-20 transition-all duration-700"></div>
                        
                        <div class="w-14 h-14 sm:w-16 sm:h-16 md:w-18 md:h-18 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 md:mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl animate-pulse"></div>
                            <svg class="w-8 h-8 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl md:text-xl font-bold mb-2 sm:mb-3 group-hover:text-white transition-colors duration-500">Integrity</h3>
                        <p class="text-gray-600 text-xs sm:text-sm group-hover:text-white/90 leading-relaxed transition-colors duration-500">Transparency and honesty in all our dealings</p>
                    </div>

                    <!-- Innovation Card -->
                    <div class="group bg-white p-6 sm:p-7 md:p-8 rounded-2xl sm:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-purple-500 text-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full opacity-10 group-hover:scale-150 group-hover:opacity-20 transition-all duration-700"></div>
                        
                        <div class="w-14 h-14 sm:w-16 sm:h-16 md:w-18 md:h-18 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 md:mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl animate-pulse"></div>
                            <svg class="w-8 h-8 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl md:text-xl font-bold mb-2 sm:mb-3 group-hover:text-white transition-colors duration-500">Innovation</h3>
                        <p class="text-gray-600 text-xs sm:text-sm group-hover:text-white/90 leading-relaxed transition-colors duration-500">Cutting-edge solutions for modern challenges</p>
                    </div>

                    <!-- Quality Card -->
                    <div class="group bg-white p-6 sm:p-7 md:p-8 rounded-2xl sm:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-emerald-500 text-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-teal-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-full opacity-10 group-hover:scale-150 group-hover:opacity-20 transition-all duration-700"></div>
                        
                        <div class="w-14 h-14 sm:w-16 sm:h-16 md:w-18 md:h-18 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 md:mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl animate-pulse"></div>
                            <svg class="w-8 h-8 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl md:text-xl font-bold mb-2 sm:mb-3 group-hover:text-white transition-colors duration-500">Quality</h3>
                        <p class="text-gray-600 text-xs sm:text-sm group-hover:text-white/90 leading-relaxed transition-colors duration-500">Excellence in every aspect of service delivery</p>
                    </div>

                    <!-- Safety Card -->
                    <div class="group bg-white p-6 sm:p-7 md:p-8 rounded-2xl sm:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-orange-500 text-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-orange-500 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-orange-500 to-red-600 rounded-full opacity-10 group-hover:scale-150 group-hover:opacity-20 transition-all duration-700"></div>
                        
                        <div class="w-14 h-14 sm:w-16 sm:h-16 md:w-18 md:h-18 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 md:mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl animate-pulse"></div>
                            <svg class="w-8 h-8 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl md:text-xl font-bold mb-2 sm:mb-3 group-hover:text-white transition-colors duration-500">Safety</h3>
                        <p class="text-gray-600 text-xs sm:text-sm group-hover:text-white/90 leading-relaxed transition-colors duration-500">Prioritizing safety at every step of execution</p>
                    </div>

                    <!-- Service Excellence Card -->
                    <div class="group bg-white p-6 sm:p-7 md:p-8 rounded-2xl sm:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-cyan-500 text-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-full opacity-10 group-hover:scale-150 group-hover:opacity-20 transition-all duration-700"></div>
                        
                        <div class="w-14 h-14 sm:w-16 sm:h-16 md:w-18 md:h-18 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 md:mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl animate-pulse"></div>
                            <svg class="w-8 h-8 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl md:text-xl font-bold mb-2 sm:mb-3 group-hover:text-white transition-colors duration-500">Service Excellence</h3>
                        <p class="text-gray-600 text-xs sm:text-sm group-hover:text-white/90 leading-relaxed transition-colors duration-500">Exceptional client service and support</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="py-16 sm:py-20 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-2xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-6 sm:mb-7 md:mb-8">Why Choose Integral Solutions?</h2>
                        <div class="space-y-4">
                            <div class="group flex items-center p-5 bg-white rounded-2xl shadow-md border-2 border-gray-100 hover:border-transparent hover:shadow-xl transition-all duration-300 hover:translate-x-2 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-indigo-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-bold text-gray-800 group-hover:text-gray-900 transition-colors relative z-10">Proven technical expertise across multiple industries</span>
                            </div>
                            
                            <div class="group flex items-center p-5 bg-white rounded-2xl shadow-md border-2 border-gray-100 hover:border-transparent hover:shadow-xl transition-all duration-300 hover:translate-x-2 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 text-white rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-bold text-gray-800 group-hover:text-gray-900 transition-colors relative z-10">Reliable international supply chain and sourcing partners</span>
                            </div>
                            
                            <div class="group flex items-center p-5 bg-white rounded-2xl shadow-md border-2 border-gray-100 hover:border-transparent hover:shadow-xl transition-all duration-300 hover:translate-x-2 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-teal-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                                <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-600 text-white rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-bold text-gray-800 group-hover:text-gray-900 transition-colors relative z-10">Skilled project management and execution teams</span>
                            </div>
                            
                            <div class="group flex items-center p-5 bg-white rounded-2xl shadow-md border-2 border-gray-100 hover:border-transparent hover:shadow-xl transition-all duration-300 hover:translate-x-2 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                                <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 text-white rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-bold text-gray-800 group-hover:text-gray-900 transition-colors relative z-10">Quality-driven service with safety at every step</span>
                            </div>
                            
                            <div class="group flex items-center p-5 bg-white rounded-2xl shadow-md border-2 border-gray-100 hover:border-transparent hover:shadow-xl transition-all duration-300 hover:translate-x-2 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                                <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 text-white rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="font-bold text-gray-800 group-hover:text-gray-900 transition-colors relative z-10">Commitment to client satisfaction and long-term relationships</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div class="rounded-xl sm:rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 group h-48 sm:h-56 md:h-64">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=400" alt="Office" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                        </div>
                        <div class="rounded-xl sm:rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 group h-48 sm:h-56 md:h-64">
                            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&q=80&w=400" alt="Team" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
