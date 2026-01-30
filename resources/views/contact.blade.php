<x-layouts.app
    title="Contact Us - Nava | Get in Touch with Our Team"
    description="Contact Nava for technology solutions and professional services. Reach us via email at navadigital931@gmail.com or phone +62 878-8361-1530. Located in Ponorogo, Jawa Timur, Indonesia."
    keywords="contact Nava, technology consulting contact, software development contact, IT services contact, Nava contact information, Ponorogo"
>
    <!-- Hero Section -->
    <section class="relative pt-32 lg:pt-40 pb-20 overflow-hidden min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-gradient-start via-gradient-mid to-gradient-end dark:from-dark-bg dark:to-zinc-950">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] pointer-events-none"></div>

        <div class="container mx-auto px-6 lg:px-8 max-w-7xl relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <!-- Status Pill -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 mb-8 bg-white/50 backdrop-blur-md border border-gray-200 rounded-full shadow-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                    <span class="text-xs font-semibold text-gray-600 tracking-wide">Open for Commissions</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold mb-6 text-artisan-black dark:text-artisan-white leading-[1.1] tracking-tight">
                    Let's Craft Something <br class="hidden sm:block"/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Extraordinary.</span>
                </h1>

                <p class="text-lg lg:text-xl text-artisan-gray dark:text-gray-400 mb-10 leading-relaxed max-w-2xl mx-auto">
                    Have a vision? We're the artisans who can bring it to life. Reach out today and let's start shaping your digital future.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Content Section -->
    <section class="relative py-20 lg:py-32 bg-artisan-bg-light dark:bg-dark-bg">
        <div class="container mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-start">

                <!-- Left Column: Info Cards -->
                <div class="space-y-6 sm:space-y-8" data-aos="fade-right">
                    <h2 class="text-2xl sm:text-3xl font-bold text-artisan-black dark:text-artisan-white tracking-tight mb-6 sm:mb-8">
                        The Studio
                    </h2>

                    <!-- Email Card -->
                    <div class="group p-6 sm:p-8 bg-white border border-gray-100 dark:bg-dark-card dark:border-zinc-800 rounded-2xl sm:rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start gap-4 sm:gap-6">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-xl sm:rounded-2xl bg-purple-50 text-purple-600 dark:bg-purple-900/20 dark:text-purple-400 flex-shrink-0">
                                <i class="fi fi-rr-envelope text-lg sm:text-xl"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h3 class="font-bold text-base sm:text-lg text-artisan-black dark:text-artisan-white mb-2">Electronic Mail</h3>
                                <p class="text-gray-500 text-xs sm:text-sm mb-2">For inquiries, proposals, and friendly hellos.</p>
                                <a href="mailto:navadigital931@gmail.com" class="text-artisan-black dark:text-white font-semibold hover:text-purple-600 transition-colors text-sm sm:text-base break-all">
                                    navadigital931@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="group p-6 sm:p-8 bg-white border border-gray-100 dark:bg-dark-card dark:border-zinc-800 rounded-2xl sm:rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start gap-4 sm:gap-6">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-xl sm:rounded-2xl bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 flex-shrink-0">
                                <i class="fi fi-rr-phone-call text-lg sm:text-xl"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h3 class="font-bold text-base sm:text-lg text-artisan-black dark:text-artisan-white mb-2">Direct Line</h3>
                                <p class="text-gray-500 text-xs sm:text-sm mb-2">Mon-Fri from 9am to 6pm, Western Indonesia Time.</p>
                                <a href="tel:+6287883611530" class="text-artisan-black dark:text-white font-semibold hover:text-blue-600 transition-colors text-sm sm:text-base">
                                    +62 878-8361-1530
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Right Column: Form -->
                <div class="bg-white/40 dark:bg-white/5 backdrop-blur-md border border-white/50 dark:border-white/10 rounded-2xl sm:rounded-[2.5rem] p-6 sm:p-8 lg:p-12 shadow-2xl" data-aos="fade-left">
                    <h2 class="text-xl sm:text-2xl font-bold text-artisan-black dark:text-artisan-white mb-6 sm:mb-8">Start a Conversation</h2>

                    @if(session('success'))
                        <div class="mb-8 p-4 bg-green-50/50 border border-green-100 rounded-xl flex items-center gap-3">
                            <i class="fi fi-rr-check-circle text-green-600"></i>
                            <p class="text-sm text-green-800 font-medium">{{ session('success') }}</p>
                        </div>
                    @endif

                     <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="name" class="text-sm font-semibold text-gray-700">Name</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 rounded-xl bg-white/50 border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 transition-all outline-none" placeholder="John Doe">
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="text-sm font-semibold text-gray-700">Email</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 rounded-xl bg-white/50 border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 transition-all outline-none" placeholder="john@example.com">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="subject" class="text-sm font-semibold text-gray-700">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-4 py-3 rounded-xl bg-white/50 border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 transition-all outline-none" placeholder="Project Inquiry / General Question">
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="text-sm font-semibold text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 rounded-xl bg-white/50 border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 transition-all outline-none resize-none" placeholder="Tell us about your project..."></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 bg-artisan-black text-white rounded-xl font-bold text-lg hover:shadow-lg hover:scale-[1.02] transition-all duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
