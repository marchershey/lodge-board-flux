@props(['title'])

<!DOCTYPE html>
<html class="h-full overscroll-none scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, user-scalable=no">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @fluxAppearance
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <title>{{ ($title ?? 'NO TITLE SET') . ' - ' . config('app.name') }}</title>
</head>

<body class="flex h-screen overflow-hidden">
    <!-- Toasts -->
    {{-- @livewire('toasts') --}}

    <!-- Main Content -->
    <div class="w-full">
        {{ $slot }}
    </div>

    <div class="fixed top-0 z-50 flex justify-center w-full text-[9px] text-black opacity-30 dark:text-white">
        <span class="block phone:hidden">null</span>
        <span class="hidden phone:block tablet:hidden">phone</span>
        <span class="hidden tablet:block landscape:hidden">tablet</span>
        <span class="hidden landscape:block laptop:hidden">landscape</span>
        <span class="hidden laptop:block desktop:hidden">laptop</span>
        <span class="hidden desktop:block">desktop</span>
        <span class="block sm:hidden">(xs)</span>
        <span class="hidden sm:block md:hidden">(sm)</span>
        <span class="hidden md:block lg:hidden">(md)</span>
        <span class="hidden lg:block xl:hidden">(lg)</span>
        <span class="hidden xl:block 2xl:hidden">(xl)</span>
        <span class="hidden 2xl:block">(2xl)</span>
    </div>

    <!-- Livewire Script Config -->
    @livewireScriptConfig
    @fluxScripts

    <!-- Custom Scripts -->
    @stack('scripts')
</body>

</html>
