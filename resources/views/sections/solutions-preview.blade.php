@php
    $solutions = [
        [
            'image' => asset('images/home/Access.jpg'),
            'icon' => 'clipboard-list',
            'title' => 'Strategic Sourcing & Procurement',
            'subtitle' => 'Access verified suppliers with structured cost control.',
            'description' => 'We identify and coordinate with reliable UAE and international suppliers to secure competitive pricing and consistent product standards.',
            'features' => ['Supplier verification and communication', 'Structured price negotiation', 'Pre-shipment product inspections'],
            'link' => route('solutions.sourcing'),
        ],
        [
            'image' => asset('images/home/Move.jpg'),
            'icon' => 'ship',
            'title' => 'Freight & Shipment Management',
            'subtitle' => 'Move cargo with scheduling discipline and cost efficiency.',
            'description' => 'We coordinate both air and sea freight based on urgency, volume and commercial priorities.',
            'features' => ['Weekly air freight services', 'LCL and FCL sea freight', 'Consolidated shipment cycles', 'Freight cost optimization'],
            'link' => route('solutions.supply-chain'),
        ],
        [
            'image' => asset('images/home/documentation.jpg'),
            'icon' => 'file-text',
            'title' => 'Integrated Logistics & Documentation',
            'subtitle' => 'Control documentation and compliance with clarity.',
            'description' => 'International trade depends on proper documentation and coordination at every border.',
            'features' => ['Export documentation prep', 'Customs clearance coordination', 'Cargo tracking and shipment updates'],
            'link' => route('solutions.logistics'),
        ],
        [
            'image' => asset('images/home/Seamless.jpg'),
            'icon' => 'map-pin',
            'title' => 'Destination Delivery Support',
            'subtitle' => 'Seamless execution beyond port entry.',
            'description' => 'In key markets, including the Maldives, delivery is supported through local logistics coordination.',
            'features' => ['Customs clearance', 'Warehousing', 'Local transport within Maldives', 'Final delivery scheduling'],
            'link' => route('solutions.consulting'),
        ],
    ];
@endphp

<section class="py-24 md:py-36 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-14 md:mb-20 animate-on-scroll" data-animate="fadeInUp">
            <div class="max-w-2xl">
                <span class="eyebrow">What we handle</span>
                <h2 class="display-2 mt-5">Everything between the factory <span class="accent">and your door.</span></h2>
            </div>
            <a href="{{ route('solutions') }}" class="btn btn-outline shrink-0 self-start md:self-auto">
                All solutions <x-glyph name="arrow-right" class="btn-arrow w-4 h-4" stroke="2" />
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-5 lg:gap-6">
            @foreach($solutions as $index => $item)
                <a href="{{ $item['link'] }}" class="group card card-hover overflow-hidden flex flex-col animate-on-scroll" data-animate="fadeInUp" data-delay="{{ ($index % 2) * 0.1 }}">
                    <div class="relative h-56 md:h-64 overflow-hidden">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-[1.2s] ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-ink/80 via-ink/20 to-transparent"></div>
                        <div class="absolute top-5 left-5 right-5 flex items-center justify-between">
                            <span class="w-12 h-12 rounded-2xl glass inline-flex items-center justify-center text-gold-light">
                                <x-glyph :name="$item['icon']" class="w-6 h-6" />
                            </span>
                            <span class="rounded-full glass px-3 py-1 text-xs font-semibold text-white">0{{ $index + 1 }}</span>
                        </div>
                        <h3 class="absolute bottom-5 left-6 right-6 text-2xl font-semibold tracking-tight text-white">{{ $item['title'] }}</h3>
                    </div>

                    <div class="flex-1 flex flex-col p-6 md:p-8">
                        <p class="font-semibold text-ink">{{ $item['subtitle'] }}</p>
                        <p class="mt-2 text-[0.95rem] leading-relaxed text-ink-muted">{{ $item['description'] }}</p>

                        <ul class="mt-6 flex flex-wrap gap-2">
                            @foreach($item['features'] as $feature)
                                <li class="inline-flex items-center gap-1.5 rounded-full bg-cream border border-ink/5 px-3 py-1.5 text-[0.8rem] font-medium text-ink/80">
                                    <x-glyph name="check" class="w-3.5 h-3.5 text-gold-deep" stroke="2.5" />
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>

                        <span class="link-arrow mt-8 pt-6 border-t border-ink/5">
                            Explore solution <x-glyph name="arrow-right" class="w-4 h-4 text-gold-deep" stroke="2" />
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
