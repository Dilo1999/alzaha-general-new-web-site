@php
    $solutionLinks = [
        ['route' => 'solutions.sourcing', 'icon' => 'clipboard-list', 'title' => 'Strategic Sourcing & Procurement', 'desc' => 'Verified suppliers, structured cost control'],
        ['route' => 'solutions.supply-chain', 'icon' => 'ship', 'title' => 'Freight & Shipment Management', 'desc' => 'Air, sea and land with scheduling discipline'],
        ['route' => 'solutions.logistics', 'icon' => 'file-check', 'title' => 'Integrated Logistics & Documentation', 'desc' => 'Customs and compliance, handled'],
        ['route' => 'solutions.consulting', 'icon' => 'map-pin', 'title' => 'Destination Delivery Support', 'desc' => 'Final mile, from port to your site'],
    ];
    $navLinks = [
        ['route' => 'industries', 'label' => 'Industries'],
        ['route' => 'how-it-works', 'label' => 'How It Works'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'blogs.index', 'label' => 'Insights', 'match' => 'blogs.*'],
        ['route' => 'contact', 'label' => 'Contact'],
    ];
@endphp

<header data-site-header class="site-header fixed inset-x-0 top-0 z-50 px-3 sm:px-4 pt-3">
    <div class="site-header-bar mx-auto max-w-[1320px] h-[68px] flex items-center justify-between gap-4 rounded-full bg-white/95 backdrop-blur-xl border border-white shadow-[0_8px_30px_-12px_rgba(23,19,11,0.25)] pl-5 pr-2.5 sm:pl-6">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center shrink-0 z-50" aria-label="Al Zaha General Trading — Home">
            <img src="{{ asset('images/design_image/123456.png') }}" alt="Al Zaha General Trading" class="h-8 md:h-9 w-auto">
        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden lg:flex items-center gap-0.5" aria-label="Primary">
            <div class="relative group">
                <a href="{{ route('solutions') }}" class="nav-link inline-flex items-center gap-1 {{ request()->routeIs('solutions*') ? 'is-active' : '' }}">
                    Solutions
                    <x-glyph name="chevron-down" class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180 group-focus-within:rotate-180" />
                </a>

                <div class="absolute left-1/2 -translate-x-1/2 top-full pt-4 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 group-focus-within:opacity-100 group-focus-within:visible group-focus-within:translate-y-0 transition-all duration-300 ease-[cubic-bezier(0.16,1,0.3,1)]">
                    <div class="w-[640px] rounded-[1.75rem] bg-white p-3 shadow-[0_40px_80px_-30px_rgba(23,19,11,0.45)] border border-ink/5">
                        <div class="grid grid-cols-2 gap-1">
                            @foreach($solutionLinks as $link)
                                <a href="{{ route($link['route']) }}" class="group/item flex gap-4 rounded-2xl p-4 transition-colors hover:bg-cream">
                                    <span class="icon-tile !w-11 !h-11 !rounded-xl"><x-glyph :name="$link['icon']" class="w-5 h-5" /></span>
                                    <span>
                                        <span class="block text-[0.9rem] font-semibold text-ink leading-snug">{{ $link['title'] }}</span>
                                        <span class="block mt-1 text-[0.8rem] text-ink-muted leading-snug">{{ $link['desc'] }}</span>
                                    </span>
                                </a>
                            @endforeach
                        </div>
                        <a href="{{ route('solutions') }}" class="mt-2 flex items-center justify-between rounded-2xl bg-ink px-5 py-4 text-cream group/all">
                            <span class="text-sm"><span class="font-semibold">All solutions</span> <span class="text-cream/60">— one coordinated system, sourcing to delivery</span></span>
                            <x-glyph name="arrow-right" class="w-4 h-4 text-gold-light transition-transform group-hover/all:translate-x-1" />
                        </a>
                    </div>
                </div>
            </div>

            @foreach($navLinks as $link)
                <a href="{{ route($link['route']) }}" class="nav-link {{ request()->routeIs($link['match'] ?? $link['route']) ? 'is-active' : '' }}">{{ $link['label'] }}</a>
            @endforeach
        </nav>

        <div class="flex items-center gap-2">
            <a href="{{ route('quote') }}" class="hidden sm:inline-flex btn btn-gold btn-sm">
                Request a Quote
                <x-glyph name="arrow-right" class="btn-arrow w-4 h-4" stroke="2" />
            </a>

            {{-- Mobile Menu Button --}}
            <button class="lg:hidden relative z-50 w-12 h-12 inline-flex items-center justify-center rounded-full bg-ink text-cream" data-mobile-menu-toggle aria-label="Toggle menu" aria-expanded="false">
                <span data-mobile-menu-icon="open"><x-glyph name="menu" class="w-5 h-5" stroke="2" /></span>
                <span data-mobile-menu-icon="close" class="hidden"><x-glyph name="x" class="w-5 h-5" stroke="2" /></span>
            </button>
        </div>
    </div>
</header>

{{-- Mobile Menu Overlay (slides in from right) --}}
<div
    data-mobile-menu-overlay
    class="fixed inset-0 z-[45] lg:hidden flex flex-col bg-cream pt-28 pb-8 px-6 sm:px-10 overflow-y-auto translate-x-full opacity-0 pointer-events-none transition-[transform,opacity] duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]"
>
    <nav class="flex flex-col divide-y divide-ink/10 border-y border-ink/10 mb-8" aria-label="Mobile">
        <div class="py-2">
            <button
                type="button"
                data-mobile-solutions-toggle
                class="w-full flex items-center justify-between py-3 text-2xl font-semibold tracking-tight text-ink"
                aria-expanded="false"
            >
                Solutions
                <span data-mobile-solutions-chevron class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-ink/5 text-gold-deep transition-transform duration-300">
                    <x-glyph name="chevron-down" class="w-5 h-5" stroke="2" />
                </span>
            </button>

            <div data-mobile-solutions-panel class="overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out flex flex-col gap-1">
                <a href="{{ route('solutions') }}" class="flex items-center justify-between rounded-2xl px-4 py-3 bg-ink text-cream font-semibold mt-1" data-mobile-menu-close>
                    All Solutions <x-glyph name="arrow-right" class="w-4 h-4 text-gold-light" />
                </a>
                @foreach($solutionLinks as $link)
                    <a href="{{ route($link['route']) }}" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-ink hover:bg-white" data-mobile-menu-close>
                        <span class="icon-tile !w-9 !h-9 !rounded-lg"><x-glyph :name="$link['icon']" class="w-4 h-4" /></span>
                        <span class="text-[0.95rem] font-medium">{{ $link['title'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>

        @foreach($navLinks as $link)
            <a href="{{ route($link['route']) }}" class="flex items-center justify-between py-5 text-2xl font-semibold tracking-tight text-ink" data-mobile-menu-close>
                {{ $link['label'] }}
                <x-glyph name="arrow-up-right" class="w-5 h-5 text-ink/30" />
            </a>
        @endforeach
    </nav>

    <a href="{{ route('quote') }}" class="btn btn-gold btn-lg w-full" data-mobile-menu-close>
        Request a Quote
        <x-glyph name="arrow-right" class="btn-arrow w-5 h-5" stroke="2" />
    </a>

    <div class="mt-auto pt-10 grid gap-2 text-sm text-ink-muted">
        <a href="tel:+97143967075" class="inline-flex items-center gap-2"><x-glyph name="phone" class="w-4 h-4 text-gold-deep" /> +971 4 396 7075</a>
        <a href="mailto:info@alzahageneraltrading.com" class="inline-flex items-center gap-2"><x-glyph name="mail" class="w-4 h-4 text-gold-deep" /> info@alzahageneraltrading.com</a>
    </div>
</div>
