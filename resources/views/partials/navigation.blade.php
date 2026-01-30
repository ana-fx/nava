<!-- Navigation -->
<header class="fixed top-3 sm:top-6 inset-x-0 z-50 flex justify-center px-2 sm:px-4">
    <nav
        class="bg-artisan-black text-white rounded-full px-3 sm:px-6 py-2.5 sm:py-3 flex items-center justify-between w-full max-w-7xl shadow-2xl ring-1 ring-white/10 backdrop-blur-md bg-opacity-95">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-2 group shrink-0">
            <img src="/logo-long-white.png" alt="Nava" class="h-6 sm:h-8 transition-opacity hover:opacity-90">
        </a>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center gap-8">
            <a href="{{ route('home') }}"
                class="text-sm font-medium text-white/80 hover:text-white transition-colors">Home</a>
            <a href="{{ route('about') }}"
                class="text-sm font-medium text-white/80 hover:text-white transition-colors">About</a>

            <!-- Services Dropdown -->
            <div class="relative group">
                <a href="{{ route('services') }}"
                    class="text-sm font-medium text-white/80 hover:text-white transition-colors flex items-center gap-1">
                    Services
                    <i class="fi fi-rr-angle-small-down pt-1 transition-transform group-hover:rotate-180"></i>
                </a>

                <!-- Dropdown Menu -->
                <div
                    class="absolute left-1/2 -translate-x-1/2 top-full pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top w-64">
                    <div
                        class="bg-white/95 backdrop-blur-xl rounded-xl shadow-xl ring-1 ring-black/5 overflow-hidden p-1">
                        <a href="{{ route('services') }}#bespoke-engineering"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 rounded-lg transition-colors">
                            <span class="font-semibold block">Bespoke Engineering</span>
                            <span class="text-xs text-gray-500 font-normal">Custom software solutions</span>
                        </a>
                        <a href="{{ route('services') }}#strategic-architecture"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 rounded-lg transition-colors">
                            <span class="font-semibold block">Strategic Architecture</span>
                            <span class="text-xs text-gray-500 font-normal">Scalable system design</span>
                        </a>
                        <a href="{{ route('services') }}#performance-curation"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 rounded-lg transition-colors">
                            <span class="font-semibold block">Performance Curation</span>
                            <span class="text-xs text-gray-500 font-normal">Optimization & maintenance</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="{{ route('portfolio') }}"
                class="text-sm font-medium text-white/80 hover:text-white transition-colors">Works</a>
            <a href="{{ route('contact.index') }}"
                class="text-sm font-medium text-white/80 hover:text-white transition-colors">Contact</a>
        </div>

        <!-- CTA & Mobile Toggle -->
        <div class="flex items-center gap-2 sm:gap-4 shrink-0">
            <a href="{{ route('contact.index') }}"
                class="hidden sm:inline-flex px-5 py-2 text-sm bg-white text-black hover:bg-gray-200 transition-all duration-300 font-semibold rounded-full shadow-lg hover:scale-105 active:scale-95">
                Contact Us
            </a>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle"
                class="md:hidden w-10 h-10 flex items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors focus:outline-none ring-1 ring-white/5">
                <i class="fi fi-rr-menu-burger text-xl"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu"
        class="fixed inset-0 z-[60] bg-zinc-950/95 backdrop-blur-xl transform translate-x-full transition-transform duration-300 md:hidden flex flex-col">
        <!-- Header -->
        <div class="flex items-center justify-between px-6 py-6 border-b border-white/10">
            <a href="/" class="flex items-center gap-2">
                <img src="/logo-long-white.png" alt="Nava" class="h-8">
            </a>
            <button id="mobile-menu-close"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors focus:outline-none ring-1 ring-white/5">
                <i class="fi fi-rr-cross text-xl"></i>
            </button>
        </div>

        <!-- Links -->
        <div class="flex-1 overflow-y-auto py-8 px-6 space-y-2">
            <a href="{{ route('home') }}"
                class="block text-2xl font-bold text-white hover:text-purple-400 transition-colors py-2 border-b border-white/5">Home</a>
            <a href="{{ route('about') }}"
                class="block text-2xl font-bold text-white hover:text-purple-400 transition-colors py-2 border-b border-white/5">About</a>

            <!-- Services Submenu -->
            <div class="py-2 border-b border-white/5">
                <span class="block text-2xl font-bold text-white/50 mb-4">Services</span>
                <div class="pl-4 space-y-4">
                    <a href="{{ route('services') }}"
                        class="block text-lg text-white hover:text-purple-400 transition-colors">All Services</a>
                    <a href="{{ route('services') }}#bespoke-engineering"
                        class="block text-lg text-white/70 hover:text-white transition-colors">Bespoke Engineering</a>
                    <a href="{{ route('services') }}#strategic-architecture"
                        class="block text-lg text-white/70 hover:text-white transition-colors">Strategic
                        Architecture</a>
                    <a href="{{ route('services') }}#performance-curation"
                        class="block text-lg text-white/70 hover:text-white transition-colors">Performance Curation</a>
                </div>
            </div>

            <a href="{{ route('portfolio') }}"
                class="block text-2xl font-bold text-white hover:text-purple-400 transition-colors py-2 border-b border-white/5">Works</a>
            <a href="{{ route('contact.index') }}"
                class="block text-2xl font-bold text-white hover:text-purple-400 transition-colors py-2 border-b border-white/5">Contact</a>
        </div>

        <!-- Footer -->
        <div class="p-6 border-t border-white/10">
            <p class="text-sm text-gray-400 text-center">&copy; {{ date('Y') }} Nava. All rights reserved.</p>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const closeBtn = document.getElementById('mobile-menu-close');
        const menu = document.getElementById('mobile-menu');
        const body = document.body;

        function openMenu() {
            menu.classList.remove('translate-x-full');
            body.style.overflow = 'hidden';
        }

        function closeMenu() {
            menu.classList.add('translate-x-full');
            body.style.overflow = '';
        }

        if (toggleBtn) toggleBtn.addEventListener('click', openMenu);
        if (closeBtn) closeBtn.addEventListener('click', closeMenu);

        // Close menu when clicking a link
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    });
</script>