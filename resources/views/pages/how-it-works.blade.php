@extends('layouts.app')

@section('title', 'How It Works – Al Zaha')

@section('content')
@php
    $steps = [
        [
            'icon' => 'search',
            'number' => 'Step 1',
            'title' => 'Submit your requirements',
            'subtitle' => '(Send list, BOQ, specs, timelines)',
            'description' => 'Share your project specifications through our streamlined intake process. Our team reviews and clarifies every detail to ensure precision from the start.',
            'image' => asset('images/content/Submit.jpg'),
        ],
        [
            'icon' => 'settings',
            'number' => 'Step 2',
            'title' => 'We source, quote, and schedule',
            'subtitle' => '(Supplier coordination + freight planning)',
            'description' => 'Leveraging our global network, we identify optimal suppliers, negotiate terms, and present you with transparent, competitive pricing and integrated timelines.',
            'image' => asset('images/content/source.jpg'),
        ],
        [
            'icon' => 'truck',
            'number' => 'Step 3',
            'title' => 'We coordinate delivery',
            'subtitle' => '(Documentation + shipment + destination support)',
            'description' => 'From freight booking to customs clearance, we manage every touchpoint. Your materials arrive on schedule, compliant, and ready for operational use.',
            'image' => asset('images/content/delivery.jpg'),
        ],
    ];
    $benefits = [
        ['icon' => 'shield', 'title' => 'One-Point Coordination', 'description' => 'Single point of contact eliminates confusion and streamlines communication across all vendors.'],
        ['icon' => 'package', 'title' => 'Consolidated Shipments', 'description' => 'Combine multiple orders into optimized shipments, reducing costs and simplifying logistics.'],
        ['icon' => 'file-check', 'title' => 'Compliance Documentation', 'description' => 'Complete regulatory paperwork handled professionally, ensuring smooth customs clearance.'],
        ['icon' => 'map-pin', 'title' => 'Destination Support', 'description' => 'On-ground assistance in the UAE for receiving, inspection, and final mile delivery.'],
    ];
@endphp
<div class="flex flex-col">
    {{-- HERO (matches React) --}}
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center text-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero/how-it-works.jpg') }}" alt="How It Works Hero" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#6d5a2c]/85 mix-blend-multiply"></div>
        </div>
        <x-container class="relative z-10 px-8">
            <div class="animate-now" data-animate="fadeInUp">
                <h1 class="text-white text-5xl md:text-7xl font-bold mb-0 max-w-4xl mx-auto leading-[1.1]">
                    A simple system from sourcing to delivery
                </h1>
            </div>
        </x-container>
    </section>

    @foreach($steps as $index => $step)
    <section class="py-[140px]" style="background-color: {{ $index % 2 !== 0 ? '#f7f4eb' : 'white' }}">
        <x-container class="px-8">
            <div class="flex flex-col lg:flex-row items-center gap-20 {{ $index % 2 !== 0 ? 'lg:flex-row-reverse' : '' }}">
                {{-- Image side --}}
                <div class="flex-1 w-full animate-on-scroll" data-animate="scaleIn">
                    <div class="aspect-[4/3] rounded-[24px] overflow-hidden shadow-2xl">
                        <img src="{{ $step['image'] }}" alt="{{ $step['title'] }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

                {{-- Text side --}}
                <div class="flex-1 animate-on-scroll" data-animate="fadeInUp">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#f7f4eb]">
                            @if($step['icon'] === 'search')
                                <svg class="w-6 h-6 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19a8 8 0 110-16 8 8 0 010 16z"/></svg>
                            @elseif($step['icon'] === 'settings')
                                <svg class="w-6 h-6 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 100-6 3 3 0 000 6z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-1.42 3.42h-.18a1.65 1.65 0 00-1.52 1.01 1.65 1.65 0 00-.18.75V22a2 2 0 01-4 0v-.08a1.65 1.65 0 00-.18-.75 1.65 1.65 0 00-1.52-1.01H9.6a2 2 0 01-1.42-3.42l.06-.06A1.65 1.65 0 008.57 15a1.65 1.65 0 00-1.57-1.15H7a2 2 0 010-4h.08a1.65 1.65 0 001.57-1.15 1.65 1.65 0 00-.33-1.82l-.06-.06A2 2 0 019.6 3.2h.18a1.65 1.65 0 001.52-1.01A1.65 1.65 0 0011.48 1.4V1a2 2 0 014 0v.08c0 .26.06.52.18.75A1.65 1.65 0 0017.38 2.8h.18a2 2 0 011.42 3.42l-.06.06c-.47.47-.6 1.17-.33 1.82.23.58.8.97 1.42.97H22a2 2 0 010 4h-.08c-.62 0-1.19.39-1.42.97z"/></svg>
                            @else
                                <svg class="w-6 h-6 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h13l5 5-5 5H3V7z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12h.01"/></svg>
                            @endif
                        </div>
                        <span class="text-xl font-bold tracking-widest uppercase text-[#c19b46]">{{ $step['number'] }}</span>
                    </div>

                    <h2 class="text-4xl mb-2 leading-tight font-medium text-[#6d5a2c]">{{ $step['title'] }}</h2>
                    <p class="text-xl mb-8 font-medium italic opacity-60 text-[#6d5a2c]">{{ $step['subtitle'] }}</p>

                    <div class="max-w-[540px]">
                        <p class="text-lg leading-relaxed opacity-90 mb-10 text-[#6d5a2c]">{{ $step['description'] }}</p>
                        <a href="{{ route('quote') }}" class="group flex items-center gap-2 px-10 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-lg hover:shadow-xl bg-[#c19b46]">
                            Get Started
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </x-container>
    </section>
    @endforeach

    {{-- WHAT MAKES US DIFFERENT (matches React) --}}
    <section class="py-[140px] bg-[#f7f4eb]">
        <x-container class="px-8">
            <div class="animate-on-scroll" data-animate="fadeInUp">
                <h2 class="text-center text-4xl mb-16 font-medium text-[#6d5a2c]">
                    What Makes Al Zaha Different
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($benefits as $i => $benefit)
                    <div class="bg-white p-10 rounded-2xl border-t-4 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.1 }}" style="border-color: #c19b46;">
                        <div class="mb-6 p-4 rounded-2xl bg-[#f7f4eb] text-[#c19b46]">
                            @if($benefit['icon'] === 'shield')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z"/></svg>
                            @elseif($benefit['icon'] === 'package')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 16V8a2 2 0 00-1-1.732l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.732l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.27 6.96L12 12l8.73-5.04"/></svg>
                            @elseif($benefit['icon'] === 'file-check')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 3h8l4 4v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"/></svg>
                            @else
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-[#6d5a2c]">{{ $benefit['title'] }}</h3>
                        <p class="opacity-70 leading-relaxed text-[#6d5a2c]">{{ $benefit['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </x-container>
    </section>

    {{-- FINAL CTA BAND (matches React) --}}
    <section class="py-[140px] text-center bg-[#6d5a2c]">
        <x-container class="px-8">
            <div class="animate-on-scroll" data-animate="fadeInUp">
                <h2 class="text-white text-5xl mb-8 font-medium">Ready to Operate With Structured Control?</h2>
                <p class="text-white/80 text-xl max-w-2xl mx-auto mb-12 leading-relaxed">
                    Experience a sourcing system designed for operational reliability. Let's discuss your specific project requirements.
                </p>
                <div class="flex flex-wrap gap-6 justify-center">
                    <a href="{{ route('quote') }}" class="px-12 py-5 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-2xl cursor-pointer text-lg bg-[#c19b46]">
                        Request a Quote
                    </a>
                    <a href="{{ route('contact') }}" class="px-12 py-5 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full border-2 border-[#c19b46] hover:bg-white/5 cursor-pointer text-lg">
                        Talk to a Coordinator
                    </a>
                </div>
            </div>
        </x-container>
    </section>
</div>
@endsection
