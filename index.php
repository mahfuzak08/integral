<?php 
$current_page = 'home';
$page_title = 'Integral Solutions | Engineering Excellence';
include 'data.php';
include 'header.php';
?>

    <!-- Main Content Container -->
    <main id="main-content" class="animate-fade-in">
        <!-- Modern Hero Section with Video Only -->
        <section id="home" class="relative h-screen flex items-center overflow-hidden bg-gray-900">
            <!-- Video Background -->
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="upload/1.mp4" type="video/mp4">
            </video>
            
            <!-- Modern Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900/95 via-gray-900/85 to-gray-900/70"></div>
            
            <!-- Animated Geometric Shapes -->
            <div class="absolute inset-0 overflow-hidden opacity-10">
                <div class="absolute top-20 left-10 w-72 h-72 bg-orange-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
                <div class="absolute top-40 right-10 w-72 h-72 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
                <div class="absolute -bottom-8 left-40 w-72 h-72 bg-orange-600 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
            </div>
            
            <!-- Hero Content -->
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="max-w-4xl">
                    <!-- Badge -->
                    <div class="inline-flex items-center px-3 sm:px-5 py-1.5 sm:py-2 rounded-full bg-orange-500/10 border border-orange-500/30 backdrop-blur-sm mb-6 sm:mb-8 animate-slide-up">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2 sm:mr-3 animate-pulse"></div>
                        <span class="text-orange-400 text-xs sm:text-sm font-semibold tracking-wide">First Class Engineering & Contracting</span>
                    </div>
                    
                    <!-- Main Headline -->
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-black text-white mb-6 sm:mb-8 leading-none animate-slide-up animation-delay-200">
                        Engineering
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-orange-500 to-orange-600">Excellence</span>
                    </h1>
                    
                    <!-- Subheadline -->
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-300 mb-8 sm:mb-12 leading-relaxed max-w-3xl animate-slide-up animation-delay-400">
                        Providing turnkey solutions for industrial, commercial, and utility projects across Bangladesh with unmatched expertise and innovation.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 animate-slide-up animation-delay-600">
                        <button onclick="navigateTo('services')" class="group px-6 sm:px-8 lg:px-10 py-4 sm:py-5 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-2xl font-bold text-base sm:text-lg flex items-center justify-center transition-all duration-300 shadow-2xl shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-1">
                            Explore Services
                            <svg class="ml-2 sm:ml-3 w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </button>
                        <button onclick="navigateTo('contact')" class="group px-6 sm:px-8 lg:px-10 py-4 sm:py-5 bg-white/5 hover:bg-white/10 text-white backdrop-blur-xl border-2 border-white/20 hover:border-orange-500/50 rounded-2xl font-bold text-base sm:text-lg flex items-center justify-center transition-all duration-300 hover:-translate-y-1">
                            <svg class="mr-2 sm:mr-3 w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                            Get a Quote
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Stats Bar -->
            <div class="absolute bottom-0 left-0 right-0 z-20 bg-gradient-to-t from-gray-900/50 to-transparent backdrop-blur-md border-t border-white/10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-black text-orange-500 mb-1">15+</div>
                            <div class="text-xs sm:text-sm text-gray-400 font-medium">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-black text-orange-500 mb-1">200+</div>
                            <div class="text-xs sm:text-sm text-gray-400 font-medium">Projects Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-black text-orange-500 mb-1">50+</div>
                            <div class="text-xs sm:text-sm text-gray-400 font-medium">Expert Team</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-black text-orange-500 mb-1">100%</div>
                            <div class="text-xs sm:text-sm text-gray-400 font-medium">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Modern About Section -->
        <section id="about" class="relative py-16 sm:py-24 lg:py-32 bg-gradient-to-b from-white via-gray-50 to-white overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 left-0 w-96 h-96 bg-orange-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                    <!-- Image Side -->
                    <div class="relative group order-2 lg:order-1">
                        <!-- Main Image -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" alt="Engineering Team" class="w-full h-64 sm:h-80 md:h-96 lg:h-[500px] xl:h-[600px] object-cover transform group-hover:scale-105 transition-transform duration-700" />
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent"></div>
                        </div>
                        
                        <!-- Floating Card -->
                        <div class="hidden sm:block absolute -bottom-4 sm:-bottom-6 lg:-bottom-8 -right-4 sm:-right-6 lg:-right-8 bg-gradient-to-br from-orange-500 to-orange-600 p-4 sm:p-6 lg:p-8 rounded-2xl sm:rounded-3xl shadow-2xl max-w-[280px] sm:max-w-xs lg:max-w-[320px] transform hover:scale-105 transition-transform duration-300">
                            <svg class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 text-white mb-3 sm:mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                            <p class="text-white text-sm sm:text-base lg:text-lg font-semibold leading-relaxed">
                                "Our mission is to deliver high-quality, cost-efficient and sustainable engineering solutions tailored to our clients' needs."
                            </p>
                        </div>
                        
                        <!-- Decorative Orange Line -->
                        <div class="hidden lg:block absolute -top-4 -left-4 w-20 h-20 lg:w-24 lg:h-24 border-4 lg:border-8 border-orange-500 rounded-2xl -z-10"></div>
                    </div>

                    <!-- Content Side -->
                    <div class="space-y-6 sm:space-y-8 order-1 lg:order-2">
                        <div>
                            <div class="inline-flex items-center px-3 sm:px-4 py-1.5 sm:py-2 bg-orange-50 rounded-full mb-4 sm:mb-6">
                                <div class="w-2 h-2 bg-orange-500 rounded-full mr-2 animate-pulse"></div>
                                <span class="text-orange-600 font-bold text-xs sm:text-sm uppercase tracking-wider">About Integral Solutions</span>
                            </div>
                            
                            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-4 sm:mb-6 leading-tight">
                                Providing Turnkey Solutions for a 
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">Sustainable</span> Bangladesh
                            </h2>
                            
                            <p class="text-gray-600 text-base sm:text-lg leading-relaxed">
                                Integral Solutions is a multidisciplinary engineering and contracting company providing turnkey solutions to public and private sector clients across Bangladesh. With strong capabilities in engineering, technical consultancy, global sourcing and first-class contracting.
                            </p>
                        </div>

                        <?php if ($snippet) { ?>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div class="group p-6 bg-white rounded-2xl border-2 border-gray-100 hover:border-orange-500 hover:shadow-xl transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-xl font-bold mb-2 text-gray-900">Our Vision</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">To be the most trusted name in multidisciplinary engineering across the nation.</p>
                                </div>
                                
                                <div class="group p-6 bg-white rounded-2xl border-2 border-gray-100 hover:border-orange-500 hover:shadow-xl transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-xl font-bold mb-2 text-gray-900">Our Strategy</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">Combining global sourcing with local expertise to deliver world-class infrastructure.</p>
                                </div>
                            </div>
                            
                            <button onclick="navigateTo('about')" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-2xl font-bold transition-all duration-300 shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-1">
                                Read More About Us
                                <svg class="ml-2 w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </button>
                        <?php } else { ?>
                            <div class="space-y-6">
                                <p class="text-gray-600 text-lg leading-relaxed">
                                    Founded on the principles of integrity and technical excellence, we bridge the gap between complex engineering requirements and reliable execution. Our multidisciplinary approach allows us to serve diverse sectors, from large-scale power plants to high-security CCTV infrastructure.
                                </p>
                                
                                <div class="grid grid-cols-2 gap-4">
                                    <?php 
                                    $tags = ['Project Execution', 'Energy Systems', 'IT Integration', 'Technical Advisory'];
                                    foreach ($tags as $tag) { ?>
                                        <div class="flex items-center text-gray-700 font-semibold bg-white p-4 rounded-xl border-2 border-gray-100 hover:border-orange-500 hover:shadow-lg transition-all">
                                            <svg class="w-5 h-5 text-orange-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <?php echo $tag; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Modern Services Section -->
        <section id="services" class="relative py-16 sm:py-24 lg:py-32 bg-gray-900 overflow-hidden">
            <!-- Animated Background -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-orange-500 rounded-full filter blur-3xl animate-blob"></div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-orange-600 rounded-full filter blur-3xl animate-blob animation-delay-2000"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- Section Header -->
                <div class="text-center mb-12 sm:mb-16 lg:mb-20">
                    <div class="inline-flex items-center px-3 sm:px-4 py-1.5 sm:py-2 bg-orange-500/10 rounded-full mb-4 sm:mb-6 border border-orange-500/30">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2 animate-pulse"></div>
                        <span class="text-orange-400 font-bold text-xs sm:text-sm uppercase tracking-wider">Core Expertise</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white mb-4 sm:mb-6">
                        Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-orange-600">Business</span> Areas
                    </h2>
                    <p class="text-gray-400 text-base sm:text-lg lg:text-xl max-w-3xl mx-auto leading-relaxed px-4">
                        From concept to completion, we provide comprehensive engineering and contracting services
                    </p>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                    <?php foreach ($displayServices as $index => $service) { ?>
                        <div class="group relative bg-gray-800/50 backdrop-blur-xl p-6 sm:p-8 rounded-2xl sm:rounded-3xl border-2 border-gray-700/50 hover:border-orange-500/50 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-orange-500/20">
                            <!-- Gradient Background on Hover -->
                            <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 to-orange-600/10 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Content -->
                            <div class="relative z-10">
                                <!-- Icon -->
                                <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl sm:rounded-2xl flex items-center justify-center mb-4 sm:mb-6 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                    <?php echo getServiceIcon($service['icon']); ?>
                                </div>
                                
                                <!-- Title -->
                                <h4 class="text-xl sm:text-2xl font-bold text-white mb-2 sm:mb-3 group-hover:text-orange-400 transition-colors"><?php echo $service['title']; ?></h4>
                                
                                <!-- Description -->
                                <p class="text-gray-400 text-sm mb-4 sm:mb-6 leading-relaxed"><?php echo $service['description']; ?></p>
                                
                                <!-- Items List -->
                                <ul class="space-y-3">
                                    <?php foreach (array_slice($service['items'], 0, 4) as $item) { ?>
                                        <li class="flex items-start text-sm text-gray-300 font-medium">
                                            <svg class="w-5 h-5 text-orange-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <?php echo $item; ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                                
                                <?php if ($snippet) { ?>
                                    <button onclick="navigateTo('services')" class="mt-6 text-orange-500 font-bold text-sm flex items-center group-hover:text-orange-400 transition-colors">
                                        Learn More
                                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        
        <!-- Modern Products Section - Image Gallery Layout -->
        <section id="products" class="relative py-16 sm:py-24 lg:py-32 bg-gradient-to-b from-white via-gray-50 to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center mb-12 sm:mb-16 lg:mb-20">
                    <div class="inline-flex items-center px-3 sm:px-4 py-1.5 sm:py-2 bg-orange-50 rounded-full mb-4 sm:mb-6">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2 animate-pulse"></div>
                        <span class="text-orange-600 font-bold text-xs sm:text-sm uppercase tracking-wider">Products & Equipment</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-4 sm:mb-6">
                        Import & 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">Supply Chain</span>
                    </h2>
                    <p class="text-gray-600 text-base sm:text-lg lg:text-xl max-w-3xl mx-auto leading-relaxed px-4">
                        High-quality products sourced globally for your infrastructure needs
                    </p>
                </div>

                <!-- Dynamic Masonry Products Grid Gallery -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6 auto-rows-fr">
                    <?php 
                    // Layout configurations for products on index page (presentation layer)
                    $productLayouts = [
                        'Low Voltage Items' => ['size' => 'md:col-span-2 md:row-span-2', 'height' => 'h-96', 'animation' => 'top-right'],
                        'Medium Voltage Items' => ['size' => 'md:col-span-2', 'height' => 'h-64', 'animation' => 'bottom-left'],
                        'Switch Gear' => ['size' => 'md:col-span-2', 'height' => 'h-72', 'animation' => 'top-left'],
                        'Sub-Station' => ['size' => '', 'height' => 'h-56', 'animation' => 'bottom-right'],
                        'Energy Management' => ['size' => 'md:row-span-2', 'height' => 'h-80', 'animation' => 'top-right'],
                        'Power Plant Material' => ['size' => 'md:col-span-2 md:row-span-2', 'height' => 'h-96', 'animation' => 'bottom-left'],
                        'Electrical Motor' => ['size' => 'md:col-span-2', 'height' => 'h-72', 'animation' => 'top-left'],
                        'Water Pumps' => ['size' => '', 'height' => 'h-60', 'animation' => 'bottom-right'],
                        'Sludge Dewatering Pump' => ['size' => 'md:row-span-2', 'height' => 'h-80', 'animation' => 'top-right'],
                        'Submersible Pump' => ['size' => '', 'height' => 'h-64', 'animation' => 'bottom-left'],
                        'Dosing Pump' => ['size' => '', 'height' => 'h-56', 'animation' => 'top-left'],
                        'Diesel Driven Pump' => ['size' => 'md:col-span-2', 'height' => 'h-72', 'animation' => 'bottom-right'],
                        'Generator' => ['size' => '', 'height' => 'h-64', 'animation' => 'top-right'],
                        'Generator Spare Parts' => ['size' => 'md:row-span-2', 'height' => 'h-80', 'animation' => 'bottom-left'],
                        'Generator Servicing' => ['size' => '', 'height' => 'h-60', 'animation' => 'top-left'],
                        'Frequency Inverter' => ['size' => 'md:col-span-2', 'height' => 'h-72', 'animation' => 'bottom-right'],
                        'Material Handling Conveyor' => ['size' => '', 'height' => 'h-56', 'animation' => 'top-right'],
                        'CCTV Surveillance' => ['size' => 'md:row-span-2', 'height' => 'h-80', 'animation' => 'bottom-left'],
                        'IT Solutions' => ['size' => '', 'height' => 'h-64', 'animation' => 'top-left']
                    ];
                    
                    foreach ($displayProducts as $product) { 
                        // Get product data from centralized data.php
                        $productInfo = $productDetails[$product] ?? [
                            'image' => 'https://images.unsplash.com/photo-1581094271901-8022df4466f9?auto=format&fit=crop&q=80&w=800', 
                            'desc' => 'High-quality industrial equipment'
                        ];
                        
                        // Get layout configuration for this page
                        $layout = $productLayouts[$product] ?? ['size' => '', 'height' => 'h-64', 'animation' => 'top-right'];
                        
                        // Combine data and layout for display
                        $productData = [
                            'image' => $productInfo['image'],
                            'desc' => $productInfo['desc'],
                            'size' => $layout['size'],
                            'height' => $layout['height'],
                            'animation' => $layout['animation']
                        ];
                        
                        // Define animation classes based on direction
                        $animationClasses = [
                            'top-right' => 'translate-x-full -translate-y-full',
                            'top-left' => '-translate-x-full -translate-y-full',
                            'bottom-right' => 'translate-x-full translate-y-full',
                            'bottom-left' => '-translate-x-full translate-y-full'
                        ];
                        $overlayAnimation = $animationClasses[$productData['animation']];
                        // Define mobile-friendly sizes (simplified for mobile)
                        $mobileSize = '';
                        if (in_array($product, ['Low Voltage Items', 'Power Plant Material'])) {
                            $mobileSize = 'sm:col-span-2 sm:row-span-2';
                        } elseif (in_array($product, ['Energy Management', 'Sludge Dewatering Pump', 'Generator Spare Parts'])) {
                            $mobileSize = 'sm:row-span-2';
                        } elseif (in_array($product, ['Medium Voltage Items', 'Switch Gear', 'Electrical Motor', 'Frequency Inverter', 'Diesel Driven Pump'])) {
                            $mobileSize = 'sm:col-span-2';
                        }
                    ?>
                        <div class="group relative bg-white rounded-xl sm:rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer border-2 border-gray-100 hover:border-orange-500 <?php echo $mobileSize; ?>">
                            <!-- Product Image -->
                            <div class="relative h-56 sm:h-64 md:h-72 lg:<?php echo $productData['height']; ?> min-h-full overflow-hidden bg-gray-200">
                                <img src="<?php echo $productData['image']; ?>" alt="<?php echo $product; ?>" class="w-full h-full min-h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                                
                                <!-- Animated Overlay - Slides from different directions -->
                                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/90 via-orange-600/80 to-gray-900/90 transform <?php echo $overlayAnimation; ?> group-hover:translate-x-0 group-hover:translate-y-0 transition-all duration-700 ease-out"></div>
                                
                                <!-- Hover Badge - Fades in from opacity -->
                                <div class="absolute top-4 right-4 px-3 py-1.5 bg-white text-orange-600 text-xs font-bold rounded-full opacity-0 group-hover:opacity-100 transform scale-0 group-hover:scale-100 transition-all duration-500 delay-200 shadow-lg">
                                    Available
                                </div>
                                
                                <!-- Product Info - Fades in with overlay -->
                                <div class="absolute inset-0 p-4 sm:p-6 flex flex-col justify-end z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100">
                                    <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700 delay-200">
                                        <h4 class="text-xl sm:text-2xl font-bold text-white mb-2 sm:mb-3"><?php echo $product; ?></h4>
                                        <p class="text-white/90 text-xs sm:text-sm leading-relaxed mb-3 sm:mb-4"><?php echo $productData['desc']; ?></p>
                                        
                                        <!-- View Details Arrow -->
                                        <div class="flex items-center text-white font-semibold text-xs sm:text-sm">
                                            View Details
                                            <svg class="ml-2 w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Product Title - Always visible -->
                                <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6 z-10 bg-gradient-to-t from-gray-900/80 to-transparent group-hover:opacity-0 transition-opacity duration-500">
                                    <h4 class="text-lg sm:text-xl font-bold text-white"><?php echo $product; ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <?php if ($snippet) { ?>
                    <div class="text-center mt-12 sm:mt-16">
                        <button onclick="navigateTo('products')" class="inline-flex items-center px-8 sm:px-10 py-4 sm:py-5 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-2xl font-bold text-base sm:text-lg transition-all duration-300 shadow-2xl shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-1">
                            View All Products
                            <svg class="ml-2 sm:ml-3 w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </section>
        
        <!-- Modern Contact Section -->
        <section id="contact" class="relative py-16 sm:py-24 lg:py-32 bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 overflow-hidden">
            <!-- Animated Background -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-orange-500 rounded-full filter blur-3xl animate-blob"></div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-orange-600 rounded-full filter blur-3xl animate-blob animation-delay-2000"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- Section Header -->
                <div class="text-center mb-12 sm:mb-16 lg:mb-20">
                    <div class="inline-flex items-center px-3 sm:px-4 py-1.5 sm:py-2 bg-orange-500/10 rounded-full mb-4 sm:mb-6 border border-orange-500/30">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2 animate-pulse"></div>
                        <span class="text-orange-400 font-bold text-xs sm:text-sm uppercase tracking-wider">Get In Touch</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white mb-4 sm:mb-6">
                        Contact <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-orange-600">Us Today</span>
                    </h2>
                    <p class="text-gray-400 text-base sm:text-lg lg:text-xl max-w-3xl mx-auto leading-relaxed px-4">
                        Ready to start your project? Reach out to our team for a consultation
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 sm:gap-12">
                    <!-- Contact Form -->
                    <div class="bg-gray-800/50 backdrop-blur-xl p-6 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl border-2 border-gray-700/50 shadow-2xl">
                        <h3 class="text-2xl sm:text-3xl font-bold text-white mb-6 sm:mb-8 flex items-center">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-orange-500 mr-2 sm:mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                            Send Us a Message
                        </h3>
                        <form id="contact-form" class="space-y-4 sm:space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                                <div>
                                    <!-- <label class="block text-gray-300 font-semibold mb-2 text-xs sm:text-sm">Full Name *</label> -->
                                    <input type="text" id="name" name="name" required class="w-full px-4 sm:px-5 py-3 sm:py-4 text-sm sm:text-base bg-gray-700/50 border-2 border-gray-600 rounded-xl text-white placeholder-gray-400 focus:border-orange-500 focus:ring-0 transition-all" placeholder="Full Name">
                                </div>
                                <div>
                                    <!-- <label class="block text-gray-300 font-semibold mb-2 text-xs sm:text-sm">Email Address *</label> -->
                                    <input type="email" id="email" name="email" required class="w-full px-4 sm:px-5 py-3 sm:py-4 text-sm sm:text-base bg-gray-700/50 border-2 border-gray-600 rounded-xl text-white placeholder-gray-400 focus:border-orange-500 focus:ring-0 transition-all" placeholder="Email Address">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                                <div>
                                    <!-- <label class="block text-gray-300 font-semibold mb-2 text-xs sm:text-sm">Phone Number</label> -->
                                    <input type="tel" id="phone" name="phone" class="w-full px-4 sm:px-5 py-3 sm:py-4 text-sm sm:text-base bg-gray-700/50 border-2 border-gray-600 rounded-xl text-white placeholder-gray-400 focus:border-orange-500 focus:ring-0 transition-all" placeholder="+880 1XXX XXXXXX">
                                </div>
                                <div>
                                    <!-- <label class="block text-gray-300 font-semibold mb-2 text-xs sm:text-sm">Company Name</label> -->
                                    <input type="text" id="company" name="company" class="w-full px-4 sm:px-5 py-3 sm:py-4 text-sm sm:text-base bg-gray-700/50 border-2 border-gray-600 rounded-xl text-white placeholder-gray-400 focus:border-orange-500 focus:ring-0 transition-all" placeholder="Your Company">
                                </div>
                            </div>
                            
                            <div>
                                <!-- <label class="block text-gray-300 font-semibold mb-2 text-xs sm:text-sm">Service Interest</label> -->
                                <select id="service" name="service" class="w-full px-4 sm:px-5 py-3 sm:py-4 text-sm sm:text-base bg-gray-700/50 border-2 border-gray-600 rounded-xl text-white focus:border-orange-500 focus:ring-0 transition-all">
                                    <option value="">Select a service</option>
                                    <?php foreach ($services as $service) { ?>
                                        <option value="<?php echo $service['id']; ?>"><?php echo $service['title']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div>
                                <!-- <label class="block text-gray-300 font-semibold mb-2 text-xs sm:text-sm">Message *</label> -->
                                <textarea id="message" name="message" required rows="2" class="w-full px-4 sm:px-5 py-3 sm:py-4 text-sm sm:text-base bg-gray-700/50 border-2 border-gray-600 rounded-xl text-white placeholder-gray-400 focus:border-orange-500 focus:ring-0 transition-all resize-none" placeholder="Tell us about your project..."></textarea>
                            </div>
                            
                            <!-- Google reCAPTCHA -->
                            <div class="flex justify-center">
                                <div class="g-recaptcha" data-sitekey="6LfkKpcsAAAAAKQNArWTOioNHf4IZQAzZqNn3OIx"></div>
                            </div>

                            <!-- Error/Success Message -->
                            <div id="formMessage" class="hidden p-4 rounded-xl text-center font-medium"></div>
                            
                            <button type="submit" id="submitBtn" class="group w-full px-6 sm:px-10 py-4 sm:py-5 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-2xl font-bold text-base sm:text-lg flex items-center justify-center transition-all duration-300 shadow-2xl shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-1 disabled:opacity-50 disabled:cursor-not-allowed">
                                <svg id="btnIcon" class="mr-2 sm:mr-3 w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                <span id="btnText">Send Message</span>
                                <svg id="btnSpinner" class="hidden ml-2 w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <svg class="ml-2 sm:ml-3 w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="space-y-4 sm:space-y-6">
                        <div class="bg-gray-800/50 backdrop-blur-xl p-6 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl border-2 border-gray-700/50 shadow-2xl">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-6 sm:mb-8 flex items-center">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8 text-orange-500 mr-2 sm:mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Contact Information
                            </h3>
                            <div class="space-y-4 sm:space-y-6">
                                <div class="flex items-start gap-3 sm:gap-5 group cursor-pointer">
                                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl sm:rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg shadow-orange-500/30">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white mb-1 sm:mb-2 text-base sm:text-lg">Address</h4>
                                        <p class="text-gray-400 leading-relaxed text-sm sm:text-base"><?= $company_details['address']; ?>, <?= $company_details['city']; ?></p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start gap-5 group cursor-pointer">
                                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg shadow-orange-500/30">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white mb-2 text-lg">Phone</h4>
                                        <?php foreach ($company_details['phone'] as $phone) { ?>
                                            <p class="text-gray-400"><a href="tel:<?php echo str_replace(' ', '', $phone); ?>" class="hover:text-orange-500 transition-colors"><?php echo $phone; ?></a></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                
                                <div class="flex items-start gap-5 group cursor-pointer">
                                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg shadow-orange-500/30">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white mb-2 text-lg">Email</h4>
                                        <p class="text-gray-400"><a href="mailto:<?php echo $company_details['email']; ?>" class="hover:text-orange-500 transition-colors"><?php echo $company_details['email']; ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-6 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl shadow-2xl shadow-orange-500/30">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4 sm:mb-6 flex items-center">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8 mr-2 sm:mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Business Hours
                            </h3>
                            <div class="space-y-2 sm:space-y-3">
                                <div class="flex justify-between items-center text-sm sm:text-base">
                                    <span class="text-orange-100">Saturday:</span>
                                    <span class="font-bold text-white"><?= $company_details['business_hours']['Saturday']; ?></span>
                                </div>
                                <div class="h-px bg-white/20"></div>
                                <div class="flex justify-between items-center text-sm sm:text-base">
                                    <span class="text-orange-100">Sunday - Thursday:</span>
                                    <span class="font-bold text-white"><?= $company_details['business_hours']['Sunday - Thursday']; ?></span>
                                </div>
                                <div class="h-px bg-white/20"></div>
                                <div class="flex justify-between items-center text-sm sm:text-base">
                                    <span class="text-orange-100">Friday:</span>
                                    <span class="font-bold text-white"><?= $company_details['business_hours']['Friday']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>

    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Contact Form JavaScript -->
    <script>
        document.getElementById('contact-form').addEventListener('submit', async function(e) {
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