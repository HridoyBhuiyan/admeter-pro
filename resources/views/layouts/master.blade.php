<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AdMeter Pro - Advanced Ad Tracking & Analytics">
    <title>@yield('title', 'AdMeter Pro')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts (Example: Google Fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js (optional, if you use dropdowns in header/footer) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Custom CSS Stack (for page-specific styles) -->
    @stack('styles')
</head>

<body class="font-sans antialiased text-gray-900 bg-gray-50">

<!-- Header -->
@include('layouts.header')

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
@include('layouts.footer')

<!-- Scripts Stack (page-specific JS) -->
@stack('scripts')

<!-- Scripts Stack (page-specific JS) -->
@stack('scripts')

{{-- Inertia Head – ONLY render on Inertia pages (safe for normal Blade pages) --}}
@if (function_exists('inertia_head') || (isset($page) && is_array($page ?? null)))
    @inertiaHead
@endif
</body>
</html>

</body>
</html>
