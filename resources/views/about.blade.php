<x-layouts.app title="About - Nava | IT Consultancy"
    description="Learn about Nava, an IT consultancy based in Ponorogo, Indonesia. We build custom software for businesses that need results."
    keywords="about nava, IT consultancy, software development, Ponorogo, Indonesia">

    {{-- Page Hero --}}
    <section class="bg-ink pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <p class="font-sans text-xs text-white/30 uppercase tracking-[0.2em] mb-5">About Us</p>
            <h1 class="font-serif text-5xl lg:text-7xl italic font-normal text-white leading-[1.08]">
                A team that takes<br>craft seriously.
            </h1>
        </div>
    </section>

    {{-- Mission --}}
    <section class="bg-white py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-24 items-center">
                <div class="aspect-[4/3] overflow-hidden bg-ink/5">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1200&auto=format&fit=crop"
                        alt="Team collaborating" class="w-full h-full object-cover grayscale">
                </div>
                <div>
                    <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-5">Our Philosophy</p>
                    <h2 class="font-serif text-3xl lg:text-4xl font-normal text-ink leading-snug mb-6">
                        Precision meets purpose.
                    </h2>
                    <p class="font-sans text-base text-ink/55 leading-relaxed mb-4">
                        Nava is an IT consultancy based in Ponorogo, Indonesia. We work with businesses to design and build software that fits their specific needs — no unnecessary complexity, no off-the-shelf shortcuts.
                    </p>
                    <p class="font-sans text-base text-ink/55 leading-relaxed">
                        Every project starts with understanding the problem first. Only then do we write a single line of code. This discipline is what separates work that lasts from work that breaks down.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Values --}}
    <section class="bg-paper py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="mb-14">
                <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-4">What guides us</p>
                <h2 class="font-serif text-4xl lg:text-5xl italic font-normal text-ink">Core principles</h2>
            </div>

            <div class="divide-y divide-ink/8">
                <div class="flex gap-10 py-10 items-start">
                    <span class="font-serif text-4xl font-normal text-ink/15 leading-none flex-shrink-0 w-12">01</span>
                    <div>
                        <h3 class="font-serif text-xl font-normal text-ink mb-3">Meticulous detail</h3>
                        <p class="font-sans text-sm text-ink/50 leading-relaxed max-w-xl">We believe perfection lies in the details others overlook. Every decision — from database schema to button state — is made intentionally.</p>
                    </div>
                </div>
                <div class="flex gap-10 py-10 items-start">
                    <span class="font-serif text-4xl font-normal text-ink/15 leading-none flex-shrink-0 w-12">02</span>
                    <div>
                        <h3 class="font-serif text-xl font-normal text-ink mb-3">Engineering with purpose</h3>
                        <p class="font-sans text-sm text-ink/50 leading-relaxed max-w-xl">Technology is our medium, but solving the real problem is the goal. We avoid over-engineering and resist complexity for its own sake.</p>
                    </div>
                </div>
                <div class="flex gap-10 py-10 items-start">
                    <span class="font-serif text-4xl font-normal text-ink/15 leading-none flex-shrink-0 w-12">03</span>
                    <div>
                        <h3 class="font-serif text-xl font-normal text-ink mb-3">Human centric</h3>
                        <p class="font-sans text-sm text-ink/50 leading-relaxed max-w-xl">We build for people. Every interface, every flow, every interaction is designed to be intuitive and reduce friction for the end user.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-white py-24 lg:py-32">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <div class="border-t border-ink/10 pt-16 pb-16 border-b border-ink/10">
                <p class="font-sans text-xs text-ink/35 uppercase tracking-[0.2em] mb-8">Work with us</p>
                <h2 class="font-serif text-4xl lg:text-5xl italic font-normal text-ink leading-tight mb-8">
                    Ready to start<br>a project?
                </h2>
                <a href="{{ route('contact.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-ink hover:bg-ink/85 text-white font-sans text-sm font-semibold tracking-wide transition-colors duration-200">
                    Get in touch
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
