@if ($size == 'lg')
    <div {{ $attributes->merge(['class' => 'flex items-center space-x-2']) }}>
        <div class="flex items-center p-1.5 rounded-full bg-accent">
            <flux:icon.map-pin-house class="{{ $iconSize }} text-white" />
        </div>
        <flux:heading class="font-bold!" size="xl">{{ config('brand.name') }}</flux:heading>
    </div>
@else
    <div {{ $attributes->merge(['class' => 'flex items-center space-x-2']) }}>
        <div class="flex items-center p-1 rounded-full bg-accent">
            <flux:icon.map-pin-house class="text-white size-4" />
        </div>
        <flux:heading class="font-bold! text-xl! leading-5">{{ config('brand.name') }}</flux:heading>
    </div>
@endif
