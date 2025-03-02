<flux:card class="w-full max-w-md space-y-6 min-w-xs">
    <div>
        <flux:heading size="xl">Create an account</flux:heading>
        <flux:subheading>Let's get started!</flux:subheading>
    </div>
    <div class="space-y-6">
        <div class="space-y-6 phone:space-x-6 phone:flex phone:space-y-0">
            <flux:input type="text" label="First name" placeholder="Your first name" />
            <flux:input type="text" label="Last name" placeholder="Your last name" />
        </div>
        <flux:input type="email" label="Email" placeholder="Your email address" />
        <div class="flex flex-col space-y-3">
            <flux:input type="password" label="Password" placeholder="Your password" />
            <flux:input type="password" placeholder="Confirm password" />
        </div>
    </div>
    <div class="space-y-2">
        <flux:button class="w-full" variant="primary">Create an account</flux:button>
        <flux:button class="w-full" href="{{ route('auth.login') }}" variant="ghost">Sign in to an existing account</flux:button>
    </div>
    <flux:separator />
    <flux:subheading class="text-center">Or create an account using</flux:subheading>
    <div class="flex flex-col space-y-4 tablet:flex-row tablet:space-y-0 tablet:space-x-6 tablet:justify-center">
        <flux:button variant="filled" icon="google">Google</flux:button>
        <flux:button variant="filled" icon="facebook">Facebook</flux:button>
        <flux:button variant="filled" icon="apple-light">Apple</flux:button>
    </div>
</flux:card>
