<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/categories', [PageController::class, 'categories'])->name('categories');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/single-blog', [PageController::class, 'singleBlog'])->name('single-blog');
