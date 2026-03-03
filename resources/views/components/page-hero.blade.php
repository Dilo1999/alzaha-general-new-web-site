@props([
    'title',
    'subtitle' => null,
    'image' => null,
    'overlay' => true,
    'buttons' => null,
])

<section class="relative h-[80vh] min-h-[600px] flex items-center overflow-hidden">
    @if($image)
        <div class="absolute inset-0 z-0 bg-cover bg-center saturate-150 contrast-110" style="background-image: url('{{ $image }}');"></div>
    @endif
    @if($overlay)
        <div class="absolute inset-0 bg-gradient-to-br from-[#6d5a2c]/95 via-[#6d5a2c]/85 to-[#6d5a2c]/75"></div>
    @endif

    <div class="relative z-10 w-full max-w-[1320px] mx-auto px-4 sm:px-8">
        <div class="max-w-[720px]">
            <h1 class="text-white mb-6 md:mb-8 leading-tight font-bold" style="font-size: 32.4px;">{{ $title }}</h1>
            @if($subtitle)
                <p class="text-white/90 mb-8 md:mb-10 leading-relaxed" style="font-size: 16.2px;">{{ $subtitle }}</p>
            @endif
            @if(isset($buttons))
                <div class="flex flex-wrap gap-4">
                    {{ $buttons }}
                </div>
            @endif
        </div>
    </div>
</section>
