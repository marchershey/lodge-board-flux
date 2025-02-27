@if ($size == 'sm')
    <div class="flex items-center justify-center space-x-2">
        <div class="flex items-center justify-center p-1 rounded-full bg-accent">
            <flux:icon.map-pin-house class="size-5" />
        </div>
        <flux:heading class="font-bold!" size="lg">LodgeBoard</flux:heading>
    </div>
@else
    <div class="flex items-center justify-center space-x-2">
        <div class="flex items-center justify-center p-2 rounded-full bg-accent">
            <flux:icon.map-pin-house class="{{ $iconSize }}" />
        </div>
        <flux:heading class="font-bold!" size="xl">LodgeBoard</flux:heading>
    </div>
@endif
