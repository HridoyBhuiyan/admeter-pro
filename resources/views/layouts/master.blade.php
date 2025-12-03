<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AdMeter Pro - Advanced Ad Tracking & Analytics">
    <title>@yield('title', 'AdMeter Pro')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rudra_">
    <meta name="description" content="Rudra - ÔÇô Multipurpose Professional Consulting Html Template">
    <title>Rudra - Multipurpose Professional Consulting Html Template</title>
    <link rel="shortcut icon" href="assets/img/favicon.html">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"/>

    @vite(['resources/css/client-side/client-page.css'])


    @stack('styles')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans antialiased text-gray-900 bg-gray-50">

@include('layouts.header')

<main>
    @yield('content')
</main>

@include('layouts.footer')

@stack('scripts')

@stack('scripts')

@if (function_exists('inertia_head') || (isset($page) && is_array($page ?? null)))
    @inertiaHead
@endif
</body>
</html>

</body>

<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/viewport.jquery.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.waypoints.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/accordion.js"></script>


</html>
