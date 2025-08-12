{{-- resources/views/contact.blade.php --}}

@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container mt-5">
        <h1>Contact Us</h1>
        <p>Feel free to reach out to us by filling the form below:</p>

        <form action="{{ route('contact') }}" method="POST">
            @csrf {{-- CSRF protection --}}

            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endsection
