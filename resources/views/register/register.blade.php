@extends('layouts.master')

@section('title', 'AdMeter Pro - Real-Time Ad Tracking & Analytics')



@section('content')

    <main class="bg-white">


        <div class="banner-section relative overflow-11hidden bg-[position:50%_0%] bg-no-repeat bg-cover rounded-[20px] m-[11px]
        px-0 py-11" style="background-image: url('{{ asset('assets/photo/banner-2.png') }}');"></div>




        <section class="py-5 bg-gradient-to-br from-gray-50 to-gray-100">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="!grid lg:grid-cols-2 gap-12 items-stretch">

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
                                                <p class="font-bold text-lg text-gray-900">+880 1766-976861</p>
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
                                                <p class="font-bold text-lg text-gray-900">info@admeterpro.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side - Form -->
                    <div class="bg-white rounded-3xl shadow-2xl p-8">

                        <div class="text-2xl lg:text-2xl font-bold text-gray-900 leading-tight mb-3">
                            Get Your AdMeter Pro Account
                        </div>

                        <p class="text-gray-600 mb-6">
                            Start with free trial and get access to all features for first 14 days.
                        </p>

                        <form action="{{route('registration.store')}}" class="space-y-4" method="POST">
                            @csrf
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                                <input name="name" type="text" required class="p-3 w-full rounded-xl border border-gray-300 focus:border-green-500 focus:ring-4 focus:ring-green-100 transition" placeholder="Your Name">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Band Name <span class="text-red-500">*</span></label>
                                <input name="brandName" type="text" required class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-4 focus:ring-green-100 transition" placeholder="Brand Name">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number<span class="text-red-500">*</span></label>
                                <input name="phone" type="tel" required class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-4 focus:ring-green-100 transition" placeholder="+880 1***** ****">
                            </div>


                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email ID<span class="text-red-500">*</span></label>
                                <input name="email" type="email" required class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-4 focus:ring-green-100 transition" placeholder="Email Address">
                            </div>





                            <button type="submit"
                                    class="group relative flex align-middle justify-center w-full items-center gap-3 bg-green-500 hover:bg-green-700 text-white
                                    font-bold text-lg px-10 py-2 rounded-full transition transform hover:scale-105 shadow-lg">
                                <span>Submit Your Message</span>
                                <x-heroicon-o-arrow-right class="w-7 h-7 text-white" />
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
