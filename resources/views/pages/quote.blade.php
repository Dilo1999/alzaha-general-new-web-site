@extends('layouts.app')

@section('title', 'Request a Quote – Al Zaha')

@section('content')
<div class="min-h-screen bg-[#f7f4eb] flex flex-col">
    <section class="h-[60vh] min-h-[500px] flex flex-col justify-center pt-[88px] pb-12 text-center">
        <x-container>
            <div class="animate-now" data-animate="fadeInUp">
                <h1 class="font-bold mb-6 text-[#6d5a2c]" style="font-size: 27px;">Request a Premium Quote</h1>
                <p class="max-w-2xl mx-auto mb-8 opacity-80 text-[#6d5a2c]" style="font-size: 16.2px;">
                    Provide us with your project details and our procurement specialists will deliver a customized sourcing strategy within 24–48 hours.
                </p>
                <div class="w-24 h-1 mx-auto rounded-full bg-[#c19b46]"></div>
            </div>
        </x-container>
    </section>

    <section class="pb-16 sm:pb-[120px]">
        <div class="max-w-[720px] mx-auto px-4 sm:px-8">
            <div class="animate-on-scroll" data-animate="fadeInUp">
                <x-quote-form />
            </div>
        </div>
    </section>
</div>
@endsection
