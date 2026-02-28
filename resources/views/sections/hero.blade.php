<section class="relative min-h-screen lg:h-[85vh] lg:min-h-[700px] flex items-center pt-[120px] lg:pt-[88px] overflow-hidden">
    {{-- Background Image --}}
    <div class="absolute inset-0 bg-cover bg-center saturate-150 contrast-110" style="background-image: url('{{ asset('images/hero/home.jpg') }}');"></div>

    {{-- Bronze Gradient Overlay --}}
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(109, 90, 44, 0.95), rgba(109, 90, 44, 0.7));"></div>

    {{-- Content --}}
    <div class="relative w-full max-w-[1320px] mx-auto px-4 md:px-8 py-20 lg:py-0">
        <div class="max-w-[720px] animate-now" data-animate="slideLeft">
            <h1 class="text-4xl md:text-5xl lg:text-6xl text-white mb-6 md:mb-8 leading-tight font-bold">
                Take control of your international sourcing from Dubai
            </h1>

            <p class="text-lg md:text-xl text-white/90 mb-8 md:mb-10 leading-relaxed max-w-2xl">
                Al-Zaha replaces fragmented suppliers and unpredictable freight with one coordinated procurement and delivery system — so your business operates with cost clarity and timeline confidence.
            </p>

            {{-- Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 mb-12 md:mb-16">
                <a href="{{ route('quote') }}" class="px-10 py-4 text-white font-bold transition-all duration-300 ease-out hover:scale-105 rounded-full shadow-lg hover:shadow-xl text-center bg-[#c19b46]">
                    Request a Quote
                </a>
                <a href="#how-it-works" class="px-10 py-4 text-white font-bold border-2 transition-all duration-300 ease-out hover:scale-105 rounded-full backdrop-blur-sm bg-white/5 hover:bg-white/10 text-center" style="border-color:#c19b46;">
                    How it Works
                </a>
            </div>

            {{-- Trust Icons --}}
            <div class="flex flex-col sm:flex-row gap-6 md:gap-10">
                <div class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center transition-colors group-hover:bg-white/20">
                        {{-- Award --}}
                        <svg class="w-5 h-5 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15l-3.5 2 1-4-3-2.5 4-.3L12 6l1.5 3.9 4 .3-3 2.5 1 4z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 3h12v4a6 6 0 01-12 0V3z"/></svg>
                    </div>
                    <span class="text-sm md:text-base text-white/80">Verified Suppliers</span>
                </div>
                <div class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center transition-colors group-hover:bg-white/20">
                        {{-- Shield --}}
                        <svg class="w-5 h-5 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z"/></svg>
                    </div>
                    <span class="text-sm md:text-base text-white/80">Consolidated Shipments</span>
                </div>
                <div class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center transition-colors group-hover:bg-white/20">
                        {{-- Trending Up --}}
                        <svg class="w-5 h-5 text-[#f4c157]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17l6-6 4 4 8-8"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 7h7v7"/></svg>
                    </div>
                    <span class="text-sm md:text-base text-white/80">Coordinated Delivery</span>
                </div>
            </div>
        </div>
    </div>
</section>
