@extends('layout')

@section('content')

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Recent Articles -->
        <main class="lg:w-2/3">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-2">Recent Articles</h2>
            <div class="space-y-8">
                <!-- Recent Post 1 -->
                <article
                    class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="React 18" class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Development</span>
                            <span class="mx-2">•</span>
                            <span>July 5, 2023</span>
                            <span class="mx-2">•</span>
                            <span>7 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">React 18: What's New and Improved</h3>
                        <p class="text-gray-600 mb-4">Discover the exciting new features and improvements in React 18
                            and how they can benefit your projects.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </article>

                <!-- Recent Post 2 -->
                <article
                    class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="Cybersecurity"
                        class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Cybersecurity</span>
                            <span class="mx-2">•</span>
                            <span>July 12, 2023</span>
                            <span class="mx-2">•</span>
                            <span>10 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Cybersecurity Essentials for Developers</h3>
                        <p class="text-gray-600 mb-4">Key security practices every developer should implement to protect
                            their applications and users.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </article>

                <!-- Recent Post 3 -->
                <article
                    class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="Low-Code Development"
                        class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Development</span>
                            <span class="mx-2">•</span>
                            <span>July 18, 2023</span>
                            <span class="mx-2">•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">The Rise of Low-Code Development Platforms</h3>
                        <p class="text-gray-600 mb-4">How low-code platforms are changing the software development
                            landscape and who should use them.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </article>
            </div>

            <div class="mt-8 flex justify-center">
                <button class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">
                    Browse All Articles
                </button>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="lg:w-1/3 space-y-8">
            <!-- About Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">About The Blog</h3>
                <p class="text-gray-600 mb-4">IBlog brings you the latest news, tutorials, and thought pieces on
                    technology, programming, AI, and the digital world.</p>
                <button class="text-blue-600 font-medium hover:text-blue-800 transition">
                    Read More <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>

            <!-- Categories Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Categories</h3>
                <div class="space-y-2">
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Web Development</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">12</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Artificial Intelligence</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">8</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Cloud Computing</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">5</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Cybersecurity</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">7</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Mobile Development</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">6</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">DevOps</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">4</span>
                    </a>
                </div>
            </div>

            <!-- Newsletter Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Newsletter</h3>
                <p class="text-gray-600 mb-4">Subscribe to get the latest posts delivered to your inbox.</p>
                <form class="space-y-4">
                    <input type="email" placeholder="Your email address"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                        Subscribe
                    </button>
                </form>
            </div>
        </aside>
    </div>

@endsection

@section('title')
    Blog
@endsection