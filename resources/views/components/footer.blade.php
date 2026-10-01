@php
    $socials = [
        ['label' => 'LinkedIn', 'href' => 'https://www.linkedin.com/company/al-zaha-general-trading-dubai/', 'path' => 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z'],
        ['label' => 'Instagram', 'href' => 'https://www.instagram.com/alzahageneraltrading.dubai/', 'path' => 'M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z'],
        ['label' => 'Facebook', 'href' => 'https://www.facebook.com/profile.php?id=61567434894437', 'path' => 'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z'],
    ];
    $columns = [
        'Solutions' => [
            ['route' => 'solutions', 'label' => 'Solutions Overview'],
            ['route' => 'solutions.sourcing', 'label' => 'Strategic Sourcing'],
            ['route' => 'solutions.supply-chain', 'label' => 'Freight & Shipment'],
            ['route' => 'solutions.logistics', 'label' => 'Logistics & Documentation'],
            ['route' => 'solutions.consulting', 'label' => 'Destination Delivery'],
        ],
        'Company' => [
            ['route' => 'about', 'label' => 'About Us'],
            ['route' => 'industries', 'label' => 'Industries'],
            ['route' => 'how-it-works', 'label' => 'How It Works'],
            ['route' => 'blogs.index', 'label' => 'Insights'],
            ['route' => 'contact', 'label' => 'Contact'],
        ],
    ];
@endphp

<footer class="relative isolate overflow-hidden bg-ink text-cream grain">
    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[500px] rounded-full bg-gold/15 blur-[120px] -z-10" aria-hidden="true"></div>

    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-12 pt-20 pb-16 md:pt-24 md:pb-20">
            {{-- Company Info --}}
            <div class="lg:col-span-4">
                <a href="{{ route('home') }}" class="inline-flex">
                    <img src="{{ asset('images/design_image/123456.png') }}" alt="Al Zaha General Trading" class="h-10 w-auto brightness-0 invert" loading="lazy" onerror="this.style.display='none';">
                </a>
                <p class="mt-6 text-white/60 leading-relaxed max-w-sm">
                    Al Zaha is Dubai's premier partner for complex industrial sourcing and strategic supply chain management across the MENA region.
                </p>
                <div class="flex gap-3 mt-8">
                    @foreach($socials as $social)
                        <a href="{{ $social['href'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['label'] }}" class="w-11 h-11 inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 text-white/80 transition-all duration-300 hover:bg-gold hover:border-gold hover:text-ink hover:-translate-y-1">
                            <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="{{ $social['path'] }}"/></svg>
                        </a>
                    @endforeach
                </div>
            </div>

            @foreach($columns as $heading => $links)
                <div class="lg:col-span-2 {{ $loop->first ? 'lg:col-start-6' : '' }}">
                    <h3 class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-light">{{ $heading }}</h3>
                    <ul class="mt-6 space-y-3.5">
                        @foreach($links as $link)
                            <li><a href="{{ route($link['route']) }}" class="text-white/65 hover:text-white transition-colors">{{ $link['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            {{-- Contact Details --}}
            <div class="sm:col-span-2 lg:col-span-3">
                <h3 class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-light">Headquarters</h3>
                <ul class="mt-6 space-y-5 text-white/65">
                    <li class="flex gap-3">
                        <x-glyph name="map-pin" class="w-5 h-5 shrink-0 mt-0.5 text-gold" />
                        <span class="leading-relaxed">
                            Warehouse No-05, 18B Street,<br>
                            Umm Ramool, Al Rashidiya,<br>
                            Dubai, UAE
                        </span>
                    </li>
                    <li class="flex gap-3">
                        <x-glyph name="phone" class="w-5 h-5 shrink-0 mt-0.5 text-gold" />
                        <span class="flex flex-col gap-1">
                            <a href="tel:+97143967075" class="hover:text-white transition-colors">+971 4 396 7075 <span class="text-white/40">· Office</span></a>
                            <a href="tel:+971545997800" class="hover:text-white transition-colors">+971 54 599 7800 <span class="text-white/40">· Sourcing</span></a>
                        </span>
                    </li>
                    <li class="flex gap-3">
                        <x-glyph name="mail" class="w-5 h-5 shrink-0 mt-0.5 text-gold" />
                        <a href="mailto:info@alzahageneraltrading.com" class="hover:text-white transition-colors break-all">info@alzahageneraltrading.com</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="py-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-white/40">
            <p>© {{ date('Y') }} Al Zaha General Trading LLC. All rights reserved.</p>
            <p>Business hours: Monday – Saturday · Developed by LITUS IT</p>
        </div>
    </div>

    {{-- Oversized wordmark --}}
    <div class="pointer-events-none select-none overflow-hidden" aria-hidden="true">
        <div class="text-center font-semibold tracking-[-0.06em] leading-[0.75] text-[22vw] bg-gradient-to-b from-white/[0.07] to-transparent bg-clip-text text-transparent translate-y-[12%]">AL ZAHA</div>
    </div>
</footer>
