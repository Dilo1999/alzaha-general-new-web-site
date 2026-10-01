@extends('layouts.app')

@section('title', 'Contact – Al Zaha')

@section('content')
@php
    $channels = [
        ['icon' => 'map-pin', 'title' => 'Our Headquarters', 'lines' => ['Warehouse No-05, 18B Street, Umm Ramool-215', 'Al Rashidiya, Dubai, UAE']],
        ['icon' => 'phone', 'title' => 'Phone', 'lines' => ['<a href="tel:+97143967075" class="hover:text-gold-deep transition-colors">+971 4 396 7075</a> · Office', '<a href="tel:+971545997800" class="hover:text-gold-deep transition-colors">+971 54 599 7800</a> · Sourcing']],
        ['icon' => 'mail', 'title' => 'Email Inquiries', 'lines' => ['General: <a href="mailto:sales@alzahageneraltrading.com" class="hover:text-gold-deep transition-colors break-all">sales@alzahageneraltrading.com</a>', 'Quotes: <a href="mailto:info@alzahageneraltrading.com" class="hover:text-gold-deep transition-colors break-all">info@alzahageneraltrading.com</a>']],
        ['icon' => 'clock', 'title' => 'Business Hours', 'lines' => ['Monday – Friday: 9:00 AM – 6:00 PM', 'Saturday: 10:00 AM – 2:00 PM']],
    ];
@endphp

<x-page-hero
    eyebrow="Contact"
    title='Let&rsquo;s talk about <span class="accent accent-light">your supply chain.</span>'
    subtitle="We're here to discuss your industrial challenges. Visit our Dubai headquarters or reach out via phone or email."
    size="md"
/>

<section class="py-20 md:py-28 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        <div class="grid lg:grid-cols-12 gap-10 lg:gap-14">
            <div class="lg:col-span-5 animate-on-scroll" data-animate="fadeInUp">
                <span class="eyebrow">Get in touch</span>
                <h2 class="display-3 mt-5">Connect with Al Zaha</h2>
                <p class="lead mt-4">Tell us what you need and the right specialist will get back to you.</p>

                <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-1 gap-4">
                    @foreach($channels as $channel)
                        <div class="group flex gap-4 rounded-2xl bg-white border border-ink/5 p-5 md:p-6 shadow-soft">
                            <span class="icon-tile"><x-glyph :name="$channel['icon']" class="w-6 h-6" /></span>
                            <div class="min-w-0">
                                <h3 class="font-semibold">{{ $channel['title'] }}</h3>
                                @foreach($channel['lines'] as $line)
                                    <p class="mt-1 text-[0.92rem] leading-relaxed text-ink-muted">{!! $line !!}</p>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="lg:col-span-7 animate-on-scroll" data-animate="fadeInUp" data-delay="0.1">
                <x-contact-form />
            </div>
        </div>
    </div>
</section>

<section class="pb-20 md:pb-28 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-4 md:px-8">
        <div class="relative h-[380px] md:h-[520px] rounded-[2rem] overflow-hidden shadow-lift border border-ink/5">
            <iframe
                src="https://www.google.com/maps?q=18B+street+umm+ramool-215+Al+rashidia+Dubai&output=embed"
                class="absolute inset-0 w-full h-full grayscale-[60%] contrast-[1.05]"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Al Zaha General Trading - Dubai Office"
            ></iframe>
            <div class="absolute bottom-4 left-4 right-4 md:left-8 md:bottom-8 md:right-auto md:max-w-sm rounded-2xl bg-ink text-white p-5 md:p-6 shadow-lift">
                <div class="flex items-start gap-4">
                    <span class="icon-tile icon-tile-dark !w-11 !h-11 !rounded-xl"><x-glyph name="map-pin" class="w-5 h-5" /></span>
                    <div>
                        <h3 class="font-semibold">Al Zaha General Trading</h3>
                        <p class="mt-1 text-sm leading-relaxed text-white/60">Warehouse No-05, 18B Street, Umm Ramool, Al Rashidiya, Dubai</p>
                        <a href="https://www.google.com/maps/search/?api=1&query=18B+street+umm+ramool-215+Al+rashidia+Dubai" target="_blank" rel="noopener noreferrer" class="mt-3 inline-flex items-center gap-1.5 text-sm font-semibold text-gold-light">
                            Get directions <x-glyph name="arrow-up-right" class="w-4 h-4" stroke="2" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
