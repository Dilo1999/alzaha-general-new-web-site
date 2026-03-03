@extends('layouts.app')

@section('title', 'Freight & Shipment Management – Al Zaha')

@section('content')
<div class="flex flex-col">
    @php
        $targetClients = [
            ['icon' => 'building', 'title' => 'Construction Projects', 'description' => 'Coordinate materials from multiple global suppliers to construction sites across the GCC.'],
            ['icon' => 'hotel', 'title' => 'Resort Developments', 'description' => 'Manage complex FF&E shipments from international manufacturers to hospitality projects.'],
            ['icon' => 'bag', 'title' => 'Retail Operations', 'description' => 'Orchestrate multi-location inventory shipments with synchronized delivery timelines.'],
            ['icon' => 'factory', 'title' => 'Industrial Facilities', 'description' => 'Handle heavy equipment and specialized machinery transport with precision timing.'],
        ];
        $advantages = [
            ['icon' => 'map-pin', 'title' => 'Dubai Hub Advantage', 'description' => "Leverage Dubai's world-class logistics infrastructure and connectivity to streamline freight routes and reduce transit times."],
            ['icon' => 'clock', 'title' => 'Real-Time Visibility', 'description' => 'Track every shipment with live updates and proactive issue resolution through our centralized coordination system.'],
            ['icon' => 'shield', 'title' => 'Risk Mitigation', 'description' => 'Insurance coordination, backup routing options, and compliance management protect your cargo and timeline.'],
        ];
    @endphp

    {{-- HERO SECTION --}}
    <section class="relative h-[80vh] min-h-[600px] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero/logistics.jpg') }}" alt="Freight Management" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-[#6d5a2c]/95 via-[#6d5a2c]/85 to-[#6d5a2c]/75"></div>
        </div>
        <div class="relative z-10 w-full max-w-[1320px] mx-auto px-8">
            <div class="max-w-[720px] animate-now" data-animate="fadeInUp">
                <h1 class="text-white mb-8 leading-tight font-bold" style="font-size: 32.4px;">Move Cargo Seamlessly Across Borders</h1>
                <p class="text-white/90 mb-10 leading-relaxed" style="font-size: 16.2px;">
                    Al Zaha's Freight & Shipment Management service provides end-to-end coordination for international cargo movement through Dubai, combining air, sea, and land transport with customs expertise to deliver your goods on time and on budget across the GCC and MENA region.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('quote') }}" class="px-8 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-lg hover:shadow-xl bg-[#c19b46]" style="font-size: 14.4px;">Request a Quote</a>
                    <a href="{{ route('contact') }}" class="px-8 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full border-2 border-[#c19b46] hover:bg-[#c19b46]/10" style="font-size: 14.4px;">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 1: WHAT WE DO --}}
    <section class="py-[160px] bg-white">
        <div class="w-full max-w-[1320px] mx-auto px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                <div class="lg:col-span-6 animate-on-scroll" data-animate="slideLeft">
                    <h2 class="mb-6 text-[#6d5a2c] font-bold" style="font-size: 27px;">How Freight Management Works</h2>
                    <div class="w-12 h-1 mb-6 rounded-full bg-[#c19b46]"></div>
                    <p class="leading-relaxed opacity-80 mb-8 max-w-[680px] text-[#6d5a2c]" style="font-size: 14.4px;">
                        We coordinate every step of your cargo's journey from factory to destination. By consolidating shipments, optimizing routes, and managing carrier relationships, we reduce costs while maintaining schedule integrity and cargo security.
                    </p>
                    <ul class="space-y-4">
                        @foreach([
                            'Multi-modal transport planning (air, sea, land) based on urgency and budget',
                            'Shipment consolidation to maximize container utilization and reduce freight costs',
                            'Carrier negotiation and booking with vetted logistics partners',
                            'Real-time shipment tracking and proactive status updates',
                            'Insurance coordination and cargo protection management',
                            'Delivery scheduling aligned with project timelines and site readiness',
                        ] as $item)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 flex-shrink-0 mt-1 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-[#6d5a2c]" style="font-size: 14.4px;">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="lg:col-span-6 animate-on-scroll" data-animate="slideRight" data-delay="0.15">
                    <div class="rounded-[14px] overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/content/Freight.jpg') }}" alt="Freight Operations" class="w-full aspect-[4/3] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 2: WHO THIS IS FOR --}}
    <section class="py-[140px] bg-[#6d5a2c] text-white">
        <div class="w-full max-w-[1320px] mx-auto px-8">
            <h2 class="text-center mb-16 text-white font-bold animate-on-scroll" style="font-size: 27px;" data-animate="fadeInUp">
                Who This Solution Is For
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                @foreach($targetClients as $i => $client)
                    <div class="group flex flex-col bg-white/5 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 p-8 md:p-10 border border-white/10 hover:bg-white/10 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.1 }}">
                        <div class="w-16 h-16 rounded-full bg-[#c19b46] flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg shadow-black/20 text-white">
                            @if($client['icon'] === 'building')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 22V4a2 2 0 012-2h8a2 2 0 012 2v18Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4M10 10h4M10 14h4M10 18h4"/></svg>
                            @elseif($client['icon'] === 'hotel')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 21V5a2 2 0 012-2h12a2 2 0 012 2v16"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 21v-4a2 2 0 012-2h2a2 2 0 012 2v4"/></svg>
                            @elseif($client['icon'] === 'bag')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 7h12l-1 11H7L6 7Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7a3 3 0 016 0"/></svg>
                            @else
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18V10l-4 2-3-2-4 2-3-2-4 2v9Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3h3v4h-3Z"/></svg>
                            @endif
                        </div>
                        <h3 class="font-bold mb-4 text-white" style="font-size: 18px;">{{ $client['title'] }}</h3>
                        <p class="text-white/60 leading-relaxed" style="font-size: 12.6px;">{{ $client['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 4: AL ZAHA ADVANTAGES --}}
    <section class="py-[160px] bg-white">
        <div class="w-full max-w-[1320px] mx-auto px-8">
            <div class="text-center mb-16 animate-on-scroll" data-animate="fadeInUp">
                <h2 class="text-[#6d5a2c] font-bold" style="font-size: 27px;">Why Ship Through Al Zaha</h2>
                <p class="mt-6 max-w-3xl mx-auto opacity-80 text-[#6d5a2c]" style="font-size: 14.4px;">
                    Operating from Dubai, one of the world's busiest logistics hubs, we deliver the infrastructure, expertise, and carrier relationships to move your cargo efficiently.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach($advantages as $i => $adv)
                    <div class="bg-[#f7f4eb] p-10 rounded-[14px] border border-[#6d5a2c]/5 shadow-sm hover:shadow-lg transition-all duration-300 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.1 }}">
                        <div class="mb-6 text-[#c19b46]">
                            @if($adv['icon'] === 'map-pin')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            @elseif($adv['icon'] === 'clock')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            @else
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z"/></svg>
                            @endif
                        </div>
                        <h3 class="font-bold mb-4 text-[#6d5a2c]" style="font-size: 18px;">{{ $adv['title'] }}</h3>
                        <p class="opacity-70 leading-relaxed text-[#6d5a2c]" style="font-size: 14.4px;">{{ $adv['description'] }}</p>
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
            <h2 class="text-white mb-10 leading-tight max-w-4xl mx-auto font-bold" style="font-size: 27px;">Request a Procurement Quote</h2>
            <p class="text-white/90 mb-10 max-w-2xl mx-auto" style="font-size: 16.2px;">
                Tell us about your shipment requirements and we'll provide freight options, transit times, and competitive pricing.
            </p>
            <a href="{{ route('quote') }}" class="inline-block px-10 py-5 text-white font-semibold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-2xl bg-[#c19b46]" style="font-size: 16.2px;">Get Your Quote</a>
        </div>
    </section>
</div>
@endsection
