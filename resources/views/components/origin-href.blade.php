@props([
    'origin'
])

<a href="/origin.html?origin={{ $origin }}" title="{{ $origin }}" {{ $attributes->merge(['class' => 'text-blue-500']) }}>{{ $origin }}</a>