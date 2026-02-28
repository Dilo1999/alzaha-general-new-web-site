<section class="relative py-24 md:py-44 overflow-hidden">
    {{-- Background Image --}}
    <div class="absolute inset-0 bg-cover bg-center saturate-150 contrast-110" style="background-image: url('{{ asset('images/content/cta2.jpg') }}');"></div>

    {{-- Bronze Overlay --}}
    <div class="absolute inset-0" style="background-color: rgba(109, 90, 44, 0.88);"></div>

    <div class="relative w-full max-w-[1320px] mx-auto px-4 md:px-8 text-center">
        <div class="animate-on-scroll" data-animate="scaleIn">
            <h2 class="text-3xl md:text-5xl text-white mb-10 md:mb-12 max-w-[800px] mx-auto leading-tight font-bold">
                Ready to Transform Your Supply Chain?
            </h2>

            <div class="flex flex-col sm:flex-row gap-4 md:gap-6 justify-center items-center">
                <a href="{{ route('quote') }}" class="w-full sm:w-auto px-12 py-5 text-white font-bold transition-all duration-300 ease-out hover:scale-105 text-lg rounded-full shadow-lg hover:shadow-2xl bg-[#c19b46] text-center">
                    Request a Quote
                </a>
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-12 py-5 text-white border-2 transition-all duration-300 ease-out hover:scale-105 text-lg rounded-full backdrop-blur-sm bg-white/5 hover:bg-white/10 text-center" style="border-color:#c19b46;">
                    Talk to a Coordinator
                </a>
            </div>
        </div>
    </div>
</section>
