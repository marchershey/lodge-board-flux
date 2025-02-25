<flux:card class="w-full max-w-sm space-y-6 min-w-xs">
    <div>
        <flux:heading size="lg">Sign in to your account</flux:heading>
        <flux:subheading>Welcome back!</flux:subheading>
    </div>
    <div class="space-y-6">
        <flux:input type="email" label="Email" placeholder="Your email address" />
        <flux:field>
            <div class="flex justify-between mb-3">
                <flux:label>Password</flux:label>
                <flux:link class="text-sm" href="google.com" variant="subtle">Forgot password?</flux:link>
            </div>
            <flux:input type="password" placeholder="Your password" />
            <flux:error name="password" />
        </flux:field>
    </div>
    <div class="space-y-2">
        <flux:button class="w-full" variant="primary">Sign in</flux:button>
        <flux:button class="w-full" href="{{ route('auth.register') }}" variant="ghost">Sign up for a new account</flux:button>
    </div>
</flux:card>
