<x-layouts.app title="403 - Forbidden | Nava"
    description="You do not have permission to access this page.">
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gradient-start via-gradient-mid to-gradient-end dark:from-dark-bg dark:to-zinc-950">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none"></div>

        <div class="container mx-auto px-6 lg:px-8 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center">

                <!-- Status Pill -->
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 bg-white/40 dark:bg-white/5 backdrop-blur-md border border-white/50 dark:border-white/10 rounded-full shadow-sm" data-aos="fade-down">
                    <span class="w-2 h-2 rounded-full bg-yellow-500 animate-pulse"></span>
                    <span class="text-sm font-semibold text-artisan-gray dark:text-artisan-gray-dark tracking-wide uppercase">Error 403</span>
                </div>

                <!-- Main Content -->
                <div class="relative py-12" data-aos="zoom-out" data-aos-delay="100">
                    <h1 class="text-[10rem] sm:text-[14rem] lg:text-[16rem] font-bold leading-none tracking-tighter text-white/50 dark:text-white/5 select-none absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 bg-clip-text text-transparent bg-gradient-to-b from-black/5 to-transparent dark:from-white/5">
                        403
                    </h1>

                    <h2 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-artisan-black dark:text-artisan-white tracking-tight mb-6">
                        Restricted <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-orange-600">Teritory.</span>
                    </h2>

                    <p class="text-lg lg:text-xl text-artisan-gray dark:text-artisan-gray-dark mb-10 leading-relaxed max-w-xl mx-auto">
                        You don't have permission to access this area. It might be reserved for artisans only.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
                         <a href="{{ route('home') }}" class="group relative px-8 py-4 bg-artisan-black dark:bg-artisan-white text-white dark:text-artisan-black rounded-full font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                            <span class="flex items-center gap-2">
                                <i class="fi fi-rr-home"></i>
                                Back to Homepage
                            </span>
                        </a>
                        <a href="{{ route('contact.index') }}" class="group relative px-8 py-4 bg-white/80 dark:bg-white/10 text-artisan-black dark:text-artisan-white backdrop-blur-sm border border-white/50 dark:border-white/10 rounded-full font-bold shadow-sm hover:bg-white dark:hover:bg-white/20 transition-all duration-300">
                            <span class="flex items-center gap-2">
                                <i class="fi fi-rr-envelope"></i>
                                Request Access
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
