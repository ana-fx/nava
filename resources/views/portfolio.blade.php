<x-layouts.app
    title="Portfolio - Nava | Selected Masterpieces"
    description="Explore our portfolio of curated digital experiences. See how we blend art and code to create bespoke solutions."
    keywords="nava portfolio, web development portfolio, it case studies, software projects, nava works"
>
    <!-- Hero Section -->
    <section class="relative pt-32 lg:pt-40 pb-20 overflow-hidden min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-gradient-start via-gradient-mid to-gradient-end dark:from-dark-bg dark:to-zinc-950">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] pointer-events-none"></div>

        <div class="container mx-auto px-6 lg:px-8 max-w-7xl relative z-10">
             <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 mb-8 bg-white/50 backdrop-blur-md border border-gray-200 rounded-full shadow-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500 animate-pulse"></span>
                    <span class="text-xs font-semibold text-gray-600 tracking-wide">Featured Works</span>
                </div>

                <h1 class="text-5xl lg:text-7xl font-bold mb-6 text-artisan-black dark:text-artisan-white leading-[1.1] tracking-tight">
                    Curated <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-pink-600">Masterpieces.</span>
                </h1>

                <p class="text-lg lg:text-xl text-artisan-gray dark:text-gray-400 mb-10 leading-relaxed max-w-2xl mx-auto">
                    A selection of our finest digital craftsmanship. Each project is a testament to our dedication to quality, performance, and aesthetic beauty.
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="relative py-20 lg:py-32 bg-artisan-bg-light dark:bg-dark-bg">
        <div class="container mx-auto max-w-7xl px-6 lg:px-8 relative z-10">

            <div class="grid md:grid-cols-2 gap-12 lg:gap-16">

                <!-- Project 1 -->
                <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-[400px] lg:h-[500px] overflow-hidden rounded-3xl shadow-2xl mb-8">
                        <img src="/images/porto/pandalungan-festival.webp" alt="Pandalungan Festival" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors duration-500"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                             <a href="https://pandalungan.online/" target="_blank" class="inline-flex items-center justify-center w-12 h-12 bg-white/90 backdrop-blur-md rounded-full text-artisan-black hover:bg-white hover:scale-110 transition-all">
                                <i class="fi fi-rr-arrow-up-right text-xl"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 mb-3">
                         <span class="px-3 py-1 text-xs font-semibold uppercase tracking-wider bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300 rounded-full">Event Platform</span>
                         <span class="text-sm text-artisan-gray dark:text-artisan-gray-dark">2024</span>
                    </div>
                    <h3 class="text-2xl font-bold text-artisan-black dark:text-artisan-white mb-3 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                        Pandalungan Festival
                    </h3>
                    <p class="text-artisan-gray dark:text-artisan-gray-dark leading-relaxed">
                        A vibrant, immersive digital platform for Indonesia's cultural Pandalungan Festival. Features include live scheduling, interactive maps, and gallery showcases.
                    </p>
                </div>

                <!-- Project 2 -->
                <div class="group relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-[400px] lg:h-[500px] overflow-hidden rounded-3xl shadow-2xl mb-8">
                        <img src="/images/porto/hakordia-fun-night-run.webp" alt="Hakordia Fun Run" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                         <div class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors duration-500"></div>
                          <div class="absolute bottom-6 left-6 right-6">
                             <a href="https://www.hakordia.online/" target="_blank" class="inline-flex items-center justify-center w-12 h-12 bg-white/90 backdrop-blur-md rounded-full text-artisan-black hover:bg-white hover:scale-110 transition-all">
                                <i class="fi fi-rr-arrow-up-right text-xl"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 mb-3">
                         <span class="px-3 py-1 text-xs font-semibold uppercase tracking-wider bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300 rounded-full">Event Management</span>
                         <span class="text-sm text-artisan-gray dark:text-artisan-gray-dark">2024</span>
                    </div>
                    <h3 class="text-2xl font-bold text-artisan-black dark:text-artisan-white mb-3 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                        Hakordia Night Run
                    </h3>
                    <p class="text-artisan-gray dark:text-artisan-gray-dark leading-relaxed">
                        A robust registration and event management system for a large-scale community run. Integrated checking, QR code ticketing, and real-time participant tracking.
                    </p>
                </div>

                <!-- Project 3: Anntix -->
                <div class="group relative" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-[400px] lg:h-[500px] overflow-hidden rounded-3xl shadow-2xl mb-8">
                        <img src="/images/porto/antntix.id.png" alt="Anntix Ticketing Platform" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                         <div class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors duration-500"></div>
                          <div class="absolute bottom-6 left-6 right-6">
                             <a href="https://www.anntix.id" target="_blank" class="inline-flex items-center justify-center w-12 h-12 bg-white/90 backdrop-blur-md rounded-full text-artisan-black hover:bg-white hover:scale-110 transition-all">
                                <i class="fi fi-rr-arrow-up-right text-xl"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 mb-3">
                         <span class="px-3 py-1 text-xs font-semibold uppercase tracking-wider bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 rounded-full">Ticketing Platform</span>
                         <span class="text-sm text-artisan-gray dark:text-artisan-gray-dark">2026</span>
                    </div>
                    <h3 class="text-2xl font-bold text-artisan-black dark:text-artisan-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                        Anntix
                    </h3>
                    <p class="text-artisan-gray dark:text-artisan-gray-dark leading-relaxed">
                        Indonesia's trusted event ticketing platform. A seamless ecosystem for discovering and purchasing tickets for concerts, festivals, seminars, and workshops.
                    </p>
                </div>

                <!-- Placeholder for future projects (Using generic tech imagery for now to fill the grid if needed, or keeping it to 2 for exclusivity) -->
                <!-- We will stick to the 2 highlighted ones for "Selected Masterpieces" feel, or add a 'Coming Soon' block -->
                 <div class="group relative flex flex-col justify-center items-center h-[400px] rounded-3xl border-2 border-dashed border-gray-200 dark:border-white/10 p-8 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-gray-50 dark:bg-white/5 rounded-full flex items-center justify-center mb-6">
                        <i class="fi fi-rr-briefcase text-2xl text-gray-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-artisan-gray dark:text-artisan-gray-dark mb-2">More Works in Progress</h3>
                    <p class="text-gray-400 max-w-sm">We are constantly crafting new solutions. Stay tuned for our upcoming case studies.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-artisan-black dark:bg-zinc-950 text-center relative overflow-hidden">
         <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 30px 30px;"></div>
         <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">Have a Vision?</h2>
            <p class="text-gray-400 mb-10 max-w-2xl mx-auto text-lg">Let's turn your idea into our next masterpiece.</p>
            <a href="{{ route('contact.index') }}" class="inline-flex items-center px-8 py-4 bg-white text-artisan-black rounded-full font-bold hover:bg-gray-100 transition-colors shadow-lg hover:scale-105 transform duration-300">
                Start a Conversation <i class="fi fi-rr-arrow-right ml-2"></i>
            </a>
         </div>
    </section>

</x-layouts.app>
