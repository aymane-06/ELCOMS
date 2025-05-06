<!DOCTYPE html>
<html class="scroll-smooth" lang="fr-FR">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ELCOMS</title>
    <link rel="shortcut icon" href="https://plan-push.com/wp-content/uploads/2024/08/Logo-PP-60.webp" type="image/x-icon" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-white text-gray-900 antialiased">
    <div class="flex flex-col min-h-screen">
        <!-- HEADER/NAVIGATION -->
        <header class="bg-gradient-to-b from-gray-900 to-transparent py-4 px-4 lg:px-8 fixed w-full z-10">
            <div class="container mx-auto flex flex-wrap items-center justify-between">
            <!-- Logo -->
            <div class="w-32 lg:w-40">
                <a href="#" class="block">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" class="w-full h-auto shadow-md rounded">      
                  </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center justify-center flex-1">
                <ul class="flex space-x-9 text-white text-sm">
                <li><a href="#" class="hover:text-gray-300 transition-colors duration-300">HOME</a></li>
                <li><a href="#" class="hover:text-gray-300 transition-colors duration-300">ABOUT US</a></li>
                <li class="relative inline-block text-left">
                    <div>
                    <button type="button" class="inline-flex w-full justify-center gap-x-1.5 text-white hover:text-gray-300 transition-colors duration-300" id="services-menu-button" aria-expanded="false" aria-haspopup="true">
                        SERVICES
                        <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    </div>

                    <div class="absolute left-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none hidden" id="services-dropdown" role="menu" aria-orientation="vertical" aria-labelledby="services-menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">PROJECT CONTROLS</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">PROJECT MANAGEMENT</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">DISPUTE RESOLUTION</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">CONSTRUCTION ADVISORY</a>
                    </div>
                    </div>
                </li>
                <li><a href="#" class="hover:text-gray-300 transition-colors duration-300">OUR PROJECTS</a></li>
                <li><a href="#" class="hover:text-gray-300 transition-colors duration-300">BLOG</a></li>
                <li><a href="#" class="hover:text-gray-300 transition-colors duration-300">CAREERS</a></li>
                <li><a href="#" class="hover:text-gray-300 transition-colors duration-300">CONTACT US</a></li>
                </ul>
            </nav>
            
            <!-- CTA Button -->
            <div class="hidden lg:block">
                <a href="#" class="bg-blue-600 hover:bg-amber-600 text-white px-6 py-3 rounded transition-colors duration-300">Free Consultation</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button type="button" class="lg:hidden text-white text-xl" id="mobile-menu-button">
                <i class="fas fa-bars"></i>
            </button>
            </div>
            
            <!-- Mobile Navigation Menu -->
            <div class="lg:hidden hidden" id="mobile-menu">
            <ul class="bg-gray-900 mt-4 py-4 px-2 rounded shadow-lg">
                <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-800">HOME</a></li>
                <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-800">ABOUT US</a></li>
                <li class="relative">
                <button class="w-full text-left py-2 px-4 text-white hover:bg-gray-800 flex justify-between items-center">
                    SERVICES <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="hidden bg-gray-800 py-2">
                    <li><a href="#" class="block py-2 px-8 text-white hover:bg-gray-700">PROJECT CONTROLS</a></li>
                    <li><a href="#" class="block py-2 px-8 text-white hover:bg-gray-700">PROJECT MANAGEMENT</a></li>
                    <li><a href="#" class="block py-2 px-8 text-white hover:bg-gray-700">DISPUTE RESOLUTION</a></li>
                    <li><a href="#" class="block py-2 px-8 text-white hover:bg-gray-700">CONSTRUCTION ADVISORY</a></li>
                </ul>
                </li>
                <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-800">OUR PROJECTS</a></li>
                <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-800">BLOG</a></li>
                <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-800">CAREERS</a></li>
                <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-800">CONTACT US</a></li>
                <li class="mt-4"><a href="#" class="block py-2 px-4 bg-blue-600 text-white text-center rounded">Free Consultation</a></li>
            </ul>
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <main class="flex-grow pt-40 pb-16">
            <div class="container mx-auto px-4">
                <!-- Your content goes here -->
                @yield('content')
                <div class="text-center mt-16">
                    <h1 class="text-4xl font-bold mb-4">Welcome to ELCOMS</h1>
                    <p class="text-lg text-gray-600">Your trusted partner in project management and advisory services.</p>
                    <a href="#" class="mt-8 inline-block bg-blue-600 hover:bg-amber-600 text-white px-8 py-4 rounded transition-colors duration-300">Learn More</a>
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="bg-gray-900 text-white">
            <!-- Main Footer Area -->
            <div class="container mx-auto px-4 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8">
                    <!-- Logo and Statement -->
                    <div class="lg:col-span-5">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" class="h-20 mb-6">
                        <p class="text-2xl font-light mt-8 md:mt-16">Plan &amp; Push strategies ensure your project stays on schedule and within budget</p>
                        <a href="#" class="inline-block mt-8 bg-blue-600 hover:bg-amber-600 text-white px-8 py-4 rounded transition-colors duration-300">Get in touch with us</a>
                    </div>
                    
                    <!-- Services Links -->
                    <div class="lg:col-span-4">
                        <h5 class="text-blue-600 text-xl mb-6">Services</h5>
                        <ul class="space-y-6">
                            <li><a href="#" class="text-gray-400 hover:text-white text-xl transition-colors duration-200">Project Controls <i class="fas fa-arrow-right ml-2"></i></a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white text-xl transition-colors duration-200">Construction Advisory <i class="fas fa-arrow-right ml-2"></i></a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white text-xl transition-colors duration-200">Project Management <i class="fas fa-arrow-right ml-2"></i></a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white text-xl transition-colors duration-200">Dispute Resolution <i class="fas fa-arrow-right ml-2"></i></a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact Information -->
                    <div class="lg:col-span-3">
                        <h5 class="text-blue-600 text-xl mb-6">Get in touch</h5>
                        <p class="text-3xl font-bold mb-2">+212 661 11 78 89</p>
                        <p class="text-gray-400 text-xl mb-6">contact@plan-push.com</p>
                        <p class="text-gray-300 font-bold mb-1">Plan &amp; Push</p>
                        <p class="text-gray-400">Rabat – Morocco</p>
                    </div>
                </div>
                
                <!-- Divider -->
                <hr class="border-gray-800 my-12">
                
                <!-- Copyright and Social -->
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2012 - 2024 • Plan &amp; Push • All Rights Reserved • Powered by <a href="http://bekwellmaroc.com/" target="_blank" class="hover:text-blue-600">Bekwell</a></p>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/company/plan-push/" target="_blank" rel="noopener noreferrer" class="bg-gray-800 hover:bg-blue-600 text-white p-3 rounded transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Site Navigation Footer -->
            <!-- <div class="bg-blue-600 py-6 px-4">
                <div class="container mx-auto">
                    <h5 class="text-white text-xl mb-4">site navigation</h5>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-2">
                        <a href="#" class="text-white hover:underline">home page</a>
                        <a href="#" class="text-white hover:underline">about us</a>
                        <a href="#" class="text-white hover:underline">our projects</a>
                        <a href="#" class="text-white hover:underline">blog</a>
                        <a href="#" class="text-white hover:underline">careers</a>
                        <a href="#" class="text-white hover:underline">project controls</a>
                        <a href="#" class="text-white hover:underline">project management</a>
                        <a href="#" class="text-white hover:underline">construction advisory</a>
                    </div>
                </div>
            </div> -->
        </footer>
    </div>

    <!-- JS for Mobile Menu and Dropdown Toggle -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
        
        // Services dropdown toggle
        document.getElementById('services-menu-button').addEventListener('click', function() {
            document.getElementById('services-dropdown').classList.toggle('hidden');
        });
        
        // Mobile services menu toggle
        document.querySelectorAll('#mobile-menu .relative button').forEach(button => {
            button.addEventListener('click', function() {
                this.nextElementSibling.classList.toggle('hidden');
                const icon = this.querySelector('i.fas');
                if (icon) {
                    icon.classList.toggle('fa-chevron-down');
                    icon.classList.toggle('fa-chevron-up');
                }
            });
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('#services-menu-button') && !event.target.closest('#services-dropdown')) {
                document.getElementById('services-dropdown').classList.add('hidden');
            }
        });
    </script>
</body>
</html>
