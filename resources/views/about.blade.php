

@extends('layouts.app')  {{-- যদি layouts.app থাকে, সেটাকে extend করবে --}}

@section('title', 'About Us')

@section('content')
<div class="container mt-5">
    <h1>About Us</h1>
    <p>Welcome to our company! We are dedicated to providing the best services to our customers.</p>
    
    <h3>Our Mission</h3>
    <p>Our mission is to deliver high-quality products that bring value and satisfaction.</p>

    <h3>Our Team</h3>
    <p>We have a passionate team of professionals working together to achieve excellence.</p>

    <hr>
    <p>If you want to know more, feel free to <a href="{{ route('contact') }}">contact us</a>.</p>
</div>
@endsection
