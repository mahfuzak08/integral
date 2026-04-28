<?php 
$page = substr($_SERVER['REQUEST_URI'], 6); // Get the current page from the URL
if($page === '') {
    $page = 'index.php'; // Default to index.php if no specific page is provided
}
$nav_bg = $page === 'index.php' ? 'bg-transparent' : 'bg-slate-900 shadow-lg'; 

// SEO Meta Data Configuration
$seo_data = [
    'index.php' => [
        'title' => 'Integral Solutions | Engineering Excellence in Bangladesh',
        'description' => 'Leading multidisciplinary engineering and contracting company in Bangladesh. Providing turnkey solutions for electrical, mechanical, civil systems, CCTV surveillance, IT solutions, and power plant materials.',
        'keywords' => 'engineering services bangladesh, electrical contractors dhaka, mechanical engineering, civil engineering, CCTV surveillance, IT solutions, power plant materials, generators, pumps, switchgear, energy management',
        'og_image' => 'https://integralsolutionsbd.com/logo.png'
    ],
    'about.php' => [
        'title' => 'About Us | Integral Solutions - Engineering Excellence',
        'description' => 'Integral Solutions is a trusted engineering and contracting company based in Dhaka, Bangladesh. We deliver high-quality, cost-efficient, and sustainable engineering solutions.',
        'keywords' => 'about integral solutions, engineering company bangladesh, multidisciplinary engineering, dhaka contractors',
        'og_image' => 'https://integralsolutionsbd.com/logo.png'
    ],
    'services.php' => [
        'title' => 'Our Services | Engineering, Consultancy & Contracting',
        'description' => 'Comprehensive engineering services including design, installation, maintenance of electrical, mechanical systems, technical consultancy, EPC projects, and turnkey solutions in Bangladesh.',
        'keywords' => 'engineering services, consultancy services bangladesh, EPC projects, turnkey solutions, electrical installation, mechanical systems, feasibility studies',
        'og_image' => 'https://integralsolutionsbd.com/logo.png'
    ],
    'products.php' => [
        'title' => 'Products | Electrical, Mechanical & IT Equipment Supply',
        'description' => 'Import and supply of high-quality products: CCTV surveillance, IT solutions, generators, pumps, switchgear, frequency inverters, low/medium voltage items, and power plant materials.',
        'keywords' => 'CCTV surveillance bangladesh, IT solutions, generators, water pumps, switchgear, frequency inverter, low voltage items, medium voltage, power plant materials',
        'og_image' => 'https://integralsolutionsbd.com/logo.png'
    ],
    'contact.php' => [
        'title' => 'Contact Us | Integral Solutions Bangladesh',
        'description' => 'Get in touch with Integral Solutions. Located at West Rampura, Dhaka. Call +880 1796 589534 or email info@integralsolutionsbd.com for engineering services and consultancy.',
        'keywords' => 'contact integral solutions, engineering company dhaka, west rampura dhaka, bangladesh engineering services contact',
        'og_image' => 'https://integralsolutionsbd.com/logo.png'
    ]
];

$current_seo = $seo_data[$page] ?? $seo_data['index.php'];
$canonical_url = 'https://integralsolutionsbd.com/' . ($page === 'index.php' ? '' : $page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Primary Meta Tags -->
    <title><?= $current_seo['title']; ?></title>
    <meta name="title" content="<?= $current_seo['title']; ?>">
    <meta name="description" content="<?= $current_seo['description']; ?>">
    <meta name="keywords" content="<?= $current_seo['keywords']; ?>">
    <meta name="author" content="Integral Solutions">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="<?= $canonical_url; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $canonical_url; ?>">
    <meta property="og:title" content="<?= $current_seo['title']; ?>">
    <meta property="og:description" content="<?= $current_seo['description']; ?>">
    <meta property="og:image" content="<?= $current_seo['og_image']; ?>">
    <meta property="og:site_name" content="Integral Solutions">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= $canonical_url; ?>">
    <meta property="twitter:title" content="<?= $current_seo['title']; ?>">
    <meta property="twitter:description" content="<?= $current_seo['description']; ?>">
    <meta property="twitter:image" content="<?= $current_seo['og_image']; ?>">
    
    <!-- Business Information -->
    <meta name="geo.region" content="BD-13">
    <meta name="geo.placename" content="Dhaka">
    <meta name="geo.position" content="23.7937;90.4066">
    <meta name="ICBM" content="23.7937, 90.4066">
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Integral Solutions",
        "url": "https://integralsolutionsbd.com",
        "logo": "https://integralsolutionsbd.com/logo.png",
        "description": "Leading multidisciplinary engineering and contracting company in Bangladesh",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "374/1, West Rampura",
            "addressLocality": "Dhaka",
            "postalCode": "1219",
            "addressCountry": "BD"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+880-1796-589534",
            "contactType": "customer service",
            "areaServed": "BD",
            "availableLanguage": ["en", "bn"]
        },
        "sameAs": [],
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday"],
                "opens": "09:00",
                "closes": "18:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "10:00",
                "closes": "16:00"
            }
        ]
    }
    </script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
    <link rel="apple-touch-icon" href="logo.png">
    <link rel="shortcut icon" href="logo.png">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-gray-50 text-gray-900 overflow-x-hidden">
    
    <!-- Header -->
    <header id="header" class="fixed w-full z-50 transition-all duration-300 <?= substr($page, 0, 5); ?> <?= $nav_bg; ?> py-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="index.php" class="flex items-center space-x-2 sm:space-x-3">
                    <img src="logo-w.png" alt="Integral Solutions Logo" class="h-8 sm:h-10 w-auto">
                    <div id="logo" class="text-lg sm:text-xl md:text-2xl font-extrabold tracking-tighter text-white">
                        INTEGRAL<span style="color: #f37d21;">SOLUTIONS</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8" id="desktop-nav">
                    <a href="index.php" class="nav-link text-sm font-semibold transition-colors relative group text-white" data-page="home">
                        Home
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 transition-all group-hover:w-full" style="background-color: #f37d21;"></span>
                    </a>
                    <a href="about.php" class="nav-link text-sm font-semibold transition-colors relative group text-white" data-page="about">
                        About
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 transition-all group-hover:w-full" style="background-color: #f37d21;"></span>
                    </a>
                    <a href="services.php" class="nav-link text-sm font-semibold transition-colors relative group text-white" data-page="services">
                        Services
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 transition-all group-hover:w-full" style="background-color: #f37d21;"></span>
                    </a>
                    <a href="products.php" class="nav-link text-sm font-semibold transition-colors relative group text-white" data-page="products">
                        Products
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 transition-all group-hover:w-full" style="background-color: #f37d21;"></span>
                    </a>
                    <a href="contact.php" class="nav-link text-sm font-semibold transition-colors relative group text-white" data-page="contact">
                        Contact
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 transition-all group-hover:w-full" style="background-color: #f37d21;"></span>
                    </a>
                </nav>

                <!-- Call Button -->
                <div class="hidden lg:flex items-center space-x-4">
                    <!-- Social Icons -->
                    <a href="https://www.linkedin.com/company/integral-solutions1998" target="_blank" rel="noopener noreferrer" class="text-white hover:opacity-75 transition-opacity" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/integralsolutionsbd" target="_blank" rel="noopener noreferrer" class="text-white hover:opacity-75 transition-opacity" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="tel:<?= $company_details['phone'][0]; ?>" class="text-white px-4 lg:px-5 py-2.5 rounded-full text-xs lg:text-sm font-bold flex items-center shadow-lg transition-all hover:scale-105 whitespace-nowrap" style="background: linear-gradient(to right, #f37d21, #ff8c38);">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="hidden xl:inline"><?= $company_details['phone'][0]; ?></span>
                        <span class="xl:hidden">Call Us</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button onclick="toggleMobileMenu()" id="mobile-menu-btn" class="text-white">
                        <svg id="menu-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="close-icon" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden absolute top-full left-0 w-full bg-white shadow-2xl">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="index.php" class="mobile-nav-link block w-full text-left px-3 py-4 text-base font-medium border-b border-gray-100 text-gray-900 hover:bg-gray-50" data-page="home">Home</a>
                <a href="about.php" class="mobile-nav-link block w-full text-left px-3 py-4 text-base font-medium border-b border-gray-100 text-gray-900 hover:bg-gray-50" data-page="about">About</a>
                <a href="services.php" class="mobile-nav-link block w-full text-left px-3 py-4 text-base font-medium border-b border-gray-100 text-gray-900 hover:bg-gray-50" data-page="services">Services</a>
                <a href="products.php" class="mobile-nav-link block w-full text-left px-3 py-4 text-base font-medium border-b border-gray-100 text-gray-900 hover:bg-gray-50" data-page="products">Products</a>
                <a href="contact.php" class="mobile-nav-link block w-full text-left px-3 py-4 text-base font-medium border-b border-gray-100 text-gray-900 hover:bg-gray-50" data-page="contact">Contact</a>
                <div class="pt-6 flex flex-col space-y-4 px-3">
                    <div class="flex items-center space-x-4">
                        <a href="https://www.linkedin.com/company/integral-solutions1998" target="_blank" rel="noopener noreferrer" class="flex items-center text-gray-600 font-medium hover:opacity-75 transition-opacity" aria-label="LinkedIn">
                            <svg class="w-5 h-5 mr-2" style="color: #0077b5;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            LinkedIn
                        </a>
                        <a href="https://www.facebook.com/integralsolutionsbd" target="_blank" rel="noopener noreferrer" class="flex items-center text-gray-600 font-medium hover:opacity-75 transition-opacity" aria-label="Facebook">
                            <svg class="w-5 h-5 mr-2" style="color: #1877f2;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            Facebook
                        </a>
                    </div>
                    <a href="tel:+8801796589534" class="flex items-center text-gray-600 font-medium">
                        <svg class="w-5 h-5 mr-3" style="color: #f37d21;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        +880 1796 589534
                    </a>
                    <a href="mailto:info@integralsolutions.com.bd" class="flex items-center text-gray-600 font-medium">
                        <svg class="w-5 h-5 mr-3" style="color: #f37d21;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        info@integralsolutions.com.bd
                    </a>
                </div>
            </div>
        </div>
    </header>