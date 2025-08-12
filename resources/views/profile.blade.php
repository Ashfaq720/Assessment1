@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <!-- Profile Header -->
    <div class="profile-header">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row items-center md:items-end">
                <div class="avatar-upload mb-4 md:mb-0 md:mr-6">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-white shadow-md">
                    <div class="avatar-overlay">
                        <i class="fas fa-camera text-white text-xl"></i>
                        <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*">
                    </div>
                </div>
                <div class="text-center md:text-left">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800">John Doe</h1>
                    <p class="text-gray-600 mb-2">Senior Web Developer</p>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <span class="text-gray-600"><i class="fas fa-map-marker-alt mr-1"></i> San Francisco, CA</span>
                        <span class="text-gray-600"><i class="fas fa-calendar-alt mr-1"></i> Joined June 2021</span>
                    </div>
                    <div class="mt-4 flex justify-center md:justify-start space-x-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
                <div class="mt-4 md:mt-0 md:ml-auto">
                    <button class="bg-white text-blue-600 border border-blue-600 px-4 py-2 rounded-md hover:bg-blue-50 transition">
                        <i class="fas fa-edit mr-2"></i> Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Navigation -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4">
            <nav class="flex space-x-8">
                <a href="#" class="py-4 px-1 tab-active">Posts</a>
                <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Comments</a>
                <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Bookmarks</a>
                <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Stats</a>
                <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Settings</a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Profile Content -->
        <main class="lg:w-2/3">
            <!-- User Bio -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-xl font-bold mb-4 text-gray-800">About Me</h2>
                <p class="text-gray-700 mb-4">
                    Passionate web developer with over 8 years of experience building modern web applications. 
                    Specializing in JavaScript frameworks and performance optimization. 
                    Love sharing knowledge through blogging and open source contributions.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h3 class="font-medium text-gray-800 mb-2">Skills</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-sm">JavaScript</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-sm">React</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-sm">Node.js</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-sm">TypeScript</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-sm">CSS</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-sm">HTML</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800 mb-2">Interests</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-md text-sm">Web Performance</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-md text-sm">Accessibility</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-md text-sm">UX Design</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-md text-sm">Open Source</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800">My Articles</h2>
                    <button class="text-blue-600 hover:text-blue-800 font-medium">
                        <i class="fas fa-plus mr-1"></i> New Article
                    </button>
                </div>
                
                <!-- Article 1 -->
                <div class="border-b border-gray-200 pb-6 mb-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-1">The Future of Web Development in 2023</h3>
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs mr-2">Web Development</span>
                                <span>Published May 15, 2023</span>
                                <span class="mx-2">•</span>
                                <span><i class="fas fa-eye mr-1"></i> 1,248 views</span>
                            </div>
                            <p class="text-gray-600 mb-3">Explore the latest trends and technologies shaping the future of web development this year.</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-gray-500 hover:text-blue-600 p-2 rounded-full hover:bg-gray-100">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-gray-500 hover:text-red-600 p-2 rounded-full hover:bg-gray-100">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-4 text-sm">
                            <span class="text-gray-600"><i class="far fa-thumbs-up mr-1"></i> 42 Likes</span>
                            <span class="text-gray-600"><i class="far fa-comment mr-1"></i> 8 Comments</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View Article</a>
                    </div>
                </div>
                
                <!-- Article 2 -->
                <div class="border-b border-gray-200 pb-6 mb-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-1">React 18: What's New and Improved</h3>
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs mr-2">React</span>
                                <span>Published July 5, 2023</span>
                                <span class="mx-2">•</span>
                                <span><i class="fas fa-eye mr-1"></i> 980 views</span>
                            </div>
                            <p class="text-gray-600 mb-3">Discover the exciting new features and improvements in React 18 and how they can benefit your projects.</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-gray-500 hover:text-blue-600 p-2 rounded-full hover:bg-gray-100">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-gray-500 hover:text-red-600 p-2 rounded-full hover:bg-gray-100">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-4 text-sm">
                            <span class="text-gray-600"><i class="far fa-thumbs-up mr-1"></i> 36 Likes</span>
                            <span class="text-gray-600"><i class="far fa-comment mr-1"></i> 5 Comments</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View Article</a>
                    </div>
                </div>
                
                <!-- Article 3 -->
                <div class="pb-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-1">TypeScript 5.0: Advanced Features Explained</h3>
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs mr-2">TypeScript</span>
                                <span>Published June 22, 2023</span>
                                <span class="mx-2">•</span>
                                <span><i class="fas fa-eye mr-1"></i> 850 views</span>
                            </div>
                            <p class="text-gray-600 mb-3">Learn how to leverage the powerful new features in TypeScript 5.0 to write more robust and maintainable code.</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-gray-500 hover:text-blue-600 p-2 rounded-full hover:bg-gray-100">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-gray-500 hover:text-red-600 p-2 rounded-full hover:bg-gray-100">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-4 text-sm">
                            <span class="text-gray-600"><i class="far fa-thumbs-up mr-1"></i> 28 Likes</span>
                            <span class="text-gray-600"><i class="far fa-comment mr-1"></i> 3 Comments</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View Article</a>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                <nav class="flex items-center space-x-1">
                    <a href="#" class="p-2 rounded-md border border-gray-200 bg-white text-gray-500 hover:bg-gray-100 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    
                    <a href="#" class="px-3.5 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 transition-colors duration-200">1</a>
                    
                    <a href="#" aria-current="page" class="px-3.5 py-2 rounded-md border border-blue-500 bg-blue-50 text-sm font-medium text-blue-600 transition-colors duration-200">2</a>
                    
                    <a href="#" class="px-3.5 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 transition-colors duration-200">3</a>
                    
                    <span class="px-3.5 py-2 rounded-md border border-transparent text-sm font-medium text-gray-500">...</span>
                    
                    <a href="#" class="px-3.5 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 transition-colors duration-200">8</a>
                    
                    <a href="#" class="p-2 rounded-md border border-gray-200 bg-white text-gray-500 hover:bg-gray-100 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </nav>
            </div>
            </div>
        </main>
        
        <!-- Sidebar -->
        <aside class="lg:w-1/3 space-y-6">
            <!-- Stats Widget -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-gray-800">My Stats</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-4 bg-blue-50 rounded-lg">
                        <p class="text-3xl font-bold text-blue-600">12</p>
                        <p class="text-sm text-gray-600">Articles</p>
                    </div>
                    <div class="text-center p-4 bg-purple-50 rounded-lg">
                        <p class="text-3xl font-bold text-purple-600">5.2K</p>
                        <p class="text-sm text-gray-600">Views</p>
                    </div>
                    <div class="text-center p-4 bg-green-50 rounded-lg">
                        <p class="text-3xl font-bold text-green-600">248</p>
                        <p class="text-sm text-gray-600">Likes</p>
                    </div>
                    <div class="text-center p-4 bg-yellow-50 rounded-lg">
                        <p class="text-3xl font-bold text-yellow-600">56</p>
                        <p class="text-sm text-gray-600">Comments</p>
                    </div>
                </div>
            </div>
            
            <!-- Recent Comments -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Recent Comments</h3>
                <div class="space-y-4">
                    <div class="border-b border-gray-200 pb-4">
                        <p class="text-sm text-gray-600 mb-1">On <a href="#" class="text-blue-600 hover:underline">The Future of Web Development</a></p>
                        <p class="text-gray-700 mb-2">"Great article! WebAssembly is really changing the game."</p>
                        <p class="text-xs text-gray-500">2 days ago</p>
                    </div>
                    <div class="border-b border-gray-200 pb-4">
                        <p class="text-sm text-gray-600 mb-1">On <a href="#" class="text-blue-600 hover:underline">React 18 Features</a></p>
                        <p class="text-gray-700 mb-2">"The new concurrent rendering is a game changer for our app."</p>
                        <p class="text-xs text-gray-500">1 week ago</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">On <a href="#" class="text-blue-600 hover:underline">TypeScript 5.0</a></p>
                        <p class="text-gray-700 mb-2">"The new decorators implementation is much cleaner now."</p>
                        <p class="text-xs text-gray-500">2 weeks ago</p>
                    </div>
                </div>
                <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 text-sm font-medium">
                    View All Comments <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            
            <!-- Bookmarks -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-gray-800">Bookmarks</h3>
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All</a>
                </div>
                <div class="space-y-3">
                    <a href="#" class="block p-3 hover:bg-gray-50 rounded-md transition">
                        <p class="font-medium text-gray-800">Getting Started with AI</p>
                        <p class="text-sm text-gray-500">Saved 3 days ago</p>
                    </a>
                    <a href="#" class="block p-3 hover:bg-gray-50 rounded-md transition">
                        <p class="font-medium text-gray-800">Cloud Best Practices</p>
                        <p class="text-sm text-gray-500">Saved 1 week ago</p>
                    </a>
                    <a href="#" class="block p-3 hover:bg-gray-50 rounded-md transition">
                        <p class="font-medium text-gray-800">Cybersecurity Essentials</p>
                        <p class="text-sm text-gray-500">Saved 2 weeks ago</p>
                    </a>
                </div>
            </div>
        </aside>
    </div>
@endsection
