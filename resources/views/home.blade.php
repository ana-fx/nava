<x-layouts.app
    title="Nava - Technology Solutions & Professional Services | Software Development & IT Consulting"
    description="Nava provides cutting-edge technology solutions and professional services including software development, technology consulting, and support services. Located in Ponorogo, Jawa Timur, Indonesia."
    keywords="technology solutions, software development, IT consulting, web development, digital transformation, technology services, Nava, Ponorogo, Indonesia"
>
    <!-- Hero Section -->
    <section class="relative pt-32 lg:pt-40 pb-12 overflow-hidden min-h-screen flex flex-col justify-center bg-gradient-to-b from-gradient-start via-gradient-mid to-gradient-end dark:from-dark-bg dark:to-zinc-950">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] pointer-events-none"></div>

        <div class="container mx-auto px-6 lg:px-8 max-w-7xl relative z-10">
            <!-- Central Content -->
            <div class="max-w-4xl mx-auto text-center mb-16 lg:mb-24">
                <!-- Status Pill -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 mb-8 bg-white/50 backdrop-blur-md border border-gray-200 rounded-full shadow-sm hover:scale-105 transition-transform cursor-pointer" data-aos="fade-down" data-aos-delay="50">
                    <span class="w-1.5 h-1.5 rounded-full bg-purple-500 animate-pulse"></span>
                    <span class="text-xs font-semibold text-gray-600 tracking-wide">2 Commissions Available</span>
                    <span class="text-xs text-gray-400">|</span>
                    <span class="text-xs font-medium text-gray-500 group-hover:text-gray-800 transition-colors">Secure your spot <span class="ml-1">→</span></span>
                </div>

                <!-- Headline -->
                <h1 class="text-5xl lg:text-7xl font-bold mb-6 text-artisan-black dark:text-artisan-white leading-[1.1] tracking-tight" data-aos="fade-up" data-aos-delay="100">
                    We Don't Just Write Code. <br class="hidden sm:block" />
                    We Craft Digital Art.
                </h1>

                <!-- Subheadline -->
                <p class="text-lg lg:text-xl text-gray-600 dark:text-gray-400 mb-10 leading-relaxed max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    An artisan IT consultancy blending technical excellence with creative soul. We build bespoke software solutions that stand the test of time.
                </p>

                <!-- CTA -->
                <div data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('contact.index') }}" class="inline-flex items-center px-8 py-4 bg-artisan-black dark:bg-artisan-white-soft text-white dark:text-artisan-black-soft text-sm font-semibold rounded-full shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        Start Your Masterpiece
                    </a>
                </div>
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 lg:gap-6 mb-20" data-aos="fade-up" data-aos-delay="400">
                <!-- Image 1: Digital Art / Abstract -->
                <div class="relative h-48 lg:h-64 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Abstract 3D Digital Art" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <!-- Image 2: The Craft / Code -->
                <div class="relative h-48 lg:h-64 rounded-2xl overflow-hidden mt-8 md:mt-12 group">
                    <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Clean code craftsmanship" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <!-- Image 3: The Studio / Workspace -->
                <div class="relative h-48 lg:h-64 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Artisan workspace" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <!-- Image 4: The Vision / Fluid Art -->
                <div class="relative h-48 lg:h-64 rounded-2xl overflow-hidden mt-8 md:mt-12 group">
                    <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Fluid digital creativity" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
            </div>

            <!-- Tech Stack Static Grid -->
            <div class="pt-10" data-aos="fade-up" data-aos-delay="500">
                <p class="text-center text-sm font-medium text-gray-400 mb-8 uppercase tracking-widest">Powered By</p>

                <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-12">
                    <!-- Tech Item 1: Laravel -->
                    <div class="group flex flex-col items-center gap-2 cursor-pointer transition-all duration-300 transform hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/laravel.svg" alt="Laravel" class="w-8 h-8 lg:w-10 lg:h-10 opacity-40 group-hover:opacity-100 transition-opacity duration-300 grayscale group-hover:grayscale-0" />
                        <span class="text-xs font-medium text-gray-400 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">Laravel</span>
                    </div>

                    <!-- Tech Item 2: Vue.js -->
                    <div class="group flex flex-col items-center gap-2 cursor-pointer transition-all duration-300 transform hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/vuedotjs.svg" alt="Vue.js" class="w-8 h-8 lg:w-10 lg:h-10 opacity-40 group-hover:opacity-100 transition-opacity duration-300 grayscale group-hover:grayscale-0" />
                        <span class="text-xs font-medium text-gray-400 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">Vue.js</span>
                    </div>

                    <!-- Tech Item 3: React -->
                    <div class="group flex flex-col items-center gap-2 cursor-pointer transition-all duration-300 transform hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/react.svg" alt="React" class="w-8 h-8 lg:w-10 lg:h-10 opacity-40 group-hover:opacity-100 transition-opacity duration-300 grayscale group-hover:grayscale-0" />
                        <span class="text-xs font-medium text-gray-400 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">React</span>
                    </div>

                    <!-- Tech Item 4: Node.js -->
                    <div class="group flex flex-col items-center gap-2 cursor-pointer transition-all duration-300 transform hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/nodedotjs.svg" alt="Node.js" class="w-8 h-8 lg:w-10 lg:h-10 opacity-40 group-hover:opacity-100 transition-opacity duration-300 grayscale group-hover:grayscale-0" />
                        <span class="text-xs font-medium text-gray-400 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">Node.js</span>
                    </div>

                    <!-- Tech Item 5: Python -->
                    <div class="group flex flex-col items-center gap-2 cursor-pointer transition-all duration-300 transform hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/python.svg" alt="Python" class="w-8 h-8 lg:w-10 lg:h-10 opacity-40 group-hover:opacity-100 transition-opacity duration-300 grayscale group-hover:grayscale-0" />
                        <span class="text-xs font-medium text-gray-400 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">Python</span>
                    </div>

                    <!-- Tech Item 6: Docker -->
                    <div class="group flex flex-col items-center gap-2 cursor-pointer transition-all duration-300 transform hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/docker.svg" alt="Docker" class="w-8 h-8 lg:w-10 lg:h-10 opacity-40 group-hover:opacity-100 transition-opacity duration-300 grayscale group-hover:grayscale-0" />
                        <span class="text-xs font-medium text-gray-400 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">Docker</span>
                    </div>

                    <!-- Tech Item 7: AWS -->
                    <div class="group flex flex-col items-center gap-2 cursor-pointer transition-all duration-300 transform hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/amazonaws.svg" alt="AWS" class="w-8 h-8 lg:w-10 lg:h-10 opacity-40 group-hover:opacity-100 transition-opacity duration-300 grayscale group-hover:grayscale-0" />
                        <span class="text-xs font-medium text-gray-400 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">AWS</span>
                    </div>

                    <!-- Tech Item 8: PostgreSQL -->
                    <div class="group flex flex-col items-center gap-2 cursor-pointer transition-all duration-300 transform hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/postgresql.svg" alt="PostgreSQL" class="w-8 h-8 lg:w-10 lg:h-10 opacity-40 group-hover:opacity-100 transition-opacity duration-300 grayscale group-hover:grayscale-0" />
                        <span class="text-xs font-medium text-gray-400 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">PostgreSQL</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <!-- About Us Section -->
    <section id="about" class="relative pt-24 lg:pt-32 pb-24 lg:pb-32 px-6 lg:px-8 bg-gradient-to-b from-gradient-end via-gradient-mid to-gradient-start dark:from-zinc-950 dark:to-dark-bg overflow-hidden z-10">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none"></div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <h2 class="text-3xl lg:text-4xl font-bold mb-16 text-center text-[#1b1b18] dark:text-[#EDEDEC] tracking-tight" data-aos="fade-up">
                The Digital Atelier
            </h2>

            <div class="relative">
                <!-- Image Background with Overlay -->
                <div class="relative lg:absolute inset-0 lg:w-1/2 h-[500px] lg:h-[700px] mb-8 lg:mb-0" data-aos="fade-right" data-aos-delay="200">
                    <div class="relative h-full overflow-hidden rounded-2xl">
                        <img
                            src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1200&auto=format&fit=crop"
                            alt="Creative Strategy Session"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700"
                            loading="lazy"
                        >
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-artisan-black/10 via-transparent to-transparent"></div>
                    </div>
                </div>

                <!-- Content with Tabs - Floating on Right -->
                <div class="relative lg:ml-auto lg:w-1/2 lg:pl-12 xl:pl-16" data-aos="fade-left" data-aos-delay="100">
                    <!-- Tab Navigation -->
                    <div class="flex gap-4 mb-8 border-b border-light-border dark:border-dark-border">
                        <button
                            onclick="switchTab('company')"
                            id="tab-company"
                            class="tab-button px-4 py-3 text-sm font-semibold text-artisan-black dark:text-artisan-white border-b-2 border-artisan-black dark:border-white transition-all duration-300"
                        >
                            Our Craft
                        </button>
                        <button
                            onclick="switchTab('team')"
                            id="tab-team"
                            class="tab-button px-4 py-3 text-sm font-semibold text-artisan-gray dark:text-artisan-gray-dark border-b-2 border-transparent hover:text-artisan-black dark:hover:text-artisan-white transition-all duration-300"
                        >
                            The Artisans
                        </button>
                        <button
                            onclick="switchTab('values')"
                            id="tab-values"
                            class="tab-button px-4 py-3 text-sm font-semibold text-artisan-gray dark:text-artisan-gray-dark border-b-2 border-transparent hover:text-artisan-black dark:hover:text-artisan-white transition-all duration-300"
                        >
                            Philosophy
                        </button>
                    </div>

                    <!-- Tab Content Container -->
                    <div class="relative min-h-[400px]" id="tab-content-container">
                        <!-- Tab Content: Our Craft -->
                        <div id="content-company" class="tab-content absolute inset-0 w-full">
                            <h3 class="text-2xl font-bold text-artisan-black dark:text-artisan-white mb-4">Precision Meets Passion</h3>
                            <p class="text-artisan-gray dark:text-artisan-gray-dark leading-relaxed mb-8 text-lg">
                                Nava operates at the intersection of logic and creativity. We view every line of code as a brushstroke, contributing to a larger masterpiece that solves complex problems with elegance.
                            </p>
                            <div class="space-y-6">
                                <div class="flex gap-4 group/item">
                                    <div class="w-12 h-12 bg-gray-100 dark:bg-white/5 rounded-full flex items-center justify-center flex-shrink-0 group-hover/item:scale-110 transition-transform">
                                        <i class="fi fi-rr-gem text-xl text-artisan-black dark:text-artisan-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-artisan-black dark:text-artisan-white mb-1">Meticulous Detail</h4>
                                        <p class="text-sm text-artisan-gray dark:text-artisan-gray-dark">We obsess over the smallest details to ensure perfection.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4 group/item">
                                    <div class="w-12 h-12 bg-gray-100 dark:bg-white/5 rounded-full flex items-center justify-center flex-shrink-0 group-hover/item:scale-110 transition-transform">
                                        <i class="fi fi-rr-magic-wand text-xl text-artisan-black dark:text-artisan-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-artisan-black dark:text-artisan-white mb-1">Creative Logic</h4>
                                        <p class="text-sm text-artisan-gray dark:text-artisan-gray-dark">Solving hard engineering problems with creative thinking.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4 group/item">
                                    <div class="w-12 h-12 bg-gray-100 dark:bg-white/5 rounded-full flex items-center justify-center flex-shrink-0 group-hover/item:scale-110 transition-transform">
                                        <i class="fi fi-rr-trophy text-xl text-artisan-black dark:text-artisan-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-artisan-black dark:text-artisan-white mb-1">Award-Winning Quality</h4>
                                        <p class="text-sm text-artisan-gray dark:text-artisan-gray-dark">Delivering solutions that set industry standards.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content: Our Team -->
                        <div id="content-team" class="tab-content absolute inset-0 w-full hidden">
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Our Team</h3>
                            <div class="w-12 h-0.5 bg-gradient-to-r from-[#1b1b18] to-transparent dark:from-white dark:to-transparent"></div>
                        </div>
                        <p class="text-[#706f6c] dark:text-[#A1A09A] leading-relaxed mb-6 text-lg">
                            Our team consists of experienced professionals who are always ready to provide the best service.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4 group/item p-3 hover:bg-[#1b1b18]/5 dark:hover:bg-white/5 transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 bg-gradient-to-br from-[#1b1b18]/10 to-[#1b1b18]/5 dark:from-white/10 dark:to-white/5 flex items-center justify-center border border-[#1b1b18]/20 dark:border-white/20 group-hover/item:from-[#1b1b18] group-hover/item:to-[#1b1b18] dark:group-hover/item:from-white dark:group-hover/item:to-white transition-all duration-300 flex-shrink-0">
                                    <i class="fi fi-rr-user-check text-[#1b1b18] dark:text-[#EDEDEC] text-base group-hover/item:text-white dark:group-hover/item:text-[#1C1C1A] transition-colors"></i>
                                </div>
                                <span class="text-[#706f6c] dark:text-[#A1A09A] group-hover/item:text-[#1b1b18] dark:group-hover/item:text-[#EDEDEC] transition-colors font-medium">Experienced professionals in their fields</span>
                            </div>
                            <div class="flex items-center gap-4 group/item p-3 hover:bg-[#1b1b18]/5 dark:hover:bg-white/5 transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 bg-gradient-to-br from-[#1b1b18]/10 to-[#1b1b18]/5 dark:from-white/10 dark:to-white/5 flex items-center justify-center border border-[#1b1b18]/20 dark:border-white/20 group-hover/item:from-[#1b1b18] group-hover/item:to-[#1b1b18] dark:group-hover/item:from-white dark:group-hover/item:to-white transition-all duration-300 flex-shrink-0">
                                    <i class="fi fi-rr-sparkles text-[#1b1b18] dark:text-[#EDEDEC] text-base group-hover/item:text-white dark:group-hover/item:text-[#1C1C1A] transition-colors"></i>
                                </div>
                                <span class="text-[#706f6c] dark:text-[#A1A09A] group-hover/item:text-[#1b1b18] dark:group-hover/item:text-[#EDEDEC] transition-colors font-medium">Innovative approach to problem-solving</span>
                            </div>
                            <div class="flex items-center gap-4 group/item p-3 hover:bg-[#1b1b18]/5 dark:hover:bg-white/5 transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 bg-gradient-to-br from-[#1b1b18]/10 to-[#1b1b18]/5 dark:from-white/10 dark:to-white/5 flex items-center justify-center border border-[#1b1b18]/20 dark:border-white/20 group-hover/item:from-[#1b1b18] group-hover/item:to-[#1b1b18] dark:group-hover/item:from-white dark:group-hover/item:to-white transition-all duration-300 flex-shrink-0">
                                    <i class="fi fi-rr-bullseye text-[#1b1b18] dark:text-[#EDEDEC] text-base group-hover/item:text-white dark:group-hover/item:text-[#1C1C1A] transition-colors"></i>
                                </div>
                                <span class="text-[#706f6c] dark:text-[#A1A09A] group-hover/item:text-[#1b1b18] dark:group-hover/item:text-[#EDEDEC] transition-colors font-medium">Targeted solutions for each client</span>
                            </div>
                        </div>
                    </div>

                        <!-- Tab Content: Our Values -->
                        <div id="content-values" class="tab-content absolute inset-0 w-full hidden">
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Our Values</h3>
                            <div class="w-12 h-0.5 bg-gradient-to-r from-[#1b1b18] to-transparent dark:from-white dark:to-transparent"></div>
                        </div>
                        <p class="text-[#706f6c] dark:text-[#A1A09A] leading-relaxed mb-6 text-lg">
                            We are committed to upholding core values that guide our work and shape our relationships with clients and partners.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4 group/item p-3 hover:bg-[#1b1b18]/5 dark:hover:bg-white/5 transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 bg-gradient-to-br from-[#1b1b18]/10 to-[#1b1b18]/5 dark:from-white/10 dark:to-white/5 flex items-center justify-center border border-[#1b1b18]/20 dark:border-white/20 group-hover/item:from-[#1b1b18] group-hover/item:to-[#1b1b18] dark:group-hover/item:from-white dark:group-hover/item:to-white transition-all duration-300 flex-shrink-0">
                                    <i class="fi fi-rr-shield-check text-[#1b1b18] dark:text-[#EDEDEC] text-base group-hover/item:text-white dark:group-hover/item:text-[#1C1C1A] transition-colors"></i>
                                </div>
                                <span class="text-[#706f6c] dark:text-[#A1A09A] group-hover/item:text-[#1b1b18] dark:group-hover/item:text-[#EDEDEC] transition-colors font-medium">Integrity and transparency in all our operations</span>
                            </div>
                            <div class="flex items-center gap-4 group/item p-3 hover:bg-[#1b1b18]/5 dark:hover:bg-white/5 transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 bg-gradient-to-br from-[#1b1b18]/10 to-[#1b1b18]/5 dark:from-white/10 dark:to-white/5 flex items-center justify-center border border-[#1b1b18]/20 dark:border-white/20 group-hover/item:from-[#1b1b18] group-hover/item:to-[#1b1b18] dark:group-hover/item:from-white dark:group-hover/item:to-white transition-all duration-300 flex-shrink-0">
                                    <i class="fi fi-rr-rocket text-[#1b1b18] dark:text-[#EDEDEC] text-base group-hover/item:text-white dark:group-hover/item:text-[#1C1C1A] transition-colors"></i>
                                </div>
                                <span class="text-[#706f6c] dark:text-[#A1A09A] group-hover/item:text-[#1b1b18] dark:group-hover/item:text-[#EDEDEC] transition-colors font-medium">Continuous innovation and improvement</span>
                            </div>
                            <div class="flex items-center gap-4 group/item p-3 hover:bg-[#1b1b18]/5 dark:hover:bg-white/5 transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 bg-gradient-to-br from-[#1b1b18]/10 to-[#1b1b18]/5 dark:from-white/10 dark:to-white/5 flex items-center justify-center border border-[#1b1b18]/20 dark:border-white/20 group-hover/item:from-[#1b1b18] group-hover/item:to-[#1b1b18] dark:group-hover/item:from-white dark:group-hover/item:to-white transition-all duration-300 flex-shrink-0">
                                    <i class="fi fi-rr-heart text-[#1b1b18] dark:text-[#EDEDEC] text-base group-hover/item:text-white dark:group-hover/item:text-[#1C1C1A] transition-colors"></i>
                                </div>
                                <span class="text-[#706f6c] dark:text-[#A1A09A] group-hover/item:text-[#1b1b18] dark:group-hover/item:text-[#EDEDEC] transition-colors font-medium">Customer-centric approach and excellence</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="relative pt-24 lg:pt-32 pb-24 lg:pb-32 px-6 lg:px-8 bg-gradient-to-b from-gradient-start via-gradient-mid to-gradient-end dark:from-dark-bg dark:to-zinc-950 overflow-hidden">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none"></div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="text-center mb-16 lg:mb-24" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 mb-6 bg-white/50 backdrop-blur-md border border-gray-200 rounded-full shadow-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="text-xs font-semibold text-gray-600 tracking-wide">Our Expertise</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] tracking-tight">
                    Curated Services
                </h2>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 lg:gap-10">
                <!-- Service 1 -->
                <div class="group relative p-8 bg-white/40 dark:bg-white/5 backdrop-blur-md border border-white/50 dark:border-white/10 rounded-3xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/40 to-transparent dark:from-white/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="mb-8 w-14 h-14 flex items-center justify-center bg-white dark:bg-artisan-black-soft rounded-2xl shadow-sm border border-gray-100 dark:border-white/10 group-hover:scale-110 transition-transform duration-500">
                            <i class="fi fi-rr-laptop text-2xl text-artisan-black dark:text-artisan-white"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-artisan-black dark:text-artisan-white">Bespoke Engineering</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                            Hand-crafted code tailored to your exact specifications. No templates, just pure performance.
                        </p>
                        <a href="{{ route('services') }}#bespoke-engineering" class="inline-flex items-center text-xs font-semibold text-[#1b1b18] dark:text-[#EDEDEC] opacity-60 group-hover:opacity-100 transition-opacity">
                            Explore Craft <i class="fi fi-rr-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group relative p-8 bg-white/40 dark:bg-white/5 backdrop-blur-md border border-white/50 dark:border-white/10 rounded-3xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/40 to-transparent dark:from-white/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="mb-8 w-14 h-14 flex items-center justify-center bg-white dark:bg-artisan-black-soft rounded-2xl shadow-sm border border-gray-100 dark:border-white/10 group-hover:scale-110 transition-transform duration-500">
                            <i class="fi fi-rr-layers text-2xl text-artisan-black dark:text-artisan-white"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-artisan-black dark:text-artisan-white">Strategic Architecture</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                            Designing the digital blueprints that ensure your business scales with elegance and stability.
                        </p>
                        <a href="{{ route('services') }}#strategic-architecture" class="inline-flex items-center text-xs font-semibold text-[#1b1b18] dark:text-[#EDEDEC] opacity-60 group-hover:opacity-100 transition-opacity">
                            View Blueprint <i class="fi fi-rr-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="group relative p-8 bg-white/40 dark:bg-white/5 backdrop-blur-md border border-white/50 dark:border-white/10 rounded-3xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/40 to-transparent dark:from-white/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="mb-8 w-14 h-14 flex items-center justify-center bg-white dark:bg-artisan-black-soft rounded-2xl shadow-sm border border-gray-100 dark:border-white/10 group-hover:scale-110 transition-transform duration-500">
                            <i class="fi fi-rr-stats text-2xl text-artisan-black dark:text-artisan-white"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-artisan-black dark:text-artisan-white">Performance Curation</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                            Ongoing optimization to keep your digital assets in gallery-perfect condition.
                        </p>
                        <a href="{{ route('services') }}#performance-curation" class="inline-flex items-center text-xs font-semibold text-[#1b1b18] dark:text-[#EDEDEC] opacity-60 group-hover:opacity-100 transition-opacity">
                            Learn Curation <i class="fi fi-rr-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="relative pt-24 lg:pt-32 pb-24 lg:pb-32 px-6 lg:px-8 bg-gradient-to-b from-gradient-end via-gradient-mid to-gradient-start dark:from-dark-bg dark:to-zinc-950 overflow-hidden">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none"></div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 mb-6 bg-white/50 backdrop-blur-md border border-gray-200 rounded-full shadow-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500 animate-pulse"></span>
                    <span class="text-xs font-semibold text-gray-600 tracking-wide">Featured Works</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] tracking-tight">
                    Selected Masterpieces
                </h2>
            </div>

            <!-- Portfolio Carousel -->
            <div class="relative">
                <div class="portfolio-carousel-container overflow-hidden rounded-3xl shadow-2xl">
                    <div id="portfolio-carousel" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Slide 1 -->
                        <div class="portfolio-slide min-w-full">
                            <div class="relative h-[500px] lg:h-[600px] group overflow-hidden">
                                <img src="/images/porto/pandalungan-festival.webp" alt="Pandalungan Festival" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">

                                <!-- Glass Float Card -->
                                <div class="absolute bottom-8 left-8 right-8 lg:left-16 lg:right-auto lg:w-[450px] p-8 bg-white/80 dark:bg-[#161615]/90 backdrop-blur-xl border border-white/50 dark:border-white/10 rounded-2xl shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <span class="text-xs font-bold uppercase tracking-widest text-[#706f6c] dark:text-[#A1A09A] mb-2 block">Event Platform</span>
                                    <h3 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Pandalungan Festival</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 line-clamp-2">
                                        A seamless digital experience for one of Indonesia's vibrant cultural festivals.
                                    </p>
                                    <a href="https://pandalungan.online/" target="_blank" class="inline-flex items-center text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] hover:gap-2 transition-all">
                                        View Exhibition <i class="fi fi-rr-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="portfolio-slide min-w-full">
                            <div class="relative h-[500px] lg:h-[600px] group overflow-hidden">
                                <img src="/images/porto/hakordia-fun-night-run.webp" alt="Hakordia Fun Run" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">

                                <!-- Glass Float Card -->
                                <div class="absolute bottom-8 left-8 right-8 lg:left-16 lg:right-auto lg:w-[450px] p-8 bg-white/80 dark:bg-[#161615]/90 backdrop-blur-xl border border-white/50 dark:border-white/10 rounded-2xl shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <span class="text-xs font-bold uppercase tracking-widest text-[#706f6c] dark:text-[#A1A09A] mb-2 block">Event Management</span>
                                    <h3 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Hakordia Night Run</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 line-clamp-2">
                                        Robust registration system for a large-scale community sports event.
                                    </p>
                                    <a href="https://www.hakordia.online/" target="_blank" class="inline-flex items-center text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] hover:gap-2 transition-all">
                                        View Exhibition <i class="fi fi-rr-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="portfolio-slide min-w-full">
                            <div class="relative h-[500px] lg:h-[600px] group overflow-hidden">
                                <img src="/images/porto/antntix.id.png" alt="Anntix Ticketing Platform" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">

                                <!-- Glass Float Card -->
                                <div class="absolute bottom-8 left-8 right-8 lg:left-16 lg:right-auto lg:w-[450px] p-8 bg-white/80 dark:bg-[#161615]/90 backdrop-blur-xl border border-white/50 dark:border-white/10 rounded-2xl shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <span class="text-xs font-bold uppercase tracking-widest text-[#706f6c] dark:text-[#A1A09A] mb-2 block">Ticketing Platform</span>
                                    <h3 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Anntix</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 line-clamp-2">
                                        Indonesia's trusted event ticketing platform. Secure, easy, and reliable.
                                    </p>
                                    <a href="https://www.anntix.id" target="_blank" class="inline-flex items-center text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] hover:gap-2 transition-all">
                                        View Exhibition <i class="fi fi-rr-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Simple Dots -->
                <div class="flex justify-center gap-3 mt-8">
                    <button class="portfolio-indicator w-3 h-3 rounded-full bg-[#1b1b18] dark:bg-[#EDEDEC] opacity-100 transition-all" data-slide="0"></button>
                    <button class="portfolio-indicator w-3 h-3 rounded-full bg-[#1b1b18] dark:bg-[#EDEDEC] opacity-30 hover:opacity-100 transition-all" data-slide="1"></button>
                    <button class="portfolio-indicator w-3 h-3 rounded-full bg-[#1b1b18] dark:bg-[#EDEDEC] opacity-30 hover:opacity-100 transition-all" data-slide="2"></button>
                </div>
            </div>
        </div>
    </section>



    <!-- Stats Section -->
    <section class="relative pt-20 lg:pt-24 pb-20 px-6 lg:px-8 bg-gradient-to-b from-gradient-start via-gradient-mid to-gradient-end dark:from-dark-bg dark:to-zinc-950 overflow-hidden">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none"></div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <!-- Glass Bar Container -->
            <div class="bg-white/40 dark:bg-white/5 backdrop-blur-md border border-white/50 dark:border-white/10 rounded-full px-12 py-10 shadow-lg">
                <div class="grid grid-cols-3 gap-8 divide-x divide-gray-200/50 dark:divide-white/10">
                    <div class="group text-center px-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-4xl sm:text-5xl font-bold text-artisan-black dark:text-artisan-white mb-2 font-mono">50+</div>
                        <div class="text-sm font-semibold uppercase tracking-widest text-artisan-gray dark:text-artisan-gray-dark">Global Clients</div>
                    </div>

                    <div class="group text-center px-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-4xl sm:text-5xl font-bold text-artisan-black dark:text-artisan-white mb-2 font-mono">15+</div>
                        <div class="text-sm font-semibold uppercase tracking-widest text-artisan-gray dark:text-artisan-gray-dark">Digital Artisans</div>
                    </div>

                    <div class="group text-center px-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-4xl sm:text-5xl font-bold text-artisan-black dark:text-artisan-white mb-2 font-mono">3+</div>
                        <div class="text-sm font-semibold uppercase tracking-widest text-artisan-gray dark:text-artisan-gray-dark">Years of Craft</div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- CTA Section -->
    <section id="contact" class="relative pt-24 lg:pt-32 pb-12 lg:pb-16 px-6 lg:px-8 bg-gradient-to-b from-gradient-end to-artisan-black dark:from-dark-bg dark:to-zinc-950 overflow-hidden">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] pointer-events-none"></div>
        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <!-- Status Pill -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 mb-8 bg-white/10 backdrop-blur-md border border-white/20 rounded-full shadow-sm cursor-pointer hover:bg-white/20 transition-all">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                    <span class="text-xs font-semibold text-white/90 tracking-wide">Open for Collaboration</span>
                </div>

                <h2 class="text-4xl lg:text-6xl font-bold mb-8 text-white tracking-tight leading-tight">
                    Ready to Build Your <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-200 to-blue-200">Next Masterpiece?</span>
                </h2>
                <p class="text-lg lg:text-xl text-gray-400 mb-12 leading-relaxed max-w-2xl mx-auto">
                    Let's merge your vision with our craft. Reach out today and let's start shaping your digital future.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{ route('contact.index') }}" class="group relative px-12 py-6 bg-white text-artisan-black hover:bg-gray-50 transition-all duration-500 text-center rounded-full shadow-[0_0_40px_-10px_rgba(255,255,255,0.5)] hover:shadow-[0_0_60px_-10px_rgba(255,255,255,0.7)] hover:scale-105 active:scale-95">
                        <span class="relative z-10 flex items-center justify-center gap-3 text-lg font-bold tracking-wide">
                            Start Your Project
                            <i class="fi fi-rr-arrow-right text-xl group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Decorative Background Elements -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 30px 30px;"></div>
    </section>

</x-layouts.app>
