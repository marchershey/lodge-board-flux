<x-layouts.minimal>
    <flux:card class="w-full max-w-sm space-y-6 min-w-xs">
        <div class="text-center">
            <flux:heading size="lg">Create a new account</flux:heading>
        </div>
        <div class="flex flex-col space-y-3">
            <flux:button class="w-full" icon="google">Sign up with Google</flux:button>
            <flux:button class="w-full" icon="facebook">Sign up with Facebook</flux:button>
            <flux:button class="w-full" icon="apple">Sign up with Apple</flux:button>
        </div>

        <flux:separator />
        <div class="text-center">
            <flux:subheading>or use your email address</flux:subheading>
        </div>
        <flux:input type="email" placeholder="Enter your email address" />
        <flux:button class="w-full" variant="primary">Create account</flux:button>
        <div class="text-center text-xs">
            <span>Already have an account?</span>
            <flux:link href="{{ route('auth.login') }}">Sign in instead</flux:link>
        </div>
    </flux:card>
</x-layouts.minimal>

{{-- <x-layouts.minimal>
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
            <flux:button variant="filled" icon="apple">Apple</flux:button>
        </div>
    </flux:card>
</x-layouts.minimal> --}}
