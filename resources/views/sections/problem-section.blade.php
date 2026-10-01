@php
    $problems = [
        ['icon' => 'users', 'title' => 'Supplier inconsistency', 'description' => 'Varying quality standards and reliability across vendors create operational uncertainty and product inconsistencies.'],
        ['icon' => 'clock', 'title' => 'Shipment delays', 'description' => 'Unpredictable transit times and customs clearances disrupt your production schedules and delivery commitments.'],
        ['icon' => 'dollar', 'title' => 'Hidden landed costs', 'description' => 'Unexpected duties, fees, and surcharges make it impossible to forecast your true procurement expenses.'],
        ['icon' => 'message', 'title' => 'Fragmented communication', 'description' => 'Coordinating across suppliers, freight forwarders, and customs agents wastes time and creates confusion.'],
    ];
@endphp
<section class="relative py-24 md:py-36 bg-white overflow-hidden">
    <div class="absolute inset-0 bg-grid-dark mask-fade-b opacity-60 pointer-events-none" aria-hidden="true"></div>

    <div class="relative w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid lg:grid-cols-12 gap-14 lg:gap-16">
            <div class="lg:col-span-5 lg:sticky lg:top-32 self-start animate-on-scroll" data-animate="fadeInUp">
                <span class="eyebrow">The problem</span>
                <h2 class="display-2 mt-5">
                    International sourcing shouldn't feel <span class="accent">unpredictable.</span>
                </h2>
                <p class="lead mt-7 max-w-md">
                    Multiple suppliers, unclear freight schedules, and documentation delays create unnecessary cost and operational stress.
                </p>
                <a href="{{ route('solutions') }}" class="link-arrow mt-10">
                    See how we fix it <x-glyph name="arrow-right" class="w-4 h-4 text-gold-deep" stroke="2" />
                </a>
            </div>

            <div class="lg:col-span-7 grid sm:grid-cols-2 gap-5">
                @foreach($problems as $index => $problem)
                    <div class="group card card-hover p-8 md:p-9 animate-on-scroll {{ $index % 2 === 1 ? 'sm:mt-10' : '' }}" data-animate="fadeInUp" data-delay="{{ $index * 0.08 }}">
                        <div class="flex items-start justify-between">
                            <span class="icon-tile"><x-glyph :name="$problem['icon']" class="w-6 h-6" /></span>
                            <span class="font-serif italic text-4xl text-ink/10 leading-none">0{{ $index + 1 }}</span>
                        </div>
                        <h3 class="mt-8 text-xl font-semibold tracking-tight">{{ $problem['title'] }}</h3>
                        <p class="mt-3 text-[0.95rem] leading-relaxed text-ink-muted">{{ $problem['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
