<?php 
$page = substr($_SERVER['REQUEST_URI'], 6); // Get the current page from the URL
if($page === '') {
    $page = 'index.php'; // Default to index.php if no specific page is provided
}
$nav_bg = $page === 'index.php' ? 'bg-transparent' : 'bg-slate-900 shadow-lg'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integral Solutions | Engineering Excellence</title>
    
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
                    <img src="logo.png" alt="Integral Solutions Logo" class="h-8 sm:h-10 w-auto">
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