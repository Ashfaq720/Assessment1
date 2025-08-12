<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function categories()
    {
        return view('categories');
    }

    public function login()
    {
        return view('login');
    }

    public function profile()
    {
        return view('profile');
    }

    public function register()
    {
        return view('register');
    }

    public function singleBlog()
    {
        return view('single-blog');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
}
