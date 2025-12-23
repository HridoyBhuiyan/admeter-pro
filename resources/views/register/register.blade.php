@extends('layouts.master')

@section('title', 'AdMeter Pro - Real-Time Ad Tracking & Analytics')

@push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')

    <main class="bg-white">


        <div class="banner-section relative overflow-11hidden bg-[position:50%_0%] bg-no-repeat bg-cover rounded-[20px] m-[11px]
        px-0 py-11" style="background-image: url('{{ asset('assets/photo/banner-2.png') }}');"></div>




        <section class="py-5 bg-gradient-to-br from-gray-50 to-gray-100">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="!grid lg:grid-cols-2 gap-12 items-center">

                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://rudra-tailwind.vercel.app/assets/img/contact/contact-thumb1.png" alt="Office" class="w-full h-auto object-cover">

                        <div class="absolute flex left-5 right-5 bottom-5">
                            <div class="pointer-events-auto w-11/12 max-w-md">
                                <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 border border-white/20">
                                    <div class="space-y-6">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-gray-600 text-sm">Phone Number</p>
                                                <p class="font-bold text-lg text-gray-900">+880-123-4567</p>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-gray-600 text-sm">Email Address</p>
                                                <p class="font-bold text-lg text-gray-900">hello@admeterpro.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side - Form -->
                    <div class="bg-white rounded-3xl shadow-2xl p-10 lg:p-12">

                        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-4">
                            Let's Discuss How We Can Transform Your Life
                        </h2>

                        <p class="text-gray-600 mb-10">
                            Schedule a free consultation to discover personalized solutions from our financial experts.
                        </p>

                        <form class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                                    <input type="text" required
                                           class="w-full px-5 py-4 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-4 focus:ring-green-100 transition"
                                           placeholder="John Doe">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Full Email <span class="text-red-500">*</span></label>
                                    <input type="email" required
                                           class="w-full px-5 py-4 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-4 focus:ring-green-100 transition"
                                           placeholder="john@example.com">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone number <span class="text-red-500">*</span></label>
                                <input type="w-full px-5 py-4 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-4 focus:ring-green-100 transition"
                                       placeholder="+880 1xxx xxxxxx">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Your comment <span class="text-red-500">*</span></label>
                                <textarea rows="5" required
                                          class="w-full px-5 py-4 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-4 focus:ring-green-100 transition resize-none"
                                          placeholder="Tell us about your goals..."></textarea>
                            </div>

                            <button type="submit"
                                    class="group relative inline-flex items-center gap-3 bg-green-600 hover:bg-green-700 text-white font-bold text-lg px-10 py-5 rounded-full transition transform hover:scale-105 shadow-lg">
                                <svg class="w-6 h-6 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5h5m-5 0l4-4m-4 4l4 4"/>
                                </svg>
                                Submit Your Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
@push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>
@endpush
