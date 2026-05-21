<x-layouts.app
    title="Portfolio - Nava | Selected Projects"
    description="A selection of projects we've built — event platforms, ticketing systems, and digital experiences."
    keywords="nava portfolio, web development portfolio, IT projects, software projects, nava works">

    {{-- Page Hero --}}
    <section class="bg-ink pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <p class="font-sans text-xs text-white/30 uppercase tracking-[0.2em] mb-5">Portfolio</p>
            <h1 class="font-serif text-5xl lg:text-7xl italic font-normal text-white leading-[1.08]">
                Selected work.
            </h1>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="bg-white py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            <div class="divide-y divide-ink/8">

                {{-- Project 1 --}}
                <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center py-16 lg:py-20 group">
                    <a href="https://pandalungan.online/" target="_blank" rel="noopener"
                       class="block aspect-[4/3] overflow-hidden bg-ink/5">
                        <img src="/images/porto/pandalungan-festival.webp" alt="Pandalungan Festival"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-[1.02]">
                    </a>
                    <div>
                        <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-4">Event Platform · 2024</p>
                        <h2 class="font-serif text-3xl lg:text-4xl font-normal text-ink leading-snug mb-4">
                            Pandalungan Festival
                        </h2>
                        <p class="font-sans text-base text-ink/55 leading-relaxed mb-8">
                            A vibrant digital platform for Indonesia's cultural Pandalungan Festival. Features live scheduling, interactive maps, and gallery showcases — built for a seamless visitor experience.
                        </p>
                        <a href="https://pandalungan.online/" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 font-sans text-sm font-semibold text-ink/50 hover:text-ink transition-colors group/link">
                            Visit site <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
                        </a>
                    </div>
                </div>

                {{-- Project 2 --}}
                <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center py-16 lg:py-20 group">
                    <a href="https://www.hakordia.online/" target="_blank" rel="noopener"
                       class="block aspect-[4/3] overflow-hidden bg-ink/5 lg:order-last">
                        <img src="/images/porto/hakordia-fun-night-run.webp" alt="Hakordia Night Run"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-[1.02]">
                    </a>
                    <div class="lg:order-first">
                        <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-4">Event Management · 2024</p>
                        <h2 class="font-serif text-3xl lg:text-4xl font-normal text-ink leading-snug mb-4">
                            Hakordia Night Run
                        </h2>
                        <p class="font-sans text-base text-ink/55 leading-relaxed mb-8">
                            A robust registration and event management system for a large-scale community run. Integrated check-in, QR code ticketing, and real-time participant tracking.
                        </p>
                        <a href="https://www.hakordia.online/" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 font-sans text-sm font-semibold text-ink/50 hover:text-ink transition-colors group/link">
                            Visit site <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
                        </a>
                    </div>
                </div>

                {{-- Project 3 --}}
                <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center py-16 lg:py-20 group">
                    <a href="https://www.anntix.id" target="_blank" rel="noopener"
                       class="block aspect-[4/3] overflow-hidden bg-ink/5">
                        <img src="/images/porto/antntix.id.png" alt="Anntix Ticketing Platform"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-[1.02]">
                    </a>
                    <div>
                        <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-4">Ticketing Platform · 2026</p>
                        <h2 class="font-serif text-3xl lg:text-4xl font-normal text-ink leading-snug mb-4">
                            Anntix
                        </h2>
                        <p class="font-sans text-base text-ink/55 leading-relaxed mb-8">
                            Indonesia's trusted event ticketing platform. A seamless ecosystem for discovering and purchasing tickets for concerts, festivals, seminars, and workshops.
                        </p>
                        <a href="https://www.anntix.id" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 font-sans text-sm font-semibold text-ink/50 hover:text-ink transition-colors group/link">
                            Visit site <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
                        </a>
                    </div>
                </div>

                {{-- More coming --}}
                <div class="py-16 lg:py-20">
                    <div class="border border-dashed border-ink/15 p-12 text-center">
                        <p class="font-serif text-xl italic font-normal text-ink/40 mb-2">More work in progress</p>
                        <p class="font-sans text-sm text-ink/30">New case studies coming soon.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-paper py-24 lg:py-32">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <div class="border-t border-ink/10 pt-16 pb-16 border-b border-ink/10">
                <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-8">Your project</p>
                <h2 class="font-serif text-4xl lg:text-5xl italic font-normal text-ink leading-tight mb-8">
                    Want to be<br>on this list?
                </h2>
                <p class="font-sans text-base text-ink/50 leading-relaxed mb-12 max-w-md mx-auto">
                    Tell us what you're building. We'll come back with a clear plan and honest estimate.
                </p>
                <a href="{{ route('contact.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-ink hover:bg-ink/85 text-white font-sans text-sm font-semibold tracking-wide transition-colors duration-200">
                    Start a conversation
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
