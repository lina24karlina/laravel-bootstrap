@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<h1 class="text-primary">Contact Us</h1>
<p>If you have any questions, feel free to contact us by filling out the form below:</p>

<!-- Success Message -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Contact Form -->
<form action="/contact-submit" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Your Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
@endsection
