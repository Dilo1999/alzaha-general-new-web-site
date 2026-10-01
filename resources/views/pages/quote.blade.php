@extends('layouts.app')

@section('title', 'Request a Quote – Al Zaha')

@section('content')
<x-page-hero
    eyebrow="Request a quote"
    title='Request a <span class="accent accent-light">premium quote.</span>'
    subtitle="Provide us with your project details and our procurement specialists will deliver a customized sourcing strategy within 24–48 hours."
    size="md"
/>

<section class="py-20 md:py-28 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid lg:grid-cols-12 gap-10 lg:gap-14">
            <aside class="lg:col-span-4 order-2 lg:order-1 animate-on-scroll" data-animate="fadeInUp">
                <div class="lg:sticky lg:top-28 space-y-5">
                    <div class="rounded-[1.75rem] bg-ink text-white p-8 relative overflow-hidden">
                        <div class="absolute -right-20 -top-20 w-56 h-56 rounded-full bg-gold/25 blur-3xl" aria-hidden="true"></div>
                        <h2 class="relative text-xl font-semibold tracking-tight">What happens next</h2>
                        <ol class="relative mt-8 space-y-7">
                            @foreach([
                                ['title' => 'We review your request', 'desc' => 'A specialist clarifies specifications, quantities and timelines.'],
                                ['title' => 'We source & plan freight', 'desc' => 'Supplier options, landed costs and shipping schedule.'],
                                ['title' => 'You receive your proposal', 'desc' => 'A customized sourcing strategy within 24–48 hours.'],
                            ] as $i => $step)
                                <li class="flex gap-4">
                                    <span class="w-8 h-8 shrink-0 rounded-full bg-gold-light text-ink inline-flex items-center justify-center text-sm font-bold">{{ $i + 1 }}</span>
                                    <div>
                                        <div class="font-semibold">{{ $step['title'] }}</div>
                                        <div class="mt-1 text-sm leading-relaxed text-white/60">{{ $step['desc'] }}</div>
                                    </div>
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="rounded-[1.75rem] bg-white border border-ink/5 p-8 shadow-soft">
                        <h2 class="font-semibold">Prefer to talk?</h2>
                        <p class="mt-1 text-sm text-ink-muted">Reach our sourcing team directly.</p>
                        <div class="mt-5 space-y-3 text-sm">
                            <a href="tel:+971545997800" class="flex items-center gap-3 hover:text-gold-deep transition-colors"><x-glyph name="phone" class="w-4 h-4 text-gold-deep" /> +971 54 599 7800</a>
                            <a href="mailto:info@alzahageneraltrading.com" class="flex items-center gap-3 hover:text-gold-deep transition-colors break-all"><x-glyph name="mail" class="w-4 h-4 text-gold-deep shrink-0" /> info@alzahageneraltrading.com</a>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="lg:col-span-8 order-1 lg:order-2 animate-on-scroll" data-animate="fadeInUp" data-delay="0.1">
                <x-quote-form />
            </div>
        </div>
    </div>
</section>
@endsection
