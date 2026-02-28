@php
    $problems = [
        ['icon' => 'clock', 'title' => 'Supplier inconsistency', 'description' => 'Varying quality standards and reliability across vendors create operational uncertainty and product inconsistencies'],
        ['icon' => 'dollar', 'title' => 'Shipment delays', 'description' => 'Unpredictable transit times and customs clearances disrupt your production schedules and delivery commitments'],
        ['icon' => 'globe', 'title' => 'Hidden landed costs', 'description' => 'Unexpected duties, fees, and surcharges make it impossible to forecast your true procurement expenses'],
        ['icon' => 'trending', 'title' => 'Fragmented communication', 'description' => 'Coordinating across suppliers, freight forwarders, and customs agents wastes time and creates confusion'],
    ];
@endphp
<section class="py-24 md:py-40 bg-white">
    <div class="w-full max-w-[1320px] mx-auto px-4 md:px-8">
        <div class="text-center mb-16 md:mb-20 animate-on-scroll" data-animate="fadeInUp">
            <h2 class="text-3xl md:text-4xl mb-6 font-bold text-[#6d5a2c]">
                International sourcing shouldn't feel unpredictable.
            </h2>
            <p class="text-base md:text-lg mb-8 max-w-2xl mx-auto text-[#6d5a2c] opacity-70">
                Multiple suppliers, unclear freight schedules, and documentation delays create unnecessary cost and operational stress.
            </p>
            <div class="w-20 h-1 mx-auto bg-[#c19b46]"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 max-w-[1000px] mx-auto justify-items-center md:justify-items-stretch">
            @foreach($problems as $index => $problem)
                <div class="flex flex-col sm:flex-row gap-6 group animate-on-scroll w-full max-w-md md:max-w-none text-center md:text-left items-center md:items-start" data-animate="fadeInUp" data-delay="{{ $index * 0.1 }}">
                    <div class="w-16 h-16 flex items-center justify-center flex-shrink-0 rounded-2xl bg-[#6d5a2c] transition-transform duration-300 ease-out group-hover:scale-110">
                        @if($problem['icon'] === 'clock')
                            {{-- Clock --}}
                            <svg class="w-8 h-8 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        @elseif($problem['icon'] === 'dollar')
                            {{-- DollarSign --}}
                            <svg class="w-8 h-8 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1v22"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 5H10a3 3 0 000 6h4a3 3 0 010 6H7"/></svg>
                        @elseif($problem['icon'] === 'globe')
                            {{-- Globe2 --}}
                            <svg class="w-8 h-8 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22a10 10 0 100-20 10 10 0 000 20z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12h20"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a15 15 0 010 20"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a15 15 0 000 20"/></svg>
                        @else
                            {{-- TrendingDown --}}
                            <svg class="w-8 h-8 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l6 6 4-4 8 8"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10v7h-7"/></svg>
                        @endif
                    </div>
                    <div>
                        <h3 class="text-xl mb-3 font-bold text-[#6d5a2c]">{{ $problem['title'] }}</h3>
                        <p class="leading-relaxed text-sm md:text-base text-[#6d5a2c] opacity-70">{{ $problem['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
