@php
    $steps = [
        ['icon' => 'search', 'title' => 'Step 1', 'description' => 'Submit your requirements', 'subtitle' => '(Send list, BOQ, specs, timelines)'],
        ['icon' => 'settings', 'title' => 'Step 2', 'description' => 'We source, quote, and schedule', 'subtitle' => '(Supplier coordination + freight planning)'],
        ['icon' => 'truck', 'title' => 'Step 3', 'description' => 'We coordinate delivery', 'subtitle' => '(Documentation + shipment + destination support)'],
    ];
@endphp
<section id="how-it-works" class="py-24 md:py-40 bg-[#6d5a2c] text-white">
    <div class="w-full max-w-[1320px] mx-auto px-4 md:px-8">
        <div class="text-center mb-16 md:mb-20 animate-on-scroll" data-animate="fadeInUp">
            <h2 class="mb-4 font-bold text-white" style="font-size: 27px;">
                A simple system from sourcing to delivery.
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 mb-16">
            @foreach($steps as $index => $step)
                <div
                    class="group flex flex-col bg-white/5 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 p-8 lg:p-10 border border-white/10 hover:bg-white/10 animate-on-scroll"
                    data-animate="fadeInUp"
                    data-delay="{{ $index * 0.1 }}"
                >
                    <div class="w-16 h-16 flex items-center justify-center mb-8 rounded-full bg-[#c19b46] transition-transform duration-500 group-hover:scale-110 shadow-lg shadow-black/20">
                        @if($step['icon'] === 'search')
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        @elseif($step['icon'] === 'settings')
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        @else
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h12v10H3z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10h4l2 3v4h-6V10z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17a2 2 0 104 0M17 17a2 2 0 104 0"/></svg>
                        @endif
                    </div>
                    <h3 class="mb-4 font-bold text-white" style="font-size: 18px;">{{ $step['title'] }}</h3>
                    <p class="leading-relaxed mb-4 font-bold text-white" style="font-size: 14.4px;">{{ $step['description'] }}</p>
                    <p class="leading-relaxed text-white/60" style="font-size: 12.6px;">{{ $step['subtitle'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            <a href="{{ route('quote') }}" class="w-full sm:w-auto inline-block px-10 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-lg hover:shadow-xl bg-[#c19b46] animate-on-scroll" data-animate="scaleIn" style="font-size: 14.4px;">
                Request a Quote
            </a>
        </div>
    </div>
</section>
