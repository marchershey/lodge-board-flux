<div class="mx-auto max-w-screen-laptop">

    <flux:card class="space-y-6">
        <div>
            <flux:heading size="lg">Log in to your account</flux:heading>
            <flux:subheading>Welcome back!</flux:subheading>
        </div>

        <div class="space-y-6">
            <flux:input type="email" label="Email" placeholder="Your email address" />

            <flux:field>
                <div class="flex justify-between mb-3">
                    <flux:label>Password</flux:label>

                    <flux:link class="text-sm" href="#" variant="subtle">Forgot password?</flux:link>
                </div>

                <flux:input type="password" placeholder="Your password" />

                <flux:error name="password" />
            </flux:field>

            <flux:modal.trigger name="edit-profile">
                <flux:button>Edit profile</flux:button>
            </flux:modal.trigger>

            <flux:modal class="md:w-96" name="edit-profile">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Update profile</flux:heading>
                        <flux:subheading>Make changes to your personal details.</flux:subheading>
                    </div>

                    <flux:input label="Name" placeholder="Your name" />

                    <flux:date-picker mode="range" fixed-weeks selectable-header min-range="10" with-today max-range="30" />

                    <div class="flex">
                        <flux:spacer />

                        <flux:button type="submit" variant="primary">Save changes</flux:button>
                    </div>
                </div>
            </flux:modal>
        </div>

        <div class="space-y-2">
            <flux:button class="w-full" variant="primary">Log in</flux:button>

            <flux:button class="w-full" variant="ghost">Sign up for a new account</flux:button>
        </div>
    </flux:card>
</div>
