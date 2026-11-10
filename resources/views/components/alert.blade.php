@props(['type' => 'info'])

<div {{ $attributes->merge(['class' => "alert theme-$type"]) }}>
    {{ $slot }}
</div>