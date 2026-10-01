@extends('layouts.app')

@section('title', 'Blog – Al Zaha')

@section('content')
@php
    $featured = $posts->first();
    $rest = $posts->slice(1);
@endphp

<x-page-hero
    eyebrow="Insights & resources"
    title='Field notes on <span class="accent accent-light">global sourcing.</span>'
    subtitle="Expert insights on supply chain management, global sourcing, logistics, and procurement strategies for the MENA region."
    size="md"
/>

<section class="py-20 md:py-28 bg-cream">
    <div class="w-full max-w-[1320px] mx-auto px-5 md:px-8">
        @if($featured)
            {{-- Featured post --}}
            <a href="{{ route('blogs.show', $featured->slug) }}" class="group card card-hover overflow-hidden grid lg:grid-cols-2 animate-on-scroll" data-animate="fadeInUp">
                <div class="relative aspect-[16/10] lg:aspect-auto lg:min-h-[440px] overflow-hidden bg-sand">
                    @if($featured->image_url)
                        <img src="{{ $featured->image_url }}" alt="{{ $featured->title }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-[1.4s] ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-105">
                    @endif
                    <span class="absolute top-5 left-5 rounded-full bg-gold-light text-ink px-3 py-1 text-xs font-bold uppercase tracking-wider">Latest</span>
                </div>
                <div class="p-8 md:p-12 lg:p-14 flex flex-col justify-center">
                    <div class="flex flex-wrap items-center gap-3 text-xs font-semibold uppercase tracking-[0.18em] text-ink-muted">
                        @if($featured->category)<span class="text-gold-deep">{{ $featured->category }}</span>@endif
                        @if($featured->published_at)<span>{{ $featured->published_at->format('M d, Y') }}</span>@endif
                        @if($featured->read_time)<span>· {{ $featured->read_time }}</span>@endif
                    </div>
                    <h2 class="display-3 mt-5 transition-colors group-hover:text-gold-deep">{{ $featured->title }}</h2>
                    @if($featured->intro)
                        <p class="mt-5 leading-relaxed text-ink-muted line-clamp-3">{{ $featured->intro }}</p>
                    @endif
                    <span class="link-arrow mt-8">Read article <x-glyph name="arrow-right" class="w-4 h-4 text-gold-deep" stroke="2" /></span>
                </div>
            </a>

            @if($rest->isNotEmpty())
                <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($rest->values() as $index => $post)
                        <a href="{{ route('blogs.show', $post->slug) }}" class="group card card-hover overflow-hidden flex flex-col animate-on-scroll" data-animate="fadeInUp" data-delay="{{ ($index % 3) * 0.08 }}">
                            <div class="relative aspect-[16/10] overflow-hidden bg-sand">
                                @if($post->image_url)
                                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-[1.4s] ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-105" loading="lazy">
                                @endif
                            </div>
                            <div class="p-7 flex flex-col flex-1">
                                <div class="flex flex-wrap items-center gap-3 text-xs font-semibold uppercase tracking-[0.18em] text-ink-muted">
                                    @if($post->category)<span class="text-gold-deep">{{ $post->category }}</span>@endif
                                    @if($post->published_at)<span>{{ $post->published_at->format('M d, Y') }}</span>@endif
                                </div>
                                <h2 class="mt-4 text-xl font-semibold tracking-tight leading-snug flex-1 transition-colors group-hover:text-gold-deep">{{ $post->title }}</h2>
                                <span class="link-arrow mt-6">Read more <x-glyph name="arrow-right" class="w-4 h-4 text-gold-deep" stroke="2" /></span>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        @else
            <div class="card p-16 text-center">
                <span class="icon-tile"><x-glyph name="file-text" class="w-6 h-6" /></span>
                <h2 class="display-3 mt-6">Articles coming soon</h2>
                <p class="mt-3 text-ink-muted">We're preparing our first insights. Check back shortly.</p>
            </div>
        @endif
    </div>
</section>

<x-cta
    title='Ready to transform your <span class="accent accent-light">supply chain?</span>'
    text="Let's discuss how Al Zaha can optimize your sourcing and logistics operations."
    primary-label="Contact Our Team"
    :primary-href="route('contact')"
    secondary-label="Request a Quote"
    :secondary-href="route('quote')"
/>
@endsection
