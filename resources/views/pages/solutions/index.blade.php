@extends('layouts.app')

@section('title', 'Solutions – Al Zaha')

@section('content')
@php
    $services = [
        [
            'title' => 'Strategic Sourcing & Procurement',
            'icon' => 'clipboard-list',
            'description' => 'We navigate global markets to find, vet, and negotiate with premium suppliers. We handle the entire procurement lifecycle—from RFQs to compliance checks—ensuring you get consistent quality and fair commercial terms without managing multiple intermediaries.',
            'bullets' => ['Vetted global manufacturer network', 'Rigorous quality control & inspections', 'Direct factory price negotiation', 'Regulatory compliance verification'],
            'image' => 'https://images.unsplash.com/photo-1723853310542-a9d2d84f5fa2?q=80&w=1080',
            'link' => route('solutions.sourcing'),
        ],
        [
            'title' => 'Freight & Shipment Management',
            'icon' => 'ship',
            'description' => 'Our logistics expertise streamlines the movement of your goods across borders. We provide consolidated booking, container planning, and route optimization to reduce transit times and minimize per-unit freight costs.',
            'bullets' => ['Consolidated shipment planning', 'Multi-modal freight forwarding', 'Carrier coordination & booking', 'Container load optimization'],
            'image' => 'https://images.unsplash.com/photo-1758976461860-1e9a132f4600?q=80&w=1080',
            'link' => route('solutions.supply-chain'),
        ],
        [
            'title' => 'Integrated Logistics & Documentation',
            'icon' => 'file-check',
            'description' => 'We take the complexity out of international trade documentation. Our team manages full coordination of customs clearance, certificates of origin, import permits, and regulatory filings to keep your shipments moving smoothly across borders.',
            'bullets' => ['Customs clearance coordination', 'Certificate of origin management', 'Import/Export permit processing', 'Complete regulatory documentation'],
            'image' => 'https://images.unsplash.com/photo-1583521214690-73421a1829a9?q=80&w=1080',
            'link' => route('solutions.logistics'),
        ],
        [
            'title' => 'Destination Delivery Support',
            'icon' => 'map-pin',
            'description' => "Our support doesn't end at the border. We provide end-to-end visibility through last-mile tracking, warehouse coordination, and on-site delivery management to ensure your goods arrive intact and on schedule at their final destination.",
            'bullets' => ['Real-time last-mile tracking', 'Warehouse & storage coordination', 'On-site delivery management', 'Shipment status reporting'],
            'image' => 'https://images.unsplash.com/photo-1759826350352-c5b0b77729bd?q=80&w=1080',
            'link' => route('solutions.consulting'),
        ],
    ];
@endphp

<x-page-hero
    eyebrow="Our solutions"
    title='What we <span class="accent accent-light">handle for you.</span>'
    subtitle="At Al Zaha, we provide a complete sourcing and supply chain ecosystem. From finding the right global partners to final destination delivery, we manage every complexity so you can focus on your core operations."
    image="https://images.unsplash.com/photo-1767294274700-c2a68decaad5?q=80&w=1920"
>
    <x-slot:footer>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach($services as $index => $service)
                <a href="#solution-{{ $index + 1 }}" class="group glass rounded-2xl p-4 md:p-5 flex items-center gap-3 transition-colors hover:bg-white/15">
                    <span class="w-10 h-10 shrink-0 rounded-xl bg-gold-light/15 text-gold-light inline-flex items-center justify-center"><x-glyph :name="$service['icon']" class="w-5 h-5" /></span>
                    <span class="text-sm font-medium leading-snug text-white/90">{{ $service['title'] }}</span>
                </a>
            @endforeach
        </div>
    </x-slot:footer>
</x-page-hero>

<section class="py-24 md:py-32 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8 space-y-6 md:space-y-8">
        @foreach($services as $index => $service)
            <article id="solution-{{ $index + 1 }}" class="scroll-mt-28 card overflow-hidden animate-on-scroll" data-animate="fadeInUp">
                <div class="grid lg:grid-cols-2 {{ $index % 2 !== 0 ? 'lg:[&>*:first-child]:order-2' : '' }}">
                    <div class="relative min-h-[280px] lg:min-h-[560px] overflow-hidden group">
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-[1.4s] ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-ink/40 to-transparent"></div>
                        <span class="absolute top-6 left-6 rounded-full glass px-4 py-1.5 text-sm font-semibold text-white">0{{ $index + 1 }} / 04</span>
                    </div>

                    <div class="p-8 sm:p-10 lg:p-16 flex flex-col justify-center">
                        <span class="icon-tile"><x-glyph :name="$service['icon']" class="w-6 h-6" /></span>
                        <h2 class="display-3 mt-8">{{ $service['title'] }}</h2>
                        <p class="mt-5 leading-relaxed text-ink-muted">{{ $service['description'] }}</p>
                        <ul class="mt-8 grid sm:grid-cols-2 gap-x-6 gap-y-3">
                            @foreach($service['bullets'] as $bullet)
                                <li class="flex items-center gap-3 text-[0.95rem] text-ink/85">
                                    <span class="w-6 h-6 shrink-0 rounded-full bg-gold/15 text-gold-deep inline-flex items-center justify-center"><x-glyph name="check" class="w-3.5 h-3.5" stroke="2.5" /></span>
                                    {{ $bullet }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-10">
                            <a href="{{ $service['link'] }}" class="btn btn-dark">
                                Explore details <x-glyph name="arrow-right" class="btn-arrow w-4 h-4" stroke="2" />
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>

<x-cta
    title='Ready to optimize your <span class="accent accent-light">global sourcing?</span>'
    text="Connect with our procurement specialists today to discover how Al Zaha can transform your supply chain efficiency."
    :image="asset('images/content/cta.jpg')"
/>
@endsection
