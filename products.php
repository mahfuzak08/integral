<?php 
$current_page = 'products';
$page_title = 'Product Catalog | Integral Solutions';
include 'data.php';
include 'header.php';
?>

    <!-- Main Content -->
    <main>
        <!-- Breadcrumb Header -->
        <div class="relative bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 pt-32 pb-20 text-center overflow-hidden">
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
                    <span class="text-white">Products</span>
                </div>
                
                <!-- Title -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-5 md:mb-6 animate-scale-in">
                    Product <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">Catalog</span>
                </h1>
                
                <p class="text-base sm:text-lg md:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed animate-fade-in">
                    Sourcing premium industrial equipment for Bangladesh's utility sectors
                </p>
                
                <!-- Decorative Line -->
                <div class="flex items-center justify-center mt-8 gap-2">
                    <div class="h-1 w-20 bg-gradient-to-r from-transparent to-blue-500 rounded-full"></div>
                    <div class="h-1 w-8 bg-blue-500 rounded-full"></div>
                    <div class="h-1 w-20 bg-gradient-to-l from-transparent to-blue-500 rounded-full"></div>
                </div>
            </div>
        </div>

        <!-- Search & Filter -->
        <div class="py-8 sm:py-10 md:py-12 bg-white border-b sticky top-[72px] z-30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="relative w-full md:w-1/2">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input 
                        type="text" 
                        id="searchInput"
                        placeholder="Search equipment by name or category..." 
                        class="w-full pl-12 pr-4 py-3 sm:py-3.5 md:py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all shadow-sm text-sm sm:text-base"
                    />
                </div>
                <div class="flex gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0">
                    <button onclick="filterByCategory('All')" class="category-filter active px-5 py-2.5 rounded-full border border-blue-200 bg-blue-50 text-blue-700 font-bold text-sm whitespace-nowrap transition-all">All</button>
                    <button onclick="filterByCategory('Electrical')" class="category-filter px-5 py-2.5 rounded-full border border-gray-200 bg-white text-gray-700 font-bold text-sm whitespace-nowrap hover:bg-blue-50 hover:border-blue-200 transition-all">Electrical</button>
                    <button onclick="filterByCategory('Mechanical')" class="category-filter px-5 py-2.5 rounded-full border border-gray-200 bg-white text-gray-700 font-bold text-sm whitespace-nowrap hover:bg-blue-50 hover:border-blue-200 transition-all">Mechanical</button>
                    <button onclick="filterByCategory('IT/Security')" class="category-filter px-5 py-2.5 rounded-full border border-gray-200 bg-white text-gray-700 font-bold text-sm whitespace-nowrap hover:bg-blue-50 hover:border-blue-200 transition-all">IT/Security</button>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="py-12 sm:py-14 md:py-16 bg-gray-50 min-h-[600px]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    <!-- Product Cards will be rendered here -->
                </div>
                <div id="noResults" class="hidden text-center py-32">
                    <svg class="w-16 h-16 mx-auto text-gray-200 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                    <h3 class="text-2xl font-bold text-gray-900">No products found</h3>
                    <p class="text-gray-600">Try adjusting your search terms or contact us for custom sourcing.</p>
                </div>
            </div>
        </div>
    </main>

<?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        // Products Data with Images (Generated from PHP)
        const PRODUCTS = <?php 
            $productsArray = [];
            foreach ($productDetails as $name => $details) {
                $productsArray[] = [
                    'name' => $name,
                    'image' => $details['image'],
                    'category' => $details['category'],
                    'desc' => $details['desc']
                ];
            }
            echo json_encode($productsArray, JSON_UNESCAPED_SLASHES);
        ?>;

        // Render products
        function renderProducts(products) {
            const grid = document.getElementById('productsGrid');
            const noResults = document.getElementById('noResults');

            if (products.length === 0) {
                grid.innerHTML = '';
                noResults.classList.remove('hidden');
                return;
            }

            noResults.classList.add('hidden');
            grid.innerHTML = products.map(product => `
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-500 group cursor-pointer">
                    <div class="relative h-48 overflow-hidden">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-blue-900/80 transition-all duration-500"></div>
                        <div class="absolute top-3 right-3">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-gray-700 shadow-lg">
                                ${product.category}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-[10px] font-bold text-blue-600 uppercase tracking-widest mb-2">
                            <svg class="w-2.5 h-2.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Industrial Supply
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4 leading-tight">${product.name}</h3>
                        <button class="w-full py-2.5 rounded-xl border-2 border-blue-600 text-blue-600 font-bold text-sm hover:bg-blue-600 hover:text-white transition-all hover:shadow-lg hover:-translate-y-0.5">
                            Request Quote
                        </button>
                    </div>
                </div>
            `).join('');
        }

        // Search functionality
        function handleSearch(searchTerm) {
            const filtered = PRODUCTS.filter(p => 
                p.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
                p.category.toLowerCase().includes(searchTerm.toLowerCase())
            );
            renderProducts(filtered);
        }

        // Filter by category
        function filterByCategory(category) {
            if (category === 'All') {
                renderProducts(PRODUCTS);
            } else {
                const filtered = PRODUCTS.filter(p => p.category === category);
                renderProducts(filtered);
            }
        }

        // Initialize
        renderProducts(PRODUCTS);

        // Event listeners
        document.getElementById('searchInput').addEventListener('input', function(e) {
            handleSearch(e.target.value);
        });

    </script>
