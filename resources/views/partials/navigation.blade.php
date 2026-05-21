<!-- Navigation -->
<header class="fixed top-0 inset-x-0 z-50 h-16 bg-ink flex items-center">
    <div class="w-full max-w-7xl mx-auto px-6 lg:px-10 flex items-center justify-between">

        <!-- Logo -->
        <a href="/" class="shrink-0">
            <img src="/logo-long-white.png" alt="Nava" class="h-6 opacity-90 hover:opacity-100 transition-opacity">
        </a>

        <!-- Desktop Links -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="{{ route('home') }}"
               class="font-sans text-sm text-white/55 hover:text-white transition-colors duration-150">Home</a>
            <a href="{{ route('about') }}"
               class="font-sans text-sm text-white/55 hover:text-white transition-colors duration-150">About</a>

            <!-- Services Dropdown -->
            <div class="relative group">
                <a href="{{ route('services') }}"
                   class="font-sans text-sm text-white/55 hover:text-white transition-colors duration-150 flex items-center gap-1">
                    Services
                    <i class="fi fi-rr-angle-small-down pt-0.5 text-xs transition-transform duration-200 group-hover:rotate-180"></i>
                </a>
                <div class="absolute left-0 top-full pt-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 w-56">
                    <div class="bg-ink border border-white/10 p-1">
                        <a href="{{ route('services') }}#bespoke-engineering"
                           class="block px-4 py-3 font-sans text-sm text-white/60 hover:text-white hover:bg-white/5 transition-colors">
                            <span class="font-medium text-white/85 block text-xs tracking-wide mb-0.5">Bespoke Engineering</span>
                            <span class="text-xs text-white/35">Custom software solutions</span>
                        </a>
                        <a href="{{ route('services') }}#strategic-architecture"
                           class="block px-4 py-3 font-sans text-sm text-white/60 hover:text-white hover:bg-white/5 transition-colors">
                            <span class="font-medium text-white/85 block text-xs tracking-wide mb-0.5">Strategic Architecture</span>
                            <span class="text-xs text-white/35">Scalable system design</span>
                        </a>
                        <a href="{{ route('services') }}#performance-curation"
                           class="block px-4 py-3 font-sans text-sm text-white/60 hover:text-white hover:bg-white/5 transition-colors">
                            <span class="font-medium text-white/85 block text-xs tracking-wide mb-0.5">Performance Curation</span>
                            <span class="text-xs text-white/35">Optimization & maintenance</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="{{ route('portfolio') }}"
               class="font-sans text-sm text-white/55 hover:text-white transition-colors duration-150">Works</a>
            <a href="{{ route('contact.index') }}"
               class="font-sans text-sm text-white/55 hover:text-white transition-colors duration-150">Contact</a>
        </nav>

        <!-- Right: CTA + Mobile Toggle -->
        <div class="flex items-center gap-4">
            <a href="{{ route('contact.index') }}"
               class="hidden sm:inline-flex items-center px-4 py-1.5 border border-white/20 hover:border-white/60 font-sans text-xs text-white/60 hover:text-white transition-colors duration-150">
                Start a project
            </a>

            <button id="mobile-menu-toggle"
                    class="md:hidden flex items-center justify-center w-8 h-8 text-white/60 hover:text-white transition-colors">
                <i class="fi fi-rr-menu-burger text-base"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu"
     class="fixed inset-0 z-[60] bg-ink transform translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col">

    <!-- Mobile Header -->
    <div class="h-16 flex items-center justify-between px-6 border-b border-white/8">
        <img src="/logo-long-white.png" alt="Nava" class="h-6 opacity-90">
        <button id="mobile-menu-close" class="flex items-center justify-center w-8 h-8 text-white/50 hover:text-white transition-colors">
            <i class="fi fi-rr-cross text-base"></i>
        </button>
    </div>

    <!-- Mobile Links -->
    <div class="flex-1 overflow-y-auto px-6 py-10 flex flex-col gap-1">
        <a href="{{ route('home') }}"
           class="font-serif text-3xl italic font-normal text-white/80 hover:text-white transition-colors py-3 border-b border-white/8">Home</a>
        <a href="{{ route('about') }}"
           class="font-serif text-3xl italic font-normal text-white/80 hover:text-white transition-colors py-3 border-b border-white/8">About</a>
        <a href="{{ route('services') }}"
           class="font-serif text-3xl italic font-normal text-white/80 hover:text-white transition-colors py-3 border-b border-white/8">Services</a>
        <a href="{{ route('portfolio') }}"
           class="font-serif text-3xl italic font-normal text-white/80 hover:text-white transition-colors py-3 border-b border-white/8">Works</a>
        <a href="{{ route('contact.index') }}"
           class="font-serif text-3xl italic font-normal text-white/80 hover:text-white transition-colors py-3 border-b border-white/8">Contact</a>
    </div>

    <!-- Mobile Footer -->
    <div class="px-6 py-6 border-t border-white/8">
        <a href="{{ route('contact.index') }}"
           class="inline-flex items-center justify-center w-full py-3.5 border border-white/20 font-sans text-sm text-white/60 hover:border-white/50 hover:text-white transition-colors">
            Start a project →
        </a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const closeBtn = document.getElementById('mobile-menu-close');
        const menu = document.getElementById('mobile-menu');

        function openMenu() {
            menu.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            menu.classList.add('translate-x-full');
            document.body.style.overflow = '';
        }

        toggleBtn && toggleBtn.addEventListener('click', openMenu);
        closeBtn && closeBtn.addEventListener('click', closeMenu);
        menu.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
    });
</script>
