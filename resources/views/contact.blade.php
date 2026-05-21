<x-layouts.app
    title="Contact - Nava | Start a Conversation"
    description="Get in touch with Nava. We're based in Ponorogo, Indonesia. Tell us about your project and we'll come back with a clear plan."
    keywords="contact nava, IT consultancy contact, software development inquiry, Ponorogo Indonesia">

    {{-- Page Hero --}}
    <section class="bg-ink pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <p class="font-sans text-xs text-white/30 uppercase tracking-[0.2em] mb-5">Contact</p>
            <h1 class="font-serif text-5xl lg:text-7xl italic font-normal text-white leading-[1.08]">
                Let's talk.
            </h1>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="bg-white py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-start">

                {{-- Left: Info --}}
                <div>
                    <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-5">Find us</p>
                    <h2 class="font-serif text-3xl lg:text-4xl font-normal text-ink leading-snug mb-10">
                        Reach out and<br>we'll respond quickly.
                    </h2>

                    <div class="space-y-10 border-t border-ink/8 pt-10">
                        <div>
                            <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-2">Email</p>
                            <a href="mailto:navadigital931@gmail.com"
                               class="font-sans text-base text-ink hover:text-ink/60 transition-colors">
                                navadigital931@gmail.com
                            </a>
                        </div>
                        <div>
                            <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-2">Phone</p>
                            <a href="tel:+6287883611530"
                               class="font-sans text-base text-ink hover:text-ink/60 transition-colors">
                                +62 878-8361-1530
                            </a>
                            <p class="font-sans text-sm text-ink/40 mt-1">Mon–Fri, 9am–6pm WIB</p>
                        </div>
                        <div>
                            <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-2">Location</p>
                            <p class="font-sans text-base text-ink">Ponorogo, Jawa Timur</p>
                            <p class="font-sans text-sm text-ink/40">Indonesia</p>
                        </div>
                    </div>
                </div>

                {{-- Right: Form --}}
                <div>
                    <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-5">Send a message</p>
                    <h2 class="font-serif text-2xl font-normal text-ink mb-10">Start a conversation</h2>

                    @if(session('success'))
                        <div class="mb-8 p-4 border border-ink/15 bg-ink/3">
                            <p class="font-sans text-sm text-ink/70">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block font-sans text-xs text-ink/50 uppercase tracking-[0.15em] mb-2">Name</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-0 py-3 bg-transparent border-b border-ink/20 focus:border-ink outline-none font-sans text-sm text-ink placeholder:text-ink/25 transition-colors"
                                    placeholder="Your name">
                            </div>
                            <div>
                                <label for="email" class="block font-sans text-xs text-ink/50 uppercase tracking-[0.15em] mb-2">Email</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-0 py-3 bg-transparent border-b border-ink/20 focus:border-ink outline-none font-sans text-sm text-ink placeholder:text-ink/25 transition-colors"
                                    placeholder="your@email.com">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block font-sans text-xs text-ink/50 uppercase tracking-[0.15em] mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-0 py-3 bg-transparent border-b border-ink/20 focus:border-ink outline-none font-sans text-sm text-ink placeholder:text-ink/25 transition-colors"
                                placeholder="What is this about?">
                        </div>

                        <div>
                            <label for="message" class="block font-sans text-xs text-ink/50 uppercase tracking-[0.15em] mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-0 py-3 bg-transparent border-b border-ink/20 focus:border-ink outline-none font-sans text-sm text-ink placeholder:text-ink/25 transition-colors resize-none"
                                placeholder="Tell us about your project..."></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit"
                                class="inline-flex items-center justify-center px-10 py-4 bg-ink hover:bg-ink/85 text-white font-sans text-sm font-semibold tracking-wide transition-colors duration-200">
                                Send message
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

</x-layouts.app>
