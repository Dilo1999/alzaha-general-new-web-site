@extends('layouts.app')

@section('title', 'Industries – Al Zaha')

@section('content')
@php
    $industries = [
        [
            'title' => 'Resorts',
            'icon' => 'hotel',
            'pain' => 'Maintaining a premium guest experience requires flawless procurement of luxury amenities, furniture, and specialized equipment across remote locations.',
            'solution' => 'We provide end-to-end sourcing for the hospitality sector, from designer furniture and high-end linens to commercial kitchen equipment and landscaping materials. Our Dubai-based hub ensures that even the most remote luxury resorts receive consolidated, quality-checked shipments on time, maintaining the five-star standards your guests expect.',
            'image' => asset('images/content/Resorts.jpg'),
        ],
        [
            'title' => 'Construction',
            'icon' => 'building',
            'pain' => 'Fragmented supply chains and volatile material pricing often lead to project delays and significant budget overruns in large-scale developments.',
            'solution' => "Al Zaha offers structured control over construction procurement. We source high-grade steel, specialized building materials, and architectural finishes directly from vetted global manufacturers. Our consolidated shipment model reduces per-unit costs and ensures that all materials arrive on-site according to your project's critical path.",
            'image' => asset('images/content/Construction.jpg'),
        ],
        [
            'title' => 'Retail',
            'icon' => 'bag',
            'pain' => 'Fast-moving consumer trends demand a highly responsive supply chain that can scale quickly without sacrificing quality or increasing lead times.',
            'solution' => 'We bridge the gap between global manufacturers and regional retail markets. By leveraging our Dubai hub, we coordinate the rapid sourcing and distribution of consumer goods, luxury retail fixtures, and inventory. Our scalable structure allows your retail operations to pivot quickly to new product lines while maintaining strict compliance and documentation standards.',
            'image' => asset('images/content/Retail.jpg'),
        ],
        [
            'title' => 'Industrial',
            'icon' => 'factory',
            'pain' => 'Critical machinery downtime and spare parts shortages can halt production lines, leading to massive operational losses.',
            'solution' => 'Our industrial sourcing specializes in mission-critical machinery, raw materials, and precision components. We maintain a network of certified industrial suppliers across Asia and Europe, providing one-point coordination for technical specifications and quality assurance. We ensure your facility stays operational with reliable, documented parts and equipment.',
            'image' => asset('images/content/Industrial.jpg'),
        ],
    ];
@endphp

<x-page-hero
    eyebrow="Industries we serve"
    title='Supply chain solutions built for <span class="accent accent-light">operational industries.</span>'
    :image="asset('images/hero/industries.jpg')"
>
    <x-slot:footer>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach($industries as $item)
                <a href="#{{ Str::slug($item['title']) }}" class="group glass rounded-2xl p-4 md:p-5 flex items-center justify-between gap-3 transition-colors hover:bg-white/15">
                    <span class="flex items-center gap-3">
                        <span class="w-10 h-10 shrink-0 rounded-xl bg-gold-light/15 text-gold-light inline-flex items-center justify-center"><x-glyph :name="$item['icon']" class="w-5 h-5" /></span>
                        <span class="font-semibold text-white">{{ $item['title'] }}</span>
                    </span>
                    <x-glyph name="arrow-right" class="w-4 h-4 text-white/40 rotate-90 transition-transform group-hover:translate-y-0.5" stroke="2" />
                </a>
            @endforeach
        </div>
    </x-slot:footer>
</x-page-hero>

@foreach($industries as $index => $item)
    <section id="{{ Str::slug($item['title']) }}" class="py-20 md:py-32 scroll-mt-24 {{ $index % 2 === 0 ? 'bg-cream' : 'bg-white' }}">
        <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-6 {{ $index % 2 !== 0 ? 'lg:order-2' : '' }} animate-on-scroll" data-animate="fadeInUp">
                    <div class="group relative rounded-[2rem] overflow-hidden shadow-lift aspect-[4/3] lg:aspect-[5/6]">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-[1.4s] ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-ink/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 flex items-center gap-3">
                            <span class="w-12 h-12 rounded-2xl glass inline-flex items-center justify-center text-gold-light"><x-glyph :name="$item['icon']" class="w-6 h-6" /></span>
                            <span class="text-white font-semibold text-lg">{{ $item['title'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 animate-on-scroll" data-animate="fadeInUp" data-delay="0.1">
                    <span class="eyebrow">0{{ $index + 1 }} — Industry</span>
                    <h2 class="display-2 mt-5">{{ $item['title'] }}</h2>

                    <div class="mt-10 space-y-4">
                        <div class="rounded-2xl border border-ink/10 p-6 md:p-7">
                            <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.2em] text-ink-muted">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span> The challenge
                            </div>
                            <p class="mt-3 leading-relaxed text-ink/80">{{ $item['pain'] }}</p>
                        </div>
                        <div class="relative rounded-2xl bg-ink text-white p-6 md:p-7 overflow-hidden">
                            <div class="absolute -right-16 -top-16 w-48 h-48 rounded-full bg-gold/25 blur-3xl" aria-hidden="true"></div>
                            <div class="relative flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.2em] text-gold-light">
                                <span class="w-1.5 h-1.5 rounded-full bg-gold-light"></span> The Al Zaha solution
                            </div>
                            <p class="relative mt-3 leading-relaxed text-white/75">{{ $item['solution'] }}</p>
                        </div>
                    </div>

                    <a href="{{ route('quote') }}" class="btn btn-gold mt-10">
                        Discuss your needs <x-glyph name="arrow-right" class="btn-arrow w-4 h-4" stroke="2" />
                    </a>
                </div>
            </div>
        </div>
    </section>
@endforeach

<x-cta
    title='Does your industry <span class="accent accent-light">demand more?</span>'
    text="We specialize in complex, high-stakes supply chains. Let's discuss how we can bring Al Zaha's premium sourcing to your sector."
    primary-label="Consult an Industry Expert"
    :primary-href="route('contact')"
    secondary-label="Request a Quote"
    :secondary-href="route('quote')"
/>
@endsection
