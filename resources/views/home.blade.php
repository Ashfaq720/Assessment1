@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Welcome to IBlog</h2>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Discover the latest in technology, programming, and digital
                innovation</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <input type="text" placeholder="Search articles..."
                    class="px-4 py-3 rounded-md text-gray-800 w-full sm:w-96">
                <button class="bg-white text-blue-600 px-6 py-3 rounded-md font-medium hover:bg-gray-100 transition">
                    <i class="fas fa-search mr-2"></i> Search
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-2">Featured Posts</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Featured Post 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://placehold.co/480x200/png" alt="Web Development" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Development</span>
                            <span class="mx-2">•</span>
                            <span>May 15, 2023</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">The Future of Web Development in 2023</h3>
                        <p class="text-gray-600 mb-4">Explore the latest trends and technologies shaping the future of web
                            development this year.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </div>

                <!-- Featured Post 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://placehold.co/480x200/png" alt="Artificial Intelligence"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Artificial
                                Intelligence</span>
                            <span class="mx-2">•</span>
                            <span>June 2, 2023</span>
                            <span class="mx-2">•</span>
                            <span>8 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Getting Started with AI and Machine Learning</h3>
                        <p class="text-gray-600 mb-4">A beginner's guide to understanding and implementing AI and machine
                            learning concepts.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </div>

                <!-- Featured Post 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://placehold.co/480x200/png" alt="Cloud Computing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Cloud Computing</span>
                            <span class="mx-2">•</span>
                            <span>June 10, 2023</span>
                            <span class="mx-2">•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Cloud Computing: Best Practices for 2023</h3>
                        <p class="text-gray-600 mb-4">Learn the most effective strategies for leveraging cloud computing in
                            your projects.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <p class="text-gray-600 mb-4">Discover the exciting new features and improvements in React 18 and
                            how they can benefit your projects.</p>
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
                        <p class="text-gray-600 mb-4">How low-code platforms are changing the software development landscape
                            and who should use them.</p>
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
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Web Development</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">12</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Artificial Intelligence</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">8</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Cloud Computing</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">5</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Cybersecurity</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">7</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Mobile Development</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">6</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
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
