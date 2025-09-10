@extends('baseLayout')
@section('title')
    About Us
@endsection



@section('content')

    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Text Section -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">About Us</h2>
                    <p class="text-gray-600 mb-6">
                        At <span class="font-semibold text-indigo-600">Your Company</span>, we are committed to delivering
                        high-quality solutions that help our clients thrive in a digital world.
                        Our team brings years of expertise in web development, software engineering, and design to create
                        products that are both functional and beautiful.
                    </p>
                    <p class="text-gray-600 mb-6">
                        We believe in innovation, transparency, and long-term partnerships. Our mission is simple: empower
                        businesses through technology.
                    </p>
                    <a href="/contact"
                        class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
                        Learn More
                    </a>
                </div>

                <!-- Image Section -->
                <div>
                    <img src="https://via.placeholder.com/600x400" alt="About Us Image"
                        class="rounded-lg shadow-lg object-cover w-full h-full" />
                </div>

            </div>
        </div>
    </section>


@endsection