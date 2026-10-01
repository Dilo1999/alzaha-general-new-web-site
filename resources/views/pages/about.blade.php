@extends('layouts.app')

@section('title', 'About – Al Zaha')

@section('content')
@php
    $approach = [
        ['title' => 'Coordinated Networks', 'desc' => 'We build resilient, multi-layered supply chains that adapt to market shifts in real-time.', 'icon' => 'network'],
        ['title' => 'Rigorous Compliance', 'desc' => 'Every transaction and shipment adheres to the highest international standards and regional regulations.', 'icon' => 'shield-check'],
        ['title' => 'Global Reach', 'desc' => 'Our footprint extends across continents, connecting premium manufacturers with critical industrial needs.', 'icon' => 'globe'],
    ];
    $partnership = [
        ['icon' => 'handshake', 'title' => 'Long-term Value', 'desc' => 'We focus on building enduring relationships that go beyond simple transactions, acting as a trusted extension of your procurement team.'],
        ['icon' => 'shield-check', 'title' => 'Risk Mitigation', 'desc' => 'Our deep market intelligence helps identify and neutralize potential supply chain disruptions before they impact your operations.'],
        ['icon' => 'trending-up', 'title' => 'Operational Excellence', 'desc' => 'We bring structured growth through optimized processes, ensuring your sourcing strategy remains agile and competitive.'],
    ];
    $geoStats = [
        ['value' => '4hr', 'label' => 'Flight to 1/3 of the world population'],
        ['value' => '8hr', 'label' => 'Flight to 2/3 of the world population'],
        ['value' => '0', 'label' => 'Compromise on quality'],
    ];
@endphp

<x-page-hero
    eyebrow="About Al Zaha"
    title='Built on coordination. <span class="accent accent-light">Structured for growth.</span>'
    :image="asset('images/hero/about.jpg')"
/>

{{-- Who we are --}}
<section class="py-24 md:py-36 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid lg:grid-cols-12 gap-14 lg:gap-20 items-center">
            <div class="lg:col-span-6 animate-on-scroll" data-animate="fadeInUp">
                <span class="eyebrow">Who we are</span>
                <h2 class="display-2 mt-5">More than a trading company — <span class="accent">a partner in commerce.</span></h2>
                <div class="mt-8 space-y-5 lead">
                    <p>Founded in the heart of Dubai, Al Zaha General Trading has emerged as a cornerstone of strategic sourcing and industrial supply chain excellence in the MENA region.</p>
                    <p>Our team brings together decades of combined expertise in logistics, procurement, and international trade law. We specialize in navigating the complexities of high-stakes industrial sourcing, ensuring that our clients receive not just products, but complete, end-to-end solutions that drive their operational growth.</p>
                </div>
            </div>
            <div class="lg:col-span-6 relative animate-on-scroll" data-animate="fadeInUp" data-delay="0.15">
                <div class="rounded-[2rem] overflow-hidden shadow-lift">
                    <img src="{{ asset('images/content/Who.jpg') }}" alt="Al Zaha team collaboration" class="w-full aspect-[4/3] lg:aspect-[5/6] object-cover" loading="lazy">
                </div>
                <div class="absolute -bottom-8 left-4 right-4 sm:right-auto sm:-left-8 sm:w-72 rounded-2xl bg-ink text-white p-6 shadow-lift">
                    <div class="flex items-center gap-3">
                        <span class="icon-tile icon-tile-dark !w-11 !h-11 !rounded-xl"><x-glyph name="map-pin" class="w-5 h-5" /></span>
                        <div>
                            <div class="text-xs uppercase tracking-[0.18em] text-white/50">Headquartered in</div>
                            <div class="mt-0.5 font-semibold">Dubai, United Arab Emirates</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Our approach --}}
<section class="relative isolate overflow-hidden py-24 md:py-36 bg-aurora text-white grain">
    <div class="absolute inset-0 -z-10 bg-grid opacity-40 [mask-image:radial-gradient(ellipse_at_top,black,transparent_70%)]" aria-hidden="true"></div>
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid lg:grid-cols-12 gap-8 mb-14 md:mb-20 items-end animate-on-scroll" data-animate="fadeInUp">
            <div class="lg:col-span-7">
                <span class="eyebrow eyebrow-light">Our approach</span>
                <h2 class="display-2 mt-5 text-white">Precision logistics meets <span class="accent accent-light">strategic intelligence.</span></h2>
            </div>
            <p class="lg:col-span-5 text-lg leading-relaxed text-white/60">We operate at the intersection of precision logistics and strategic intelligence.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-5">
            @foreach($approach as $i => $item)
                <div class="group card-dark p-8 md:p-10 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.08 }}">
                    <span class="icon-tile icon-tile-dark"><x-glyph :name="$item['icon']" class="w-6 h-6" /></span>
                    <h3 class="mt-8 text-xl font-semibold tracking-tight text-white">{{ $item['title'] }}</h3>
                    <p class="mt-3 leading-relaxed text-white/60">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Mission & Vision --}}
<section class="py-24 md:py-36 bg-white">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid md:grid-cols-2 gap-5">
            @foreach([
                ['label' => 'Our mission', 'icon' => 'target', 'text' => 'To empower industrial enterprises by providing seamless, transparent, and highly efficient sourcing and logistics frameworks that eliminate complexity and maximize value across the entire supply chain.'],
                ['label' => 'Our vision', 'icon' => 'eye', 'text' => 'To be the premier global gateway for industrial commerce, recognized for our ability to coordinate growth through innovation, reliability, and unparalleled regional expertise.'],
            ] as $i => $block)
                <div class="group relative overflow-hidden rounded-[2rem] bg-cream border border-ink/5 p-8 md:p-12 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.1 }}">
                    <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-gold/15 blur-3xl transition-opacity duration-500 opacity-60 group-hover:opacity-100" aria-hidden="true"></div>
                    <div class="relative">
                        <span class="icon-tile"><x-glyph :name="$block['icon']" class="w-6 h-6" /></span>
                        <h3 class="mt-8 text-sm font-semibold uppercase tracking-[0.2em] text-gold-deep">{{ $block['label'] }}</h3>
                        <p class="mt-4 text-xl md:text-2xl leading-snug font-medium tracking-tight text-ink">{{ $block['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Strategic partnership --}}
<section class="py-24 md:py-36 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid lg:grid-cols-12 gap-14 lg:gap-20 items-center">
            <div class="lg:col-span-5 order-2 lg:order-1 animate-on-scroll" data-animate="fadeInUp">
                <div class="rounded-[2rem] overflow-hidden shadow-lift">
                    <img src="{{ asset('images/content/Strategic.jpg') }}" alt="Modern logistics" class="w-full aspect-[4/5] object-cover" loading="lazy">
                </div>
            </div>
            <div class="lg:col-span-7 order-1 lg:order-2 animate-on-scroll" data-animate="fadeInUp" data-delay="0.1">
                <span class="eyebrow">Strategic partnership</span>
                <h2 class="display-2 mt-5">An extension of <span class="accent">your procurement team.</span></h2>

                <div class="mt-10 divide-y divide-ink/10 border-y border-ink/10">
                    @foreach($partnership as $item)
                        <div class="group flex gap-5 py-6">
                            <span class="icon-tile"><x-glyph :name="$item['icon']" class="w-6 h-6" /></span>
                            <div>
                                <h3 class="text-lg font-semibold tracking-tight">{{ $item['title'] }}</h3>
                                <p class="mt-1.5 leading-relaxed text-ink-muted">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Geographic positioning --}}
<section class="relative isolate overflow-hidden py-28 md:py-40 bg-ink text-white grain">
    <img src="https://images.unsplash.com/photo-1465415074239-84142598d04d?q=80&w=2070" alt="" class="absolute inset-0 -z-20 w-full h-full object-cover opacity-50" loading="lazy">
    <div class="absolute inset-0 -z-10 bg-gradient-to-b from-ink via-ink/80 to-ink"></div>

    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="max-w-3xl mx-auto text-center animate-on-scroll" data-animate="fadeInUp">
            <span class="eyebrow eyebrow-light">Geographic positioning</span>
            <h2 class="display-2 mt-5 text-white">At the crossroads of <span class="accent accent-light">East and West.</span></h2>
            <p class="mt-6 text-lg leading-relaxed text-white/70">
                Based in Dubai, the world's logistics hub, Al Zaha leverages a unique geographic advantage — providing our partners with unmatched access to emerging markets in Africa, Asia, and the Middle East while maintaining seamless links to Western manufacturing centers.
            </p>
        </div>

        <div class="mt-16 md:mt-20 grid sm:grid-cols-3 gap-px overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/10 animate-on-scroll" data-animate="fadeInUp" data-delay="0.15">
            @foreach($geoStats as $stat)
                <div class="bg-ink/80 backdrop-blur-xl px-8 py-10 text-center">
                    <div class="text-5xl md:text-6xl font-semibold tracking-tight bg-gradient-to-b from-gold-light to-gold bg-clip-text text-transparent">{{ $stat['value'] }}</div>
                    <div class="mt-3 text-sm text-white/60">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<x-cta
    title='Ready to structure <span class="accent accent-light">your growth?</span>'
    text="Connect with our team today to discover how Al Zaha can optimize your industrial supply chain and sourcing strategies."
    primary-label="Request a Custom Quote"
    secondary-label="Contact Our Team"
/>
@endsection
