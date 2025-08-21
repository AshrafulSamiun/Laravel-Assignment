<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBlog | Modern Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Local CSS using asset() --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="bg-gray-50 font-sans">
    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 md:py-0  flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a href="./index.html" class="flex items-center space-x-2">
                    <i class="fas fa-blog text-2xl text-blue-600"></i>
                    <h1 class="text-2xl font-bold text-gray-800">I<span class="text-blue-600">Blog</span></h1>
                </a>
            </div>

            <nav class="hidden md:flex space-x-8 items-center">
                <a href="./home" class="text-blue-600 font-medium">Home</a>
                <!-- Categories Dropdown -->
                <div class="relative desktop-dropdown">
                    <button class="text-gray-600 hover:text-blue-600 py-4 transition flex items-center">
                        Categories
                        <i class="fas fa-chevron-down ml-1 text-sm"></i>
                    </button>
                    <div class="absolute left-0 w-64 bg-white rounded-md shadow-lg hidden z-50 desktop-dropdown-menu">
                        <div class="py-2">
                            <div class="relative desktop-dropdown-sub">
                                <button
                                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition flex justify-between items-center w-full text-left">
                                    Web Development
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                                <div
                                    class="absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg hidden desktop-dropdown-submenu">
                                    <a href=""
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Frontend</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Backend</a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Full
                                        Stack</a>
                                </div>
                            </div>
                            <div class="relative desktop-dropdown-sub">
                                <button
                                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition flex justify-between items-center w-full text-left">
                                    Artificial Intelligence
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                                <div
                                    class="absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg hidden desktop-dropdown-submenu">
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Machine
                                        Learning</a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Deep
                                        Learning</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">NLP</a>
                                </div>
                            </div>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Cloud
                                Computing</a>
                            <a href="#"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Cybersecurity</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Mobile
                                Development</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">DevOps</a>
                        </div>
                    </div>
                </div>
                <a href="/about" class="text-gray-600 hover:text-blue-600 transition">About</a>
                <a href="/contact" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
            </nav>

            <div class="flex items-center space-x-4">
                <button class="md:hidden text-gray-600" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <a href="./login"
                    class="hidden md:block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    Login
                </a>
                <a href="./register"
                    class="hidden md:block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    Register
                </a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <div class="container mx-auto px-4 py-4">
                <a href="#" class="block py-2 text-blue-600 font-medium">Home</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Articles</a>
                <div class="relative">
                    <button
                        class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-toggle">
                        Categories
                        <i class="fas fa-chevron-down ml-1 text-sm"></i>
                    </button>
                    <div id="mobile-categories" class="hidden pl-4 mobile-dropdown-menu">
                        <div class="py-1">
                            <div class="relative">
                                <button
                                    class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                    Web Development
                                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                                </button>
                                <div id="mobile-webdev-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                    <a href="#"
                                        class="block py-2 text-gray-600 hover:text-blue-600 transition">Frontend</a>
                                    <a href="#"
                                        class="block py-2 text-gray-600 hover:text-blue-600 transition">Backend</a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Full
                                        Stack</a>
                                </div>
                            </div>
                            <div class="relative">
                                <button
                                    class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                    Artificial Intelligence
                                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                                </button>
                                <div id="mobile-ai-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Machine
                                        Learning</a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Deep
                                        Learning</a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">NLP</a>
                                </div>
                            </div>
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cloud
                                Computing</a>
                            <a href="#"
                                class="block py-2 text-gray-600 hover:text-blue-600 transition">Cybersecurity</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Mobile
                                Development</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">DevOps</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">About</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Contact</a>
            </div>
        </div>
    </header>

    @yield('hero-section')


    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Recent Articles -->
        <main class="lg:w-2/3">

            @yield('content');
        </main>

        <!-- Sidebar -->

    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <a href="./index.html" class="flex items-center space-x-2">
                            <i class="fas fa-blog text-2xl text-blue-400"></i>
                            <h3 class="text-2xl font-bold">I<span class="text-blue-400">Blog</span></h3>
                        </a>
                    </div>
                    <p class="text-gray-400">Bringing you the latest in technology and digital innovation since 2025.
                    </p>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Categories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Artificial Intelligence</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cloud Computing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cybersecurity</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-gray-400 hover:text-white transition text-xl"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition text-xl"><i
                                class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition text-xl"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition text-xl"><i
                                class="fab fa-github"></i></a>
                    </div>
                    <p class="text-gray-400">contact@iblog.com</p>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2025 IBlog. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>