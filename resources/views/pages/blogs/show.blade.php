@extends('layouts.app')

@section('title', $post->title . ' – Al Zaha')

@section('content')
@php
    $contentItems = $post->content ?? [];
    $prevPost = $post->prev_post;
    $nextPost = $post->next_post;
@endphp
<div class="flex flex-col bg-white overflow-x-hidden">
    <section class="w-full aspect-[16/9] md:aspect-[21/9] lg:aspect-[3/1] max-h-[600px] overflow-hidden">
        @if($post->image_url)
            <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
        @else
            <div class="w-full h-full bg-[#f7f4eb] flex items-center justify-center text-[#6d5a2c]/40">No image</div>
        @endif
    </section>

    <section class="py-20 px-8">
        <div class="max-w-[1200px] mx-auto text-center">
            @if($post->category)
                <span class="text-sm font-bold tracking-widest uppercase mb-4 block text-[#c19b46]">{{ $post->category }}</span>
            @endif
            <h1 class="text-3xl md:text-5xl font-bold mb-8 max-w-[900px] mx-auto leading-tight text-[#6d5a2c]">{{ $post->title }}</h1>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-8 text-sm opacity-70 mb-8 text-[#6d5a2c]">
                @if($post->author)
                    <span>BY {{ strtoupper($post->author) }}</span>
                    <span class="hidden md:block w-1 h-1 rounded-full bg-[#c19b46]"></span>
                @endif
                @if($post->published_at)
                    <span>{{ strtoupper($post->published_at->format('F d, Y')) }}</span>
                    <span class="hidden md:block w-1 h-1 rounded-full bg-[#c19b46]"></span>
                @endif
                @if($post->read_time)
                    <span>{{ strtoupper($post->read_time) }}</span>
                @endif
            </div>
            <div class="flex items-center justify-center gap-6">
                <a href="#" class="transition-transform hover:scale-110 text-[#6d5a2c]" aria-label="Share on LinkedIn"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                <a href="#" class="transition-transform hover:scale-110 text-[#6d5a2c]" aria-label="Share on Twitter"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
                <a href="#" class="transition-transform hover:scale-110 text-[#6d5a2c]" aria-label="Email"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></a>
            </div>
        </div>
    </section>

    @if($post->intro)
    <section class="pb-16 px-8">
        <div class="max-w-[720px] mx-auto">
            <p class="text-xl md:text-2xl leading-relaxed font-medium mb-12 text-[#6d5a2c]">{{ $post->intro }}</p>
            <div class="w-full h-[1px] bg-[#c19b46]"></div>
        </div>
    </section>
    @endif

    <section class="pb-20 px-8">
        <div class="max-w-[720px] mx-auto">
            @foreach($contentItems as $item)
                @if(($item['type'] ?? '') === 'h2')
                    <h2 class="text-2xl md:text-3xl font-bold mt-[64px] mb-8 leading-tight text-[#6d5a2c]">
                        {{ $item['text'] ?? '' }}
                    </h2>
                @elseif(($item['type'] ?? '') === 'p')
                    <p class="text-lg leading-relaxed mb-[24px] opacity-90 text-[#6d5a2c]">
                        {{ $item['text'] ?? '' }}
                    </p>
                @elseif(($item['type'] ?? '') === 'image' && !empty($item['src']))
                    <div class="my-[48px]">
                        <img src="{{ \App\Models\BlogPost::resolveImageUrl($item['src']) }}" alt="Article image" class="w-full aspect-[16/9] object-cover rounded-[14px]">
                    </div>
                @elseif(($item['type'] ?? '') === 'blockquote')
                    <div class="my-12 p-10 border-l-4 rounded-r-lg bg-[#f7f4eb] border-[#c19b46]">
                        <p class="text-xl italic font-medium leading-relaxed text-[#6d5a2c]">
                            "{{ $item['text'] ?? '' }}"
                        </p>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    <section class="pb-24 px-8">
        <div class="max-w-[720px] mx-auto">
            @if($post->conclusion)
                <p class="text-lg leading-relaxed mb-12 opacity-90 text-[#6d5a2c]">{{ $post->conclusion }}</p>
            @endif
            <div class="bg-[#f7f4eb] p-12 rounded-[20px] text-center border border-[#6d5a2c]/5">
                <h3 class="text-2xl font-bold mb-6 text-[#6d5a2c]">Elevate Your Global Sourcing</h3>
                <p class="mb-8 opacity-80 text-[#6d5a2c]">Partner with Al Zaha for premium supply chain solutions in Dubai and beyond.</p>
                <a href="{{ route('quote') }}" class="inline-block px-10 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-lg hover:shadow-xl bg-[#c19b46]">Get a Strategic Consultation</a>
            </div>
        </div>
    </section>

    <section class="py-20 px-8 border-t border-[#c19b46]">
        <div class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="flex items-center gap-6 group">
                @if($prevPost)
                    <a href="{{ route('blogs.show', $prevPost->slug) }}" class="flex items-center gap-6">
                        <div class="w-24 h-24 shrink-0 rounded-lg overflow-hidden border border-[#6d5a2c]/10 bg-[#f7f4eb]">
                            @if($prevPost->image_url)
                                <img src="{{ $prevPost->image_url }}" alt="" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                            @endif
                        </div>
                        <div>
                            <span class="flex items-center gap-2 text-xs font-bold tracking-widest uppercase mb-2 opacity-50 text-[#6d5a2c]">
                                <svg class="w-[14px] h-[14px]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                                Previous Post
                            </span>
                            <h4 class="font-bold line-clamp-2 transition-colors group-hover:text-[#c19b46] text-[#6d5a2c]">{{ $prevPost->title }}</h4>
                        </div>
                    </a>
                @endif
            </div>
            <div class="flex items-center gap-6 justify-end text-right">
                @if($nextPost)
                    <a href="{{ route('blogs.show', $nextPost->slug) }}" class="flex items-center gap-6 justify-end text-right group">
                        <div>
                            <span class="flex items-center justify-end gap-2 text-xs font-bold tracking-widest uppercase mb-2 opacity-50 text-[#6d5a2c]">
                                Next Post
                                <svg class="w-[14px] h-[14px]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </span>
                            <h4 class="font-bold line-clamp-2 transition-colors group-hover:text-[#c19b46] text-[#6d5a2c]">{{ $nextPost->title }}</h4>
                        </div>
                        <div class="w-24 h-24 shrink-0 rounded-lg overflow-hidden border border-[#6d5a2c]/10 bg-[#f7f4eb]">
                            @if($nextPost->image_url)
                                <img src="{{ $nextPost->image_url }}" alt="" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                            @endif
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </section>
</div>
@endsection
