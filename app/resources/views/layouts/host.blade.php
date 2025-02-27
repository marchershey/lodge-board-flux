<x-layouts.base title="{{ $title }}">
    <div class="h-full host">
        <flux:sidebar class="border-r border-gray-200 bg-gray-50 dark:bg-gray-900 dark:border-gray-700" sticky stashable>
            <flux:sidebar.toggle class="tablet:hidden" icon="x-mark" />

            <x-logo class="hidden tablet:flex" />

            <livewire:components.host.property-selector />

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
                <flux:navlist.item href="#" icon="information-circle">Help</flux:navlist.item>
            </flux:navlist>

            <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                <flux:radio value="light" icon="sun" />
                <flux:radio value="dark" icon="moon" />
                <flux:radio value="system" icon="computer-desktop" />
            </flux:radio.group>
        </flux:sidebar>

        <flux:header class="min-h-14">
            <div class="flex flex-col w-full py-3">
                <div class="flex items-center">
                    <div class="flex flex-auto">
                        <x-logo class="flex tablet:hidden" size="sm" />
                    </div>
                    {{-- <flux:sidebar.toggle class="flex-none mr-6 laptop:hidden" icon="bars-2" inset="left" /> --}}
                    <div class="flex-none -mr-3">
                        <livewire:components.host.profile-dropdown />
                    </div>
                </div>
                <flux:separator class="flex my-3 tablet:hidden" />
                <div class="flex tablet:hidden">
                    <flux:sidebar.toggle class="flex! tablet:hidden" icon="bars-2" inset="left" />
                </div>
            </div>
        </flux:header>

        <flux:header class="hidden bg-white border-b border-gray-200 dark:bg-gray-950 tablet:bg-gray-50 tablet:dark:bg-gray-900 dark:border-gray-700">
            <flux:navbar class="w-full tablet:hidden">
                <flux:sidebar.toggle class="tablet:hidden" icon="bars-2" inset="left" />

                <flux:spacer />

                <flux:dropdown position="top" align="start">
                    <flux:profile avatar="https://i.imgur.com/UZFZvLO.jpeg" />

                    <flux:menu>
                        <flux:menu.radio.group>
                            <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                            <flux:menu.radio>Truly Delta</flux:menu.radio>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                    </flux:menu>
                </flux:dropdown>
            </flux:navbar>

            <flux:navbar scrollable>
                <flux:navbar.item href="#" current>Dashboard</flux:navbar.item>
                <flux:navbar.item href="#" badge="32">Orders</flux:navbar.item>
                <flux:navbar.item href="#">Catalog</flux:navbar.item>
                <flux:navbar.item href="#">Configuration</flux:navbar.item>
            </flux:navbar>
        </flux:header>

        <flux:main class="min-h-full overflow-y-auto bg-white dark:bg-gray-800">

            {{ $slot }}

        </flux:main>
    </div>
</x-layouts.base>
