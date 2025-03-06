@props([
    'size' => 'base',
])
<flux:dropdown x-data align="center">

    <flux:tooltip content="Toggle dark mode" kbd="D">
        <flux:button class="group" aria-label="Preferred color scheme" variant="subtle" size="{{ $size }}" square>
            <flux:icon.sun class="" x-show="$flux.appearance === 'light'" variant="mini" />
            <flux:icon.moon class="" x-show="$flux.appearance === 'dark'" variant="mini" />
            <flux:icon.moon x-show="$flux.appearance === 'system' && $flux.dark" variant="mini" />
            <flux:icon.sun x-show="$flux.appearance === 'system' && ! $flux.dark" variant="mini" />
        </flux:button>
    </flux:tooltip>

    <flux:menu>
        <flux:menu.radio.group x-data x-model="$flux.appearance">
            <flux:menu.radio value="light">Light</flux:menu.radio>
            <flux:menu.radio value="dark">Dark</flux:menu.radio>
            <flux:menu.radio value="system">System</flux:menu.radio>
        </flux:menu.radio.group>
    </flux:menu>
</flux:dropdown>

{{-- <flux:context>
    <flux:tooltip content="Toggle dark mode" kbd="D">
        <flux:button aria-label="Toggle dark mode" x-on:keydown.d.window="if (document.activeElement.localName === 'body') { $flux.dark = ! $flux.dark }" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" />
    </flux:tooltip>
    <flux:menu>
        <flux:menu.radio.group x-model="$flux.appearance">
            <flux:menu.radio value="light">Light</flux:menu.radio>
            <flux:menu.radio value="dark">Dark</flux:menu.radio>
            <flux:menu.radio value="system">System</flux:menu.radio>
        </flux:menu.radio.group>
    </flux:menu>
</flux:context> --}}
