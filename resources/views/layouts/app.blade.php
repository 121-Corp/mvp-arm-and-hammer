<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
        <!-- scripts -->
        @vite('resources/js/app.js')
    </head>
    <body class="font-kohinoor font-normal antialiased ">
        @section('sidebar')
        @include('components.menu') {{-- render de menu in all pages  --}}
        @show

        <div class="container max-w-[1920px] mx-auto my-0">
            @yield('content')
        </div>

        <x-footer></x-footer>
        @yield('css')
        @yield('js')
    </body>
</html>
