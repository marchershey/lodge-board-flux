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
    <div class="flex flex-col space-y-10">
        <flux:card class="min-w-xs w-full max-w-sm space-y-6">
            <div class="text-center">
                <flux:heading size="lg">Sign in to continue</flux:heading>
            </div>
            <div class="flex flex-col space-y-3">
                <flux:button class="w-full" icon="google">Sign in with Google</flux:button>
                <flux:button class="w-full" icon="facebook">Sign in with Facebook</flux:button>
                <flux:button class="w-full" icon="apple">Sign in with Apple</flux:button>
            </div>
            <flux:separator />
            <div class="text-center">
                <flux:subheading>or use your email address</flux:subheading>
            </div>
            <flux:input type="email" placeholder="Enter your email address" />
            <flux:button class="w-full">Sign in</flux:button>
            <div class="flex justify-center space-x-5 text-center text-xs">
                <flux:link href="#">Can't sign in?</flux:link>
                <flux:link href="{{ route('auth.register') }}">Create an account</flux:link>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">Dashboard</flux:heading>
                <flux:subheading>Welcome back!</flux:subheading>
            </div>
        </flux:card>
    </div>

</x-layouts.host>
