<x-layouts.base>
    <flux:header class="border-b bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700" container>
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <div class="pr-6">
            <x-logo size="sm" />
        </div>

        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item href="#" icon="home" current>Home</flux:navbar.item>
            <flux:navbar.item href="#" icon="inbox" badge="12">Inbox</flux:navbar.item>
            <flux:navbar.item href="#" icon="document-text">Documents</flux:navbar.item>
            <flux:navbar.item href="#" icon="calendar">Calendar</flux:navbar.item>

            <flux:separator class="my-2" vertical variant="subtle" />

            <flux:dropdown class="max-lg:hidden">
                <flux:navbar.item icon-trailing="chevron-down">Favorites</flux:navbar.item>

                <flux:navmenu>
                    <flux:navmenu.item href="#">Marketing site</flux:navmenu.item>
                    <flux:navmenu.item href="#">Android app</flux:navmenu.item>
                    <flux:navmenu.item href="#">Brand guidelines</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </flux:navbar>

        <flux:spacer />

        <flux:navbar class="mr-4">
            <flux:navbar.item href="#" icon="magnifying-glass" label="Search" />
            <flux:navbar.item class="max-lg:hidden" href="#" icon="cog-6-tooth" label="Settings" />
            <flux:navbar.item class="max-lg:hidden" href="#" icon="information-circle" label="Help" />
        </flux:navbar>

        <flux:dropdown position="top" align="start">
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
    </flux:header>

    <flux:sidebar class="border-r lg:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700" stashable sticky>
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand class="px-2 dark:hidden" name="Acme Inc." href="#" logo="https://fluxui.dev/img/demo/logo.png" />
        <flux:brand class="hidden px-2 dark:flex" name="Acme Inc." href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" />

        <flux:navlist variant="outline">
            <flux:navlist.item href="#" icon="home" current>Home</flux:navlist.item>
            <flux:navlist.item href="#" icon="inbox" badge="12">Inbox</flux:navlist.item>
            <flux:navlist.item href="#" icon="document-text">Documents</flux:navlist.item>
            <flux:navlist.item href="#" icon="calendar">Calendar</flux:navlist.item>

            <flux:navlist.group class="max-lg:hidden" expandable heading="Favorites">
                <flux:navlist.item href="#">Marketing site</flux:navlist.item>
                <flux:navlist.item href="#">Android app</flux:navlist.item>
                <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:navlist variant="outline">
            <flux:navlist.item href="#" icon="cog-6-tooth">Settings</flux:navlist.item>
            <flux:navlist.item href="#" icon="information-circle">Help</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>

    <flux:main container>
        <flux:heading size="xl" level="1">Good afternoon, Olivia</flux:heading>

        <flux:subheading class="mb-6" size="lg">Here's what's new today</flux:subheading>

        <flux:separator variant="subtle" />
    </flux:main>
</x-layouts.base>
