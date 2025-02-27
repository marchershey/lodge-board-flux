@php $attributes = $unescapedForwardedAttributes ?? $attributes; @endphp

@props([
    'variant' => 'outline',
])

@php
    $classes = Flux::classes('shrink-0')->add(
        match ($variant) {
            'outline' => '[:where(&)]:size-6',
            'solid' => '[:where(&)]:size-6',
            'mini' => '[:where(&)]:size-5',
            'micro' => '[:where(&)]:size-4',
        },
    );
@endphp

<svg data-flux-icon {{ $attributes->class($classes) }} viewBox="0 0 48.00 48.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff">
    <g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)">
        <rect x="0" y="0" width="48.00" height="48.00" rx="14.4" fill="#ffffff" strokewidth="0"></rect>
    </g>
    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#ff0000" stroke-width="1.056"></g>
    <g id="SVGRepo_iconCarrier">
        <title>Facebook logo</title>
        <g id="Icons" stroke-width="0.00048000000000000007" fill="none" fill-rule="evenodd">
            <g id="Color-" transform="translate(-200.000000, -160.000000)" fill="#4460A0">
                <path id="Facebook" d="M225.638355,208 L202.649232,208 C201.185673,208 200,206.813592 200,205.350603 L200,162.649211 C200,161.18585 201.185859,160 202.649232,160 L245.350955,160 C246.813955,160 248,161.18585 248,162.649211 L248,205.350603 C248,206.813778 246.813769,208 245.350955,208 L233.119305,208 L233.119305,189.411755 L239.358521,189.411755 L240.292755,182.167586 L233.119305,182.167586 L233.119305,177.542641 C233.119305,175.445287 233.701712,174.01601 236.70929,174.01601 L240.545311,174.014333 L240.545311,167.535091 C239.881886,167.446808 237.604784,167.24957 234.955552,167.24957 C229.424834,167.24957 225.638355,170.625526 225.638355,176.825209 L225.638355,182.167586 L219.383122,182.167586 L219.383122,189.411755 L225.638355,189.411755 L225.638355,208 L225.638355,208 Z"> </path>
            </g>
        </g>
    </g>
</svg>
