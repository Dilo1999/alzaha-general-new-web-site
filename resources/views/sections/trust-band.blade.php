@php
    $brandLogos = [
        '1.webp', '2.webp', '3.webp', '4.webp', '5.webp',
        '6.webp', '7.webp', '8.webp', '9.webp', '10.webp',
        '11.webp', '12.webp', '13.webp', '14.webp', '15.webp',
        '16.jpg',
    ];
@endphp
<section class="py-20 md:py-24 bg-white border-y border-ink/5 overflow-hidden">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8 mb-10 md:mb-12 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-ink-muted">Brands &amp; partners we work with</p>
        <div class="hidden md:block flex-1 ml-8 divider-gold"></div>
    </div>

    <div class="marquee mask-fade-x">
        <div class="marquee-track flex w-max gap-4 md:gap-5">
            @foreach([1, 2] as $copy)
                @foreach($brandLogos as $file)
                    <div class="group flex-shrink-0 w-[150px] h-[96px] md:w-[200px] md:h-[120px] flex items-center justify-center rounded-2xl bg-cream/60 border border-ink/5 p-5 md:p-6 transition-colors duration-300 hover:bg-white hover:border-gold/30" @if($copy === 2) aria-hidden="true" @endif>
                        <img src="{{ asset('images/brand/' . $file) }}" alt="{{ $copy === 1 ? 'Partner logo' : '' }}" class="max-w-full max-h-full object-contain grayscale opacity-70 mix-blend-multiply transition-all duration-500 group-hover:grayscale-0 group-hover:opacity-100" loading="lazy">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
