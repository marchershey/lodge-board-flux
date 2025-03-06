@props([
    'pageWidth' => null,
    'pageNav' => [],
])

<div class="host relative h-full overflow-y-auto">

    <flux:sidebar class="dark flex shrink-0 bg-gray-800 duration-200" sticky stashable>

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

    <flux:header class="min-h-auto laptop:sticky laptop:top-0 fixed w-full border-b border-zinc-200 bg-white dark:border-0 dark:bg-zinc-800">
        <div class="laptop:flex-nowrap laptop:justify-between flex w-full flex-wrap items-center">
            <div class="laptop:w-auto laptop:order-2 flex min-h-[56px] w-full items-center justify-between space-x-2">
                <flux:sidebar.toggle class="laptop:hidden" icon="bars-2" inset="left" />
                <div class="laptop:hidden min-w-0 flex-1 truncate">
                    <x-logo />
                </div>
                <x-theme-selector />
                <livewire:components.layouts.host.profile-dropdown />
            </div>
            <div class="overflow-x-auto">

                @persist('pagenav')
                    <flux:navbar class="w-full overflow-x-auto" wire:scroll>
                        @foreach ($pageNav as $title => $data)
                            @php
                                // If $data is an array, pull the 'link' and 'badge' values; otherwise, treat $data as the URL.
                                $route = is_array($data) && isset($data['route']) ? $data['route'] : $data;
                                $badge = is_array($data) && isset($data['badge']) ? $data['badge'] : null;
                                $badgeColor = is_array($data) && isset($data['badgeColor']) ? $data['badgeColor'] : null;
                                $badgeVariant = is_array($data) && isset($data['badgeVariant']) ? $data['badgeVariant'] : 'solid';
                            @endphp
                            <flux:navbar.item href="{{ route($route) }}" wire:current wire:navigate.hover>
                                <span>{{ $title }}</span>
                                @if ($badge)
                                    <flux:badge class="px-1! py-0.5! rounded-sm! ml-2" size="sm" color="{{ $badgeColor }}" variant="{{ $badgeVariant }}">
                                        {{ $badge }}
                                    </flux:badge>
                                @endif
                            </flux:navbar.item>
                        @endforeach
                    </flux:navbar>
                @endpersist
            </div>
        </div>
    </flux:header>

    <flux:main class="mt-[112px] flex flex-col space-y-10 bg-zinc-100 dark:bg-zinc-800">

        <div class="flex-1">
            {{ $slot }}
        </div>
        <x-layouts.footer />

        {{-- <div class="flex space-y-10 flex-col min-h-full overflow-y-auto">
            <div {{ $attributes->merge(['class' => 'flex-1 w-full']) }}>
                {{ $slot }}
            </div>
        </div> --}}

        {{-- <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Replace '.scroll-container' with the selector for your scrollable container
                const container = document.querySelector('.scroll-container');
                if (!container) return;

                // Find the first child element with the data-current attribute inside the container
                const currentChild = container.querySelector('[data-current]');
                if (currentChild) {
                    // Scroll the container so that the currentChild is visible.
                    // Adjust the scrollIntoView options as needed.
                    currentChild.scrollIntoView({
                        // behavior: 'smooth', // Smooth scrolling; remove for instant scrolling
                        block: 'end', // Vertical alignment ('start', 'center', 'end', or 'nearest')
                        inline: 'nearest' // Horizontal alignment
                    });
                }
            });
        </script> --}}

    </flux:main>
</div>
