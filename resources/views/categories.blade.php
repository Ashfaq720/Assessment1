@extends('layouts.app')

@section('title', 'Categories')

@section('content')
 <!-- Page Header with Search -->
    <section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold mb-2">Web Development</h2>
                    <p class="text-lg">Latest articles about web technologies, frameworks, and best practices</p>
                </div>

                <div class="w-full md:w-auto">
                    <div class="relative">
                        <input type="text" placeholder="Search in Web Development..."
                            class="w-full md:w-64 lg:w-96 px-4 py-3 rounded-md text-gray-800 pr-10">
                        <button class="absolute right-3 top-3 text-gray-500 hover:text-blue-600">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <div class="container mx-auto px-4 py-4">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                        <a href="#"
                            class="ml-1 md:ml-2 text-sm font-medium text-gray-700 hover:text-blue-600">Categories</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                        <span class="ml-1 md:ml-2 text-sm font-medium text-blue-600">Web Development</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Articles Section -->
        <main class="lg:w-2/3">
            <!-- Category Filters -->
            <div class="bg-white rounded-lg shadow p-4 mb-6">
                <div class="flex flex-wrap gap-2">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">All</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">JavaScript</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">React</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">Vue</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">Angular</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">CSS</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">HTML</button>
                </div>
            </div>

            <!-- Sort Options -->
            <div class="flex justify-between items-center mb-6">
                <p class="text-gray-600">Showing 12 of 48 articles</p>
                <div class="flex items-center">
                    <span class="text-gray-600 mr-2">Sort by:</span>
                    <select
                        class="border rounded-md px-3 py-1 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Newest First</option>
                        <option>Oldest First</option>
                        <option>Most Popular</option>
                        <option>Most Comments</option>
                    </select>
                </div>
            </div>

            <!-- Article List -->
            <div class="space-y-6">
                <!-- Article 1 -->
                <article
                    class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="Web Development"
                        class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Development</span>
                            <span class="mx-2">•</span>
                            <span>May 15, 2023</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">The Future of Web Development in 2023</h3>
                        <p class="text-gray-600 mb-4">Explore the latest trends and technologies shaping the future of
                            web development this year.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#trends</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#javascript</span>
                            </div>
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read
                                More</a>
                        </div>
                    </div>
                </article>

                <!-- Article 2 -->
                <article
                    class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="React 18"
                        class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">React</span>
                            <span class="mx-2">•</span>
                            <span>July 5, 2023</span>
                            <span class="mx-2">•</span>
                            <span>7 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">React 18: What's New and Improved</h3>
                        <p class="text-gray-600 mb-4">Discover the exciting new features and improvements in React 18
                            and how they can benefit your projects.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#react</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#frontend</span>
                            </div>
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read
                                More</a>
                        </div>
                    </div>
                </article>

                <!-- Article 3 -->
                <article
                    class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="TypeScript"
                        class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">TypeScript</span>
                            <span class="mx-2">•</span>
                            <span>June 22, 2023</span>
                            <span class="mx-2">•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">TypeScript 5.0: Advanced Features Explained
                        </h3>
                        <p class="text-gray-600 mb-4">Learn how to leverage the powerful new features in TypeScript 5.0
                            to write more robust and maintainable code.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#typescript</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#javascript</span>
                            </div>
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read
                                More</a>
                        </div>
                    </div>
                </article>

                <!-- Article 4 -->
                <article
                    class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="Web Performance"
                        class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Performance</span>
                            <span class="mx-2">•</span>
                            <span>June 18, 2023</span>
                            <span class="mx-2">•</span>
                            <span>9 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Optimizing Web Performance in 2023</h3>
                        <p class="text-gray-600 mb-4">Comprehensive guide to modern web performance optimization
                            techniques that every developer should know.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span
                                    class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#performance</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#webdev</span>
                            </div>
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read
                                More</a>
                        </div>
                    </div>
                </article>

                <!-- Article 5 -->
                <article
                    class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="CSS"
                        class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">CSS</span>
                            <span class="mx-2">•</span>
                            <span>June 10, 2023</span>
                            <span class="mx-2">•</span>
                            <span>4 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Modern CSS Techniques You Should Know</h3>
                        <p class="text-gray-600 mb-4">Explore the latest CSS features and techniques that can help you
                            build better interfaces with less code.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#css</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#frontend</span>
                            </div>
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read
                                More</a>
                        </div>
                    </div>
                </article>

                <!-- Article 6 -->
                <article
                    class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="Web Components"
                        class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Components</span>
                            <span class="mx-2">•</span>
                            <span>May 28, 2023</span>
                            <span class="mx-2">•</span>
                            <span>8 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Web Components: The Future of UI Development?
                        </h3>
                        <p class="text-gray-600 mb-4">Are Web Components finally ready for prime time? We examine their
                            current state and future potential.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span
                                    class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#webcomponents</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-xs">#html</span>
                            </div>
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read
                                More</a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="flex items-center space-x-1">
                    <a href="#"
                        class="p-2 rounded-md border border-gray-200 bg-white text-gray-500 hover:bg-gray-100 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>

                    <a href="#"
                        class="px-3.5 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 transition-colors duration-200">1</a>

                    <a href="#" aria-current="page"
                        class="px-3.5 py-2 rounded-md border border-blue-500 bg-blue-50 text-sm font-medium text-blue-600 transition-colors duration-200">2</a>

                    <a href="#"
                        class="px-3.5 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 transition-colors duration-200">3</a>

                    <span
                        class="px-3.5 py-2 rounded-md border border-transparent text-sm font-medium text-gray-500">...</span>

                    <a href="#"
                        class="px-3.5 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 transition-colors duration-200">8</a>

                    <a href="#"
                        class="p-2 rounded-md border border-gray-200 bg-white text-gray-500 hover:bg-gray-100 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </nav>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="lg:w-1/3 space-y-8">
            <!-- About Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">About Web Development</h3>
                <p class="text-gray-600 mb-4">Web Development covers everything from frontend frameworks to backend
                    technologies, performance optimization, and the latest web standards.</p>
                <button class="text-blue-600 font-medium hover:text-blue-800 transition">
                    Read More <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>

            <!-- Popular Posts -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Popular in Web Dev</h3>
                <div class="space-y-4">
                    <!-- Post 1 -->
                    <div class="flex items-start">
                        <img src="https://placehold.co/480x200/png" alt="Web Development"
                            class="w-16 h-16 object-cover rounded-md mr-3">
                        <div>
                            <h4 class="font-medium text-gray-800">Future of Web Development</h4>
                            <p class="text-sm text-gray-500">May 15, 2023 • 1.2K views</p>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="flex items-start">
                        <img src="https://placehold.co/480x200/png" alt="React"
                            class="w-16 h-16 object-cover rounded-md mr-3">
                        <div>
                            <h4 class="font-medium text-gray-800">React 18 Features</h4>
                            <p class="text-sm text-gray-500">July 5, 2023 • 980 views</p>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="flex items-start">
                        <img src="https://placehold.co/480x200/png" alt="TypeScript"
                            class="w-16 h-16 object-cover rounded-md mr-3">
                        <div>
                            <h4 class="font-medium text-gray-800">TypeScript 5.0</h4>
                            <p class="text-sm text-gray-500">June 22, 2023 • 850 views</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Subcategories -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Subcategories</h3>
                <div class="space-y-2">
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">JavaScript</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">24</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">React</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">18</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Vue.js</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">12</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Angular</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">9</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">CSS & Design</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">15</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Performance</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">7</span>
                    </a>
                </div>
            </div>

            <!-- Newsletter Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Web Dev Newsletter</h3>
                <p class="text-gray-600 mb-4">Get the latest web development articles, tutorials, and news delivered to
                    your inbox.</p>
                <form class="space-y-4">
                    <input type="email" placeholder="Your email address"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                        Subscribe
                    </button>
                </form>
            </div>

            <!-- Tags Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Popular Tags</h3>
                <div class="flex flex-wrap gap-2">
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#javascript</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#react</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#vue</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#angular</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#css</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#html</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#webcomponents</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#performance</a>
                </div>
            </div>
        </aside>
    </div>

@endsection
