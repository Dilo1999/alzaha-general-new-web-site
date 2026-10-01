@props([
    'title',
    'text' => null,
    'image' => null,
    'primaryLabel' => 'Request a Quote',
    'primaryHref' => null,
    'secondaryLabel' => 'Contact Us',
    'secondaryHref' => null,
])

<section class="py-20 md:py-28 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-4 md:px-8">
        <div class="relative isolate overflow-hidden rounded-[2rem] md:rounded-[2.75rem] bg-ink text-white px-6 py-16 sm:px-12 md:px-20 md:py-24 grain animate-on-scroll" data-animate="scaleIn">
            @if($image)
                <img src="{{ $image }}" alt="" class="absolute inset-0 -z-20 w-full h-full object-cover opacity-40" loading="lazy">
                <div class="absolute inset-0 -z-10 bg-gradient-to-r from-ink via-ink/90 to-ink/40"></div>
            @else
                <div class="absolute inset-0 -z-20 bg-aurora"></div>
            @endif
            <div class="absolute -right-24 -bottom-40 -z-10 w-[520px] h-[520px] rounded-full bg-gold/30 blur-[120px]" aria-hidden="true"></div>
            <div class="absolute inset-0 -z-10 bg-grid opacity-40 [mask-image:radial-gradient(ellipse_at_right,black,transparent_70%)]" aria-hidden="true"></div>

            <div class="grid lg:grid-cols-12 gap-10 items-end">
                <div class="lg:col-span-8">
                    <h2 class="display-2 text-white">{!! $title !!}</h2>
                    @if($text)
                        <p class="mt-6 text-lg leading-relaxed text-white/70 max-w-2xl">{{ $text }}</p>
                    @endif
                </div>
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-3 lg:justify-end">
                    <a href="{{ $primaryHref ?? route('quote') }}" class="btn btn-gold btn-lg">
                        {{ $primaryLabel }} <x-glyph name="arrow-right" class="btn-arrow w-5 h-5" stroke="2" />
                    </a>
                    @if($secondaryLabel)
                        <a href="{{ $secondaryHref ?? route('contact') }}" class="btn btn-ghost btn-lg">{{ $secondaryLabel }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
