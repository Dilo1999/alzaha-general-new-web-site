@extends('layouts.app')

@section('title', 'Industries – Al Zaha')

@section('content')
@php
    $industries = [
        [
            'title' => 'Resorts',
            'pain' => 'Maintaining a premium guest experience requires flawless procurement of luxury amenities, furniture, and specialized equipment across remote locations.',
            'solution' => 'We provide end-to-end sourcing for the hospitality sector, from designer furniture and high-end linens to commercial kitchen equipment and landscaping materials. Our Dubai-based hub ensures that even the most remote luxury resorts receive consolidated, quality-checked shipments on time, maintaining the five-star standards your guests expect.',
            'image' => asset('images/content/Resorts.jpg'),
        ],
        [
            'title' => 'Construction',
            'pain' => 'Fragmented supply chains and volatile material pricing often lead to project delays and significant budget overruns in large-scale developments.',
            'solution' => "Al Zaha offers structured control over construction procurement. We source high-grade steel, specialized building materials, and architectural finishes directly from vetted global manufacturers. Our consolidated shipment model reduces per-unit costs and ensures that all materials arrive on-site according to your project's critical path.",
            'image' => asset('images/content/Construction.jpg'),
        ],
        [
            'title' => 'Retail',
            'pain' => 'Fast-moving consumer trends demand a highly responsive supply chain that can scale quickly without sacrificing quality or increasing lead times.',
            'solution' => 'We bridge the gap between global manufacturers and regional retail markets. By leveraging our Dubai hub, we coordinate the rapid sourcing and distribution of consumer goods, luxury retail fixtures, and inventory. Our scalable structure allows your retail operations to pivot quickly to new product lines while maintaining strict compliance and documentation standards.',
            'image' => asset('images/content/Retail.jpg'),
        ],
        [
            'title' => 'Industrial',
            'pain' => 'Critical machinery downtime and spare parts shortages can halt production lines, leading to massive operational losses.',
            'solution' => 'Our industrial sourcing specializes in mission-critical machinery, raw materials, and precision components. We maintain a network of certified industrial suppliers across Asia and Europe, providing one-point coordination for technical specifications and quality assurance. We ensure your facility stays operational with reliable, documented parts and equipment.',
            'image' => asset('images/content/Industrial.jpg'),
        ],
    ];
@endphp
<div class="flex flex-col">
    {{-- Hero (matches React) --}}
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center text-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero/industries.jpg') }}" alt="Industries Hero" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#6d5a2c]/85 mix-blend-multiply"></div>
        </div>

        <x-container class="relative z-10 px-8">
            <div class="animate-now" data-animate="fadeInUp">
                <h1 class="text-white text-5xl md:text-7xl font-bold mb-0 max-w-4xl mx-auto leading-[1.1]">
                    Supply chain solutions built for operational industries
                </h1>
            </div>
        </x-container>
    </section>

    @foreach($industries as $index => $item)
    @php $sectionId = Str::slug($item['title']); @endphp
    <section id="{{ $sectionId }}" class="py-[140px] scroll-mt-24" style="background-color: {{ $index % 2 === 0 ? '#f7f4eb' : 'white' }}">
        <x-container>
            <div class="flex flex-col lg:flex-row items-center gap-20 {{ $index % 2 !== 0 ? 'lg:flex-row-reverse' : '' }}">
                {{-- Image side --}}
                <div class="flex-1 w-full animate-on-scroll" data-animate="scaleIn">
                    <div class="aspect-[4/3] rounded-[24px] overflow-hidden shadow-2xl">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

                {{-- Text side --}}
                <div class="flex-1 animate-on-scroll" data-animate="fadeInUp">
                    <h2 class="text-4xl mb-8 leading-tight font-medium text-[#6d5a2c]">{{ $item['title'] }}</h2>
                    <div class="max-w-[540px]">
                        <div class="mb-8">
                            <h4 class="text-sm font-bold uppercase tracking-widest mb-4 text-[#c19b46]">The Challenge</h4>
                            <p class="text-lg leading-relaxed opacity-90 text-[#6d5a2c]">{{ $item['pain'] }}</p>
                        </div>
                        <div class="mb-10">
                            <h4 class="text-sm font-bold uppercase tracking-widest mb-4 text-[#c19b46]">The Al Zaha Solution</h4>
                            <p class="text-lg leading-relaxed opacity-90 text-[#6d5a2c]">{{ $item['solution'] }}</p>
                        </div>
                        <a href="{{ route('quote') }}" class="group flex items-center gap-2 px-10 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-lg hover:shadow-xl bg-[#c19b46]">
                            Discuss Your Needs
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </x-container>
    </section>
    @endforeach

    {{-- Final CTA Band (matches React) --}}
    <section class="py-[140px] text-center bg-[#6d5a2c]">
        <x-container>
            <div class="animate-on-scroll" data-animate="fadeInUp">
                <h2 class="text-white text-5xl mb-8 font-medium">Does Your Industry Demand More?</h2>
                <p class="text-white/80 text-xl max-w-2xl mx-auto mb-12 leading-relaxed">
                    We specialize in complex, high-stakes supply chains. Let's discuss how we can bring Al Zaha's premium sourcing to your sector.
                </p>
                <a href="{{ route('contact') }}" class="px-12 py-5 inline-block text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-2xl text-lg bg-[#c19b46]">
                    Consult an Industry Expert
                </a>
            </div>
        </x-container>
    </section>
</div>
@endsection
