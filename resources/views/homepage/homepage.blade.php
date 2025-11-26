@extends('layouts.master')

@section('title', 'AdMeter Pro - Real-Time Ad Tracking & Analytics')

@push('styles')
    <!-- Add homepage-specific CSS if needed -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="py-20 px-6 text-center bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight">
                Track Every Ad.<br>
                <span class="text-indigo-600">Own Every Conversion.</span>
            </h1>
            <p class="mt-6 text-xl text-gray-600">
                The most powerful, real-time ad tracking platform built for marketers who refuse to guess.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-indigo-700 transition shadow-lg">
                    Start Free Trial
                </a>
                <a href="#features" class="border border-gray-300 text-gray-700 px-8 py-4 rounded-lg text-lg font-semibold hover:border-indigo-600 transition">
                    See How It Works
                </a>
            </div>
        </div>
    </section>

    <!-- More sections: Features, Pricing, Testimonials, etc. -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center">This is just the beginning...</h2>
            <!-- Add your feature cards, etc. -->
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>
@endpush
