@php
    $solutions = [
        [
            'image' => asset('images/home/Access.jpg'),
            'icon' => 'clipboard-list',
            'title' => 'Strategic Sourcing & Procurement',
            'subtitle' => 'Access verified suppliers with structured cost control.',
            'description' => 'We identify and coordinate with reliable UAE and international suppliers to secure competitive pricing and consistent product standards.',
            'features' => [
                'Supplier verification and communication',
                'Structured price negotiation',
                'Pre-Shipment Product Inspections'
            ],
            'link' => route('solutions.sourcing'),
        ],
        [
            'image' => asset('images/home/Move.jpg'),
            'icon' => 'truck',
            'title' => 'Freight & Shipment Management',
            'subtitle' => 'Move cargo with scheduling discipline and cost efficiency.',
            'description' => 'We coordinate both air and sea freight based on urgency, volume, commercial priorities.',
            'features' => [
                'Weekly air freight services',
                'LCL and FCL sea freight',
                'Consolidated shipment cycles',
                'Freight cost optimization'
            ],
            'link' => route('solutions.supply-chain'),
        ],
        [
            'image' => asset('images/home/documentation.jpg'),
            'icon' => 'file-text',
            'title' => 'Integrated Logistics & Documentation',
            'subtitle' => 'Control documentation and compliance with clarity.',
            'description' => 'International trade depends on proper documentation and sea booth coordination.',
            'features' => [
                'Export documentation prep',
                'Coordinate shipment customs clearances',
                'Cargo tracking and shipment coordinates'
            ],
            'link' => route('solutions.logistics'),
        ],
        [
            'image' => asset('images/home/Seamless.jpg'),
            'icon' => 'package',
            'title' => 'Destination Delivery Support',
            'subtitle' => 'Seamless execution beyond port entry.',
            'description' => 'In key markets, including the Maldives, that we serve is supported through stretched local logistics coordination.',
            'features' => [
                'Customs clearance',
                'Warehousing',
                'Local transport within Maldives',
                'Final delivery scheduling'
            ],
            'link' => route('solutions.consulting'),
        ],
    ];
@endphp

<section class="py-16 md:py-28 bg-white">
    <div class="w-full max-w-[1320px] mx-auto px-4 md:px-8">
        <div class="text-center mb-10 md:mb-14 animate-on-scroll" data-animate="fadeInUp">
            <h2 class="mb-4 font-bold tracking-tight text-[#6d5a2c]" style="font-size: 27px;">
                What We Handle for You
            </h2>
            <div class="w-24 h-1 mx-auto mt-6 bg-[#c19b46]"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($solutions as $index => $item)
                <div
                    class="flex flex-col bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group animate-on-scroll"
                    data-animate="fadeInUp"
                    data-delay="{{ $index * 0.1 }}"
                >
                    {{-- Top Section: Image & Title --}}
                    <div class="relative h-48 md:h-56 overflow-hidden">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-[#6d5a2c]/70 flex flex-col items-center justify-center p-6 text-center">
                            <div class="mb-4 p-3 rounded-full bg-white/10 backdrop-blur-md border border-white/20">
                                @if($item['icon'] === 'clipboard-list')
                                    <svg class="w-8 h-8 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                                @elseif($item['icon'] === 'truck')
                                    <svg class="w-8 h-8 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 01-1-1V4a1 1 0 011-1h2a1 1 0 011 1v10a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                                @elseif($item['icon'] === 'file-text')
                                    <svg class="w-8 h-8 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                @else
                                    <svg class="w-8 h-8 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 8l-9 5-9-5"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8V16l9 5 9-5V8"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13v8"/></svg>
                                @endif
                            </div>
                            <h3 class="font-bold leading-tight text-white px-2" style="font-size: 16.2px;">
                                {{ $item['title'] }}
                            </h3>
                        </div>
                    </div>

                    {{-- Bottom Section: Content --}}
                    <div class="flex-1 p-6 md:p-8 flex flex-col">
                        <h4 class="font-bold mb-4 leading-snug text-[#6d5a2c]" style="font-size: 14.4px;">
                            {{ $item['subtitle'] }}
                        </h4>
                        <p class="mb-6 leading-relaxed text-[#6d5a2c] opacity-80" style="font-size: 12.6px;">
                            {{ $item['description'] }}
                        </p>

                        <div class="space-y-3 mb-8 flex-1">
                            @foreach($item['features'] as $feature)
                                <div class="flex items-start gap-3">
                                    <div class="mt-1 flex-shrink-0">
                                        <svg class="w-4 h-4 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <span class="leading-tight text-[#6d5a2c] opacity-90" style="font-size: 12.6px;">{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>

                        <a href="{{ $item['link'] }}" class="mt-auto flex items-center gap-2 font-bold transition-all duration-300 hover:gap-3 text-[#c19b46] group/link" style="font-size: 12.6px;">
                            <span class="uppercase tracking-wider">Explore Solution</span>
                            <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
