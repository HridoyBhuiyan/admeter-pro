<header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" alt="AdMeter Pro" class="h-10 w-10">
                    <span class="text-2xl font-bold text-indigo-600">AdMeter<span class="text-gray-900">Pro</span></span>
                </a>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="text-gray-700 hover:text-indigo-600 font-medium transition {{ request()->is('/') ? 'text-indigo-600' : '' }}">Home</a>
                <a href="/features" class="text-gray-600 hover:text-indigo-600 font-medium transition">Features</a>
                <a href="/pricing" class="text-gray-600 hover:text-indigo-600 font-medium transition">Pricing</a>
                <a href="/contact" class="text-gray-600 hover:text-indigo-600 font-medium transition">Contact</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Login</a>
                <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition">
                    Get Started Free
                </a>
            </div>
        </div>
    </div>
</header>
