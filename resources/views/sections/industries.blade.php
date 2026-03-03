@php
    $industries = [
        ['image' => asset('images/home/Resorts.jpg'), 'label' => 'Resorts', 'slug' => 'resorts'],
        ['image' => asset('images/home/Construction.jpg'), 'label' => 'Construction', 'slug' => 'construction'],
        ['image' => asset('images/home/Retail.jpg'), 'label' => 'Retail', 'slug' => 'retail'],
        ['image' => asset('images/home/Industrial.jpg'), 'label' => 'Industrial', 'slug' => 'industrial'],
    ];
@endphp
<section id="industries" class="py-16 md:py-28" style="background-color:#f7f4eb;">
    <div class="w-full max-w-[1320px] mx-auto px-4 md:px-8">
        <div class="text-center mb-10 md:mb-14 animate-on-scroll" data-animate="fadeInUp">
            <h2 class="mb-4 font-bold text-[#6d5a2c]" style="font-size: 27px;">Built for time-sensitive industries</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            @foreach($industries as $index => $industry)
                <a href="{{ route('industries') }}#{{ $industry['slug'] }}" class="group cursor-pointer overflow-hidden bg-white shadow-sm hover:shadow-2xl transition-all duration-500 ease-out hover:-translate-y-2 rounded-2xl block animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $index * 0.1 }}">
                    <div class="relative h-64 overflow-hidden rounded-t-2xl">
                        <img src="{{ $industry['image'] }}" alt="{{ $industry['label'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out saturate-125 contrast-105">
                        <div class="absolute bottom-0 left-0 right-0 py-5 px-6 backdrop-blur-md bg-black/40">
                            <div class="text-white text-center font-bold uppercase tracking-wider" style="font-size: 12.6px;">{{ $industry['label'] }}</div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
