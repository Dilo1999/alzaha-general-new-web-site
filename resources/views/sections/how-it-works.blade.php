@php
    $steps = [
        ['icon' => 'clipboard-list', 'title' => 'Submit your requirements', 'subtitle' => 'Send your list, BOQ, specs and timelines.'],
        ['icon' => 'settings', 'title' => 'We source, quote & schedule', 'subtitle' => 'Supplier coordination and freight planning.'],
        ['icon' => 'truck', 'title' => 'We coordinate delivery', 'subtitle' => 'Documentation, shipment and destination support.'],
    ];
@endphp
<section id="how-it-works" class="relative isolate overflow-hidden py-24 md:py-36 bg-aurora text-white grain scroll-mt-20">
    <div class="absolute inset-0 -z-10 bg-grid opacity-50 [mask-image:radial-gradient(ellipse_at_top,black,transparent_70%)]" aria-hidden="true"></div>

    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16 md:mb-24 animate-on-scroll" data-animate="fadeInUp">
            <div class="max-w-2xl">
                <span class="eyebrow eyebrow-light">How it works</span>
                <h2 class="display-2 mt-5 text-white">
                    A simple system from <span class="accent accent-light">sourcing to delivery.</span>
                </h2>
            </div>
            <a href="{{ route('how-it-works') }}" class="btn btn-ghost shrink-0 self-start md:self-auto">
                Explore the process <x-glyph name="arrow-right" class="btn-arrow w-4 h-4" stroke="2" />
            </a>
        </div>

        <div class="relative grid md:grid-cols-3 gap-5 lg:gap-6">

            @foreach($steps as $index => $step)
                <div class="group relative card-dark p-8 lg:p-10 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $index * 0.12 }}">
                    <div class="flex items-center justify-between">
                        <span class="relative w-16 h-16 inline-flex items-center justify-center rounded-2xl bg-gradient-to-b from-gold-light to-gold text-ink shadow-[0_10px_40px_-8px_rgba(244,193,87,0.6)] transition-transform duration-500 group-hover:-rotate-6">
                            <x-glyph :name="$step['icon']" class="w-7 h-7" />
                        </span>
                        <span class="font-serif italic text-6xl leading-none text-white/10 transition-colors duration-500 group-hover:text-gold-light/30">0{{ $index + 1 }}</span>
                    </div>
                    <div class="mt-10 text-xs font-semibold uppercase tracking-[0.2em] text-gold-light">Step {{ $index + 1 }}</div>
                    <h3 class="mt-3 text-2xl font-semibold tracking-tight text-white">{{ $step['title'] }}</h3>
                    <p class="mt-3 leading-relaxed text-white/60">{{ $step['subtitle'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-14 flex justify-center animate-on-scroll" data-animate="fadeInUp">
            <a href="{{ route('quote') }}" class="btn btn-gold btn-lg">
                Start with a quote <x-glyph name="arrow-right" class="btn-arrow w-5 h-5" stroke="2" />
            </a>
        </div>
    </div>
</section>
