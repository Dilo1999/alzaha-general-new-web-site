<header class="fixed top-0 left-0 right-0 z-50 h-[88px] flex items-center bg-white/80 backdrop-blur-lg border-b border-white/20 shadow-sm">
    <div class="w-full max-w-[1320px] mx-auto px-4 md:px-8 flex items-center justify-between">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center transition-transform hover:scale-[1.02] z-50">
            <img src="{{ asset('images/design_image/123456.png') }}" alt="Al Zaha General Trading" class="h-10 md:h-12 w-auto">
        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden lg:flex items-center gap-8 xl:gap-10">
            {{-- Solutions dropdown --}}
            <div class="relative group">
                <a href="{{ route('solutions') }}" class="hover:opacity-70 transition-opacity flex items-center gap-1 font-medium text-[#6d5a2c]">
                    Solutions
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <div class="absolute top-full -left-4 mt-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                    <div class="py-4 px-6 bg-white shadow-2xl rounded-xl min-w-[280px] border border-[#6d5a2c]/5">
                        <a href="{{ route('solutions.sourcing') }}" class="block py-2.5 hover:translate-x-1 transition-transform text-[#6d5a2c]">Strategic Sourcing & Procurement</a>
                        <a href="{{ route('solutions.supply-chain') }}" class="block py-2.5 hover:translate-x-1 transition-transform text-[#6d5a2c]">Freight & Shipment Management</a>
                        <a href="{{ route('solutions.logistics') }}" class="block py-2.5 hover:translate-x-1 transition-transform text-[#6d5a2c]">Integrated Logistics & Documentation</a>      
                        <a href="{{ route('solutions.consulting') }}" class="block py-2.5 hover:translate-x-1 transition-transform text-[#6d5a2c]">Destination Delivery Support</a>
                    </div>
                </div>
            </div>
            <a href="{{ route('industries') }}" class="hover:opacity-70 transition-opacity font-medium text-[#6d5a2c]">Industries</a>
            <a href="{{ route('how-it-works') }}" class="hover:opacity-70 transition-opacity font-medium text-[#6d5a2c]">How It Works</a>
            <a href="{{ route('about') }}" class="hover:opacity-70 transition-opacity font-medium text-[#6d5a2c]">About Us</a>
            <a href="{{ route('blogs.index') }}" class="hover:opacity-70 transition-opacity font-medium text-[#6d5a2c]">Blog</a>
            <a href="{{ route('contact') }}" class="hover:opacity-70 transition-opacity font-medium text-[#6d5a2c]">Contact</a>
        </nav>

        {{-- Desktop CTA Button --}}
        <div class="hidden lg:block">
            <a href="{{ route('quote') }}" class="px-8 py-3 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-sm hover:shadow-md bg-[#c19b46]">
                Request a Quote
            </a>
        </div>

        {{-- Mobile Menu Button --}}
        <button class="lg:hidden p-2 z-50 relative" data-mobile-menu-toggle aria-label="Toggle menu" aria-expanded="false">
            <span data-mobile-menu-icon="open">
                <svg class="w-8 h-8 text-[#6d5a2c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </span>
            <span data-mobile-menu-icon="close" class="hidden">
                <svg class="w-8 h-8 text-[#6d5a2c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </span>
        </button>
    </div>
</header>

{{-- Mobile Menu Overlay --}}
<div
    data-mobile-menu-overlay
    class="fixed inset-0 bg-white/90 backdrop-blur-xl z-[45] lg:hidden flex flex-col pt-32 px-8 overflow-y-auto translate-x-full opacity-0 pointer-events-none transition-all duration-300"
>
    <nav class="flex flex-col gap-6 mb-12">
        <div>
            <button
                type="button"
                data-mobile-solutions-toggle
                class="w-full flex items-center justify-between text-2xl font-bold transition-colors text-[#6d5a2c]"
                aria-expanded="false"
            >
                Solutions
                <svg data-mobile-solutions-chevron class="w-6 h-6 transition-transform duration-300 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>

            <div data-mobile-solutions-panel class="overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out flex flex-col gap-4 pl-4 mt-4 border-l-2 border-[#f4c157]">
                <a href="{{ route('solutions') }}" class="text-lg font-semibold opacity-90 text-[#6d5a2c]" data-mobile-menu-close>All Solutions Overview</a>
                <a href="{{ route('solutions.sourcing') }}" class="text-lg opacity-80 text-[#6d5a2c]" data-mobile-menu-close>Strategic Sourcing & Procurement</a>
                <a href="{{ route('solutions.supply-chain') }}" class="text-lg opacity-80 text-[#6d5a2c]" data-mobile-menu-close>Freight & Shipment Management</a>
                <a href="{{ route('solutions.logistics') }}" class="text-lg opacity-80 text-[#6d5a2c]" data-mobile-menu-close>Integrated Logistics & Documentation</a>
                <a href="{{ route('solutions.consulting') }}" class="text-lg opacity-80 text-[#6d5a2c]" data-mobile-menu-close>Destination Delivery Support</a>
            </div>
        </div>

        <a href="{{ route('industries') }}" class="text-2xl font-bold text-[#6d5a2c]" data-mobile-menu-close>Industries</a>
        <a href="{{ route('how-it-works') }}" class="text-2xl font-bold text-[#6d5a2c]" data-mobile-menu-close>How It Works</a>
        <a href="{{ route('about') }}" class="text-2xl font-bold text-[#6d5a2c]" data-mobile-menu-close>About Us</a>
        <a href="{{ route('blogs.index') }}" class="text-2xl font-bold text-[#6d5a2c]" data-mobile-menu-close>Blog</a>
        <a href="{{ route('contact') }}" class="text-2xl font-bold text-[#6d5a2c]" data-mobile-menu-close>Contact</a>
    </nav>

    <a
        href="{{ route('quote') }}"
        class="w-full py-5 text-white font-bold text-xl rounded-full shadow-lg mb-12 bg-[#c19b46] text-center"
        data-mobile-menu-close
    >
        Request a Quote
    </a>
</div>
