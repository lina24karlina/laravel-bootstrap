<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Bootstrap')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js']) <!-- Include Vite assets -->
</head>
<body>
    @include('components.navbar')

    <div class="container mt-4">
        @yield('content') <!-- Content will be injected here -->
    </div>

    <!-- Footer Section -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: #f1f1f1;">
            © 2024 Lina Karlina | <a href="/contact">Contact Us</a>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
