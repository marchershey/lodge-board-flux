@props(['subnav' => []])
<x-layouts.base title="{{ $title }}">
    <div class="h-full host bg-gray-100 dark:bg-[#2f2f32]">
        <flux:sidebar class="transition border-r border-white/10 duration-15 bg-gray-100 dark:bg-[#2f2f32] laptop:border-0 backdrop:bg-black/90!" sticky stashable>

            <flux:sidebar.toggle class="tablet:hidden" icon="x-mark" />

            <x-logo class="justify-start hidden ml-1.5 tablet:flex" />

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

            <flux:navlist variant="outline">
                <flux:navlist.item href="#" icon="cog-6-tooth">Settings</flux:navlist.item>
                <flux:navlist.item href="#" icon="information-circle">Support</flux:navlist.item>
            </flux:navlist>

            <livewire:components.host.property-selector />

            <flux:radio.group x-data variant="segmented" x-model="$flux.appearance" size="sm">
                <flux:radio value="light" icon="sun" />
                <flux:radio value="dark" icon="moon" />
                <flux:radio value="system" icon="computer-desktop" />
            </flux:radio.group>

        </flux:sidebar>

        <flux:header class="">
            <div class="flex flex-wrap items-center w-full laptop:flex-nowrap">
                <div class="flex items-center justify-between w-full laptop:order-2 laptop:w-auto h-14">
                    <flux:sidebar.toggle class="laptop:hidden" icon="bars-2" inset="left" />
                    <flux:dropdown class="-mr-4" position="top" align="start">
                        <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />
                        <flux:menu>
                            <flux:menu.radio.group>
                                <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                                <flux:menu.radio>Truly Delta</flux:menu.radio>
                            </flux:menu.radio.group>

                            <flux:menu.separator />

                            <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                        </flux:menu>
                    </flux:dropdown>
                </div>
                {{-- <flux:navbar class="px-2 -mx-6 -mt-[10px] laptop:px-0 laptop:mx-0 laptop:w-full" scrollable> --}}
                {{-- px-6 -mx-6 laptop:px-0 laptop:mx-0 laptop:w-full --}}
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

        <flux:main class="min-h-full overflow-y-auto bg-gray-100 border-t border-gray-200 laptop:border-l laptop:rounded-tl-xl dark:border-white/20 dark:bg-gray-900">
            {{ $slot }}
        </flux:main>
    </div>
</x-layouts.base>
