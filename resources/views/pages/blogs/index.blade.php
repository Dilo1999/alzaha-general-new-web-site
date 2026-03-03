@extends('layouts.app')

@section('title', 'Blog – Al Zaha')

@section('content')
<div class="flex flex-col">
    <section class="py-[120px] bg-[#f7f4eb]">
        <x-container>
            <div class="text-center max-w-[720px] mx-auto animate-on-scroll" data-animate="fadeInUp">
                <h1 class="mb-6 text-[#6d5a2c] font-bold" style="font-size: 27px;">Insights & Resources</h1>
                <p class="leading-relaxed opacity-80 text-[#6d5a2c]" style="font-size: 16.2px;">Expert insights on supply chain management, global sourcing, logistics, and procurement strategies for the MENA region.</p>
            </div>
        </x-container>
    </section>

    <section class="py-[120px] bg-white">
        <x-container>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($posts as $index => $post)
                    <a href="{{ route('blogs.show', $post->slug) }}" class="group block animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $index * 0.1 }}">
                        <article class="bg-white rounded-[14px] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 ease-out border border-[#6d5a2c]/5 h-full flex flex-col">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                @if($post->image_url)
                                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full bg-[#f7f4eb] flex items-center justify-center text-[#6d5a2c]/40">No image</div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                            </div>
                            <div class="p-8 flex flex-col flex-grow">
                                <h2 class="font-bold mb-6 leading-tight transition-colors group-hover:text-[#c19b46] flex-grow text-[#6d5a2c]" style="font-size: 18px;">{{ $post->title }}</h2>
                                <span class="inline-flex items-center gap-2 font-bold transition-all duration-300 group-hover:gap-3 text-[#c19b46]">
                                    Read More
                                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </span>
                            </div>
                        </article>
                    </a>
                @endforeach
            </div>
        </x-container>
    </section>

    <section class="py-[120px] bg-[#f7f4eb]">
        <x-container>
            <div class="text-center max-w-2xl mx-auto animate-on-scroll" data-animate="fadeInUp">
                <h2 class="mb-6 text-[#6d5a2c] font-bold" style="font-size: 27px;">Ready to Transform Your Supply Chain?</h2>
                <p class="mb-10 leading-relaxed opacity-80 text-[#6d5a2c]" style="font-size: 14.4px;">Let's discuss how Al Zaha can optimize your sourcing and logistics operations.</p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-lg hover:shadow-xl bg-[#c19b46]" style="font-size: 14.4px;">Contact Our Team</a>
            </div>
        </x-container>
    </section>
</div>
@endsection
