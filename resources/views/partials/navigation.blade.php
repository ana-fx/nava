<!-- Navigation -->
<header class="fixed top-6 inset-x-0 z-50 flex justify-center px-4">
    <nav class="bg-artisan-black text-white rounded-full px-6 py-3 flex items-center justify-between w-full max-w-7xl shadow-2xl ring-1 ring-white/10 backdrop-blur-md bg-opacity-95">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-2 group shrink-0">
            <img src="/logo-long-white.png" alt="Nava" class="h-8 transition-opacity hover:opacity-90">
        </a>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center gap-8">
            <a href="{{ route('home') }}" class="text-sm font-medium text-white/80 hover:text-white transition-colors">Home</a>
            <a href="{{ route('about') }}" class="text-sm font-medium text-white/80 hover:text-white transition-colors">About</a>

            <!-- Services Dropdown -->
            <div class="relative group">
                <a href="{{ route('services') }}" class="text-sm font-medium text-white/80 hover:text-white transition-colors flex items-center gap-1">
                    Services
                    <i class="fi fi-rr-angle-small-down pt-1 transition-transform group-hover:rotate-180"></i>
                </a>

                <!-- Dropdown Menu -->
                <div class="absolute left-1/2 -translate-x-1/2 top-full pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top w-64">
                    <div class="bg-white/95 backdrop-blur-xl rounded-xl shadow-xl ring-1 ring-black/5 overflow-hidden p-1">
                        <a href="{{ route('services') }}#bespoke-engineering" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 rounded-lg transition-colors">
                            <span class="font-semibold block">Bespoke Engineering</span>
                            <span class="text-xs text-gray-500 font-normal">Custom software solutions</span>
                        </a>
                        <a href="{{ route('services') }}#strategic-architecture" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 rounded-lg transition-colors">
                            <span class="font-semibold block">Strategic Architecture</span>
                            <span class="text-xs text-gray-500 font-normal">Scalable system design</span>
                        </a>
                        <a href="{{ route('services') }}#performance-curation" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 rounded-lg transition-colors">
                            <span class="font-semibold block">Performance Curation</span>
                            <span class="text-xs text-gray-500 font-normal">Optimization & maintenance</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="{{ route('portfolio') }}" class="text-sm font-medium text-white/80 hover:text-white transition-colors">Works</a>
            <a href="{{ route('contact.index') }}" class="text-sm font-medium text-white/80 hover:text-white transition-colors">Contact</a>
        </div>

        <!-- CTA -->
        <div class="flex items-center gap-4 shrink-0">
            <a
                href="{{ route('contact.index') }}"
                class="px-5 py-2 text-sm bg-white text-black hover:bg-gray-200 transition-all duration-300 font-semibold rounded-full shadow-lg hover:scale-105 active:scale-95"
            >
                Contact Us
            </a>
        </div>
    </nav>
</header>
