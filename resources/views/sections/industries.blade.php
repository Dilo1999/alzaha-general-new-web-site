@php
    $industries = [
        ['image' => asset('images/home/Resorts.jpg'), 'label' => 'Resorts', 'slug' => 'resorts', 'desc' => 'FF&E, amenities and equipment for remote luxury properties.'],
        ['image' => asset('images/home/Construction.jpg'), 'label' => 'Construction', 'slug' => 'construction', 'desc' => 'Materials and finishes delivered on your critical path.'],
        ['image' => asset('images/home/Retail.jpg'), 'label' => 'Retail', 'slug' => 'retail', 'desc' => 'Responsive inventory and fixture sourcing at scale.'],
        ['image' => asset('images/home/Industrial.jpg'), 'label' => 'Industrial', 'slug' => 'industrial', 'desc' => 'Machinery, spares and precision components.'],
    ];
@endphp
<section id="industries" class="py-24 md:py-36 bg-white">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 md:mb-20 animate-on-scroll" data-animate="fadeInUp">
            <span class="eyebrow">Industries</span>
            <h2 class="display-2 mt-5">Built for <span class="accent whitespace-nowrap">time-sensitive</span> industries.</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($industries as $index => $industry)
                <a href="{{ route('industries') }}#{{ $industry['slug'] }}" class="group relative isolate overflow-hidden rounded-[1.75rem] aspect-[4/5] lg:aspect-[3/4.4] animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $index * 0.08 }}">
                    <img src="{{ $industry['image'] }}" alt="{{ $industry['label'] }}" class="absolute inset-0 -z-10 w-full h-full object-cover transition-transform duration-[1.4s] ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-ink via-ink/30 to-transparent opacity-90 transition-opacity duration-500 group-hover:opacity-100"></div>

                    <div class="absolute top-5 right-5 w-11 h-11 rounded-full glass inline-flex items-center justify-center text-white transition-all duration-500 group-hover:bg-gold-light group-hover:text-ink group-hover:rotate-45">
                        <x-glyph name="arrow-up-right" class="w-5 h-5" stroke="2" />
                    </div>

                    <div class="absolute inset-x-0 bottom-0 p-6 md:p-7">
                        <div class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-light">0{{ $index + 1 }}</div>
                        <h3 class="mt-2 text-2xl font-semibold tracking-tight text-white">{{ $industry['label'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-white/70 max-h-0 opacity-0 overflow-hidden transition-all duration-500 group-hover:max-h-20 group-hover:opacity-100 max-lg:max-h-20 max-lg:opacity-100">{{ $industry['desc'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
