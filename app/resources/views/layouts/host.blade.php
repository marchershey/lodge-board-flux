<x-layouts.base title="{{ $title }}">
    <div class="h-full host">
        <flux:sidebar class="border-r bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-800" sticky stashable>
            <flux:sidebar.toggle class="tablet:hidden" icon="x-mark" />

            <x-logo />

            <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

            <flux:navlist variant="outline">
                <flux:navlist.item href="#" icon="house" current>Dashboard</flux:navlist.item>
                <flux:navlist.item href="#" icon="calendar">Calendar</flux:navlist.item>
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

            <flux:dropdown class="max-tablet:hidden" position="top" align="start">
                <flux:profile name="Ohana Burnside" avatar="https://i.imgur.com/UZFZvLO.jpeg" />

                <flux:menu>
                    <flux:menu.radio.group>
                        <flux:menu.radio checked>Ohana Burnside</flux:menu.radio>
                        <flux:menu.radio>Other Property</flux:menu.radio>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.item icon="house-plus">Add new property</flux:menu.item>
                </flux:menu>
            </flux:dropdown>

            <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                <flux:radio value="light" icon="sun" />
                <flux:radio value="dark" icon="moon" />
                <flux:radio value="system" icon="computer-desktop" />
            </flux:radio.group>
        </flux:sidebar>

        <flux:header class="block! bg-white dark:bg-gray-950 tablet:bg-zinc-50 tablet:dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-800">
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

        <flux:main class="min-h-full overflow-y-auto">

            {{ $slot }}

        </flux:main>
    </div>
</x-layouts.base>
