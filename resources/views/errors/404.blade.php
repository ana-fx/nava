<x-layouts.app title="404 - Page Not Found | Nava"
    description="The page you are looking for does not exist. Please return to the homepage or contact us if you need assistance.">
    <!-- 404 Hero Section -->
    <section
        class="relative min-h-[calc(100vh-73px)] flex items-center justify-center overflow-hidden bg-[#FDFDFC] dark:bg-[#0a0a0a] -mt-[73px] pt-[73px]">
        <!-- Decorative Background Elements (Reference Home CTA) -->
        <div class="absolute inset-0 opacity-10 pointer-events-none"
            style="background-image: radial-gradient(circle, #1b1b18 1px, transparent 1px); background-size: 30px 30px;">
        </div>

        <div class="container mx-auto px-6 lg:px-8 max-w-7xl relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <!-- Status Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 bg-[#1b1b18]/5 dark:bg-white/5 backdrop-blur-sm border border-[#1b1b18]/10 dark:border-white/10"
                    data-aos="fade-up" data-aos-delay="50">
                    <span class="w-2 h-2 bg-red-500 animate-pulse"></span>
                    <span class="text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">Error 404</span>
                </div>

                <!-- Main Content -->
                <div class="relative mb-12" data-aos="zoom-out" data-aos-delay="100">
                    <h1
                        class="text-[120px] sm:text-[180px] lg:text-[240px] font-black leading-none tracking-tighter text-[#1b1b18]/5 dark:text-white/5 select-none">
                        404
                    </h1>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h2
                            class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] tracking-tight">
                            Lost in Space?
                        </h2>
                    </div>
                </div>

                <p class="text-lg lg:text-xl text-[#706f6c] dark:text-[#A1A09A] mb-12 leading-relaxed max-w-xl mx-auto"
                    data-aos="fade-up" data-aos-delay="200">
                    The page you're looking for disappeared into the digital void. Let's get you back on track.
                </p>

                <!-- Action Button -->
                <div data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ url('/') }}"
                        class="group relative inline-flex px-8 py-4 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] hover:bg-black dark:hover:bg-white transition-all duration-300 text-center text-sm font-bold shadow-lg hover:shadow-2xl hover:scale-105 border-2 border-transparent hover:border-[#1b1b18]/20 dark:hover:border-white/20 focus:outline-none focus:ring-4 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20 active:scale-95">
                        <span class="relative z-10 flex items-center justify-center gap-3 uppercase tracking-widest">
                            <i class="fi fi-rr-home text-base"></i>
                            Back to Homepage
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>