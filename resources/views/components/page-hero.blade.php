@props([
    'title',
    'eyebrow' => null,
    'subtitle' => null,
    'image' => null,
    'align' => 'left',
    'size' => 'lg',
])
@php
    $centered = $align === 'center';
    $padding = $size === 'lg' ? 'pt-40 pb-24 md:pt-52 md:pb-36 min-h-[640px] md:min-h-[min(78vh,860px)]' : 'pt-36 pb-20 md:pt-48 md:pb-28';
@endphp

<section {{ $attributes->merge(['class' => "relative isolate overflow-hidden bg-ink text-white flex items-end grain $padding"]) }}>
    @if($image)
        <img src="{{ $image }}" alt="" class="absolute inset-0 -z-20 w-full h-full object-cover scale-105 animate-now" data-animate="fadeIn" fetchpriority="high">
        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-ink via-ink/85 to-ink/30"></div>
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-ink via-transparent to-ink/50"></div>
    @else
        <div class="absolute inset-0 -z-20 bg-aurora"></div>
        <div class="absolute inset-0 -z-10 bg-grid mask-fade-b opacity-60"></div>
    @endif
    <div class="absolute -top-32 right-[-10%] -z-10 w-[620px] h-[620px] rounded-full bg-gold/20 blur-[140px]" aria-hidden="true"></div>

    <div class="relative w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="{{ $centered ? 'max-w-4xl mx-auto text-center' : 'max-w-3xl' }} animate-now" data-animate="fadeInUp">
            @if($eyebrow)
                <span class="eyebrow eyebrow-light">{{ $eyebrow }}</span>
            @endif
            <h1 class="display-1 mt-6 text-white">{!! $title !!}</h1>
            @if($subtitle)
                <p class="mt-7 text-lg md:text-xl leading-relaxed text-white/70 {{ $centered ? 'mx-auto' : '' }} max-w-2xl">{{ $subtitle }}</p>
            @endif
            @if(isset($buttons))
                <div class="mt-10 flex flex-col sm:flex-row gap-3 {{ $centered ? 'justify-center' : '' }}">
                    {{ $buttons }}
                </div>
            @endif
        </div>

        @if(isset($footer))
            <div class="mt-16 md:mt-20 animate-now" data-animate="fadeInUp" data-delay="0.2">
                {{ $footer }}
            </div>
        @endif
    </div>
</section>
