@props([
    'size' => 'md',
    'iconSize',
    'iconPadding',
    'textSize',
])

@php
    switch ($size) {
        case 'sm':
            $iconSize ??= 'size-4';
            $iconPadding ??= 'p-1';
            $textSize ??= 'text-md!';
            break;
        case 'md':
            $iconSize ??= 'size-4';
            $iconPadding ??= 'p-1.5';
            $textSize ??= 'text-lg!';
            break;
        case 'lg':
            $iconSize ??= 'size-6';
            $iconPadding ??= 'p-2';
            $textSize ??= 'text-2xl!';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => 'flex items-center space-x-2']) }}>
    <div class="flex items-center rounded-full bg-accent {{ $iconPadding }}">
        <flux:icon.map-pin-house class="text-white {{ $iconSize }}" />
    </div>
    <flux:heading class="font-bold! {{ $textSize }} min-w-0 truncate leading-5">{{ config('brand.name') }}</flux:heading>
</div>
