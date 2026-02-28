@props([
    'brands' => [],
    'accent' => '#c19b46',
])

@if(count($brands) > 0)
<section class="brand-strip-wrapper w-full overflow-hidden min-w-0">
    <div class="relative w-full overflow-hidden">
        <div class="brand-strip-marquee-outer overflow-hidden">
            <div class="brand-strip-marquee-inner flex items-center gap-12 md:gap-16 whitespace-nowrap w-max">
                @foreach([1, 2, 3] as $copy)
                    <div class="brand-strip-set flex flex-shrink-0 flex-nowrap gap-12 md:gap-16">
                        @foreach($brands as $brand)
                            @php
                                $logoUrl = is_array($brand)
                                    ? (str_starts_with($brand['logo'] ?? '', 'http') ? $brand['logo'] : asset($brand['logo']))
                                    : (str_starts_with($brand->logo ?? '', 'http') ? $brand->logo : asset('storage/' . $brand->logo));
                                $name = is_array($brand) ? ($brand['name'] ?? 'Partner') : ($brand->name ?? 'Partner');
                            @endphp
                            <div class="flex-shrink-0 w-[120px] md:w-[150px] h-[80px] md:h-[100px] flex items-center justify-center bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 p-3 md:p-4">
                                <img src="{{ $logoUrl }}" alt="{{ $name }}" class="max-w-full max-h-full object-contain filter brightness-110" loading="lazy">
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes brand-strip-marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    .brand-strip-marquee-inner {
        animation: brand-strip-marquee 45s linear infinite;
        will-change: transform;
    }

    .brand-strip-wrapper {
        --color-gold: {{ $accent }};
    }
</style>
@endif
