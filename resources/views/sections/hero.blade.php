@php
    $stats = [
        ['value' => '24–48h', 'label' => 'Quote turnaround'],
        ['value' => 'Weekly', 'label' => 'Air freight departures'],
        ['value' => 'Air · Sea · Land', 'label' => 'Multi-modal freight'],
        ['value' => '1', 'label' => 'Point of contact'],
    ];
    $stages = [
        ['label' => 'Sourced', 'done' => true],
        ['label' => 'Inspected', 'done' => true],
        ['label' => 'In transit', 'done' => false, 'active' => true],
        ['label' => 'Delivered', 'done' => false],
    ];
@endphp

<section class="relative isolate overflow-hidden bg-ink text-white grain">
    {{-- Background --}}
    <img src="{{ asset('images/hero/home.jpg') }}" alt="" class="absolute inset-0 -z-20 w-full h-full object-cover" fetchpriority="high">
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-ink via-ink/90 to-ink/40"></div>
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-ink via-ink/20 to-ink/60"></div>
    <div class="absolute -top-40 right-0 -z-10 w-[700px] h-[700px] rounded-full bg-gold/20 blur-[150px]" aria-hidden="true"></div>

    <div class="relative w-full max-w-[1320px] mx-auto px-5 md:px-8 pt-36 md:pt-44 lg:pt-48 pb-12">
        <div class="grid lg:grid-cols-12 gap-14 lg:gap-10 items-center">
            {{-- Copy --}}
            <div class="lg:col-span-7 animate-now" data-animate="fadeInUp">
                <a href="{{ route('how-it-works') }}" class="group inline-flex items-center gap-3 rounded-full glass pl-2 pr-4 py-1.5 text-sm text-white/80 hover:text-white transition-colors">
                    <span class="rounded-full bg-gold-light text-ink text-xs font-bold px-2.5 py-1">Dubai</span>
                    Your global sourcing hub
                    <x-glyph name="arrow-right" class="w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5" stroke="2" />
                </a>

                <h1 class="display-1 mt-8 text-white">
                    Take control of your international sourcing <span class="accent accent-light">from Dubai.</span>
                </h1>

                <p class="mt-8 text-lg md:text-xl leading-relaxed text-white/70 max-w-xl">
                    Al-Zaha replaces fragmented suppliers and unpredictable freight with one coordinated procurement and delivery system — so your business operates with cost clarity and timeline confidence.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('quote') }}" class="btn btn-gold btn-lg">
                        Request a Quote
                        <x-glyph name="arrow-right" class="btn-arrow w-5 h-5" stroke="2" />
                    </a>
                    <a href="#how-it-works" class="btn btn-ghost btn-lg">See how it works</a>
                </div>

                <ul class="mt-12 flex flex-wrap gap-x-8 gap-y-4 text-sm text-white/70">
                    @foreach(['Verified Suppliers' => 'award', 'Consolidated Shipments' => 'package', 'Coordinated Delivery' => 'truck'] as $label => $icon)
                        <li class="flex items-center gap-2.5">
                            <x-glyph :name="$icon" class="w-[18px] h-[18px] text-gold-light" />
                            {{ $label }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Floating shipment card (decorative) --}}
            <div class="lg:col-span-5 relative hidden md:block animate-now" data-animate="slideRight" data-delay="0.25" aria-hidden="true">
                <div class="relative mx-auto max-w-[440px] float-slow">
                    <div class="glass !bg-ink/55 rounded-[2rem] p-6 shadow-[0_40px_100px_-30px_rgba(0,0,0,0.8)]">
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-2 text-xs font-medium text-white/70">
                                <span class="pulse-dot"></span> Live coordination
                            </span>
                            <span class="rounded-full bg-white/10 px-3 py-1 text-[11px] font-semibold tracking-wide text-white/80">SEA · LCL</span>
                        </div>

                        <div class="mt-7 flex items-center justify-between gap-4">
                            <div>
                                <div class="text-[11px] uppercase tracking-[0.18em] text-white/50">Origin</div>
                                <div class="mt-1 text-2xl font-semibold">Dubai</div>
                                <div class="text-xs text-white/50">Jebel Ali, UAE</div>
                            </div>
                            <div class="flex-1 relative h-10">
                                <div class="absolute top-1/2 inset-x-0 border-t border-dashed border-white/25"></div>
                                <span class="absolute top-1/2 left-[58%] -translate-x-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-gold-light text-ink inline-flex items-center justify-center shadow-[0_0_30px_rgba(244,193,87,0.6)]">
                                    <x-glyph name="ship" class="w-4 h-4" stroke="2" />
                                </span>
                            </div>
                            <div class="text-right">
                                <div class="text-[11px] uppercase tracking-[0.18em] text-white/50">Destination</div>
                                <div class="mt-1 text-2xl font-semibold">Malé</div>
                                <div class="text-xs text-white/50">Maldives</div>
                            </div>
                        </div>

                        <div class="mt-7 grid grid-cols-4 gap-2">
                            @foreach($stages as $stage)
                                <div>
                                    <div class="h-1.5 rounded-full {{ $stage['done'] ? 'bg-gold-light' : 'bg-white/15' }} overflow-hidden">
                                        @if(!empty($stage['active']))
                                            <div class="h-full w-3/5 bg-gold-light origin-left animate-[progress_2.4s_cubic-bezier(0.16,1,0.3,1)_both]"></div>
                                        @endif
                                    </div>
                                    <div class="mt-2 text-[11px] {{ $stage['done'] || !empty($stage['active']) ? 'text-white/85' : 'text-white/40' }}">{{ $stage['label'] }}</div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-7 grid grid-cols-3 gap-3 rounded-2xl bg-black/25 p-4 text-center">
                            <div>
                                <div class="text-[11px] text-white/50">Suppliers</div>
                                <div class="mt-1 font-semibold">6 → 1</div>
                            </div>
                            <div class="border-x border-white/10">
                                <div class="text-[11px] text-white/50">Container</div>
                                <div class="mt-1 font-semibold">Consolidated</div>
                            </div>
                            <div>
                                <div class="text-[11px] text-white/50">Docs</div>
                                <div class="mt-1 font-semibold text-gold-light">Cleared</div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating chips --}}
                    <div class="absolute -left-12 -bottom-16 float-slower glass !bg-[#221c11]/90 rounded-2xl px-4 py-3 flex items-center gap-3 shadow-2xl">
                        <span class="w-9 h-9 rounded-xl bg-emerald-400/15 text-emerald-300 inline-flex items-center justify-center"><x-glyph name="file-check" class="w-5 h-5" /></span>
                        <div>
                            <div class="text-sm font-semibold">Customs docs ready</div>
                            <div class="text-[11px] text-white/50">Certificate of origin · Packing list</div>
                        </div>
                    </div>
                    <div class="absolute -right-4 -top-14 float-slower glass !bg-[#221c11]/90 rounded-2xl px-4 py-3 flex items-center gap-3 shadow-2xl">
                        <span class="w-9 h-9 rounded-xl bg-gold-light/15 text-gold-light inline-flex items-center justify-center"><x-glyph name="shield-check" class="w-5 h-5" /></span>
                        <div class="text-sm font-semibold">Pre-shipment inspected</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats strip --}}
        <div class="mt-20 md:mt-28 grid grid-cols-2 lg:grid-cols-4 gap-px overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/10 animate-now" data-animate="fadeInUp" data-delay="0.4">
            @foreach($stats as $stat)
                <div class="px-6 py-6 md:px-8 md:py-7 bg-[#1b160d]/85 backdrop-blur-xl">
                    <div class="text-xl md:text-2xl font-semibold tracking-tight text-white">{{ $stat['value'] }}</div>
                    <div class="mt-1 text-sm text-white/55">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
