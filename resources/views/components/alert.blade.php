@props(['type' => 'info'])

<div {{ $attributes->merge(['class' => "alert alert-$type alert-dismissible fade show"]) }} role="alert">
    {{ $slot }}
</div>
