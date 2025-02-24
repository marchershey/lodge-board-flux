<!DOCTYPE html>
<html class="h-full overscroll-none scroll-smooth dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, user-scalable=no">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @fluxAppearance
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <title>{{ $title ?? 'NO TITLE SET' . ' - ' . config('app.name') }}</title>
</head>

<body class="flex h-screen overflow-hidden">
    <!-- Toasts -->
    {{-- @livewire('toasts') --}}

    <!-- Main Content -->
    <div class="w-full">
        {{ $slot }}
    </div>

    <!-- Livewire Script Config -->
    @livewireScriptConfig
    @fluxScripts

    <!-- Custom Scripts -->
    @stack('scripts')
</body>

</html>
