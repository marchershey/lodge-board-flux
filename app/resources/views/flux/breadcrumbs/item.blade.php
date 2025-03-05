@props([
    'separator' => 'chevron-right',
    'iconVariant' => 'mini',
    'icon' => null,
    'href' => null,
])

@php
    $classes = Flux::classes()->add('flex items-center')->add('text-sm font-medium')->add('group/breadcrumb');

    $linkClasses = Flux::classes()->add('text-zinc-800 dark:text-white')->add('hover:underline decoration-zinc-800/20 underline-offset-4');

    $staticTextClasses = Flux::classes()->add('text-zinc-500 dark:text-white/80');

    $separatorClasses = Flux::classes()->add('mx-1 text-zinc-300 dark:text-white/80')->add('group-last/breadcrumb:hidden');

    $iconClasses = Flux::classes()
        // When using the outline icon variant, we need to size it down to match the default icon sizes...
        ->add($iconVariant === 'outline' ? 'size-5' : '');

    [$styleAttributes, $attributes] = Flux::splitAttributes($attributes);
@endphp

<div data-flux-breadcrumbs-item {{ $styleAttributes->class($classes) }}>
    <?php if ($href): ?>
    <a href="{{ $href }}" {{ $attributes->class($linkClasses) }}>
        <?php if ($icon): ?>
        <flux:icon class="{{ $iconClasses }}" :$icon :variant="$iconVariant" />
        <?php else: ?>
        {{ $slot }}
        <?php endif; ?>
    </a>
    <?php else: ?>
    <div {{ $attributes->class($staticTextClasses) }}>
        <?php if ($icon): ?>
        <flux:icon class="{{ $iconClasses }}" :$icon :variant="$iconVariant" />
        <?php else: ?>
        {{ $slot }}
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <flux:icon class="{{ $separatorClasses }}" :icon="$separator" variant="mini" />
</div>
