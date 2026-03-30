<?php 
$current_page = 'services';
$page_title = 'Engineering Services | Integral Solutions';
include 'data.php';
include 'header.php';
?>

    <!-- Main Content -->
    <main>
        <!-- Breadcrumb Header -->
        <div class="relative bg-gradient-to-br from-slate-900 via-indigo-900 to-slate-900 pt-32 pb-20 text-center overflow-hidden">
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
                    <span class="text-white">Services</span>
                </div>
                
                <!-- Title -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-5 md:mb-6 animate-scale-in">
                    Engineering <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">Services</span>
                </h1>
                
                <p class="text-base sm:text-lg md:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed animate-fade-in">
                    Comprehensive design, installation, and maintenance across multidisciplinary systems
                </p>
                
                <!-- Decorative Line -->
                <div class="flex items-center justify-center mt-8 gap-2">
                    <div class="h-1 w-20 bg-gradient-to-r from-transparent to-blue-500 rounded-full"></div>
                    <div class="h-1 w-8 bg-blue-500 rounded-full"></div>
                    <div class="h-1 w-20 bg-gradient-to-l from-transparent to-blue-500 rounded-full"></div>
                </div>
            </div>
        </div>

        <!-- Services Detail -->
        <div class="py-12 sm:py-14 md:py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="space-y-16 sm:space-y-20 md:space-y-24 lg:space-y-32">
                    <!-- Service 1: MEP Engineering & Installation -->
                    <div class="flex flex-col lg:flex-row gap-8 sm:gap-10 md:gap-12 lg:gap-16 items-center">
                        <div class="lg:w-1/2">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-blue-600 rounded-xl sm:rounded-2xl flex items-center justify-center text-white mb-4 sm:mb-5 md:mb-6 shadow-xl">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-4 md:mb-6">MEP Engineering & Installation</h2>
                            <p class="text-gray-600 text-sm sm:text-base md:text-lg mb-6 sm:mb-7 md:mb-8 leading-relaxed">Complete mechanical, electrical, and plumbing system design with expert execution for commercial, industrial, and residential projects. Our multidisciplinary engineers ensure compliance with international standards while optimizing for energy efficiency and operational reliability.</p>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    HVAC Systems
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Power Distribution
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Fire Protection
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Plumbing Systems
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 relative">
                            <div class="hidden sm:block absolute -inset-4 bg-blue-100 rounded-3xl -z-10 rotate-3 opacity-50"></div>
                            <img src="https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?auto=format&fit=crop&q=80&w=800" alt="MEP Engineering" class="rounded-xl sm:rounded-2xl shadow-2xl w-full h-64 sm:h-72 md:h-80 lg:h-96 object-cover" />
                        </div>
                    </div>

                    <!-- Service 2: Engineering Consultancy -->
                    <div class="flex flex-col lg:flex-row-reverse gap-8 sm:gap-10 md:gap-12 lg:gap-16 items-center">
                        <div class="lg:w-1/2">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-blue-600 rounded-xl sm:rounded-2xl flex items-center justify-center text-white mb-4 sm:mb-5 md:mb-6 shadow-xl">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-4 md:mb-6">Engineering Consultancy</h2>
                            <p class="text-gray-600 text-sm sm:text-base md:text-lg mb-6 sm:mb-7 md:mb-8 leading-relaxed">Expert advisory services delivering technical assessments, feasibility studies, and compliance audits. We provide comprehensive engineering guidance for industrial expansions, data center planning, healthcare facility upgrades, and infrastructure modernization initiatives.</p>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Feasibility Studies
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Technical Audits
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Design Review
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    System Optimization
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 relative">
                            <div class="hidden sm:block absolute -inset-4 bg-blue-100 rounded-3xl -z-10 -rotate-3 opacity-50"></div>
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=800" alt="Consultancy" class="rounded-xl sm:rounded-2xl shadow-2xl w-full h-64 sm:h-72 md:h-80 lg:h-96 object-cover" />
                        </div>
                    </div>

                    <!-- Service 3: Import & Supply -->
                    <div class="flex flex-col lg:flex-row gap-8 sm:gap-10 md:gap-12 lg:gap-16 items-center">
                        <div class="lg:w-1/2">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-blue-600 rounded-xl sm:rounded-2xl flex items-center justify-center text-white mb-4 sm:mb-5 md:mb-6 shadow-xl">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-4 md:mb-6">Import & Supply</h2>
                            <p class="text-gray-600 text-sm sm:text-base md:text-lg mb-6 sm:mb-7 md:mb-8 leading-relaxed">Strategic procurement and supply chain management for premium industrial equipment and technology solutions. Leveraging our global supplier network, we source cutting-edge machinery, control systems, safety equipment, and specialized tools tailored to Bangladesh's infrastructure needs.</p>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Generators & UPS
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    CCTV & IT Equipment
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Pumps & Motors
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Control Panels
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 relative">
                            <div class="hidden sm:block absolute -inset-4 bg-blue-100 rounded-3xl -z-10 rotate-3 opacity-50"></div>
                            <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&q=80&w=800" alt="Import & Supply" class="rounded-xl sm:rounded-2xl shadow-2xl w-full h-64 sm:h-72 md:h-80 lg:h-96 object-cover" />
                        </div>
                    </div>

                    <!-- Service 4: Contracting -->
                    <div class="flex flex-col lg:flex-row-reverse gap-8 sm:gap-10 md:gap-12 lg:gap-16 items-center">
                        <div class="lg:w-1/2">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-blue-600 rounded-xl sm:rounded-2xl flex items-center justify-center text-white mb-4 sm:mb-5 md:mb-6 shadow-xl">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-4 md:mb-6">Contracting</h2>
                            <p class="text-gray-600 text-sm sm:text-base md:text-lg mb-6 sm:mb-7 md:mb-8 leading-relaxed">End-to-end project execution with First Class Contracting credentials. We manage complete construction and installation cycles including site preparation, civil works, equipment mounting, system integration, commissioning, and handover documentation for large-scale infrastructure developments.</p>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Project Management
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Site Installation
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Testing & Commissioning
                                </div>
                                <div class="flex items-center p-3 bg-white rounded-lg border border-gray-100 font-medium text-gray-700 shadow-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    </svg>
                                    Maintenance Support
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 relative">
                            <div class="hidden sm:block absolute -inset-4 bg-blue-100 rounded-3xl -z-10 -rotate-3 opacity-50"></div>
                            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&q=80&w=800" alt="Contracting" class="rounded-xl sm:rounded-2xl shadow-2xl w-full h-64 sm:h-72 md:h-80 lg:h-96 object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <section class="py-16 sm:py-20 md:py-24 bg-blue-900 text-white text-center">
            <div class="max-w-4xl mx-auto px-4 sm:px-6">
                <h2 class="text-2xl sm:text-2xl md:text-3xl font-bold mb-4 sm:mb-5 md:mb-6">Need a Specialized Engineering Assessment?</h2>
                <p class="text-blue-100 mb-8 sm:mb-9 md:mb-10 text-sm sm:text-base md:text-lg opacity-80">Our consultancy team is available for technical audits and feasibility assessments for your upcoming industrial projects.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="contact.php" class="bg-white text-blue-900 px-8 py-4 rounded-xl font-bold shadow-xl hover:bg-blue-50 transition-all hover:scale-105 inline-block">Request Service</a>
                    <button class="bg-blue-800 text-white px-8 py-4 rounded-xl font-bold shadow-xl hover:bg-blue-700 transition-all hover:scale-105 border border-blue-700">Download Brochure</button>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
