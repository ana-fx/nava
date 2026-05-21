<x-layouts.app title="403 - Forbidden | Nava"
    description="You do not have permission to access this page.">

    <section class="bg-ink min-h-screen flex items-center justify-center">
        <div class="max-w-2xl mx-auto px-6 text-center">
            <p class="font-sans text-xs text-white/25 uppercase tracking-[0.2em] mb-10">Error 403</p>
            <h1 class="font-serif text-6xl lg:text-8xl italic font-normal text-white leading-[1.08] mb-6">
                Access denied.
            </h1>
            <p class="font-sans text-base text-white/45 leading-relaxed mb-14 max-w-md mx-auto">
                You don't have permission to access this page. If you believe this is a mistake, please contact us.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}"
                   class="inline-flex items-center justify-center px-8 py-4 bg-white text-ink font-sans text-sm font-semibold tracking-wide hover:bg-white/85 transition-colors duration-200">
                    Back to home
                </a>
                <a href="{{ route('contact.index') }}"
                   class="inline-flex items-center justify-center px-8 py-4 border border-white/20 text-white/60 font-sans text-sm font-semibold tracking-wide hover:text-white hover:border-white/40 transition-colors duration-200">
                    Request access
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
