<!-- Footer -->
<footer class="relative mt-0 pt-20 pb-10 bg-dark-bg overflow-hidden">
    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] pointer-events-none"></div>

    <div class="container mx-auto px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 mb-16 border-b border-white/5 pb-16">
            <!-- Brand Column -->
            <div class="flex flex-col items-start" data-aos="fade-right">
                <a href="/" class="block mb-8">
                    <img src="/logo-long-white.png" alt="Nava" class="h-10 lg:h-12 opacity-90 transition-opacity hover:opacity-100">
                </a>
                <h3 class="text-2xl lg:text-3xl font-bold text-artisan-white tracking-tight mb-4">
                    Crafting Digital <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-200 to-blue-200">Excellence.</span>
                </h3>
                <p class="text-gray-400 leading-relaxed max-w-md mb-8">
                    We blend technical artistry with strategic precision to build software that defines the future.
                </p>

            </div>

            <!-- Links Grid -->
            <div class="grid grid-cols-2 gap-8 lg:gap-12" data-aos="fade-left">
                <!-- Navigation -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-artisan-gray mb-6">Menu</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('home') }}" class="text-artisan-gray-dark hover:text-white transition-colors flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-white/20 group-hover:bg-purple-400 transition-colors"></span>Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-artisan-gray-dark hover:text-white transition-colors flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-white/20 group-hover:bg-purple-400 transition-colors"></span>About</a></li>
                        <li><a href="{{ route('services') }}" class="text-artisan-gray-dark hover:text-white transition-colors flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-white/20 group-hover:bg-purple-400 transition-colors"></span>Services</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-artisan-gray-dark hover:text-white transition-colors flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-white/20 group-hover:bg-purple-400 transition-colors"></span>Works</a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-artisan-gray-dark hover:text-white transition-colors flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-white/20 group-hover:bg-purple-400 transition-colors"></span>Contact</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-artisan-gray mb-6">Connect</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-artisan-gray-dark">
                            <i class="fi fi-rr-envelope mt-1 text-white/40"></i>
                            <a href="mailto:navadigital931@gmail.com" class="hover:text-white transition-colors">navadigital931@gmail.com</a>
                        </li>
                        <li class="flex items-start gap-3 text-artisan-gray-dark">
                            <i class="fi fi-rr-phone-call mt-1 text-white/40"></i>
                            <a href="tel:+6287883611530" class="hover:text-white transition-colors">+62 878-8361-1530</a>
                        </li>
                        <li class="flex items-start gap-3 text-artisan-gray-dark">
                            <i class="fi fi-rr-marker mt-1 text-white/40"></i>
                            <span class="hover:text-white transition-colors">Ponorogo, Jawa Timur</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 text-sm text-[#505050]">
            <p>&copy; {{ date('Y') }} Nava Digital Atelier. All Rights Reserved.</p>
            <div class="flex gap-8">
                <a href="{{ route('terms') }}" class="hover:text-gray-300 transition-colors">Terms</a>
                <a href="{{ route('privacy') }}" class="hover:text-gray-300 transition-colors">Privacy</a>
            </div>
        </div>
    </div>
</footer>
