<header class="sticky top-0 z-50 border-b border-stone-200/80 bg-[#fffaf5]/95 shadow-sm backdrop-blur">
    <nav class="mx-auto max-w-7xl px-6 lg:px-8" aria-label="Main navigation">
        <div class="flex h-20 items-center justify-between">
            <a href="#home" class="flex items-center gap-3 text-stone-900" aria-label="Hearth & Harbor home">
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-amber-700 text-lg font-semibold text-white">H</span>
                <span class="text-lg font-semibold tracking-tight">Hearth <span class="font-normal text-amber-700">&amp;</span> Harbor</span>
            </a>

            <div class="hidden items-center gap-8 md:flex">
                <a href="#home" class="text-sm font-medium text-stone-600 transition hover:text-amber-700">Home</a>
                <a href="#features" class="text-sm font-medium text-stone-600 transition hover:text-amber-700">Features</a>
                <a href="#pricing" class="text-sm font-medium text-stone-600 transition hover:text-amber-700">Pricing</a>
                <a href="#testimonials" class="text-sm font-medium text-stone-600 transition hover:text-amber-700">Testimonials</a>
                <a href="#contact" class="text-sm font-medium text-stone-600 transition hover:text-amber-700">Contact</a>
            </div>

            <div class="hidden items-center gap-5 md:flex">
                <a href="#sign-in" class="text-sm font-medium text-stone-700 transition hover:text-amber-700">Sign In</a>
                <x-button href="#get-started">Get Started</x-button>
            </div>

            <x-button variant="outline" size="sm" class="md:hidden" data-navbar-toggle aria-controls="mobile-navigation" aria-expanded="false" aria-label="Open navigation menu">
                <span class="sr-only">Open navigation menu</span>
                <span class="flex w-6 flex-col gap-1.5" aria-hidden="true">
                    <span class="h-0.5 w-full bg-current"></span>
                    <span class="h-0.5 w-full bg-current"></span>
                    <span class="h-0.5 w-full bg-current"></span>
                </span>
            </x-button>
        </div>

        <div id="mobile-navigation" class="hidden border-t border-stone-200 py-4 md:hidden" data-navbar-menu>
            <div class="flex flex-col gap-1">
                <a href="#home" class="flex min-h-11 items-center rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 transition hover:bg-amber-50 hover:text-amber-700">Home</a>
                <a href="#features" class="flex min-h-11 items-center rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 transition hover:bg-amber-50 hover:text-amber-700">Features</a>
                <a href="#pricing" class="flex min-h-11 items-center rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 transition hover:bg-amber-50 hover:text-amber-700">Pricing</a>
                <a href="#testimonials" class="flex min-h-11 items-center rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 transition hover:bg-amber-50 hover:text-amber-700">Testimonials</a>
                <a href="#contact" class="flex min-h-11 items-center rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 transition hover:bg-amber-50 hover:text-amber-700">Contact</a>
                <div class="mt-3 flex items-center gap-4 border-t border-stone-200 pt-4">
                    <a href="#sign-in" class="flex min-h-11 items-center px-3 py-2 text-sm font-medium text-stone-700 transition hover:text-amber-700">Sign In</a>
                    <x-button href="#get-started">Get Started</x-button>
                </div>
            </div>
        </div>
    </nav>
</header>