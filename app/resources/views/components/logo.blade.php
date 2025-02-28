@if ($size == 'lg')
    <div {{ $attributes->merge(['class' => 'flex items-center justify-center space-x-2']) }}>
        <div class="flex items-center justify-center p-2 rounded-full bg-accent">
            <flux:icon.map-pin-house class="{{ $iconSize }} text-white" />
        </div>
        <flux:heading class="font-bold!" size="xl">LodgeBoard</flux:heading>
    </div>
@else
    <div {{ $attributes->merge(['class' => 'flex items-center justify-center space-x-2']) }}>
        <div class="flex items-center justify-center p-1.5 rounded-full bg-accent">
            <flux:icon.map-pin-house class="text-white size-5" />
        </div>
        <flux:heading class="font-bold!" size="xl">LodgeBoard</flux:heading>
    </div>
@endif
