<div class="flex flex-col h-full p-10 space-y-10 overflow-auto">
    <div class="flex-1">
        <div class="flex flex-col items-center justify-center min-h-full space-y-10">
            <x-logo size="lg" />

            {{ $slot }}
        </div>
    </div>
    <div>
        <x-layouts.footer showThemeSelector />
    </div>
</div>
