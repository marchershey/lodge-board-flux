<div {{ $attributes->class(['text-gray-500 dark:text-white/20']) }}>
    <div class="text-xs text-center flex flex-col space-y-2">
        <span>
            Powered by {{ config('app.name') }} - an open source project
        </span>
        <span>
            &copy;{{ date('Y') }} {{ config('app.name') }} LLC.
        </span>
    </div>
</div>
