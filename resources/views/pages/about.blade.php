@extends('layouts.app')

@section('title', 'About – Al Zaha')

@section('content')
<div class="bg-[#f7f4eb]">
    {{-- Hero Section --}}
    <section class="relative h-[50vh] md:h-[60vh] min-h-[400px] md:min-h-[500px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero/about.jpg') }}" alt="Dubai Business Skyline" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#6d5a2c]/60 backdrop-blur-[2px]"></div>
        </div>
        <x-container class="relative z-10">
            <div class="animate-now" data-animate="fadeInUp">
                <span class="inline-block px-4 py-1 rounded-full bg-[#f4c157] text-[#6d5a2c] font-bold tracking-wider uppercase mb-6" style="font-size: 12.6px;">
                    About Us
                </span>
                <h1 class="font-bold text-white leading-tight max-w-4xl" style="font-size: 32.4px;">
                    Built on coordination. Structured for growth.
                </h1>
            </div>
        </x-container>
    </section>

    {{-- Who We Are Section --}}
    <section class="py-20 md:py-32">
        <x-container>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="animate-on-scroll" data-animate="fadeInUp">
                    <h2 class="font-bold text-[#6d5a2c] mb-6 md:mb-8" style="font-size: 27px;">Who We Are</h2>
                    <div class="space-y-6 text-[#6d5a2c]/80 leading-relaxed" style="font-size: 14.4px;">
                        <p>
                            Founded in the heart of Dubai, Al Zaha General Trading has emerged as a cornerstone of strategic sourcing and industrial supply chain excellence in the MENA region. We are more than just a trading company; we are an architectural force in global commerce.
                        </p>
                        <p>
                            Our team brings together decades of combined expertise in logistics, procurement, and international trade law. We specialize in navigating the complexities of high-stakes industrial sourcing, ensuring that our clients receive not just products, but complete, end-to-end solutions that drive their operational growth.
                        </p>
                    </div>
                </div>
                <div class="animate-on-scroll" data-animate="fadeInUp">
                    <div class="relative h-[300px] md:h-[500px] rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/content/Who.jpg') }}" alt="Al Zaha Team Collaboration" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </x-container>
    </section>

    {{-- Our Approach Section --}}
    <section class="py-20 md:py-32 bg-[#6d5a2c] text-white overflow-hidden">
        <x-container>
            <div class="text-center mb-16 md:mb-20 animate-on-scroll" data-animate="fadeInUp">
                <h2 class="font-bold mb-6" style="font-size: 27px;">Our Approach</h2>
                <p class="text-white/70 max-w-3xl mx-auto" style="font-size: 16.2px;">
                    We operate at the intersection of precision logistics and strategic intelligence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                @php
                    $approach = [
                        ['title' => 'Coordinated Networks', 'desc' => 'We build resilient, multi-layered supply chains that adapt to market shifts in real-time.', 'icon' => 'network'],
                        ['title' => 'Rigorous Compliance', 'desc' => 'Every transaction and shipment adheres to the highest international standards and regional regulations.', 'icon' => 'shield'],
                        ['title' => 'Global Reach', 'desc' => 'Our footprint extends across continents, connecting premium manufacturers with critical industrial needs.', 'icon' => 'globe'],
                    ];
                @endphp
                @foreach($approach as $i => $item)
                    <div class="p-8 md:p-10 bg-white/5 rounded-2xl md:rounded-3xl border border-white/10 hover:bg-white/10 transition-all duration-300 group animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.1 }}">
                        <div class="w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-[#c19b46] flex items-center justify-center mb-6 md:mb-8 group-hover:scale-110 transition-transform duration-300">
                            @if($item['icon'] === 'network')
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h10M7 17h10M7 12h10M5 7a1 1 0 11-2 0 1 1 0 012 0zm0 5a1 1 0 11-2 0 1 1 0 012 0zm0 5a1 1 0 11-2 0 1 1 0 012 0zm18-10a1 1 0 11-2 0 1 1 0 012 0zm0 5a1 1 0 11-2 0 1 1 0 012 0zm0 5a1 1 0 11-2 0 1 1 0 012 0z"/></svg>
                            @elseif($item['icon'] === 'shield')
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                            @else
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.6 9h16.8M3.6 15h16.8M12 3c2.5 2.5 4 5.8 4 9s-1.5 6.5-4 9c-2.5-2.5-4-5.8-4-9s1.5-6.5 4-9z"/></svg>
                            @endif
                        </div>
                        <h3 class="font-bold mb-4 text-white" style="font-size: 18px;">{{ $item['title'] }}</h3>
                        <p class="text-white/60 leading-relaxed" style="font-size: 12.6px;">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </x-container>
    </section>

    {{-- Mission & Vision Section --}}
    <section class="py-20 md:py-32">
        <x-container>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                <div class="p-8 md:p-12 bg-white rounded-[1.5rem] md:rounded-[2rem] shadow-xl border border-[#6d5a2c]/5 relative overflow-hidden group animate-on-scroll" data-animate="fadeInUp">
                    <div class="absolute top-0 right-0 w-24 h-24 md:w-32 md:h-32 bg-[#f4c157]/10 rounded-bl-full -mr-6 -mt-6 md:-mr-8 md:-mt-8"></div>
                    {{-- Target icon (lucide-like) --}}
                    <svg class="w-10 h-10 md:w-12 md:h-12 text-[#c19b46] mb-6 md:mb-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22a10 10 0 100-20 10 10 0 000 20z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18a6 6 0 100-12 6 6 0 000 12z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14a2 2 0 100-4 2 2 0 000 4z"/>
                    </svg>
                    <h3 class="font-bold text-[#6d5a2c] mb-4 md:mb-6" style="font-size: 18px;">Our Mission</h3>
                    <p class="text-[#6d5a2c]/70 leading-relaxed" style="font-size: 14.4px;">
                        To empower industrial enterprises by providing seamless, transparent, and highly efficient sourcing and logistics frameworks that eliminate complexity and maximize value across the entire supply chain.
                    </p>
                </div>

                <div class="p-8 md:p-12 bg-white rounded-[1.5rem] md:rounded-[2rem] shadow-xl border border-[#6d5a2c]/5 relative overflow-hidden group animate-on-scroll" data-animate="fadeInUp" data-delay="0.1">
                    <div class="absolute top-0 right-0 w-24 h-24 md:w-32 md:h-32 bg-[#c19b46]/10 rounded-bl-full -mr-6 -mt-6 md:-mr-8 md:-mt-8"></div>
                    <svg class="w-10 h-10 md:w-12 md:h-12 text-[#c19b46] mb-6 md:mb-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7-10-7-10-7z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 100-6 3 3 0 000 6z"/></svg>
                    <h3 class="font-bold text-[#6d5a2c] mb-4 md:mb-6" style="font-size: 18px;">Our Vision</h3>
                    <p class="text-[#6d5a2c]/70 leading-relaxed" style="font-size: 14.4px;">
                        To be the premier global gateway for industrial commerce, recognized for our ability to coordinate growth through innovation, reliability, and unparalleled regional expertise.
                    </p>
                </div>
            </div>
        </x-container>
    </section>

    {{-- Strategic Partnership Section --}}
    <section class="py-20 md:py-32 bg-[#f7f4eb]">
        <x-container>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-2 lg:order-1 animate-on-scroll" data-animate="fadeInUp">
                    <div class="relative h-[300px] md:h-[600px] rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/content/Strategic.jpg') }}" alt="Modern Logistics" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="order-1 lg:order-2 animate-on-scroll" data-animate="fadeInUp">
                    <h2 class="font-bold text-[#6d5a2c] mb-6 md:mb-8" style="font-size: 27px;">Strategic Partnership</h2>
                    <div class="space-y-6 md:space-y-8">
                        <div class="flex gap-4 md:gap-6">
                            <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#f4c157]/20 flex items-center justify-center text-[#c19b46]">
                                {{-- Handshake icon (lucide-like) --}}
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-1 1a2 2 0 01-3 0l-2-2a2 2 0 010-3l3-3"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l1-1a2 2 0 013 0l2 2a2 2 0 010 3l-3 3"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12l3 3a2 2 0 002 0l3-3"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#6d5a2c] mb-2" style="font-size: 16.2px;">Long-term Value</h4>
                                <p class="text-[#6d5a2c]/70 leading-relaxed" style="font-size: 14.4px;">We focus on building enduring relationships that go beyond simple transactions, acting as a trusted extension of your procurement team.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 md:gap-6">
                            <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#f4c157]/20 flex items-center justify-center text-[#c19b46]">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#6d5a2c] mb-2" style="font-size: 16.2px;">Risk Mitigation</h4>
                                <p class="text-[#6d5a2c]/70 leading-relaxed" style="font-size: 14.4px;">Our deep market intelligence helps identify and neutralize potential supply chain disruptions before they impact your operations.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 md:gap-6">
                            <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#f4c157]/20 flex items-center justify-center text-[#c19b46]">
                                {{-- Network icon (lucide-like) --}}
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 3a3 3 0 100 6 3 3 0 000-6zM18 3a3 3 0 100 6 3 3 0 000-6zM6 15a3 3 0 100 6 3 3 0 000-6z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 7.5l7 0M6 9v6a6 6 0 006 6"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#6d5a2c] mb-2" style="font-size: 16.2px;">Operational Excellence</h4>
                                <p class="text-[#6d5a2c]/70 leading-relaxed" style="font-size: 14.4px;">We bring structured growth through optimized processes, ensuring your sourcing strategy remains agile and competitive.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-container>
    </section>

    {{-- Geographic Positioning Section --}}
    <section class="relative py-32 md:py-48 overflow-hidden text-white">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1465415074239-84142598d04d?q=80&w=2070" alt="Dubai Port Aerial" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#6d5a2c]/85"></div>
        </div>
        <x-container class="relative z-10 text-center">
            <div class="animate-on-scroll" data-animate="fadeInUp">
                <h2 class="font-bold mb-6 md:mb-8 text-white" style="font-size: 27px;">Geographic Positioning</h2>
                <p class="text-white/80 max-w-4xl mx-auto leading-relaxed mb-10 md:mb-12" style="font-size: 16.2px;">
                    Based in Dubai, the world's logistics hub, Al Zaha leverages a unique geographic advantage. We sit at the crossroad of East and West, providing our partners with unmatched access to emerging markets in Africa, Asia, and the Middle East while maintaining seamless links to Western manufacturing centers.
                </p>
                <div class="flex flex-wrap justify-center gap-8 md:gap-12">
                    <div class="text-center">
                        <div class="font-bold text-[#f4c157] mb-2" style="font-size: 27px;">4hr</div>
                        <div class="uppercase tracking-widest text-white/60" style="font-size: 12.6px;">Flight to 1/3 of population</div>
                    </div>
                    <div class="text-center">
                        <div class="font-bold text-[#f4c157] mb-2" style="font-size: 27px;">8hr</div>
                        <div class="uppercase tracking-widest text-white/60" style="font-size: 12.6px;">Flight to 2/3 of population</div>
                    </div>
                    <div class="text-center">
                        <div class="font-bold text-[#f4c157] mb-2" style="font-size: 27px;">0</div>
                        <div class="uppercase tracking-widest text-white/60" style="font-size: 12.6px;">Compromise on quality</div>
                    </div>
                </div>
            </div>
        </x-container>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 md:py-32 bg-[#f7f4eb]">
        <x-container>
            <div class="p-10 md:p-16 rounded-[2rem] md:rounded-[3rem] bg-[#c19b46] relative overflow-hidden text-center group animate-on-scroll" data-animate="fadeInUp">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0 100 L100 0 L100 100 Z" fill="white" />
                    </svg>
                </div>

                <div class="relative z-10">
                    <h2 class="font-bold text-white mb-6 md:mb-8 leading-tight" style="font-size: 27px;">Ready to structure your growth?</h2>
                    <p class="text-white/90 mb-10 md:mb-12 max-w-2xl mx-auto leading-relaxed" style="font-size: 16.2px;">
                        Connect with our team today to discover how Al Zaha can optimize your industrial supply chain and sourcing strategies.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 md:gap-6 justify-center">
                        <a href="{{ route('quote') }}" class="w-full sm:w-auto px-10 py-4 md:py-5 bg-white text-[#6d5a2c] font-bold rounded-full transition-all duration-300 hover:scale-105 shadow-xl hover:shadow-2xl flex items-center justify-center gap-2" style="font-size: 14.4px;">
                            Request a Custom Quote
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto px-10 py-4 md:py-5 bg-transparent text-white border-2 border-white/30 hover:border-white font-bold rounded-full transition-all duration-300 hover:scale-105" style="font-size: 14.4px;">
                            Contact Our Team
                        </a>
                    </div>
                </div>
            </div>
        </x-container>
    </section>
</div>
@endsection
