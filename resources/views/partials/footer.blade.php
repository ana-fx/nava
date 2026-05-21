<footer class="bg-ink pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 pb-12 mb-12 border-b border-white/8">
            <!-- Brand -->
            <div>
                <a href="/" class="block mb-6">
                    <img src="/logo-long-white.png" alt="Nava" class="h-7 opacity-85 hover:opacity-100 transition-opacity">
                </a>
                <p class="font-serif text-2xl italic font-normal text-white/80 leading-snug mb-6 max-w-xs">
                    Building software<br>that solves problems.
                </p>
                <p class="font-sans text-sm text-white/35 leading-relaxed max-w-sm">
                    An IT consultancy based in Ponorogo, Indonesia. We design, build, and maintain software for businesses that need results.
                </p>
            </div>

            <!-- Links -->
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <p class="font-sans text-xs text-white/25 uppercase tracking-[0.2em] mb-5">Pages</p>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="font-sans text-sm text-white/45 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="font-sans text-sm text-white/45 hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('services') }}" class="font-sans text-sm text-white/45 hover:text-white transition-colors">Services</a></li>
                        <li><a href="{{ route('portfolio') }}" class="font-sans text-sm text-white/45 hover:text-white transition-colors">Works</a></li>
                        <li><a href="{{ route('contact.index') }}" class="font-sans text-sm text-white/45 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <p class="font-sans text-xs text-white/25 uppercase tracking-[0.2em] mb-5">Contact</p>
                    <ul class="space-y-3">
                        <li>
                            <a href="mailto:navadigital931@gmail.com" class="font-sans text-sm text-white/45 hover:text-white transition-colors break-all">navadigital931@gmail.com</a>
                        </li>
                        <li>
                            <a href="tel:+6287883611530" class="font-sans text-sm text-white/45 hover:text-white transition-colors">+62 878-8361-1530</a>
                        </li>
                        <li>
                            <span class="font-sans text-sm text-white/35">Ponorogo, Jawa Timur</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="font-sans text-xs text-white/25">&copy; {{ date('Y') }} Nava. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="{{ route('terms') }}" class="font-sans text-xs text-white/25 hover:text-white/60 transition-colors">Terms</a>
                <a href="{{ route('privacy') }}" class="font-sans text-xs text-white/25 hover:text-white/60 transition-colors">Privacy</a>
            </div>
        </div>

    </div>
</footer>
