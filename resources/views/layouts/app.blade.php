<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="IgIHDQJBm0oEbh-9iqoUlbmChB0m3KjFpmViQMzhN-4" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#17130b">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="antialiased min-h-screen flex flex-col bg-cream text-ink">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[60] focus:px-4 focus:py-2 focus:rounded-full focus:bg-ink focus:text-white">Skip to content</a>

    @include('components.header')

    <main id="main" class="flex-1">
        @yield('content')
    </main>

    {{-- Global flash popup for form success messages --}}
    <x-flash-popup />

    @include('components.footer')

    @stack('scripts')
</body>
</html>
