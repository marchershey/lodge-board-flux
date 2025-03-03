<x-layouts.base title="{{ $title }}">
    <flux:header class="border-b border-white/10 bg-gray-100 dark:bg-[#2f2f32]" container>
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <div class="pr-6 pl-3 laptop:pl-0 max-phone:hidden">
            <x-logo />
        </div>

        <flux:navbar class="-mb-px max-laptop:hidden">
            <flux:navbar.item href="#" icon="home">Dashboard</flux:navbar.item>
            <flux:navbar.item href="#" icon="inbox" badge="12" badgeColor="red" variant="solid">Inbox</flux:navbar.item>
        </flux:navbar>

        <flux:spacer />

        <flux:navbar class="max-laptop:hidden">
            <flux:navbar.item class="" href="#" icon="magnifying-glass" label="Search" />
            <flux:navbar.item class="" href="#" icon="cog-6-tooth" label="Settings" />
        </flux:navbar>

        <flux:dropdown class="-mr-4" position="top" align="end">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />
            <flux:menu>
                <flux:menu.group heading="Account">
                    <flux:menu.item icon="user-cog">Profile</flux:menu.item>
                    <flux:menu.item icon="wallet">Billing</flux:menu.item>
                    <flux:menu.item icon="settings">Settings</flux:menu.item>
                </flux:menu.group>
                <flux:menu.item icon="info">Support</flux:menu.item>
                <flux:separator />
                <flux:menu.item variant="danger" icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    <flux:sidebar class="border-r lg:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700" stashable sticky>
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <x-logo />

        <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

        <flux:navlist variant="outline">
            <flux:navlist.item href="#" icon="home" current>Dashboard</flux:navlist.item>
            <flux:navlist.item href="#" icon="inbox" badge="12" badgeColor="red" variant="solid">Inbox</flux:navlist.item>
            <flux:navlist.item href="#" icon="document-text">Documents</flux:navlist.item>
        </flux:navlist>

        <flux:spacer />

        <flux:navlist variant="outline">
            <flux:navlist.item href="#" icon="settings">Settings</flux:navlist.item>
            <flux:navlist.item href="#" icon="info">Support</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>

    <flux:main container>
        <flux:heading size="xl" level="1">Good afternoon, asdf</flux:heading>

        <flux:subheading class="mb-6" size="lg">Here's what's new today</flux:subheading>

        <flux:separator variant="subtle" />
    </flux:main>
</x-layouts.base>
