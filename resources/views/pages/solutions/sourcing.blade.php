@extends('layouts.app')

@section('title', 'Strategic Sourcing – Al Zaha')

@section('content')
<div class="flex flex-col">
    @php
        $targetIndustries = [
            ['icon' => 'building', 'title' => 'Construction', 'description' => 'Large-scale material procurement for commercial and residential developments.'],
            ['icon' => 'hotel', 'title' => 'Resorts & Hospitality', 'description' => 'FF&E sourcing and specialty equipment for premium hospitality projects.'],
            ['icon' => 'bag', 'title' => 'Retail', 'description' => 'Multi-location inventory sourcing and vendor consolidation for retail chains.'],
            ['icon' => 'factory', 'title' => 'Industrial', 'description' => 'Heavy equipment, machinery, and specialized components for industrial operations.'],
        ];

        $advantages = [
            ['icon' => 'dollar', 'title' => 'Volume Leverage', 'description' => "Access Al Zaha's combined purchasing power to secure better pricing than individual negotiations."],
            ['icon' => 'shield', 'title' => 'Pre-Verified Suppliers', 'description' => 'Work with suppliers already vetted for quality, compliance, and reliability—eliminating due diligence overhead.'],
            ['icon' => 'clock', 'title' => 'One Point of Contact', 'description' => 'Coordinate multiple vendors through a single channel, reducing communication complexity and procurement overhead.'],
        ];
    @endphp

    <section class="relative h-[80vh] min-h-[600px] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero/sourcing.jpg') }}" alt="Strategic Sourcing" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-[#6d5a2c]/95 via-[#6d5a2c]/85 to-[#6d5a2c]/75"></div>
        </div>
        <div class="relative z-10 w-full max-w-[1320px] mx-auto px-8">
            <div class="max-w-[720px] animate-now" data-animate="fadeInUp">
                <h1 class="text-white mb-8 leading-tight">Reduce Costs, Secure Supply, Scale Confidently</h1>
                <p class="text-white/90 text-xl mb-10 leading-relaxed">
                    Al Zaha's Strategic Sourcing & Procurement service connects Dubai-based businesses with verified global suppliers through a single coordination point, delivering competitive pricing, quality assurance, and streamlined vendor management for construction, hospitality, retail, and industrial projects.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('quote') }}" class="px-8 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-lg hover:shadow-xl bg-[#c19b46]">Request a Quote</a>
                    <a href="{{ route('contact') }}" class="px-8 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full border-2 border-[#c19b46] hover:bg-[#c19b46]/10">Talk to a Coordinator</a>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 1: WHAT WE DO --}}
    <section class="py-[160px] bg-white">
        <div class="w-full max-w-[1320px] mx-auto px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                <div class="lg:col-span-6 animate-on-scroll" data-animate="slideLeft">
                    <h2 class="mb-6 text-[#6d5a2c]">How Strategic Sourcing Works</h2>
                    <div class="w-12 h-1 mb-6 rounded-full bg-[#c19b46]"></div>
                    <p class="text-lg leading-relaxed opacity-80 mb-8 max-w-[680px] text-[#6d5a2c]">
                        We act as your procurement partner, managing supplier relationships, negotiating terms, and consolidating orders across multiple vendors. From initial sourcing to delivery coordination, we handle the complexity so you can focus on your core operations.
                    </p>
                    <ul class="space-y-4">
                        @foreach([
                            'Supplier identification and qualification from our verified global network',
                            'Competitive price negotiation leveraging volume purchasing power',
                            'Quality control and compliance verification before shipment',
                            'Multi-vendor order consolidation for efficiency and cost savings',
                            'Single point of contact for all procurement communication',
                            'Transparent pricing with no hidden fees or markups',
                        ] as $item)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 flex-shrink-0 mt-1 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-lg text-[#6d5a2c]">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="lg:col-span-6 animate-on-scroll" data-animate="slideRight" data-delay="0.15">
                    <div class="rounded-[14px] overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1200" alt="Supplier Network" class="w-full aspect-[4/3] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 2: WHO THIS IS FOR --}}
    <section class="py-[140px] bg-[#6d5a2c] text-white">
        <div class="w-full max-w-[1320px] mx-auto px-8">
            <h2 class="text-center mb-16 text-white animate-on-scroll" data-animate="fadeInUp">
                Who This Solution Is For
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                @foreach($targetIndustries as $i => $industry)
                    <div class="group flex flex-col bg-white/5 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 p-8 md:p-10 border border-white/10 hover:bg-white/10 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.1 }}">
                        <div class="w-16 h-16 rounded-full bg-[#c19b46] flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg shadow-black/20 text-white">
                            @if($industry['icon'] === 'building')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 22V4a2 2 0 012-2h8a2 2 0 012 2v18Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 10h4M10 14h4M10 18h4"/></svg>
                            @elseif($industry['icon'] === 'hotel')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 21V5a2 2 0 012-2h12a2 2 0 012 2v16"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 21v-4a2 2 0 012-2h2a2 2 0 012 2v4"/></svg>
                            @elseif($industry['icon'] === 'bag')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 7h12l-1 11H7L6 7Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7a3 3 0 016 0"/></svg>
                            @else
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18V10l-4 2-3-2-4 2-3-2-4 2v9Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3h3v4h-3Z"/></svg>
                            @endif
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold mb-4 text-white">{{ $industry['title'] }}</h3>
                        <p class="text-white/60 leading-relaxed">{{ $industry['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 4: AL ZAHA ADVANTAGES --}}
    <section class="py-[160px] bg-white">
        <div class="w-full max-w-[1320px] mx-auto px-8">
            <div class="text-center mb-16 animate-on-scroll" data-animate="fadeInUp">
                <h2 class="text-[#6d5a2c]">Why Source Through Al Zaha</h2>
                <p class="text-lg mt-6 max-w-3xl mx-auto opacity-80 text-[#6d5a2c]">
                    Dubai's strategic location and our established supplier relationships give you access to global markets with local expertise and support.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach($advantages as $i => $adv)
                    <div class="bg-[#f7f4eb] p-10 rounded-[14px] border border-[#6d5a2c]/5 shadow-sm hover:shadow-lg transition-all duration-300 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.1 }}">
                        <div class="mb-6 text-[#c19b46]">
                            @if($adv['icon'] === 'dollar')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1v22"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 5H10a3 3 0 000 6h4a3 3 0 010 6H7"/></svg>
                            @elseif($adv['icon'] === 'shield')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z"/></svg>
                            @else
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-[#6d5a2c]">{{ $adv['title'] }}</h3>
                        <p class="opacity-70 leading-relaxed text-[#6d5a2c]">{{ $adv['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="relative py-[140px]">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/content/cta.jpg') }}" alt="CTA Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#6d5a2c] opacity-90"></div>
        </div>
        <div class="relative z-10 w-full max-w-[1320px] mx-auto px-8 text-center animate-on-scroll" data-animate="scaleIn">
            <h2 class="text-white text-4xl md:text-5xl mb-10 leading-tight max-w-4xl mx-auto">Request a Procurement Quote</h2>
            <p class="text-white/90 text-xl mb-10 max-w-2xl mx-auto">
                Share your sourcing requirements and we'll provide a detailed proposal with pricing, timelines, and supplier options.
            </p>
            <a href="{{ route('quote') }}" class="inline-block px-10 py-5 text-white font-semibold text-lg transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-2xl bg-[#c19b46]">Get Your Quote</a>
        </div>
    </section>
</div>
@endsection
