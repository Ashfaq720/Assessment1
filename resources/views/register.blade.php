@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <!-- Main Content -->
    <main class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="auth-container max-w-md w-full space-y-6 p-10 bg-white rounded-xl shadow-lg">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900">Create your account</h2>
                <p class="mt-2 text-gray-600">Join our tech community today</p>
            </div>

            <!-- Signup Form -->
            <form class="mt-6 space-y-5" action="#" method="POST" id="signupForm">
                <!-- Name Input -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-gray-400"></i>
                        </div>
                        <input id="name" name="name" type="text" autocomplete="name" required
                               class="input-focus pl-10 block w-full px-3 py-3 border border-gray-300 rounded-md focus:outline-none"
                               placeholder="John Doe">
                    </div>
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input id="email" name="email" type="email" autocomplete="email" required
                               class="input-focus pl-10 block w-full px-3 py-3 border border-gray-300 rounded-md focus:outline-none"
                               placeholder="you@example.com">
                    </div>
                    <p class="mt-1 text-xs text-gray-500" id="emailHelp">We'll never share your email with anyone else.</p>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                               class="input-focus pl-10 block w-full px-3 py-3 border border-gray-300 rounded-md focus:outline-none"
                               placeholder="••••••••">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none" id="togglePassword">
                                <i class="fas fa-eye-slash" id="passwordIcon"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Password Strength Meter -->
                    <div class="mt-2 grid grid-cols-4 gap-1">
                        <div id="strength-1" class="password-strength bg-gray-200 rounded-sm"></div>
                        <div id="strength-2" class="password-strength bg-gray-200 rounded-sm"></div>
                        <div id="strength-3" class="password-strength bg-gray-200 rounded-sm"></div>
                        <div id="strength-4" class="password-strength bg-gray-200 rounded-sm"></div>
                    </div>
                    <p class="mt-1 text-xs text-gray-500" id="passwordHelp">Use 8 or more characters with a mix of letters, numbers & symbols.</p>
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input id="confirm-password" name="confirm-password" type="password" autocomplete="new-password" required
                               class="input-focus pl-10 block w-full px-3 py-3 border border-gray-300 rounded-md focus:outline-none"
                               placeholder="••••••••">
                    </div>
                    <p class="mt-1 text-xs text-red-500 hidden" id="passwordMatchError">Passwords do not match.</p>
                </div>

                <!-- Terms Agreement -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox" required
                               class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-gray-700">I agree to the <a href="#" class="text-blue-600 hover:text-blue-500">Terms of Service</a> and <a href="#" class="text-blue-600 hover:text-blue-500">Privacy Policy</a></label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fas fa-user-plus text-blue-300 group-hover:text-blue-200"></i>
                        </span>
                        Create Account
                    </button>
                </div>
            </form>
            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Already have an account?
                    <a href="login" class="font-medium text-blue-600 hover:text-blue-500">Sign in</a>
                </p>
            </div>
        </div>
    </main>
@endsection
