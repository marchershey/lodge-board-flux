<x-layouts.host :pageNav="[
    'Dashboard' => 'host.dashboard',
    'Calendar1' => 'host.calendar',
    'Calendar2' => 'host.calendar',
    'Calendar3' => 'host.calendar',
    'Inbox' => [
        'route' => 'host.settings',
        'badge' => '12',
    ],
]">

    <div class="">
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Calendar</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
    </div>

</x-layouts.host>
