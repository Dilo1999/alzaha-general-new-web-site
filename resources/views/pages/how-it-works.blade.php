@extends('layouts.app')

@section('title', 'How It Works – Al Zaha')

@section('content')
@php
    $steps = [
        [
            'icon' => 'clipboard-list',
            'title' => 'Submit your requirements',
            'subtitle' => 'Send list, BOQ, specs, timelines',
            'description' => 'Share your project specifications through our streamlined intake process. Our team reviews and clarifies every detail to ensure precision from the start.',
            'image' => asset('images/content/Submit.jpg'),
        ],
        [
            'icon' => 'settings',
            'title' => 'We source, quote, and schedule',
            'subtitle' => 'Supplier coordination + freight planning',
            'description' => 'Leveraging our global network, we identify optimal suppliers, negotiate terms, and present you with transparent, competitive pricing and integrated timelines.',
            'image' => asset('images/content/source.jpg'),
        ],
        [
            'icon' => 'truck',
            'title' => 'We coordinate delivery',
            'subtitle' => 'Documentation + shipment + destination support',
            'description' => 'From freight booking to customs clearance, we manage every touchpoint. Your materials arrive on schedule, compliant, and ready for operational use.',
            'image' => asset('images/content/delivery.jpg'),
        ],
    ];
    $benefits = [
        ['icon' => 'target', 'title' => 'One-Point Coordination', 'description' => 'Single point of contact eliminates confusion and streamlines communication across all vendors.'],
        ['icon' => 'package', 'title' => 'Consolidated Shipments', 'description' => 'Combine multiple orders into optimized shipments, reducing costs and simplifying logistics.'],
        ['icon' => 'file-check', 'title' => 'Compliance Documentation', 'description' => 'Complete regulatory paperwork handled professionally, ensuring smooth customs clearance.'],
        ['icon' => 'map-pin', 'title' => 'Destination Support', 'description' => 'On-ground assistance in the UAE for receiving, inspection, and final mile delivery.'],
    ];
@endphp

<x-page-hero
    eyebrow="How it works"
    title='A simple system from <span class="accent accent-light">sourcing to delivery.</span>'
    subtitle="Three clear steps. One accountable team. Full visibility from your first requirement to final delivery."
    :image="asset('images/hero/how-it-works.jpg')"
>
    <x-slot:buttons>
        <a href="{{ route('quote') }}" class="btn btn-gold btn-lg">Get started <x-glyph name="arrow-right" class="btn-arrow w-5 h-5" stroke="2" /></a>
        <a href="#steps" class="btn btn-ghost btn-lg">View the steps</a>
    </x-slot:buttons>
</x-page-hero>

{{-- Steps timeline --}}
<section id="steps" class="relative py-24 md:py-36 bg-white scroll-mt-20">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="relative">
            {{-- Vertical rail --}}
            <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-px -translate-x-1/2 bg-gradient-to-b from-gold/0 via-gold/40 to-gold/0" aria-hidden="true"></div>

            <div class="space-y-20 md:space-y-28">
                @foreach($steps as $index => $step)
                    <div class="relative grid lg:grid-cols-2 gap-10 lg:gap-24 items-center">
                        {{-- Rail node --}}
                        <div class="hidden lg:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-14 h-14 rounded-full bg-ink text-gold-light items-center justify-center font-semibold ring-8 ring-white z-10" aria-hidden="true">
                            0{{ $index + 1 }}
                        </div>

                        <div class="{{ $index % 2 !== 0 ? 'lg:order-2' : '' }} animate-on-scroll" data-animate="fadeInUp">
                            <div class="group relative rounded-[2rem] overflow-hidden shadow-lift aspect-[4/3]">
                                <img src="{{ $step['image'] }}" alt="{{ $step['title'] }}" class="w-full h-full object-cover transition-transform duration-[1.4s] ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-105" loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-ink/50 via-transparent to-transparent"></div>
                            </div>
                        </div>

                        <div class="animate-on-scroll" data-animate="fadeInUp" data-delay="0.1">
                            <div class="flex items-center gap-4">
                                <span class="icon-tile"><x-glyph :name="$step['icon']" class="w-6 h-6" /></span>
                                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-deep">Step {{ $index + 1 }} of {{ count($steps) }}</span>
                            </div>
                            <h2 class="display-2 mt-6">{{ $step['title'] }}</h2>
                            <p class="mt-4 inline-flex rounded-full bg-cream border border-ink/5 px-4 py-1.5 text-sm font-medium text-ink/70">{{ $step['subtitle'] }}</p>
                            <p class="lead mt-6 max-w-lg">{{ $step['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- What makes us different --}}
<section class="relative isolate overflow-hidden py-24 md:py-36 bg-aurora text-white grain">
    <div class="absolute inset-0 -z-10 bg-grid opacity-40 [mask-image:radial-gradient(ellipse_at_top,black,transparent_70%)]" aria-hidden="true"></div>
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="max-w-2xl mb-14 md:mb-20 animate-on-scroll" data-animate="fadeInUp">
            <span class="eyebrow eyebrow-light">The difference</span>
            <h2 class="display-2 mt-5 text-white">What makes <span class="accent accent-light">Al Zaha different.</span></h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($benefits as $i => $benefit)
                <div class="group card-dark p-8 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.08 }}">
                    <span class="icon-tile icon-tile-dark"><x-glyph :name="$benefit['icon']" class="w-6 h-6" /></span>
                    <h3 class="mt-8 text-xl font-semibold tracking-tight text-white">{{ $benefit['title'] }}</h3>
                    <p class="mt-3 text-[0.95rem] leading-relaxed text-white/60">{{ $benefit['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<x-cta
    title='Ready to operate with <span class="accent accent-light">structured control?</span>'
    text="Experience a sourcing system designed for operational reliability. Let's discuss your specific project requirements."
    secondary-label="Talk to a Coordinator"
    :image="asset('images/content/cta2.jpg')"
/>
@endsection
