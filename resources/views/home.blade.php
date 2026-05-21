<x-layouts.app
    title="Nava - Technology Solutions & Professional Services | Software Development & IT Consulting"
    description="Nava provides technology solutions and professional services including software development, technology consulting, and support services. Located in Ponorogo, Jawa Timur, Indonesia."
    keywords="technology solutions, software development, IT consulting, web development, digital transformation, technology services, Nava, Ponorogo, Indonesia"
>

    {{-- ─── HERO — Split Panel Full Height ───────────────────────────────────── --}}
    {{-- Colors used: ink (bg), white (text), + image panel --}}
    <section class="flex flex-col lg:flex-row min-h-screen">

        {{-- Mobile: image on top --}}
        <div class="lg:hidden w-full aspect-[4/3] overflow-hidden">
            <img
                src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=1200&auto=format&fit=crop"
                alt="Nava workspace"
                class="w-full h-full object-cover"
            >
        </div>

        {{-- Left panel --}}
        <div class="bg-ink text-white lg:w-[42%] flex flex-col justify-between px-8 py-12 lg:px-14 lg:py-20">
            <div>
                <p class="text-xs font-sans font-medium text-white/40 tracking-[0.2em] uppercase mb-16 lg:mb-24 mt-16">
                    Software Development &nbsp;·&nbsp; IT Consulting
                </p>

                <h1 class="font-serif text-5xl lg:text-6xl xl:text-7xl italic font-normal leading-[1.08] tracking-tight text-white mb-8">
                    We build<br>things<br>that work.
                </h1>

                <p class="font-sans text-base text-white/55 leading-relaxed max-w-xs mb-12">
                    Custom software, scalable systems, and ongoing performance — for businesses that need results.
                </p>

                <a href="{{ route('contact.index') }}" class="inline-flex items-center gap-3 font-sans text-sm font-semibold text-white/70 hover:text-white transition-colors duration-200 group">
                    Start a project
                    <span class="inline-block transition-transform duration-200 group-hover:translate-x-1">→</span>
                </a>
            </div>

            {{-- Stats --}}
            <div class="flex gap-10 mt-16 pt-8 border-t border-white/10">
                <div>
                    <p class="font-serif text-3xl font-normal text-white">50+</p>
                    <p class="font-sans text-xs text-white/35 mt-1 tracking-wide">Clients</p>
                </div>
                <div>
                    <p class="font-serif text-3xl font-normal text-white">15+</p>
                    <p class="font-sans text-xs text-white/35 mt-1 tracking-wide">Team</p>
                </div>
                <div>
                    <p class="font-serif text-3xl font-normal text-white">3+</p>
                    <p class="font-sans text-xs text-white/35 mt-1 tracking-wide">Years</p>
                </div>
            </div>
        </div>

        {{-- Right panel — image --}}
        <div class="hidden lg:block lg:w-[58%] overflow-hidden">
            <img
                src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=1600&auto=format&fit=crop"
                alt="Nava workspace"
                class="w-full h-full object-cover"
                style="min-height: 100vh;"
            >
        </div>
    </section>


    {{-- ─── WORK — Asymmetric Image Grid ─────────────────────────────────────── --}}
    {{-- Colors: white (bg), ink (text) --}}
    <section class="bg-white py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            <div class="flex items-end justify-between mb-10">
                <div>
                    <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-3">Portfolio</p>
                    <h2 class="font-serif text-4xl lg:text-5xl italic font-normal text-ink">Selected work</h2>
                </div>
                <a href="{{ route('portfolio') }}" class="hidden sm:inline-flex items-center gap-2 font-sans text-sm text-ink/40 hover:text-ink transition-colors group">
                    View all <span class="transition-transform duration-200 group-hover:translate-x-1">→</span>
                </a>
            </div>

            {{-- Asymmetric grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-2 lg:gap-3">

                {{-- Project 1 — Large --}}
                <a href="https://pandalungan.online/" target="_blank" rel="noopener"
                   class="group relative overflow-hidden lg:col-span-3 block bg-ink/5">
                    <div class="aspect-[4/3] lg:aspect-auto lg:h-full overflow-hidden" style="min-height: 400px;">
                        <img
                            src="/images/porto/pandalungan-festival.webp"
                            alt="Pandalungan Festival"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-[1.03]"
                            loading="lazy"
                        >
                    </div>
                    <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-ink/80 via-ink/25 to-transparent pt-20 pb-6 px-7">
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="font-sans text-xs text-white/45 uppercase tracking-widest mb-2">Event Platform</p>
                                <p class="font-serif text-2xl font-normal italic text-white">Pandalungan Festival</p>
                            </div>
                            <span class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center text-white text-sm opacity-0 group-hover:opacity-100 group-hover:border-white/70 transition-all duration-300 flex-shrink-0">↗</span>
                        </div>
                    </div>
                </a>

                {{-- Right column: 2 stacked --}}
                <div class="lg:col-span-2 flex flex-col gap-2 lg:gap-3">

                    {{-- Project 2 --}}
                    <a href="https://www.hakordia.online/" target="_blank" rel="noopener"
                       class="group relative overflow-hidden block bg-ink/5 flex-1">
                        <div class="aspect-[4/3] lg:aspect-auto lg:h-full overflow-hidden" style="min-height: 190px;">
                            <img
                                src="/images/porto/hakordia-fun-night-run.webp"
                                alt="Hakordia Night Run"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-[1.05]"
                                loading="lazy"
                            >
                        </div>
                        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-ink/75 via-ink/15 to-transparent pt-14 pb-5 px-5">
                            <div class="flex items-end justify-between">
                                <div>
                                    <p class="font-sans text-[10px] text-white/45 uppercase tracking-widest mb-1">Event Management</p>
                                    <p class="font-serif text-base font-normal italic text-white">Hakordia Night Run</p>
                                </div>
                                <span class="w-7 h-7 rounded-full border border-white/30 flex items-center justify-center text-white text-xs opacity-0 group-hover:opacity-100 transition-all duration-300 flex-shrink-0">↗</span>
                            </div>
                        </div>
                    </a>

                    {{-- Project 3 --}}
                    <a href="https://www.anntix.id" target="_blank" rel="noopener"
                       class="group relative overflow-hidden block bg-ink/5 flex-1">
                        <div class="aspect-[4/3] lg:aspect-auto lg:h-full overflow-hidden" style="min-height: 190px;">
                            <img
                                src="/images/porto/antntix.id.png"
                                alt="Anntix Ticketing"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-[1.05]"
                                loading="lazy"
                            >
                        </div>
                        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-ink/75 via-ink/15 to-transparent pt-14 pb-5 px-5">
                            <div class="flex items-end justify-between">
                                <div>
                                    <p class="font-sans text-[10px] text-white/45 uppercase tracking-widest mb-1">Ticketing Platform</p>
                                    <p class="font-serif text-base font-normal italic text-white">Anntix</p>
                                </div>
                                <span class="w-7 h-7 rounded-full border border-white/30 flex items-center justify-center text-white text-xs opacity-0 group-hover:opacity-100 transition-all duration-300 flex-shrink-0">↗</span>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    {{-- ─── ABOUT — Editorial Quote ────────────────────────────────────────────── --}}
    {{-- Colors: paper (bg), ink (text) --}}
    <section class="bg-paper py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            {{-- Large centered quote --}}
            <div class="max-w-4xl mx-auto text-center mb-20 lg:mb-28">
                <p class="font-serif text-3xl lg:text-5xl italic font-normal text-ink leading-[1.3]">
                    "We believe software should solve problems,<br class="hidden lg:block"> not create them."
                </p>
            </div>

            {{-- 2 column: image + text --}}
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-24 items-start">

                {{-- Image --}}
                <div class="aspect-[3/4] overflow-hidden bg-ink/5">
                    <img
                        src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1200&auto=format&fit=crop"
                        alt="Team at work"
                        class="w-full h-full object-cover grayscale"
                        loading="lazy"
                    >
                </div>

                {{-- Text --}}
                <div class="flex flex-col justify-center">
                    <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-6">About Nava</p>
                    <h2 class="font-serif text-3xl lg:text-4xl font-normal text-ink leading-snug mb-8">
                        A team that takes<br>craft seriously.
                    </h2>
                    <p class="font-sans text-base text-ink/55 leading-relaxed mb-4">
                        Nava is an IT consultancy based in Ponorogo, Indonesia. We work with businesses to design and build software that fits their specific needs — no unnecessary complexity, no off-the-shelf shortcuts.
                    </p>
                    <p class="font-sans text-base text-ink/55 leading-relaxed mb-12">
                        Every project starts with understanding the problem. Then we build the right solution for it.
                    </p>

                    <div class="space-y-6 border-t border-ink/8 pt-8">
                        <div>
                            <p class="font-serif text-base font-normal text-ink mb-1">Meticulous execution</p>
                            <p class="font-sans text-sm text-ink/45">Close attention to detail at every stage, from architecture to deployment.</p>
                        </div>
                        <div>
                            <p class="font-serif text-base font-normal text-ink mb-1">Engineering with purpose</p>
                            <p class="font-sans text-sm text-ink/45">Straightforward solutions to hard problems. No complexity for its own sake.</p>
                        </div>
                        <div>
                            <p class="font-serif text-base font-normal text-ink mb-1">Long-term thinking</p>
                            <p class="font-sans text-sm text-ink/45">Systems designed to grow with your business, not just to ship fast.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ─── SERVICES — Numbered Dark List ─────────────────────────────────────── --}}
    {{-- Colors: ink (bg), white (text) --}}
    <section class="bg-ink py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            <div class="flex items-end justify-between mb-0 pb-8 border-b border-white/10">
                <div>
                    <p class="font-sans text-xs text-white/30 uppercase tracking-[0.2em] mb-3">Services</p>
                    <h2 class="font-serif text-4xl lg:text-5xl italic font-normal text-white">What we offer</h2>
                </div>
                <a href="{{ route('services') }}" class="hidden sm:inline-flex items-center gap-2 font-sans text-sm text-white/35 hover:text-white transition-colors group">
                    All services <span class="transition-transform duration-200 group-hover:translate-x-1">→</span>
                </a>
            </div>

            <div class="divide-y divide-white/8">
                <a href="{{ route('services') }}#bespoke-engineering" class="flex items-start gap-8 py-10 group">
                    <span class="font-serif text-5xl lg:text-6xl font-normal text-white/10 group-hover:text-white/25 transition-colors duration-300 leading-none mt-1 flex-shrink-0 w-16">01</span>
                    <div class="flex-1">
                        <h3 class="font-serif text-2xl lg:text-3xl font-normal text-white/75 group-hover:text-white transition-colors duration-200 mb-3">Bespoke Engineering</h3>
                        <p class="font-sans text-sm text-white/35 leading-relaxed max-w-lg">Custom software built around your specifications. Code that fits your business, not the other way around.</p>
                    </div>
                    <span class="font-sans text-white/20 group-hover:text-white/70 transition-colors duration-200 text-xl mt-2 flex-shrink-0">→</span>
                </a>

                <a href="{{ route('services') }}#strategic-architecture" class="flex items-start gap-8 py-10 group">
                    <span class="font-serif text-5xl lg:text-6xl font-normal text-white/10 group-hover:text-white/25 transition-colors duration-300 leading-none mt-1 flex-shrink-0 w-16">02</span>
                    <div class="flex-1">
                        <h3 class="font-serif text-2xl lg:text-3xl font-normal text-white/75 group-hover:text-white transition-colors duration-200 mb-3">Strategic Architecture</h3>
                        <p class="font-sans text-sm text-white/35 leading-relaxed max-w-lg">System design that scales. We plan the structure your product needs to grow without breaking down.</p>
                    </div>
                    <span class="font-sans text-white/20 group-hover:text-white/70 transition-colors duration-200 text-xl mt-2 flex-shrink-0">→</span>
                </a>

                <a href="{{ route('services') }}#performance-curation" class="flex items-start gap-8 py-10 group">
                    <span class="font-serif text-5xl lg:text-6xl font-normal text-white/10 group-hover:text-white/25 transition-colors duration-300 leading-none mt-1 flex-shrink-0 w-16">03</span>
                    <div class="flex-1">
                        <h3 class="font-serif text-2xl lg:text-3xl font-normal text-white/75 group-hover:text-white transition-colors duration-200 mb-3">Performance Curation</h3>
                        <p class="font-sans text-sm text-white/35 leading-relaxed max-w-lg">Ongoing monitoring, optimization, and maintenance to keep your systems running at their best.</p>
                    </div>
                    <span class="font-sans text-white/20 group-hover:text-white/70 transition-colors duration-200 text-xl mt-2 flex-shrink-0">→</span>
                </a>
            </div>
        </div>
    </section>


    {{-- ─── CTA — Editorial Centered ──────────────────────────────────────────── --}}
    {{-- Colors: paper (bg), ink (text), ink (button) --}}
    <section class="bg-paper py-24 lg:py-36">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <div class="border-t border-ink/10 pt-16 pb-16 border-b border-ink/10">
                <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-8">Let's work together</p>
                <h2 class="font-serif text-4xl lg:text-6xl italic font-normal text-ink leading-tight mb-8">
                    Have a project<br>in mind?
                </h2>
                <p class="font-sans text-base text-ink/50 leading-relaxed mb-12 max-w-md mx-auto">
                    Tell us what you're building. We'll come back with a clear plan and honest estimate.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-ink hover:bg-ink/85 text-white font-sans text-sm font-semibold tracking-wide transition-colors duration-200">
                        Get in touch
                    </a>
                    <a href="mailto:navadigital931@gmail.com" class="inline-flex items-center justify-center px-8 py-4 border border-ink/20 text-ink/60 hover:border-ink hover:text-ink font-sans text-sm font-medium transition-colors duration-200">
                        navadigital931@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
