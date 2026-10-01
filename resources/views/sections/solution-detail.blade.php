{{--
    Shared layout for the solution detail pages.
    Expects: $current (route name), $hero, $how, $audience, $advantages, $cta
--}}
@php
    $allSolutions = [
        'solutions.sourcing' => ['icon' => 'clipboard-list', 'title' => 'Strategic Sourcing & Procurement'],
        'solutions.supply-chain' => ['icon' => 'ship', 'title' => 'Freight & Shipment Management'],
        'solutions.logistics' => ['icon' => 'file-check', 'title' => 'Integrated Logistics & Documentation'],
        'solutions.consulting' => ['icon' => 'map-pin', 'title' => 'Destination Delivery Support'],
    ];
    $others = array_diff_key($allSolutions, [$current => true]);
@endphp

<x-page-hero :eyebrow="$hero['eyebrow']" :title="$hero['title']" :subtitle="$hero['intro']" :image="$hero['image']">
    <x-slot:buttons>
        <a href="{{ route('quote') }}" class="btn btn-gold btn-lg">Request a Quote <x-glyph name="arrow-right" class="btn-arrow w-5 h-5" stroke="2" /></a>
        <a href="{{ route('contact') }}" class="btn btn-ghost btn-lg">Contact Us</a>
    </x-slot:buttons>
</x-page-hero>

{{-- How it works --}}
<section class="py-24 md:py-36 bg-white">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid lg:grid-cols-12 gap-14 lg:gap-16 items-center">
            <div class="lg:col-span-6 animate-on-scroll" data-animate="fadeInUp">
                <span class="eyebrow">The service</span>
                <h2 class="display-2 mt-5">{!! $how['title'] !!}</h2>
                <p class="lead mt-6">{{ $how['text'] }}</p>

                <ul class="mt-10 grid sm:grid-cols-2 gap-3">
                    @foreach($how['items'] as $item)
                        <li class="flex gap-3 rounded-2xl bg-cream border border-ink/5 p-4">
                            <span class="mt-0.5 w-6 h-6 shrink-0 rounded-full bg-gold/15 text-gold-deep inline-flex items-center justify-center">
                                <x-glyph name="check" class="w-3.5 h-3.5" stroke="2.5" />
                            </span>
                            <span class="text-[0.92rem] leading-snug text-ink/85">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="lg:col-span-6 relative animate-on-scroll" data-animate="fadeInUp" data-delay="0.15">
                <div class="relative rounded-[2rem] overflow-hidden shadow-lift">
                    <img src="{{ $how['image'] }}" alt="{{ $how['imageAlt'] ?? '' }}" class="w-full aspect-[4/5] sm:aspect-[4/3] lg:aspect-[4/5] object-cover" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-ink/50 via-transparent to-transparent"></div>
                </div>
                <div class="absolute -bottom-6 left-4 right-4 sm:right-auto sm:-left-6 sm:max-w-xs rounded-2xl bg-white p-5 shadow-lift border border-ink/5 flex items-center gap-4">
                    <span class="icon-tile"><x-glyph :name="$allSolutions[$current]['icon']" class="w-6 h-6" /></span>
                    <div>
                        <div class="text-xs uppercase tracking-[0.18em] text-ink-muted">Single point of contact</div>
                        <div class="mt-1 font-semibold leading-snug">One coordinator, end to end</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Who this is for --}}
<section class="relative isolate overflow-hidden py-24 md:py-36 bg-aurora text-white grain">
    <div class="absolute inset-0 -z-10 bg-grid opacity-40 [mask-image:radial-gradient(ellipse_at_top,black,transparent_70%)]" aria-hidden="true"></div>
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="max-w-2xl mb-14 md:mb-20 animate-on-scroll" data-animate="fadeInUp">
            <span class="eyebrow eyebrow-light">Who it's for</span>
            <h2 class="display-2 mt-5 text-white">Who this solution <span class="accent accent-light">is for.</span></h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($audience as $i => $client)
                <div class="group card-dark p-8 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.08 }}">
                    <span class="icon-tile icon-tile-dark"><x-glyph :name="$client['icon']" class="w-6 h-6" /></span>
                    <h3 class="mt-8 text-xl font-semibold tracking-tight text-white">{{ $client['title'] }}</h3>
                    <p class="mt-3 text-[0.92rem] leading-relaxed text-white/60">{{ $client['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Advantages --}}
<section class="py-24 md:py-36 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid lg:grid-cols-12 gap-10 mb-14 md:mb-20 items-end animate-on-scroll" data-animate="fadeInUp">
            <div class="lg:col-span-7">
                <span class="eyebrow">The Al Zaha advantage</span>
                <h2 class="display-2 mt-5">{!! $advantages['title'] !!}</h2>
            </div>
            <p class="lead lg:col-span-5">{{ $advantages['subtitle'] }}</p>
        </div>

        <div class="grid md:grid-cols-3 gap-5">
            @foreach($advantages['items'] as $i => $adv)
                <div class="group card card-hover p-8 md:p-10 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.08 }}">
                    <div class="flex items-start justify-between">
                        <span class="icon-tile"><x-glyph :name="$adv['icon']" class="w-6 h-6" /></span>
                        <span class="font-serif italic text-4xl text-ink/10 leading-none">0{{ $i + 1 }}</span>
                    </div>
                    <h3 class="mt-8 text-xl font-semibold tracking-tight">{{ $adv['title'] }}</h3>
                    <p class="mt-3 text-[0.95rem] leading-relaxed text-ink-muted">{{ $adv['description'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Other solutions --}}
        <div class="mt-20 md:mt-28 animate-on-scroll" data-animate="fadeInUp">
            <div class="flex items-center gap-6 mb-6">
                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-ink-muted shrink-0">Explore other solutions</span>
                <span class="flex-1 divider-gold"></span>
            </div>
            <div class="grid md:grid-cols-3 gap-4">
                @foreach($others as $route => $other)
                    <a href="{{ route($route) }}" class="group flex items-center gap-4 rounded-2xl bg-white border border-ink/5 p-5 transition-all duration-300 hover:border-gold/40 hover:shadow-soft">
                        <span class="icon-tile !w-11 !h-11 !rounded-xl"><x-glyph :name="$other['icon']" class="w-5 h-5" /></span>
                        <span class="flex-1 font-semibold leading-snug">{{ $other['title'] }}</span>
                        <x-glyph name="arrow-right" class="w-4 h-4 text-gold-deep transition-transform group-hover:translate-x-1" stroke="2" />
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<x-cta :title="$cta['title']" :text="$cta['text']" :image="asset('images/content/cta.jpg')" primary-label="Get Your Quote" />
