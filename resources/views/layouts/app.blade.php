<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="antialiased min-h-screen flex flex-col bg-[#f7f4eb] text-gray-900 font-sans">
    @include('components.header')

    <main class="flex-1 pt-[88px]">
        @yield('content')
    </main>

    {{-- Global flash popup for form success messages --}}
    <x-flash-popup />

    @include('components.footer')

    @stack('scripts')
</body>
</html>
