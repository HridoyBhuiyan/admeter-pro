@extends('layouts.master')
@section('title', 'Sign Up - AdmeterPro')

@section('content')

    <main class="bg-white">

        <div class="banner-section bg-green-500 overflow-hidden  bg-[position:50%_0%] bg-no-repeat bg-cover rounded-[20px] m-[11px] px-0 pt-[clamp(180px,12.61vw,240px)] xxs:pt-[130px] pb-[clamp(240px,14.71vw,280px)] xxs:pb-[180px]"
             style="background-image: url('https://rudra-tailwind.vercel.app/assets/img/banner/hero-thumb2.png');"
        >

            <!-- Sponsor -->
        </div>

        <div class="min-h-screen bg-gradient-to-br from-[#f8fff9] via-white to-[#f0fffc] flex items-center justify-center px-4 py-12 relative overflow-hidden">

            <div class="absolute inset-0 -z-10">
                <div class="absolute top-0 left-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-et3primary/8 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/3 rounded-full blur-3xl"></div>
            </div>

            <div class="et-container max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div class="order-2 lg:order-1 text-center lg:text-left">
                        <div class="mb-10">
                            <h2 class="text-[clamp(48px,8vw,50px)] font-extrabold leading-[1.05] text-[#1a1a1a]">
                                Welcome to<br>
                                <span class="text-gray-600">admeter<span class="text-transparent bg-clip-text bg-gradient-to-r from-[#3B69C7] via-[#407EBC] to-[#5AA1B4] drop-shadow-[0_10px_40px_rgba(138,43,226,0.6)]">pro</span>
                            </span>
                            </h2>
                            <p class="text-[clamp(18px,2vw,24px)] text-[#2d2d2d]/80 mt-4 font-medium">
                                The #1 Meta Ads Analytics Tool for Smart Advertisers
                            </p>
                        </div>

                        <div class="relative">
                            <img src="{{ asset('assets/img/illustrations/meta-ads-dashboard-pana.svg') }}"
                                 alt="Meta Ads Analytics Dashboard"
                                 class="w-full max-w-lg mx-auto drop-shadow-2xl">

                            <div class="absolute -top-6 -left-6 w-24 h-24 bg-primary/10 rounded-full blur-xl"></div>
                            <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-et3primary/10 rounded-full blur-xl"></div>
                        </div>

                        <div class="mt-10 text-center lg:text-left">
                            <p class="text-[#2d2d2d]/70 text-[15px]">
                                <span class="font-bold text-primary">8,000+</span> advertisers already growing with real data
                            </p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <div class="bg-white/70 backdrop-blur-2xl rounded-3xl shadow-2xl border border-white/50 p-[clamp(32px,6vw,56px)] max-w-md mx-auto">

                            <div class="text-center mb-8">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="AdmeterPro" class="h-12 mx-auto">
                            </div>

                            <h2 class="text-center text-[clamp(28px,4vw,36px)] font-bold text-[#1a1a1a] mb-2">
                                Create Your Account
                            </h2>
                            <p class="text-center text-[#2d2d2d]/70 mb-10">
                                Start analyzing your Meta Ads in 30 seconds
                            </p>

                            <div class="mb-8">
                                <a href="#" class="w-full flex items-center justify-center gap-3 px-6 py-4 bg-white border-2 border-[#e2e8f0] rounded-2xl hover:border-primary hover:shadow-lg transition-all duration-300 group">
                                    <img src="{{ asset('assets/img/icons/google.svg') }}" alt="Google" class="w-6 h-6">
                                    <span class="font-semibold text-[#1a1a1a] group-hover:text-primary">
                                Continue with Google
                            </span>
                                </a>
                            </div>

                            <div class="relative text-center mb-8">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-[#e2e8f0]"></div>
                                </div>
                                <div class="relative bg-white/70 px-4">
                                    <span class="text-[#94a3b8] text-sm">Or sign up with email</span>
                                </div>
                            </div>

                            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                                @csrf

                                <div>
                                    <input type="text" name="business_name" value="{{ old('business_name') }}" required autofocus
                                           class="w-full px-6 py-4 bg-white/60 border-2 border-[#e2e8f0] rounded-2xl focus:border-primary focus:outline-none transition-all placeholder-[#94a3b8] text-[16px] font-medium"
                                           placeholder="Business / Agency Name">
                                    @error('business_name')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <input type="text" name="name" value="{{ old('name') }}" required
                                           class="px-6 py-4 bg-white/60 border-2 border-[#e2e8f0] rounded-2xl focus:border-primary focus:outline-none transition-all placeholder-[#94a3b8]"
                                           placeholder="Your Name">
                                    <input type="tel" name="phone" value="{{ old('phone') }}" required
                                           class="px-6 py-4 bg-white/60 border-2 border-[#e2e8f0] rounded-2xl focus:border-primary focus:outline-none transition-all placeholder-[#94a3b8]"
                                           placeholder="Phone Number">
                                </div>

                                <div>
                                    <input type="email" name="email" value="{{ old('email') }}" required
                                           class="w-full px-6 py-4 bg-white/60 border-2 border-[#e2e8f0] rounded-2xl focus:border-primary focus:outline-none transition-all placeholder-[#94a3b8] text-[16px]"
                                           placeholder="you@business.com">
                                    @error('email')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <input type="password" name="password" required autocomplete="new-password"
                                           class="px-6 py-4 bg-white/60 border-2 border-[#e2e8f0] rounded-2xl focus:border-primary focus:outline-none transition-all"
                                           placeholder="Password">
                                    <input type="password" name="password_confirmation" required
                                           class="px-6 py-4 bg-white/60 border-2 border-[#e2e8f0] rounded-2xl focus:border-primary focus:outline-none transition-all"
                                           placeholder="Confirm Password">
                                </div>

                                <button type="submit" class="et-btn w-full !py-5 !text-lg !font-bold bg-gradient-to-r from-primary to-et3primary hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                                    <span>Create Free Account →</span>
                                    <div class="icon">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </div>
                                </button>

                                <p class="text-center text-xs text-[#94a3b8] mt-6 leading-relaxed">
                                    By signing up, you agree to our
                                    <a href="#" class="text-primary font-medium hover:underline">Terms of Service</a> and
                                    <a href="#" class="text-primary font-medium hover:underline">Privacy Policy</a>
                                </p>

                                <p class="text-center mt-8 text-[#2d2d2d]/70">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="font-bold text-primary hover:underline">Sign In</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
