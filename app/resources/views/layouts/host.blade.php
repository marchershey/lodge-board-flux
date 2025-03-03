@props([
    'pageWidth' => null,
    'subnav' => [],
])
<div class="h-full host laptop:dark:bg-[#2f2f32]">
    <flux:sidebar class="duration-200 dark:bg-gray-900 dark:border-white/10 bg-gray-50 laptop:bg-gray-100 border-r border-gray-300 laptop:border-0 laptop:dark:bg-[#2f2f32]" sticky stashable>

        <flux:sidebar.toggle class="tablet:hidden" icon="x-mark" />

        <x-logo class="justify-start" />

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

        <livewire:components.host.property-selector />

    </flux:sidebar>

    <flux:header class="bg-white laptop:bg-gray-100 border-b border-gray-200 laptop:border-0 dark:bg-white/10 dark:border-white/10 laptop:dark:bg-[#2f2f32]">
        <div class="flex flex-wrap items-center w-full laptop:flex-nowrap">
            <div class="flex items-center justify-between w-full laptop:order-2 laptop:w-auto h-14">
                <flux:sidebar.toggle class="laptop:hidden" icon="bars-2" inset="left" />
                <div class="flex-1 shrink pl-1 laptop:hidden">
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
                    <flux:dropdown class="-mr-4" position="top" align="end">
                        <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />
                        <flux:menu>
                            <flux:menu.group heading="Account">
                                <flux:menu.item icon="user-cog">Profile</flux:menu.item>
                            </flux:menu.group>

                            <flux:menu.group heading="Get Help">
                                <flux:menu.item icon="table-of-contents">FAQ</flux:menu.item>
                                <flux:menu.item icon="info">Support</flux:menu.item>
                            </flux:menu.group>

                            <flux:menu.item variant="danger" icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                        </flux:menu>
                    </flux:dropdown>
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

    <flux:main class="flex space-y-10 flex-col min-h-full overflow-y-auto laptop:bg-gray-50 laptop:border-t laptop:border-l laptop:rounded-tl-xl laptop:border-gray-200 laptop:dark:bg-[#18181b] laptop:dark:border-white/20">
        <div {{ $attributes->merge(['class' => 'flex-1 w-full mx-auto max-w-4xl']) }}>
            {{ $slot }}
        </div>

        <x-layouts.footer />
    </flux:main>
</div>
