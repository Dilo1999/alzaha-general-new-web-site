@extends('layouts.app')

@section('title', 'Solutions – Al Zaha')

@section('content')
<div class="flex flex-col">
    {{-- Hero (matches React) --}}
    <section class="relative h-[40vh] md:h-[60vh] min-h-[300px] md:min-h-[500px] flex items-center justify-center text-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1767294274700-c2a68decaad5?q=80&w=1920" alt="Solutions Hero" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#6d5a2c]/85 mix-blend-multiply"></div>
        </div>

        <x-container class="relative z-10">
            <div class="animate-now" data-animate="fadeInUp">
                <h1 class="text-white text-4xl md:text-6xl lg:text-7xl font-bold mb-0 max-w-4xl mx-auto leading-tight">
                    What We Handle for You
                </h1>
            </div>
        </x-container>
    </section>

    {{-- Intro Text Block (matches React) --}}
    <section class="py-20 md:py-[120px] bg-[#f7f4eb]">
        <div class="max-w-[800px] mx-auto px-4 md:px-8 text-center animate-on-scroll" data-animate="fadeInUp">
            <div class="w-16 h-1 mx-auto mb-8 rounded-full bg-[#c19b46]"></div>
            <p class="text-lg md:text-xl leading-relaxed font-medium text-[#6d5a2c]">
                At Al Zaha, we provide a complete sourcing and supply chain ecosystem. From finding the right global partners to final destination delivery, we manage every complexity so you can focus on your core operations.
            </p>
        </div>
    </section>

    @php
        $services = [
            [
                'title' => 'Strategic Sourcing & Procurement',
                'icon' => 'package',
                'description' => 'We navigate global markets to find, vet, and negotiate with premium suppliers. We handle the entire procurement lifecycle—from RFQs to compliance checks—ensuring you get consistent quality and fair commercial terms without managing multiple intermediaries.',
                'bullets' => [
                    'Vetted global manufacturer network',
                    'Rigorous quality control & inspections',
                    'Direct factory price negotiation',
                    'Regulatory compliance verification',
                ],
                'image' => 'https://images.unsplash.com/photo-1723853310542-a9d2d84f5fa2?q=80&w=1080',
                'link' => route('solutions.sourcing'),
            ],
            [
                'title' => 'Freight & Shipment Management',
                'icon' => 'boxes',
                'description' => 'Our logistics expertise streamlines the movement of your goods across borders. We provide consolidated booking, container planning, and route optimization to reduce transit times and minimize per-unit freight costs.',
                'bullets' => [
                    'Consolidated shipment planning',
                    'Multi-modal freight forwarding',
                    'Carrier coordination & booking',
                    'Container load optimization',
                ],
                'image' => 'https://images.unsplash.com/photo-1758976461860-1e9a132f4600?q=80&w=1080',
                'link' => route('solutions.supply-chain'),
            ],
            [
                'title' => 'Integrated Logistics & Documentation',
                'icon' => 'git-branch',
                'description' => 'We take the complexity out of international trade documentation. Our team manages full coordination of customs clearance, certificates of origin, import permits, and regulatory filings to keep your shipments moving smoothly across borders.',
                'bullets' => [
                    'Customs clearance coordination',
                    'Certificate of origin management',
                    'Import/Export permit processing',
                    'Complete regulatory documentation',
                ],
                'image' => 'https://images.unsplash.com/photo-1583521214690-73421a1829a9?q=80&w=1080',
                'link' => route('solutions.logistics'),
            ],
            [
                'title' => 'Destination Delivery Support',
                'icon' => 'file-search',
                'description' => "Our support doesn't end at the border. We provide end-to-end visibility through last-mile tracking, warehouse coordination, and on-site delivery management to ensure your goods arrive intact and on schedule at their final destination.",
                'bullets' => [
                    'Real-time last-mile tracking',
                    'Warehouse & storage coordination',
                    'On-site delivery management',
                    'Shipment status reporting',
                ],
                'image' => 'https://images.unsplash.com/photo-1759826350352-c5b0b77729bd?q=80&w=1080',
                'link' => route('solutions.consulting'),
            ],
        ];
    @endphp

    @foreach($services as $index => $service)
    <section class="py-16 md:py-[140px]" style="background-color: {{ $index % 2 === 0 ? 'white' : '#f7f4eb' }}">
        <x-container>
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-20 {{ $index % 2 !== 0 ? 'lg:flex-row-reverse' : '' }}">
                {{-- Text side --}}
                <div class="flex-1 animate-on-scroll" data-animate="fadeInUp">
                    <div class="w-12 h-12 flex items-center justify-center mb-6 rounded-xl bg-[#f7f4eb]">
                        @if($service['icon'] === 'package')
                            <svg class="w-6 h-6 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 16V8a2 2 0 00-1-1.732l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.732l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.27 6.96L12 12l8.73-5.04"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22V12"/></svg>
                        @elseif($service['icon'] === 'boxes')
                            <svg class="w-6 h-6 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4 8 4 8-4z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10l8 4 8-4V7"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11v10"/></svg>
                        @elseif($service['icon'] === 'git-branch')
                            <svg class="w-6 h-6 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 3a3 3 0 100 6 3 3 0 000-6zM6 15a3 3 0 100 6 3 3 0 000-6zM18 3a3 3 0 100 6 3 3 0 000-6z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9v6a6 6 0 006 6"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9a6 6 0 01-6 6H6"/></svg>
                        @else
                            <svg class="w-6 h-6 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h2"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h4v4"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h6a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2z"/></svg>
                        @endif
                    </div>

                    <h2 class="text-3xl md:text-4xl mb-6 leading-tight font-bold text-[#6d5a2c]">{{ $service['title'] }}</h2>
                    <div class="w-12 h-1 mb-8 rounded-full bg-[#c19b46]"></div>
                    <p class="text-base md:text-lg mb-8 leading-relaxed opacity-90 text-[#6d5a2c]">{{ $service['description'] }}</p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                        @foreach($service['bullets'] as $bullet)
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-[#c19b46] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-sm md:text-base text-[#6d5a2c]">{{ $bullet }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ $service['link'] }}" class="w-full sm:w-auto group inline-flex items-center justify-center gap-2 px-10 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-lg hover:shadow-xl bg-[#c19b46]">
                        Explore Details
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>

                {{-- Image side --}}
                <div class="flex-1 w-full animate-on-scroll" data-animate="scaleIn" data-delay="0.05">
                    <div class="relative aspect-video lg:aspect-[4/3] rounded-2xl md:rounded-[24px] overflow-hidden shadow-2xl">
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                </div>
            </div>
        </x-container>
    </section>
    @endforeach

    {{-- Final CTA Band (matches React) --}}
    <section class="py-24 md:py-[140px] text-center bg-[#6d5a2c]">
        <x-container>
            <div class="animate-on-scroll" data-animate="scaleIn">
                <h2 class="text-white text-3xl md:text-5xl mb-8 font-bold leading-tight">Ready to Optimize Your Global Sourcing?</h2>
                <p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto mb-12 leading-relaxed">
                    Connect with our procurement specialists today to discover how Al Zaha can transform your supply chain efficiency.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{ route('quote') }}" class="w-full sm:w-auto px-12 py-5 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-2xl text-lg bg-[#c19b46]">Request a Quote</a>
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto px-12 py-5 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full border-2 border-[#c19b46] hover:bg-white/5 text-lg">Talk to a Coordinator</a>
                </div>
            </div>
        </x-container>
    </section>
</div>
@endsection
