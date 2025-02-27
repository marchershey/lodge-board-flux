<flux:card class="w-full max-w-sm space-y-6 min-w-xs">
    <div class="">
        <flux:heading size="xl">Sign in to your account</flux:heading>
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
    <flux:separator />
    <flux:subheading class="text-center">Or sign in using</flux:subheading>
    <div class="flex flex-col space-y-4 tablet:flex-row tablet:space-y-0 tablet:space-x-2 tablet:justify-center">
        <flux:button variant="filled" icon="google">Google</flux:button>
        <flux:button variant="filled" icon="facebook">Facebook</flux:button>
        <flux:button variant="filled" icon="apple-light">Apple</flux:button>
    </div>
</flux:card>
