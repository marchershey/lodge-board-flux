<div {{ $attributes->class(['text-zinc-300 dark:text-zinc-700']) }}>
    <div class="text-xs text-center flex flex-col space-y-2">
        <span>
            Powered by {{ config('app.name') }} - an open source project
        </span>
        <span>
            &copy;{{ date('Y') }} {{ config('app.name') }} LLC.
        </span>
    </div>
</div>
