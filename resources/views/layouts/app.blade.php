<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        [x-cloak] {
            display: none !important;
        }
        /* إخفاء شريط التمرير والأسهم في كل الصفحة والمودال */
        .scrollbar-hide,
        #modal-container,
        #modal-container .overflow-x-scroll,
        #modal-container .overflow-y-scroll,
        #modal-container [class*="overflow-x-scroll"],
        #modal-container [class*="overflow-y-scroll"],
        #modal-container [class*="overflow-scroll"] {
            -ms-overflow-style: none !important;
            scrollbar-width: none !important;
        }
        /* .scrollbar-hide::-webkit-scrollbar,
        #modal-container::-webkit-scrollbar,
        #modal-container ::-webkit-scrollbar {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
        } */
        /* إخفاء أسهم تنقّل السلايدر (Swiper) */
        .swiper-button-prev,
        .swiper-button-next,
        .swiper .swiper-button-prev,
        .swiper .swiper-button-next {
            display: none !important;
            visibility: hidden !important;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                Open drawer
            </label>
            {{ $slot }}
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            @include('layouts.sidebar')
        </div>
    </div>
    @livewireScripts
    @livewire('wire-elements-modal')
</body>
</html>
