<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? '' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @yield('aditional-head')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <header>
        @include('layouts.navigation')
    </header>

    <div class="min-h-screen bg-gray-100">
        @if (isset($header))
        <div class="font-light tracking-wider text-2xl text-gray-800 leading-tight py-4">
            <div class="flex items-center justify-center">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2>{{ $header }}</h2>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <hr class="w-[85%] border-gray-500">
            </div>
        </div>
        @endif


        <main>
            {{ $slot }}
        </main>
    </div>

    @if (isset($footer))
    @include('layouts.footer')
    @endif

    {{ $scripts ?? ''}}

</body>

</html>