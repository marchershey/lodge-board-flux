@props([
    'pageWidth' => null,
    'subnav' => [],
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

    <flux:header class="hidden">
        <div class="flex flex-wrap items-center w-full laptop:flex-nowrap">
            <div class="flex items-center justify-between w-full laptop:order-2 laptop:w-auto pt-4 laptop:pt-0">
                <flux:sidebar.toggle class="laptop:hidden shrink-0" icon="bars-2" inset="left" />
                <div class="flex-1 shrink truncate pl-1 laptop:hidden">
                    <x-logo />
                </div>
                <div class="flex items-center space-x-3">
                    <flux:context>
                        <flux:tooltip content="Toggle dark mode" kbd="D">
                            <flux:button aria-label="Toggle dark mode" x-on:keydown.d.window="if (document.activeElement.localName === 'body') { $flux.dark = ! $flux.dark }" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" />
                        </flux:tooltip>
                        <flux:menu position="top" align="end">
                            <flux:menu.radio.group x-model="$flux.appearance">
                                <flux:menu.radio value="light">Light</flux:menu.radio>
                                <flux:menu.radio value="dark">Dark</flux:menu.radio>
                                <flux:menu.radio value="system">System</flux:menu.radio>
                            </flux:menu.radio.group>
                        </flux:menu>
                    </flux:context>
                    <livewire:components.layouts.host.profile-dropdown />
                </div>
            </div>
            <div class="px-6 -mx-6 overflow-x-auto laptop:w-full">
                <flux:navbar>
                    <flux:navbar.item href="#" current>Dashboard</flux:navbar.item>
                    <flux:navbar.item href="#" badge="32">Orders</flux:navbar.item>
                    <flux:navbar.item href="#">Catalog</flux:navbar.item>
                    <flux:navbar.item href="#">Configuration</flux:navbar.item>
                </flux:navbar>
            </div>
        </div>
    </flux:header>

    <flux:header class="bg-white dark:bg-zinc-800 min-h-auto w-full laptop:sticky laptop:top-0 border-b border-zinc-200 dark:border-0">
        <div class="w-full flex items-center flex-wrap laptop:flex-nowrap">
            <div class="flex items-center space-x-2 justify-between w-full laptop:w-auto laptop:order-2 min-h-[56px]">
                <flux:sidebar.toggle class="laptop:hidden" icon="bars-2" inset="left" />
                <div class="min-w-0 truncate flex-1 laptop:hidden">
                    <x-logo />
                </div>
                <flux:context>
                    <flux:tooltip content="Toggle dark mode" kbd="D">
                        <flux:button aria-label="Toggle dark mode" x-on:keydown.d.window="if (document.activeElement.localName === 'body') { $flux.dark = ! $flux.dark }" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" />
                    </flux:tooltip>
                    <flux:menu position="top" align="end">
                        <flux:menu.radio.group x-model="$flux.appearance">
                            <flux:menu.radio value="light">Light</flux:menu.radio>
                            <flux:menu.radio value="dark">Dark</flux:menu.radio>
                            <flux:menu.radio value="system">System</flux:menu.radio>
                        </flux:menu.radio.group>
                    </flux:menu>
                </flux:context>
                <livewire:components.layouts.host.profile-dropdown />
            </div>
            <flux:navbar class="w-full">
                <flux:navbar.item href="#" current>Dashboard</flux:navbar.item>
                <flux:navbar.item href="#" badge="32">Orders</flux:navbar.item>
                <flux:navbar.item href="#">Catalog</flux:navbar.item>
                <flux:navbar.item href="#">Configuration</flux:navbar.item>
            </flux:navbar>
        </div>
    </flux:header>

    <flux:main class="bg-zinc-100 dark:bg-zinc-800 flex flex-col space-y-10">

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
