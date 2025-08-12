@extends('layouts.app')

@section('title', 'Blog Details')

@section('content')
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Article Content -->
        <main class="lg:w-2/3">
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Featured Image -->
                <img src="https://placehold.co/920x610/png" 
                     alt="Web Development" 
                     class="w-full h-64 md:h-96 object-cover">
                
                <!-- Article Header -->
                <div class="p-6 md:p-8">
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Development</span>
                        <span class="mx-2">•</span>
                        <span>May 15, 2023</span>
                        <span class="mx-2">•</span>
                        <span>5 min read</span>
                        <span class="mx-2">•</span>
                        <span><i class="fas fa-eye mr-1"></i> 1,248 views</span>
                    </div>
                    
                    <h1 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">The Future of Web Development in 2023</h1>
                    
                    <div class="flex items-center mb-8">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                             alt="Author" 
                             class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-medium text-gray-800">John Doe</p>
                            <p class="text-sm text-gray-500">Senior Web Developer</p>
                        </div>
                    </div>
                </div>
                
                <!-- Article Content -->
                <div class="px-6 md:px-8 pb-8 prose max-w-none">
                    <p class="text-gray-700 mb-5 text-lg leading-relaxed">The web development landscape is evolving at an unprecedented pace, with new technologies and methodologies emerging constantly. As we navigate through 2023, several key trends are shaping the future of how we build for the web.</p>
                    
                    <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800">1. The Rise of WebAssembly</h2>
                    
                    <p class="text-gray-700 mb-5 leading-relaxed">WebAssembly (Wasm) continues to gain traction as a game-changer for web performance. This binary instruction format allows code written in languages like C, C++, and Rust to run in the browser at near-native speed.</p>
                    
                    <img src="https://placehold.co/920x610/png" 
                         alt="WebAssembly code example" 
                         class="w-full rounded-lg my-6">
                    
                    <p class="text-gray-700 mb-3 leading-relaxed">Key benefits of WebAssembly include:</p>
                    
                    <ul class="list-disc pl-5 mb-5 text-gray-700 space-y-1">
                        <li>Performance-critical applications can now run efficiently in browsers</li>
                        <li>Existing codebases can be ported to the web with minimal changes</li>
                        <li>Enables new categories of web applications (CAD tools, video editing, etc.)</li>
                    </ul>
                    
                    <blockquote class="border-l-4 border-blue-500 pl-4 italic text-gray-700 my-6">
                        "WebAssembly is bridging the performance gap between web and native applications, opening up possibilities we couldn't imagine just a few years ago."
                    </blockquote>
                    
                    <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800">2. Serverless Architecture Matures</h2>
                    
                    <p class="text-gray-700 mb-5 leading-relaxed">Serverless computing has moved beyond the hype phase and is now a mainstream approach for many organizations. In 2023, we're seeing:</p>
                    
                    <ul class="list-disc pl-5 mb-5 text-gray-700 space-y-1">
                        <li>More sophisticated tooling for local development and testing</li>
                        <li>Better cold start performance across providers</li>
                        <li>Increased adoption of edge computing with serverless</li>
                    </ul>
                    
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg mb-5 overflow-x-auto">
                        <pre><code class="language-javascript">// Example serverless function
exports.handler = async (event) => {
    const response = {
        statusCode: 200,
        body: JSON.stringify('Hello from Lambda!'),
    };
    return response;
};</code></pre>
                    </div>
                    
                    <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800">3. Jamstack Goes Mainstream</h2>
                    
                    <p class="text-gray-700 mb-5 leading-relaxed">The Jamstack architecture (JavaScript, APIs, and Markup) has proven its value for building fast, secure, and scalable websites. In 2023:</p>
                    
                    <ul class="list-disc pl-5 mb-5 text-gray-700 space-y-1">
                        <li>More enterprises are adopting Jamstack for their digital properties</li>
                        <li>Improved developer experience with better frameworks and tools</li>
                        <li>Enhanced dynamic capabilities blurring the line with traditional SPAs</li>
                    </ul>
                    
                    <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800">4. AI-Powered Development Tools</h2>
                    
                    <p class="text-gray-700 mb-5 leading-relaxed">Artificial intelligence is transforming how developers work. Notable trends include:</p>
                    
                    <ul class="list-disc pl-5 mb-5 text-gray-700 space-y-1">
                        <li>AI-assisted code completion (GitHub Copilot and alternatives)</li>
                        <li>Automated testing and bug detection</li>
                        <li>AI-generated UI components and design systems</li>
                    </ul>
                    
                    <img src="https://placehold.co/920x610/png" 
                         alt="AI development tools" 
                         class="w-full rounded-lg my-6">
                    
                    <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800">5. Web3 and Decentralized Technologies</h2>
                    
                    <p class="text-gray-700 mb-5 leading-relaxed">While still in early stages, Web3 technologies are influencing web development:</p>
                    
                    <ul class="list-disc pl-5 mb-5 text-gray-700 space-y-1">
                        <li>Growing ecosystem of decentralized identity solutions</li>
                        <li>Smart contract integration with traditional web apps</li>
                        <li>New authentication patterns with crypto wallets</li>
                    </ul>
                    
                    <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800">Conclusion</h2>
                    
                    <p class="text-gray-700 mb-5 leading-relaxed">The future of web development in 2023 is about performance, developer experience, and expanding what's possible on the web platform. By embracing these trends while maintaining focus on core web principles, developers can build applications that are faster, more capable, and more maintainable than ever before.</p>
                </div>
                
                <!-- Article Footer -->
                <div class="px-6 md:px-8 py-6 border-t border-gray-200">
                    <div class="flex flex-wrap gap-2 mb-6">
                        <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#webdev</a>
                        <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#frontend</a>
                        <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#javascript</a>
                        <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#trends</a>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-4">
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="far fa-thumbs-up text-xl"></i>
                                <span class="ml-1">248</span>
                            </button>
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="far fa-comment text-xl"></i>
                                <span class="ml-1">36</span>
                            </button>
                        </div>
                        
                        <div class="flex space-x-3">
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="fab fa-twitter text-xl"></i>
                            </button>
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="fab fa-linkedin text-xl"></i>
                            </button>
                            <button class="text-gray-500 hover:text-blue-600 transition">
                                <i class="fab fa-facebook text-xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
            
            <!-- Author Bio -->
            <div class="bg-white rounded-lg shadow-md p-6 mt-8">
                <div class="flex items-start">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                         alt="Author" 
                         class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-800">About John Doe</h3>
                        <p class="text-gray-600 mb-3">John is a senior web developer with over 10 years of experience building scalable web applications. He specializes in JavaScript frameworks and performance optimization.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800 transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-blue-600 hover:text-blue-800 transition">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="text-blue-600 hover:text-blue-800 transition">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Comments Section -->
            <div class="bg-white rounded-lg shadow-md p-6 mt-8">
                <h3 class="text-xl font-bold text-gray-800 mb-6">Comments (3)</h3>
                
                <!-- Comment 1 -->
                <div class="mb-6 pb-6 border-b border-gray-200">
                    <div class="flex items-start mb-3">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                             alt="User" 
                             class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-medium text-gray-800">Sarah Johnson</p>
                            <p class="text-sm text-gray-500">June 2, 2023</p>
                        </div>
                    </div>
                    <p class="text-gray-700 ml-13">Great article! I've been experimenting with WebAssembly and it's truly impressive how it performs compared to traditional JavaScript.</p>
                    <button class="text-sm text-gray-500 hover:text-blue-600 mt-2 ml-13 transition">Reply</button>
                </div>
                
                <!-- Comment 2 -->
                <div class="mb-6 pb-6 border-b border-gray-200">
                    <div class="flex items-start mb-3">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" 
                             alt="User" 
                             class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-medium text-gray-800">Michael Chen</p>
                            <p class="text-sm text-gray-500">June 5, 2023</p>
                        </div>
                    </div>
                    <p class="text-gray-700 ml-13">What are your thoughts on the learning curve for developers transitioning to serverless architectures? I've found it challenging to debug in production environments.</p>
                    <button class="text-sm text-gray-500 hover:text-blue-600 mt-2 ml-13 transition">Reply</button>
                </div>
                
                <!-- Comment 3 -->
                <div class="mb-6">
                    <div class="flex items-start mb-3">
                        <img src="https://randomuser.me/api/portraits/women/63.jpg" 
                             alt="User" 
                             class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-medium text-gray-800">Emma Rodriguez</p>
                            <p class="text-sm text-gray-500">June 8, 2023</p>
                        </div>
                    </div>
                    <p class="text-gray-700 ml-13">Thanks for the comprehensive overview! Would love to see a follow-up article diving deeper into AI-powered development tools.</p>
                    <button class="text-sm text-gray-500 hover:text-blue-600 mt-2 ml-13 transition">Reply</button>
                </div>
                
                <!-- Comment Form -->
                <div class="mt-8">
                    <h4 class="text-lg font-semibold mb-4 text-gray-800">Leave a Comment</h4>
                    <form class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Your Name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="email" placeholder="Your Email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <textarea placeholder="Your Comment" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">
                            Post Comment
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Related Articles -->
            <div class="mt-12">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">Related Articles</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Related 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                        <img src="https://placehold.co/920x610/png" 
                             alt="React 18" 
                             class="w-full h-40 object-cover">
                        <div class="p-4">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Development</span>
                                <span class="mx-2">•</span>
                                <span>May 22, 2023</span>
                            </div>
                            <h4 class="text-lg font-bold mb-2 text-gray-800">React 18: Concurrent Rendering Explained</h4>
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                        </div>
                    </div>
                    
                    <!-- Related 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                        <img src="https://placehold.co/920x610/png" 
                             alt="Serverless" 
                             class="w-full h-40 object-cover">
                        <div class="p-4">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Backend</span>
                                <span class="mx-2">•</span>
                                <span>June 5, 2023</span>
                            </div>
                            <h4 class="text-lg font-bold mb-2 text-gray-800">Serverless Architecture: Pros and Cons</h4>
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Sidebar -->
        <aside class="lg:w-1/3 space-y-8">
            <!-- About Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">About The Blog</h3>
                <p class="text-gray-600 mb-4">IBlog brings you the latest news, tutorials, and thought pieces on technology, programming, AI, and the digital world.</p>
                <button class="text-blue-600 font-medium hover:text-blue-800 transition">
                    Read More <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>
            
            <!-- Popular Posts -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Popular Posts</h3>
                <div class="space-y-4">
                    <!-- Post 1 -->
                    <div class="flex items-start">
                        <img src="https://placehold.co/920x610/png" 
                             alt="AI" 
                             class="w-16 h-16 object-cover rounded-md mr-3">
                        <div>
                            <h4 class="font-medium text-gray-800">Getting Started with AI</h4>
                            <p class="text-sm text-gray-500">June 2, 2023</p>
                        </div>
                    </div>
                    
                    <!-- Post 2 -->
                    <div class="flex items-start">
                        <img src="https://placehold.co/920x610/png" 
                             alt="Low-Code" 
                             class="w-16 h-16 object-cover rounded-md mr-3">
                        <div>
                            <h4 class="font-medium text-gray-800">Low-Code Revolution</h4>
                            <p class="text-sm text-gray-500">July 18, 2023</p>
                        </div>
                    </div>
                    
                    <!-- Post 3 -->
                    <div class="flex items-start">
                        <img src="https://placehold.co/920x610/png" 
                             alt="Cloud" 
                             class="w-16 h-16 object-cover rounded-md mr-3">
                        <div>
                            <h4 class="font-medium text-gray-800">Cloud Best Practices</h4>
                            <p class="text-sm text-gray-500">June 10, 2023</p>
                        </div>
                    </div>
                </div>
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
                </div>
            </div>
            
            <!-- Newsletter Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Newsletter</h3>
                <p class="text-gray-600 mb-4">Subscribe to get the latest posts delivered to your inbox.</p>
                <form class="space-y-4">
                    <input type="email" placeholder="Your email address" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                        Subscribe
                    </button>
                </form>
            </div>
            
            <!-- Tags Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Popular Tags</h3>
                <div class="flex flex-wrap gap-2">
                    <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#javascript</a>
                    <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#react</a>
                    <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#webdev</a>
                    <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#ai</a>
                    <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#cloud</a>
                    <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#security</a>
                    <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#performance</a>
                    <a href="#" class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#beginners</a>
                </div>
            </div>
        </aside>
    </div>
@endsection
