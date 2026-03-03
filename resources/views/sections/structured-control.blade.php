<section class="py-24 md:py-40 bg-[#6d5a2c] text-white">
    <div class="w-full max-w-[1320px] mx-auto px-4 md:px-8">
        <div class="text-center mb-16 md:mb-20 animate-on-scroll" data-animate="fadeInUp">
            <h2 class="mb-4 font-bold text-white" style="font-size: 27px;">
                Why businesses choose Al-Zaha
            </h2>
        </div>

        @php
            $features = [
                [
                    'icon' => 'globe',
                    'title' => 'Dubai-based global supplier access',
                    'description' => 'Leverage our UAE hub to connect with vetted manufacturers across Asia, Europe, and the Americas—without managing multiple time zones or intermediaries.',
                ],
                [
                    'icon' => 'package',
                    'title' => 'Consolidated shipment efficiency',
                    'description' => 'Combine orders from different suppliers into single containers, reducing per-unit freight costs and minimizing handling delays.',
                ],
                [
                    'icon' => 'target',
                    'title' => 'One-point coordination',
                    'description' => 'A dedicated account manager tracks every milestone—from factory inspection to final delivery—so you work with one team, not ten vendors.',
                ],
                [
                    'icon' => 'file-check',
                    'title' => 'Compliance-focused documentation',
                    'description' => 'We prepare certificates of origin, customs declarations, import permits, and regulatory filings to keep shipments moving across borders.',
                ],
                [
                    'icon' => 'network',
                    'title' => 'Scalable regional structure',
                    'description' => 'Our network in the GCC and beyond grows with your business, supporting new routes, product lines, and volume increases seamlessly.',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 md:gap-8">
            @foreach($features as $i => $feature)
                <div
                    class="group flex flex-col bg-white/5 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 p-8 md:p-10 border border-white/10 hover:bg-white/10 animate-on-scroll"
                    data-animate="fadeInUp"
                    data-delay="{{ $i * 0.1 }}"
                >
                    <div class="w-16 h-16 flex items-center justify-center mb-8 rounded-full bg-[#c19b46] transition-transform duration-500 group-hover:scale-110 shadow-lg shadow-black/20 shrink-0">
                        @if($feature['icon'] === 'globe')
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22a10 10 0 100-20 10 10 0 000 20z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12h20"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a15 15 0 010 20"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a15 15 0 000 20"/></svg>
                        @elseif($feature['icon'] === 'package')
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 8l-9 5-9-5"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8V16l9 5 9-5V8"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13v8"/></svg>
                        @elseif($feature['icon'] === 'target')
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 100-6 3 3 0 000 6z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12a8 8 0 11-16 0 8 8 0 0116 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v3M12 19v3M2 12h3M19 12h3"/></svg>
                        @elseif($feature['icon'] === 'file-check')
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2v6h6"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 15l2 2 4-4"/></svg>
                        @else
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8a4 4 0 100 8 4 4 0 000-8z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12a8 8 0 10-16 0 8 8 0 0016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v2M12 20v2M2 12h2M20 12h2"/></svg>
                        @endif
                    </div>

                    <h3 class="mb-6 font-bold leading-tight text-white" style="font-size: 18px;">
                        {{ $feature['title'] }}
                    </h3>
                    <p class="leading-relaxed text-white/70" style="font-size: 14.4px;">
                        {{ $feature['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

