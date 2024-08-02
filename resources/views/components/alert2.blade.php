<div {{ $attributes->merge(['class' => ' ' . $typeComponent]) }}>
    <span class="font-medium">{{ $title }}!</span> {{ $slot }}
</div>
{{ $attributes->merge(['class2' => $typeComponent]) }}
