<x-layouts.app title="Company Profile - Nava">
    <!-- Hero Section -->
    <section class="relative py-24 lg:py-32 px-6 lg:px-8 overflow-hidden bg-[#FDFDFC] dark:bg-[#0a0a0a]">
        <!-- Animated Background Pattern -->
        <div class="absolute inset-0 opacity-30 dark:opacity-10">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 2px 2px, rgba(27,27,24,0.15) 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>
        
        <!-- Geometric Shapes -->
        <div class="absolute top-20 right-10 w-32 h-32 border-2 border-[#1b1b18]/5 dark:border-white/5 rounded-2xl rotate-45 animate-pulse" style="animation-delay: 0.5s;"></div>
        <div class="absolute bottom-20 left-10 w-24 h-24 border-2 border-[#1b1b18]/5 dark:border-white/5 rounded-full animate-pulse" style="animation-delay: 1.5s;"></div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Text Content -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 bg-[#1b1b18]/5 dark:bg-white/5 backdrop-blur-sm border border-[#1b1b18]/10 dark:border-white/10 rounded-full" data-aos="fade-up" data-aos-delay="50">
                        <span class="w-2 h-2 bg-[#1b1b18] dark:bg-[#EDEDEC] rounded-full animate-pulse"></span>
                        <span class="text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">Innovation in Technology</span>
                    </div>

                    <h1 class="text-5xl lg:text-7xl font-bold mb-6 text-[#1b1b18] dark:text-[#EDEDEC] leading-tight tracking-tight" style="text-shadow: 0 2px 4px rgba(0,0,0,0.05);" data-aos="fade-up" data-aos-delay="100">
                        Building the Future with
                        <span class="block mt-2 text-[#1b1b18] dark:text-[#EDEDEC]">
                            Cutting-Edge Solutions
                        </span>
                    </h1>
                    
                    <p class="text-xl lg:text-2xl text-[#706f6c] dark:text-[#A1A09A] mb-10 leading-relaxed max-w-xl" data-aos="fade-up" data-aos-delay="150">
                        We are a company committed to providing the best solutions with cutting-edge technology and high-quality services.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-12" data-aos="fade-up" data-aos-delay="200">
                        <a href="#about" class="group relative px-8 py-4 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-2xl hover:bg-black dark:hover:bg-white transition-all duration-300 text-center font-medium shadow-lg hover:shadow-2xl hover:scale-105 border-2 border-transparent hover:border-[#1b1b18]/20 dark:hover:border-white/20 focus:outline-none focus:ring-4 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20 active:scale-95">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                Learn More
                                <i class="fi fi-rr-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </a>
                        <a href="#contact" class="px-8 py-4 border-2 border-[#1b1b18]/20 dark:border-white/20 hover:border-[#1b1b18]/40 dark:hover:border-white/40 rounded-2xl transition-all duration-300 text-center font-medium backdrop-blur-sm bg-white/50 dark:bg-[#0a0a0a]/50 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20 active:scale-95">
                            Contact Us
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t-2 border-[#1b1b18]/10 dark:border-white/10" data-aos="fade-up" data-aos-delay="250">
                        <div class="group hover:scale-105 transition-transform duration-300 cursor-default">
                            <div class="text-3xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-1 group-hover:text-black dark:group-hover:text-white transition-colors">500+</div>
                            <div class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Projects</div>
                        </div>
                        <div class="group hover:scale-105 transition-transform duration-300 cursor-default" data-aos="fade-up" data-aos-delay="300">
                            <div class="text-3xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-1 group-hover:text-black dark:group-hover:text-white transition-colors">98%</div>
                            <div class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Satisfaction</div>
                        </div>
                        <div class="group hover:scale-105 transition-transform duration-300 cursor-default" data-aos="fade-up" data-aos-delay="350">
                            <div class="text-3xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-1 group-hover:text-black dark:group-hover:text-white transition-colors">10+</div>
                            <div class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Years</div>
                        </div>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="relative" data-aos="fade-left" data-aos-delay="200">
                    <div class="relative">
                        <!-- Main Image with Modern Border -->
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white/20 dark:border-white/5">
                            <img
                                src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=600&fit=crop&q=80"
                                alt="Modern technology and innovation"
                                class="w-full h-auto object-cover"
                                loading="lazy"
                            >
                        </div>

                        <!-- Floating Card 1 -->
                        <div class="absolute -bottom-6 -left-6 bg-white/90 dark:bg-[#161615]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border-2 border-[#1b1b18]/10 dark:border-white/10 hover:border-[#1b1b18]/30 dark:hover:border-white/30 hover:shadow-[0_20px_25px_-5px_rgba(0,0,0,0.1),0_10px_10px_-5px_rgba(0,0,0,0.04)] hover:scale-105 transition-all duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                            <div class="flex items-center gap-3">
                                <div class="w-14 h-14 bg-[#1b1b18] dark:bg-[#eeeeec] rounded-xl flex items-center justify-center border-2 border-[#1b1b18]/20 dark:border-white/20 shadow-lg ring-2 ring-[#1b1b18]/5 dark:ring-white/5">
                                    <i class="fi fi-ts-laptop-code text-white dark:text-[#1C1C1A] text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Tech Solutions</div>
                                    <div class="text-xs text-[#706f6c] dark:text-[#A1A09A]">Innovation First</div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Card 2 -->
                        <div class="absolute -top-6 -right-6 bg-white/90 dark:bg-[#161615]/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border-2 border-[#1b1b18]/10 dark:border-white/10 hover:border-[#1b1b18]/30 dark:hover:border-white/30 hover:shadow-[0_20px_25px_-5px_rgba(0,0,0,0.1),0_10px_10px_-5px_rgba(0,0,0,0.04)] hover:scale-105 transition-all duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="350">
                            <div class="flex items-center gap-3">
                                <div class="w-14 h-14 bg-[#1b1b18] dark:bg-[#eeeeec] rounded-xl flex items-center justify-center border-2 border-[#1b1b18]/20 dark:border-white/20 shadow-lg ring-2 ring-[#1b1b18]/5 dark:ring-white/5">
                                    <i class="fi fi-tr-user-headset text-white dark:text-[#1C1C1A] text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">24/7 Support</div>
                                    <div class="text-xs text-[#706f6c] dark:text-[#A1A09A]">Always Here</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute -z-10 -bottom-12 -right-12 w-72 h-72 bg-[#1b1b18]/5 dark:bg-white/5 rounded-full blur-3xl animate-pulse"></div>
                    <div class="absolute -z-10 -top-12 -left-12 w-56 h-56 bg-[#1b1b18]/5 dark:bg-white/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-20 px-6 lg:px-8 bg-white dark:bg-[#161615]">
        <div class="container mx-auto max-w-7xl">
            <h2 class="text-3xl lg:text-4xl font-semibold mb-12 text-center text-[#1b1b18] dark:text-[#EDEDEC] tracking-tight" style="text-shadow: 0 2px 4px rgba(0,0,0,0.05);" data-aos="fade-up">
                About Us
            </h2>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="prose prose-lg dark:prose-invert max-w-none" data-aos="fade-right" data-aos-delay="100">
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4 text-[#1b1b18] dark:text-[#EDEDEC]">
                            Our Company
                        </h3>
                        <p class="text-[#706f6c] dark:text-[#A1A09A] leading-relaxed mb-4">
                            Nava is a company founded with a vision to become a trusted partner in providing technology solutions and professional services.
                        </p>
                        <ul class="space-y-3 text-[#706f6c] dark:text-[#A1A09A]">
                            <li class="flex items-start gap-3 group hover:translate-x-2 transition-transform duration-300" data-aos="fade-right" data-aos-delay="150">
                                <span class="text-[#1b1b18] dark:text-[#EDEDEC] mt-1 font-bold text-lg">•</span>
                                <span class="group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors">Years of experience in technology solutions</span>
                            </li>
                            <li class="flex items-start gap-3 group hover:translate-x-2 transition-transform duration-300" data-aos="fade-right" data-aos-delay="200">
                                <span class="text-[#1b1b18] dark:text-[#EDEDEC] mt-1 font-bold text-lg">•</span>
                                <span class="group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors">Trusted partner for various clients</span>
                            </li>
                            <li class="flex items-start gap-3 group hover:translate-x-2 transition-transform duration-300" data-aos="fade-right" data-aos-delay="250">
                                <span class="text-[#1b1b18] dark:text-[#EDEDEC] mt-1 font-bold text-lg">•</span>
                                <span class="group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors">Helping clients achieve their business goals</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-[#1b1b18] dark:text-[#EDEDEC]">
                            Our Team
                        </h3>
                        <p class="text-[#706f6c] dark:text-[#A1A09A] leading-relaxed mb-4">
                            Our team consists of experienced professionals who are always ready to provide the best service.
                        </p>
                        <ul class="space-y-3 text-[#706f6c] dark:text-[#A1A09A]">
                            <li class="flex items-start gap-3 group hover:translate-x-2 transition-transform duration-300" data-aos="fade-right" data-aos-delay="300">
                                <span class="text-[#1b1b18] dark:text-[#EDEDEC] mt-1 font-bold text-lg">•</span>
                                <span class="group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors">Experienced professionals in their fields</span>
                            </li>
                            <li class="flex items-start gap-3 group hover:translate-x-2 transition-transform duration-300" data-aos="fade-right" data-aos-delay="350">
                                <span class="text-[#1b1b18] dark:text-[#EDEDEC] mt-1 font-bold text-lg">•</span>
                                <span class="group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors">Innovative approach to problem-solving</span>
                            </li>
                            <li class="flex items-start gap-3 group hover:translate-x-2 transition-transform duration-300" data-aos="fade-right" data-aos-delay="400">
                                <span class="text-[#1b1b18] dark:text-[#EDEDEC] mt-1 font-bold text-lg">•</span>
                                <span class="group-hover:text-[#1b1b18] dark:group-hover:text-[#EDEDEC] transition-colors">Targeted solutions for each client</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Image Content -->
                <div class="relative" data-aos="fade-left" data-aos-delay="200">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-2 border-[#e3e3e0] dark:border-[#3E3E3A] hover:border-[#1b1b18]/30 dark:hover:border-white/30 hover:shadow-[0_20px_25px_-5px_rgba(0,0,0,0.1),0_10px_10px_-5px_rgba(0,0,0,0.04)] transition-all duration-300 ring-2 ring-[#1b1b18]/5 dark:ring-white/5">
                        <img
                            src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&h=800&fit=crop&q=80"
                            alt="Technology and innovation"
                            class="w-full h-[500px] lg:h-[600px] object-cover hover:scale-105 transition-transform duration-500"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-6 lg:px-8 bg-white dark:bg-[#161615]">
        <div class="container mx-auto max-w-7xl">
            <h2 class="text-3xl lg:text-4xl font-semibold mb-12 text-center text-[#1b1b18] dark:text-[#EDEDEC] tracking-tight" style="text-shadow: 0 2px 4px rgba(0,0,0,0.05);" data-aos="fade-up">
                Our Services
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-6 bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg border border-[#e3e3e0] dark:border-[#3E3E3A]" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4 w-12 h-12 flex items-center justify-center text-[#1b1b18] dark:text-[#EDEDEC]">
                        <i class="fi fi-ts-laptop-code text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-[#1b1b18] dark:text-[#EDEDEC]">
                        Software Development
                    </h3>
                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        Custom application development services tailored to your business needs.
                    </p>
                </div>
                <div class="p-6 bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg border border-[#e3e3e0] dark:border-[#3E3E3A]" data-aos="fade-up" data-aos-delay="200">
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
                <div class="p-6 bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg border border-[#e3e3e0] dark:border-[#3E3E3A]" data-aos="fade-up" data-aos-delay="300">
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

