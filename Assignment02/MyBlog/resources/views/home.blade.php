@extends('baseLayout')

@section('hero-section')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Welcome to IBlog</h2>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Discover the latest in technology, programming, and
                digital innovation</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <input type="text" placeholder="Search articles..."
                    class="px-4 py-3 rounded-md text-gray-800 w-full sm:w-96">
                <button class="bg-white text-blue-600 px-6 py-3 rounded-md font-medium hover:bg-gray-100 transition">
                    <i class="fas fa-search mr-2"></i> Search
                </button>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Recent Articles -->
        <main class="lg:w-2/3">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-2">Recent Articles</h2>
            <div class="space-y-8">
                <!-- Recent Post  -->
                @foreach($blogs as $blog)
                    <article
                        class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition flex flex-col md:flex-row">
                        <img src="https://placehold.co/480x200/png" alt="{{ $blog->title }}"
                            class="md:w-1/3 h-48 md:h-auto object-cover">
                        <div class="p-6 md:w-2/3">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span
                                    class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">{{ $blog->category->name }}</span>
                                <span class="mx-2">•</span>
                                <span>{{ $blog->created_at->format('F j, Y') }}</span>
                                <span class="mx-2">•</span>
                                <span>{{ $blog->read_time }} min read</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-gray-800">{{ $blog->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 250) }}</p>
                            <a href="{{ route('blogs.show', $blog->id) }}"
                                class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                        </div>
                    </article>
                @endforeach


            </div>

            <div class="mt-8 flex justify-center">

                <div class="mt-4">
                    {{ $blogs->links() }}
                </div>

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

                    @foreach($blog_by_category as $category)
                        <a href="{{ route('category.blogs', $category->id) }}"
                            class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                            <span class="text-gray-700">{{ $category->name }}</span>
                            <span
                                class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">{{ $category->blogs_count }}</span>
                        </a>
                    @endforeach


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