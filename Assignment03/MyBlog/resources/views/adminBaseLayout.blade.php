@include('partials.head')
<!DOCTYPE html>

<body class="bg-gray-50 font-sans">
    <!-- Header/Navigation -->
    @include('partials.header')
    @yield('hero-section')
    <!-- Main Content -->

    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <aside class="lg:w-1/4 bg-white rounded-md shadow p-4">
            <h3 class="text-lg font-bold mb-4">Menu</h3>
            <ul class="space-y-2">
                <!-- Simple items -->
                <li>
                    <a href="/dashboard" class="block px-3 py-2 rounded hover:bg-gray-100 text-gray-700">
                        <i class="fas fa-home mr-2 text-blue-600"></i> Dashboard
                    </a>
                </li>

                <!-- Submenu item -->
                <li x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-3 py-2 rounded hover:bg-gray-100 text-gray-700">
                        <span><i class="fas fa-cog mr-2 text-blue-600"></i> Category</span>
                        <i :class="open ? 'fas fa-chevron-up text-sm' : 'fas fa-chevron-down text-sm'"></i>
                    </button>

                    <!-- Submenu -->
                    <ul x-show="open" x-transition class="mt-1 pl-6 space-y-1 text-sm text-gray-600">
                        <li>
                            <a href="/settings/profile" class="block px-3 py-1 rounded hover:bg-gray-50">

                            </a>
                        </li>
                        <li>
                            <a href="/settings/security" class="block px-3 py-1 rounded hover:bg-gray-50">
                                Security
                            </a>
                        </li>
                        <li>
                            <a href="/settings/notifications" class="block px-3 py-1 rounded hover:bg-gray-50">
                                Notifications
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Another simple item -->
                <li>
                    <a href="/logout" class="block px-3 py-2 rounded hover:bg-gray-100 text-gray-700">
                        <i class="fas fa-sign-out-alt mr-2 text-blue-600"></i> Logout
                    </a>
                </li>
            </ul>
        </aside>


        <!-- Main Content -->
        <main class="lg:w-3/4">
            @yield('content')
        </main>
    </div>


    @include('partials.footer')

    <script src="./js/script.js"></script>
</body>

</html>