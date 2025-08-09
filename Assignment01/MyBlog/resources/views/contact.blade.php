@extends('baseLayout')

@section('content')

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-6">
            <!-- Section Title -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800">Contact Us</h2>
                <p class="text-gray-600 mt-2">We’d love to hear from you! Fill out the form below or reach us through the
                    details provided.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <form class="bg-white shadow-lg rounded-lg p-6 space-y-4">
                    <div>
                        <label class="block text-gray-700 mb-1 font-medium">Your Name</label>
                        <input type="text" placeholder="John Doe"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1 font-medium">Email Address</label>
                        <input type="email" placeholder="example@email.com"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1 font-medium">Message</label>
                        <textarea rows="4" placeholder="Write your message here..."
                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Send Message
                    </button>
                </form>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Our Office</h3>
                        <p class="text-gray-600">123 Main Street,<br> Dhaka, Bangladesh</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Call Us</h3>
                        <p class="text-gray-600">+880 1234 567 890</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Email Us</h3>
                        <p class="text-gray-600">info@example.com</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Follow Us</h3>
                        <div class="flex space-x-4 mt-2">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Facebook</a>
                            <a href="#" class="text-blue-400 hover:text-blue-600">Twitter</a>
                            <a href="#" class="text-pink-600 hover:text-pink-800">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('title')
    Contact Us
@endsection