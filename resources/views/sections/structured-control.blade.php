@php
    $features = [
        ['icon' => 'globe', 'title' => 'Dubai-based global supplier access', 'description' => 'Leverage our UAE hub to connect with vetted manufacturers across Asia, Europe, and the Americas—without managing multiple time zones or intermediaries.'],
        ['icon' => 'package', 'title' => 'Consolidated shipment efficiency', 'description' => 'Combine orders from different suppliers into single containers, reducing per-unit freight costs and minimizing handling delays.'],
        ['icon' => 'target', 'title' => 'One-point coordination', 'description' => 'A dedicated account manager tracks every milestone—from factory inspection to final delivery—so you work with one team, not ten vendors.'],
        ['icon' => 'file-check', 'title' => 'Compliance-focused documentation', 'description' => 'We prepare certificates of origin, customs declarations, import permits, and regulatory filings to keep shipments moving across borders.'],
        ['icon' => 'network', 'title' => 'Scalable regional structure', 'description' => 'Our network in the GCC and beyond grows with your business, supporting new routes, product lines, and volume increases seamlessly.'],
    ];
    $lead = array_shift($features);
@endphp
<section class="py-24 md:py-36 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="max-w-3xl mb-14 md:mb-20 animate-on-scroll" data-animate="fadeInUp">
            <span class="eyebrow">Why Al-Zaha</span>
            <h2 class="display-2 mt-5">Why businesses choose <span class="accent">structured control.</span></h2>
        </div>

        <div class="grid lg:grid-cols-3 gap-5">
            {{-- Lead feature --}}
            <div class="group relative isolate overflow-hidden rounded-[1.75rem] bg-ink text-white p-8 md:p-10 lg:row-span-2 min-h-[460px] flex flex-col justify-end grain animate-on-scroll" data-animate="fadeInUp">
                <img src="{{ asset('images/content/Strategic.jpg') }}" alt="" class="absolute inset-0 -z-20 w-full h-full object-cover opacity-60 transition-transform duration-[1.4s] ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-ink via-ink/70 to-ink/10"></div>
                <span class="icon-tile icon-tile-dark mb-auto"><x-glyph :name="$lead['icon']" class="w-6 h-6" /></span>
                <h3 class="mt-24 text-3xl font-semibold tracking-tight">{{ $lead['title'] }}</h3>
                <p class="mt-4 leading-relaxed text-white/70">{{ $lead['description'] }}</p>
            </div>

            <div class="lg:col-span-2 grid sm:grid-cols-2 gap-5">
                @foreach($features as $i => $feature)
                    <div class="group card card-hover p-8 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ ($i + 1) * 0.08 }}">
                        <span class="icon-tile"><x-glyph :name="$feature['icon']" class="w-6 h-6" /></span>
                        <h3 class="mt-7 text-xl font-semibold tracking-tight">{{ $feature['title'] }}</h3>
                        <p class="mt-3 text-[0.95rem] leading-relaxed text-ink-muted">{{ $feature['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
