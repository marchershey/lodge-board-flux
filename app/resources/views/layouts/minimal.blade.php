<x-layouts.base>
    <div class="flex items-center justify-center h-full">
        <div class="w-full max-w-md p-5">
            <div class="flex flex-col space-y-5">
                <div class="flex items-center justify-center space-x-2">
                    <flux:icon.handshake class="size-6" />
                    <flux:heading class="font-bold!" size="xl">LodgeBoard</flux:heading>
                </div>
                <div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-layouts.base>
