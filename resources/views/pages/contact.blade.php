@extends('layouts.app')

@section('title', 'Contact – Al Zaha')

@section('content')
<div class="min-h-screen bg-[#f7f4eb] flex flex-col">
    <section class="py-20 md:py-[120px] text-center border-b border-[#6d5a2c]/5">
        <x-container>
            <div class="animate-now" data-animate="fadeInUp">
                <h1 class="text-4xl md:text-5xl lg:text-6xl mb-6 font-bold text-[#6d5a2c]">Get in Touch</h1>
                <p class="text-lg md:text-xl max-w-2xl mx-auto opacity-80 text-[#6d5a2c]">
                We're here to discuss your industrial challenges. Visit our Dubai headquarters or reach out via phone or email.
                </p>
            </div>
        </x-container>
    </section>

    <section class="py-16 md:py-[120px]">
        <x-container>
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
                <div class="flex-1 animate-on-scroll" data-animate="slideLeft">
                    <h2 class="text-3xl md:text-4xl mb-8 md:mb-12 leading-tight font-bold text-[#6d5a2c]">Connect with Al Zaha</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-8 md:gap-12">
                        <div class="flex gap-4 md:gap-6">
                            <div class="w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center flex-shrink-0 bg-[#6d5a2c]">
                                <svg class="text-white w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-lg md:text-xl font-bold mb-2 text-[#6d5a2c]">Our Headquarters</h4>
                                <p class="text-sm md:text-lg opacity-70 leading-relaxed text-[#6d5a2c]">
                                    18B street, Umm Ramool-215,<br>
                                    Al Rashidiya, Dubai
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4 md:gap-6">
                            <div class="w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center flex-shrink-0 bg-[#6d5a2c]">
                                <svg class="text-white w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-lg md:text-xl font-bold mb-2 text-[#6d5a2c]">Phone</h4>
                                <p class="text-sm md:text-lg opacity-70 leading-relaxed text-[#6d5a2c]">
                                    Main Office: +971 04 396 7075
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4 md:gap-6">
                            <div class="w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center flex-shrink-0 bg-[#6d5a2c]">
                                <svg class="text-white w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-lg md:text-xl font-bold mb-2 text-[#6d5a2c]">Email Inquiries</h4>
                                <p class="text-sm md:text-lg opacity-70 leading-relaxed text-[#6d5a2c]">
                                    General: sales@alzahageneraltrading.com<br>
                                    Quotes: info@alzahageneraltrading.com
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4 md:gap-6">
                            <div class="w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center flex-shrink-0 bg-[#6d5a2c]">
                                <svg class="text-white w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-lg md:text-xl font-bold mb-2 text-[#6d5a2c]">Business Hours</h4>
                                <p class="text-sm md:text-lg opacity-70 leading-relaxed text-[#6d5a2c]">
                                    Monday – Friday: 9:00 AM – 6:00 PM<br>
                                    Saturday: 10:00 AM – 2:00 PM
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-1 animate-on-scroll" data-animate="slideRight">
                    <x-contact-form />
                </div>
            </div>
        </x-container>
    </section>

    <section class="w-full h-[300px] md:h-[500px] relative">
        <div class="w-full h-1.5 bg-[#c19b46]"></div>
        <div class="absolute inset-0 z-0">
            <iframe
                src="https://www.google.com/maps?q=18B+street+umm+ramool-215+Al+rashidia+Dubai&output=embed"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Al Zaha General Trading - Dubai Office"
            ></iframe>
        </div>
        <div class="absolute bottom-4 left-4 right-4 md:left-auto md:right-8 md:max-w-sm z-10 bg-white/95 backdrop-blur-sm rounded-xl shadow-lg p-4 border border-[#6d5a2c]/10">
            <div class="flex items-start gap-3">
                <svg class="w-8 h-8 flex-shrink-0 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <div>
                    <h3 class="text-base md:text-lg font-bold text-[#6d5a2c]">Dubai Business Bay</h3>
                    <p class="text-sm opacity-80 text-[#6d5a2c]">Prism Tower, Level 15</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
