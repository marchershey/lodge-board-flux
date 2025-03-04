<x-layouts.minimal>
    <flux:card class="w-full max-w-sm space-y-6 min-w-xs">
        <div class="text-center">
            <flux:heading size="lg">Sign in in to continue</flux:heading>
        </div>
        <flux:input type="email" placeholder="Enter your email address" />
        <flux:button class="w-full" variant="primary">Continue</flux:button>
        <div class="text-center">
            <flux:subheading>Or continue with</flux:subheading>
        </div>
        {{-- <div class="flex flex-col space-y-4 tablet:flex-row tablet:space-y-0 tablet:space-x-2 tablet:justify-center"> --}}
        <div class="flex flex-col space-y-3">
            <flux:button class="w-full" icon="google">Google</flux:button>
            <flux:button class="w-full" icon="facebook">Facebook</flux:button>
            <flux:button class="w-full" icon="apple">Apple</flux:button>
        </div>
        <flux:separator />
        <div class="text-center text-xs flex justify-center space-x-5">
            <flux:link href="#">Can't sign in?</flux:link>
            <flux:link href="{{ route('auth.register') }}">Create an account</flux:link>
        </div>
    </flux:card>
</x-layouts.minimal>
