@extends('layouts.app')

@section('title', $post->title . ' – Al Zaha')

@section('content')
@php
    $contentItems = $post->content ?? [];
    $prevPost = $post->prev_post;
    $nextPost = $post->next_post;
    $shareUrl = urlencode(route('blogs.show', $post->slug));
    $shareTitle = urlencode($post->title);
@endphp

{{-- Article header --}}
<section class="relative isolate overflow-hidden bg-ink text-white pt-36 md:pt-44 {{ $post->image_url ? 'pb-40 md:pb-56' : 'pb-20 md:pb-28' }} grain">
    <div class="absolute inset-0 -z-20 bg-aurora"></div>
    <div class="absolute inset-0 -z-10 bg-grid mask-fade-b opacity-50"></div>

    <div class="max-w-[900px] mx-auto px-5 md:px-8 text-center animate-now" data-animate="fadeInUp">
        <a href="{{ route('blogs.index') }}" class="inline-flex items-center gap-2 text-sm text-white/60 hover:text-white transition-colors">
            <x-glyph name="arrow-left" class="w-4 h-4" stroke="2" /> All insights
        </a>
        @if($post->category)
            <div class="mt-8"><span class="eyebrow eyebrow-light">{{ $post->category }}</span></div>
        @endif
        <h1 class="display-2 mt-5 text-white">{{ $post->title }}</h1>
        <div class="mt-8 flex flex-wrap items-center justify-center gap-x-5 gap-y-2 text-sm text-white/60">
            @if($post->author)
                <span>By <span class="text-white font-medium">{{ $post->author }}</span></span>
            @endif
            @if($post->published_at)
                <span class="inline-flex items-center gap-2"><x-glyph name="calendar" class="w-4 h-4 text-gold-light" /> {{ $post->published_at->format('F d, Y') }}</span>
            @endif
            @if($post->read_time)
                <span class="inline-flex items-center gap-2"><x-glyph name="clock" class="w-4 h-4 text-gold-light" /> {{ $post->read_time }}</span>
            @endif
        </div>
    </div>
</section>

{{-- Featured image --}}
@if($post->image_url)
    <div class="relative z-10 max-w-[1100px] mx-auto px-4 md:px-8 -mt-28 md:-mt-40">
        <div class="rounded-[2rem] overflow-hidden shadow-lift aspect-[16/9] animate-now" data-animate="fadeInUp" data-delay="0.15">
            <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
        </div>
    </div>
@endif

<article class="bg-cream">
    <div class="max-w-[720px] mx-auto px-5 md:px-8 py-16 md:py-24">
        @if($post->intro)
            <p class="text-xl md:text-2xl leading-relaxed font-medium tracking-tight text-ink">{{ $post->intro }}</p>
            <div class="divider-gold my-12"></div>
        @endif

        <div class="article">
            @foreach($contentItems as $item)
                @if(($item['type'] ?? '') === 'h2')
                    <h2>{{ $item['text'] ?? '' }}</h2>
                @elseif(($item['type'] ?? '') === 'p')
                    <p>{{ $item['text'] ?? '' }}</p>
                @elseif(($item['type'] ?? '') === 'image' && !empty($item['src']))
                    <figure class="my-12 -mx-2 md:-mx-16">
                        <img src="{{ \App\Models\BlogPost::resolveImageUrl($item['src']) }}" alt="Article image" class="w-full aspect-[16/9] object-cover rounded-[1.5rem]" loading="lazy">
                    </figure>
                @elseif(($item['type'] ?? '') === 'blockquote')
                    <blockquote class="relative my-12 rounded-[1.5rem] bg-ink text-white p-8 md:p-10 overflow-hidden">
                        <x-glyph name="quote" class="absolute -top-2 right-6 w-24 h-24 text-gold/15" stroke="1" />
                        <p class="relative !text-white !mb-0 font-serif italic !text-2xl !leading-snug">{{ $item['text'] ?? '' }}</p>
                    </blockquote>
                @endif
            @endforeach

            @if($post->conclusion)
                <p>{{ $post->conclusion }}</p>
            @endif
        </div>

        {{-- Share --}}
        <div class="mt-14 pt-8 border-t border-ink/10 flex flex-wrap items-center justify-between gap-4">
            <span class="text-sm font-semibold uppercase tracking-[0.18em] text-ink-muted">Share this article</span>
            <div class="flex gap-2">
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}" target="_blank" rel="noopener noreferrer" class="w-11 h-11 inline-flex items-center justify-center rounded-full bg-white border border-ink/10 text-ink transition-colors hover:bg-ink hover:text-white" aria-label="Share on LinkedIn">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" target="_blank" rel="noopener noreferrer" class="w-11 h-11 inline-flex items-center justify-center rounded-full bg-white border border-ink/10 text-ink transition-colors hover:bg-ink hover:text-white" aria-label="Share on X">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="mailto:?subject={{ $shareTitle }}&body={{ $shareUrl }}" class="w-11 h-11 inline-flex items-center justify-center rounded-full bg-white border border-ink/10 text-ink transition-colors hover:bg-ink hover:text-white" aria-label="Share by email">
                    <x-glyph name="mail" class="w-4 h-4" />
                </a>
            </div>
        </div>

        {{-- Inline CTA --}}
        <div class="mt-14 relative overflow-hidden rounded-[1.75rem] bg-ink text-white p-8 md:p-12">
            <div class="absolute -right-20 -bottom-24 w-72 h-72 rounded-full bg-gold/30 blur-3xl" aria-hidden="true"></div>
            <div class="relative">
                <h3 class="display-3 text-white">Elevate your <span class="accent accent-light">global sourcing.</span></h3>
                <p class="mt-4 text-white/70">Partner with Al Zaha for premium supply chain solutions in Dubai and beyond.</p>
                <a href="{{ route('quote') }}" class="btn btn-gold mt-8">Get a Strategic Consultation <x-glyph name="arrow-right" class="btn-arrow w-4 h-4" stroke="2" /></a>
            </div>
        </div>
    </div>
</article>

{{-- Prev / Next --}}
@if($prevPost || $nextPost)
    <section class="bg-white border-t border-ink/5 py-14 md:py-20">
        <div class="max-w-[1100px] mx-auto px-5 md:px-8 grid md:grid-cols-2 gap-4">
            <div>
                @if($prevPost)
                    <a href="{{ route('blogs.show', $prevPost->slug) }}" class="group flex items-center gap-5 rounded-2xl border border-ink/5 bg-cream p-4 transition-colors hover:border-gold/40 h-full">
                        <div class="w-20 h-20 shrink-0 rounded-xl overflow-hidden bg-sand">
                            @if($prevPost->image_url)
                                <img src="{{ $prevPost->image_url }}" alt="" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                            @endif
                        </div>
                        <div class="min-w-0">
                            <span class="inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-[0.18em] text-ink-muted"><x-glyph name="arrow-left" class="w-3.5 h-3.5" stroke="2" /> Previous</span>
                            <h4 class="mt-1.5 font-semibold leading-snug line-clamp-2 transition-colors group-hover:text-gold-deep">{{ $prevPost->title }}</h4>
                        </div>
                    </a>
                @endif
            </div>
            <div>
                @if($nextPost)
                    <a href="{{ route('blogs.show', $nextPost->slug) }}" class="group flex flex-row-reverse items-center gap-5 rounded-2xl border border-ink/5 bg-cream p-4 text-right transition-colors hover:border-gold/40 h-full">
                        <div class="w-20 h-20 shrink-0 rounded-xl overflow-hidden bg-sand">
                            @if($nextPost->image_url)
                                <img src="{{ $nextPost->image_url }}" alt="" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                            @endif
                        </div>
                        <div class="min-w-0 flex-1">
                            <span class="inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-[0.18em] text-ink-muted">Next <x-glyph name="arrow-right" class="w-3.5 h-3.5" stroke="2" /></span>
                            <h4 class="mt-1.5 font-semibold leading-snug line-clamp-2 transition-colors group-hover:text-gold-deep">{{ $nextPost->title }}</h4>
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </section>
@endif
@endsection
