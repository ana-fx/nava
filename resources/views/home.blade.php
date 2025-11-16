<x-layouts.app title="Company Profile - Nava">
    <!-- Hero Section -->
    <section class="relative pb-20 lg:pb-24 px-6 lg:px-8 overflow-hidden bg-[#FDFDFC] dark:bg-[#0a0a0a] min-h-[calc(100vh-73px)] flex items-center -mt-[73px] pt-[73px]">
        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Text Content -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 mb-4 bg-[#1b1b18]/5 dark:bg-white/5 backdrop-blur-sm border border-[#1b1b18]/10 dark:border-white/10" data-aos="fade-up" data-aos-delay="50">
                        <span class="w-2 h-2 bg-[#1b1b18] dark:bg-[#EDEDEC] animate-pulse"></span>
                        <span class="text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">Innovation in Technology</span>
                    </div>

                    <h1 class="text-4xl lg:text-5xl font-bold mb-4 text-[#1b1b18] dark:text-[#EDEDEC] leading-tight tracking-tight" style="text-shadow: 0 2px 4px rgba(0,0,0,0.05);" data-aos="fade-up" data-aos-delay="100">
                        Building the Future with
                        <span class="block mt-2 text-[#1b1b18] dark:text-[#EDEDEC]">
                            Cutting-Edge Solutions
                        </span>
                    </h1>

                    <p class="text-lg lg:text-xl text-[#706f6c] dark:text-[#A1A09A] mb-6 leading-relaxed max-w-xl" data-aos="fade-up" data-aos-delay="150">
                        We are a company committed to providing the best solutions with cutting-edge technology and high-quality services.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                        <a href="#about" class="group relative px-6 py-3 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] hover:bg-black dark:hover:bg-white transition-all duration-300 text-center text-sm font-medium shadow-lg hover:shadow-2xl hover:scale-105 border-2 border-transparent hover:border-[#1b1b18]/20 dark:hover:border-white/20 focus:outline-none focus:ring-4 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20 active:scale-95">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                Learn More
                                <i class="fi fi-rr-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </a>
                        <a href="#contact" class="group relative px-6 py-3 border-2 border-[#1b1b18]/20 dark:border-white/20 hover:border-[#1b1b18]/40 dark:hover:border-white/40 transition-all duration-300 text-center text-sm font-medium backdrop-blur-sm bg-white/50 dark:bg-[#0a0a0a]/50 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20 active:scale-95">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                Contact Us
                                <i class="fi fi-rr-envelope text-sm group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="relative" data-aos="fade-left" data-aos-delay="200">
                    <div class="relative">
                        <!-- Main Image -->
                        <div class="relative overflow-hidden">
                            <img
                                src="https://unsplash.com/photos/Kj2SaNHG-hg/download?w=800&h=600&fit=crop&q=80"
                                alt="Modern technology and innovation"
                                class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700"
                                loading="lazy"
                            >
                        </div>

                        <!-- Floating Card 1 -->
                        <div class="absolute bottom-2 left-2 lg:-bottom-6 lg:-left-6 bg-white dark:bg-[#161615] p-3 lg:p-4 border-2 border-[#1b1b18]/10 dark:border-white/10 hover:border-[#1b1b18]/30 dark:hover:border-white/30 hover:scale-105 transition-all duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                            <div class="flex items-center gap-2 lg:gap-3">
                                <div class="w-10 h-10 lg:w-14 lg:h-14 bg-[#1b1b18] dark:bg-[#eeeeec] flex items-center justify-center border-2 border-[#1b1b18]/20 dark:border-white/20 ring-2 ring-[#1b1b18]/5 dark:ring-white/5">
                                    <i class="fi fi-ts-laptop-code text-white dark:text-[#1C1C1A] text-base lg:text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-xs lg:text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Tech Solutions</div>
                                    <div class="text-[10px] lg:text-xs text-[#706f6c] dark:text-[#A1A09A]">Innovation First</div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Card 2 -->
                        <div class="absolute top-2 right-2 lg:-top-6 lg:-right-6 bg-white dark:bg-[#161615] p-3 lg:p-4 border-2 border-[#1b1b18]/10 dark:border-white/10 hover:border-[#1b1b18]/30 dark:hover:border-white/30 hover:scale-105 transition-all duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="350">
                            <div class="flex items-center gap-2 lg:gap-3">
                                <div class="w-10 h-10 lg:w-14 lg:h-14 bg-[#1b1b18] dark:bg-[#eeeeec] flex items-center justify-center border-2 border-[#1b1b18]/20 dark:border-white/20 ring-2 ring-[#1b1b18]/5 dark:ring-white/5">
                                    <i class="fi fi-tr-user-headset text-white dark:text-[#1C1C1A] text-base lg:text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-xs lg:text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">24/7 Support</div>
                                    <div class="text-[10px] lg:text-xs text-[#706f6c] dark:text-[#A1A09A]">Always Here</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="relative -mt-12 sm:-mt-16 lg:-mt-20 -mb-12 sm:-mb-16 lg:-mb-20 pt-6 pb-6 lg:pt-8 lg:pb-8 bg-white dark:bg-[#161615] border-y border-[#e3e3e0] dark:border-[#3E3E3A] overflow-visible z-30" style="transform: skewY(-2deg);">
        <div class="container mx-auto max-w-7xl px-4 sm:px-8 lg:px-12">
            <div class="overflow-hidden -mx-4 sm:-mx-8 lg:-mx-12">
                <div class="flex items-center gap-6 sm:gap-8 lg:gap-10 animate-scroll px-4 sm:px-8 lg:px-12">
                    <!-- Tech Stack Items -->
                    <div class="flex items-center gap-6 sm:gap-8 lg:gap-10 min-w-max">
                        <div class="flex items-center gap-2 sm:gap-3 lg:gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/laravel.svg" alt="Laravel" class="w-8 h-8 lg:w-10 lg:h-10 tech-logo" />
                            <span class="text-sm lg:text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Laravel</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/vuedotjs.svg" alt="Vue.js" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Vue.js</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/react.svg" alt="React" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">React</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/nodedotjs.svg" alt="Node.js" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Node.js</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/python.svg" alt="Python" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Python</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/docker.svg" alt="Docker" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Docker</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/amazonaws.svg" alt="AWS" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">AWS</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/postgresql.svg" alt="PostgreSQL" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">PostgreSQL</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/redis.svg" alt="Redis" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Redis</span>
                        </div>
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="flex items-center gap-10 min-w-max">
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/laravel.svg" alt="Laravel" class="w-8 h-8 lg:w-10 lg:h-10 tech-logo" />
                            <span class="text-sm lg:text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Laravel</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/vuedotjs.svg" alt="Vue.js" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Vue.js</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/react.svg" alt="React" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">React</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/nodedotjs.svg" alt="Node.js" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Node.js</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/python.svg" alt="Python" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Python</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/docker.svg" alt="Docker" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Docker</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/amazonaws.svg" alt="AWS" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">AWS</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/postgresql.svg" alt="PostgreSQL" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">PostgreSQL</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/redis.svg" alt="Redis" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Redis</span>
                        </div>
                    </div>
                    <!-- Third duplicate for extra seamless loop -->
                    <div class="flex items-center gap-10 min-w-max">
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/laravel.svg" alt="Laravel" class="w-8 h-8 lg:w-10 lg:h-10 tech-logo" />
                            <span class="text-sm lg:text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Laravel</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/vuedotjs.svg" alt="Vue.js" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Vue.js</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/react.svg" alt="React" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">React</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/nodedotjs.svg" alt="Node.js" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Node.js</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/python.svg" alt="Python" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Python</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/docker.svg" alt="Docker" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Docker</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/amazonaws.svg" alt="AWS" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">AWS</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/postgresql.svg" alt="PostgreSQL" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">PostgreSQL</span>
                        </div>
                        <div class="flex items-center gap-4 transition-all duration-300 group cursor-pointer">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/redis.svg" alt="Redis" class="w-10 h-10 tech-logo" />
                            <span class="text-lg font-medium text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors duration-300">Redis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="relative pt-20 lg:pt-24 pb-20 px-6 lg:px-8 bg-white dark:bg-[#161615] overflow-hidden z-10">
        <div class="container mx-auto max-w-7xl relative z-10">
            <h2 class="text-3xl lg:text-4xl font-semibold mb-16 text-center text-[#1b1b18] dark:text-[#EDEDEC] tracking-tight" style="text-shadow: 0 2px 4px rgba(0,0,0,0.05);" data-aos="fade-up">
                About Us
            </h2>

            <div class="relative">
                <!-- Image Background with Overlay -->
                <div class="relative lg:absolute inset-0 lg:w-1/2 h-[500px] lg:h-[700px] mb-8 lg:mb-0" data-aos="fade-right" data-aos-delay="200">
                    <div class="relative h-full overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&h=800&fit=crop&q=80"
                            alt="Technology and innovation"
                            class="w-full h-full object-cover"
                            loading="lazy"
                        >
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1b1b18]/60 via-[#1b1b18]/40 to-transparent dark:from-[#0a0a0a]/80 dark:via-[#0a0a0a]/60 dark:to-transparent"></div>
                        <!-- Decorative Pattern -->
                        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>
                    </div>
                </div>

                <!-- Content with Tabs - Floating on Right -->
                <div class="relative lg:ml-auto lg:w-1/2 lg:pl-8 xl:pl-12" data-aos="fade-left" data-aos-delay="100">
                    <!-- Tab Navigation -->
                    <div class="flex gap-1 sm:gap-2 mb-6 lg:mb-8 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
                        <button
                            onclick="switchTab('company')"
                            id="tab-company"
                            class="tab-button flex-1 px-3 py-2 lg:px-6 lg:py-3 text-sm lg:text-base font-semibold text-left text-[#1b1b18] dark:text-[#EDEDEC] border-b-2 border-[#1b1b18] dark:border-white transition-all duration-300 relative"
                        >
                            Our Company
                        </button>
                        <button
                            onclick="switchTab('team')"
                            id="tab-team"
                            class="tab-button flex-1 px-3 py-2 lg:px-6 lg:py-3 text-sm lg:text-base font-semibold text-left text-[#706f6c] dark:text-[#A1A09A] border-b-2 border-transparent hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-all duration-300"
                        >
                            Our Team
                        </button>
                        <button
                            onclick="switchTab('values')"
                            id="tab-values"
                            class="tab-button flex-1 px-3 py-2 lg:px-6 lg:py-3 text-sm lg:text-base font-semibold text-left text-[#706f6c] dark:text-[#A1A09A] border-b-2 border-transparent hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-all duration-300"
                        >
                            Our Values
                        </button>
                    </div>

                    <!-- Tab Content Container -->
                    <div class="relative" id="tab-content-container">
                        <!-- Tab Content: Our Company -->
                        <div id="content-company" class="tab-content absolute inset-0 w-full">
                        <div class="mb-6">
                            <h3 class="text-xl lg:text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Our Company</h3>
                            <div class="w-12 h-0.5 bg-gradient-to-r from-[#1b1b18] to-transparent dark:from-white dark:to-transparent"></div>
                        </div>
                        <p class="text-[#706f6c] dark:text-[#A1A09A] leading-relaxed mb-6 text-base lg:text-lg">
                            Nava is a company founded with a vision to become a trusted partner in providing technology solutions and professional services.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4 group/item p-3 hover:bg-[#1b1b18]/5 dark:hover:bg-white/5 transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 bg-gradient-to-br from-[#1b1b18]/10 to-[#1b1b18]/5 dark:from-white/10 dark:to-white/5 flex items-center justify-center border border-[#1b1b18]/20 dark:border-white/20 group-hover/item:from-[#1b1b18] group-hover/item:to-[#1b1b18] dark:group-hover/item:from-white dark:group-hover/item:to-white transition-all duration-300 flex-shrink-0">
                                    <i class="fi fi-rr-clock text-[#1b1b18] dark:text-[#EDEDEC] text-base group-hover/item:text-white dark:group-hover/item:text-[#1C1C1A] transition-colors"></i>
                                </div>
                                <span class="text-[#706f6c] dark:text-[#A1A09A] group-hover/item:text-[#1b1b18] dark:group-hover/item:text-[#EDEDEC] transition-colors font-medium">Years of experience in technology solutions</span>
                            </div>
                            <div class="flex items-center gap-4 group/item p-3 hover:bg-[#1b1b18]/5 dark:hover:bg-white/5 transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 bg-gradient-to-br from-[#1b1b18]/10 to-[#1b1b18]/5 dark:from-white/10 dark:to-white/5 flex items-center justify-center border border-[#1b1b18]/20 dark:border-white/20 group-hover/item:from-[#1b1b18] group-hover/item:to-[#1b1b18] dark:group-hover/item:from-white dark:group-hover/item:to-white transition-all duration-300 flex-shrink-0">
                                    <i class="fi fi-rr-handshake text-[#1b1b18] dark:text-[#EDEDEC] text-base group-hover/item:text-white dark:group-hover/item:text-[#1C1C1A] transition-colors"></i>
                                </div>
                                <span class="text-[#706f6c] dark:text-[#A1A09A] group-hover/item:text-[#1b1b18] dark:group-hover/item:text-[#EDEDEC] transition-colors font-medium">Trusted partner for various clients</span>
                            </div>
                            <div class="flex items-center gap-4 group/item p-3 hover:bg-[#1b1b18]/5 dark:hover:bg-white/5 transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 bg-gradient-to-br from-[#1b1b18]/10 to-[#1b1b18]/5 dark:from-white/10 dark:to-white/5 flex items-center justify-center border border-[#1b1b18]/20 dark:border-white/20 group-hover/item:from-[#1b1b18] group-hover/item:to-[#1b1b18] dark:group-hover/item:from-white dark:group-hover/item:to-white transition-all duration-300 flex-shrink-0">
                                    <i class="fi fi-rr-target text-[#1b1b18] dark:text-[#EDEDEC] text-base group-hover/item:text-white dark:group-hover/item:text-[#1C1C1A] transition-colors"></i>
                                </div>
                                <span class="text-[#706f6c] dark:text-[#A1A09A] group-hover/item:text-[#1b1b18] dark:group-hover/item:text-[#EDEDEC] transition-colors font-medium">Helping clients achieve their business goals</span>
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

    <!-- Stats Section -->
    <section class="py-16 lg:py-20 px-6 lg:px-8 bg-white dark:bg-[#161615]">
        <div class="container mx-auto max-w-7xl">
            <div class="grid grid-cols-3 gap-6 sm:gap-8 lg:gap-12">
                <div class="group relative text-center p-6 sm:p-8 lg:p-10 border-l-2 border-[#1b1b18] dark:border-white hover:border-[#1b1b18] dark:hover:border-white transition-colors duration-300 cursor-default" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-3 group-hover:scale-110 transition-transform duration-300 inline-block">50+</div>
                    <div class="text-sm sm:text-base lg:text-lg text-[#706f6c] dark:text-[#A1A09A] font-medium">Clients</div>
                    <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-[#1b1b18] dark:bg-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <div class="group relative text-center p-6 sm:p-8 lg:p-10 border-l-2 border-[#1b1b18] dark:border-white hover:border-[#1b1b18] dark:hover:border-white transition-colors duration-300 cursor-default" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-3 group-hover:scale-110 transition-transform duration-300 inline-block">15+</div>
                    <div class="text-sm sm:text-base lg:text-lg text-[#706f6c] dark:text-[#A1A09A] font-medium">Team</div>
                    <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-[#1b1b18] dark:bg-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <div class="group relative text-center p-6 sm:p-8 lg:p-10 border-l-2 border-[#1b1b18] dark:border-white hover:border-[#1b1b18] dark:hover:border-white transition-colors duration-300 cursor-default" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-3 group-hover:scale-110 transition-transform duration-300 inline-block">3+</div>
                    <div class="text-sm sm:text-base lg:text-lg text-[#706f6c] dark:text-[#A1A09A] font-medium">Years</div>
                    <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-[#1b1b18] dark:bg-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-6 lg:px-8 bg-white dark:bg-[#161615]">
        <div class="container mx-auto max-w-7xl">
            <h2 class="text-2xl lg:text-3xl xl:text-4xl font-semibold mb-8 lg:mb-12 text-center text-[#1b1b18] dark:text-[#EDEDEC] tracking-tight" style="text-shadow: 0 2px 4px rgba(0,0,0,0.05);" data-aos="fade-up">
                Our Services
            </h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 lg:gap-6">
                <div class="p-4 lg:p-6 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A]" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-3 lg:mb-4 w-10 h-10 lg:w-12 lg:h-12 flex items-center justify-center text-[#1b1b18] dark:text-[#EDEDEC]">
                        <i class="fi fi-ts-laptop-code text-3xl lg:text-4xl"></i>
                    </div>
                    <h3 class="text-lg lg:text-xl font-semibold mb-2 text-[#1b1b18] dark:text-[#EDEDEC]">
                        Software Development
                    </h3>
                    <p class="text-xs lg:text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        Custom application development services tailored to your business needs.
                    </p>
                </div>
                <div class="p-6 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A]" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-4 w-12 h-12 flex items-center justify-center text-[#1b1b18] dark:text-[#EDEDEC]">
                        <i class="fi fi-tr-review text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-[#1b1b18] dark:text-[#EDEDEC]">
                        Technology Consulting
                    </h3>
                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        Strategic consulting for your company's digital transformation.
                    </p>
                </div>
                <div class="p-6 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A]" data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-4 w-12 h-12 flex items-center justify-center text-[#1b1b18] dark:text-[#EDEDEC]">
                        <i class="fi fi-tr-user-headset text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-[#1b1b18] dark:text-[#EDEDEC]">
                        Support & Maintenance
                    </h3>
                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        Reliable technical support and system maintenance services.
                    </p>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>

