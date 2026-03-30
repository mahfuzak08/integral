<!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 sm:py-12 border-t border-orange-500/20 shadow-2xl backdrop-blur-xl relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 md:gap-8">
                <a href="index.php" class="text-xl sm:text-2xl font-extrabold tracking-tighter text-white hover:text-orange-400 transition-colors text-center md:text-left">
                    INTEGRAL<span class="text-orange-400">SOLUTIONS</span>
                </a>
                <div class="flex flex-wrap justify-center gap-x-4 sm:gap-x-8 gap-y-3 sm:gap-y-4 text-xs sm:text-sm font-semibold">
                    <a href="index.php" class="hover:text-orange-400 transition-colors whitespace-nowrap">Home</a>
                    <a href="about.php" class="hover:text-orange-400 transition-colors whitespace-nowrap">About Us</a>
                    <a href="services.php" class="hover:text-orange-400 transition-colors whitespace-nowrap">Services</a>
                    <a href="products.php" class="hover:text-orange-400 transition-colors whitespace-nowrap">Products</a>
                    <a href="contact.php" class="hover:text-orange-400 transition-colors whitespace-nowrap">Contact</a>
                </div>
                <div class="text-xs text-gray-400 text-center md:text-right">
                    © <span id="current-year"></span> Integral Solutions. All rights reserved.
                </div>
            </div>
            <div class="mt-6 sm:mt-8 pt-6 sm:pt-8 border-t border-orange-500/20 text-center text-[9px] sm:text-[10px] uppercase tracking-widest font-bold text-orange-300 px-4">
                Professional Engineering & Contracting Solutions since inception
            </div>
            <!-- Decorative Orange Gradient Border -->
            <div class="absolute left-0 right-0 bottom-0 h-1.5 sm:h-2 bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 opacity-60 rounded-t-2xl"></div>
        </div>
    </footer>

    <!-- AI Chat Widget -->
    <div id="ai-chat-widget" class="block">
        <!-- Floating Button -->
        <button onclick="toggleChat()" id="chat-button" class="fixed bottom-6 right-6 sm:bottom-8 sm:right-8 z-[9999] bg-blue-600 hover:bg-blue-700 text-white p-4 sm:p-4 rounded-full shadow-2xl transition-all duration-300 transform hover:scale-110 flex items-center justify-center" style="display: flex !important;">
            <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            <span class="absolute -top-1 -right-1 flex h-3 w-3 sm:h-4 sm:w-4">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 sm:h-4 sm:w-4 bg-blue-500"></span>
            </span>
        </button>

        <!-- Chat Window -->
        <div id="chat-window" class="fixed bottom-6 right-6 sm:bottom-8 sm:right-8 z-[10000] w-[calc(100vw-3rem)] sm:w-96 max-w-md h-[calc(100vh-8rem)] sm:h-[600px] max-h-[600px] bg-white rounded-2xl shadow-2xl flex-col hidden">
            <!-- Chat Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-4 sm:p-5 rounded-t-2xl flex justify-between items-center">
                <div class="flex items-center gap-2 sm:gap-3 min-w-0">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <h3 class="font-bold text-white text-sm sm:text-base truncate">Integral AI Assistant</h3>
                        <p class="text-xs text-blue-100 truncate">Always here to help</p>
                    </div>
                </div>
                <button onclick="toggleChat()" class="text-white hover:bg-white/10 p-1 rounded-lg transition-colors flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Chat Messages -->
            <div id="chat-messages" class="flex-1 p-3 sm:p-4 overflow-y-auto bg-gray-50" style="max-height: calc(100% - 140px);">
                <!-- Messages will be added here -->
            </div>

            <!-- Chat Input -->
            <div class="p-3 sm:p-4 border-t border-gray-200 bg-white rounded-b-2xl">
                <div class="flex gap-2">
                    <input type="text" id="chat-input" placeholder="Ask about our services..." class="flex-1 px-3 sm:px-4 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" onkeypress="handleChatKeyPress(event)">
                    <button onclick="sendMessage()" class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-lg transition-colors flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="app.js"></script>
    <script src="ai-chat.js"></script>
</body>
</html>
