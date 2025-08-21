@include('partials.head')
<!DOCTYPE html>

<body class="bg-gray-50 font-sans">
    <!-- Header/Navigation -->
    @include('partials.header')
    @yield('hero-section')
    <!-- Main Content -->
    <main class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="./js/script.js"></script>
</body>

</html>