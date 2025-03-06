@props([
    'pageWidth' => null,
    'pageNav' => [],
])

<div class="h-full host relative overflow-y-auto">
    <flux:sidebar class="duration-200 dark bg-gray-800 shrink-0" sticky stashable>

        <div class="flex justify-between">
            <x-logo />
            <flux:sidebar.toggle class="laptop:hidden" icon="x-mark" />
        </div>

        <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

        <flux:navlist variant="outline">
            <flux:navlist.item href="{{ route('host.dashboard') }}" wire:navigate icon="house">Dashboard</flux:navlist.item>
            <flux:navlist.item href="{{ route('host.calendar') }}" wire:navigate icon="calendar">Calendar</flux:navlist.item>
            <flux:navlist.item href="#" icon="inbox" badge="12">Inbox</flux:navlist.item>
            <flux:navlist.item href="#" icon="clipboard-list" badge="12">Reservations</flux:navlist.item>
            <flux:navlist.item href="#" icon="map-pin-house">Properties</flux:navlist.item>
            <flux:navlist.item href="#" icon="users">Guests</flux:navlist.item>
        </flux:navlist>

        <flux:spacer />

        <livewire:components.layouts.host.property-selector />

    </flux:sidebar>

    <flux:header class="bg-white fixed dark:bg-zinc-800 min-h-auto w-full laptop:sticky laptop:top-0 border-b border-zinc-200 dark:border-0">
        <div class="w-full flex items-center flex-wrap laptop:flex-nowrap">
            <div class="flex items-center space-x-2 justify-between w-full laptop:w-auto laptop:order-2 min-h-[56px]">
                <flux:sidebar.toggle class="laptop:hidden" icon="bars-2" inset="left" />
                <div class="min-w-0 truncate flex-1 laptop:hidden">
                    <x-logo />
                </div>
                <x-theme-selector />
                <livewire:components.layouts.host.profile-dropdown />
            </div>

            <flux:navbar>
                @foreach ($pageNav as $title => $data)
                    @php
                        // If $data is an array, pull the 'link' and 'badge' values; otherwise, treat $data as the URL.
                        $route = is_array($data) && isset($data['route']) ? $data['route'] : $data;
                        $badge = is_array($data) && isset($data['badge']) ? $data['badge'] : null;
                        $badgeColor = is_array($data) && isset($data['badgeColor']) ? $data['badgeColor'] : null;
                        $badgeVariant = is_array($data) && isset($data['badgeVariant']) ? $data['badgeVariant'] : 'solid';
                    @endphp
                    <flux:navbar.item href="{{ route($route) }}" :current="request() - > routeIs($route)">
                        <span>{{ $title }}</span>
                        @if ($badge)
                            <flux:badge class="px-1! py-0.5! rounded-sm! ml-2" size="sm" color="{{ $badgeColor }}" variant="{{ $badgeVariant }}">
                                {{ $badge }}
                            </flux:badge>
                        @endif
                    </flux:navbar.item>
                @endforeach
            </flux:navbar>
        </div>
    </flux:header>

    <flux:main class="bg-zinc-100 dark:bg-zinc-800 flex flex-col space-y-10 mt-[112px]">

        <div class="flex-1">
            {{ $slot }}
        </div>
        <x-layouts.footer />

        {{-- <div class="flex space-y-10 flex-col min-h-full overflow-y-auto">
            <div {{ $attributes->merge(['class' => 'flex-1 w-full']) }}>
                {{ $slot }}
            </div>
        </div> --}}

    </flux:main>
</div>
