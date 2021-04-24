@props([
    'src',
    'width' => null,
    'height' => null
])

@php
    $parsed = parse_url($src);

    $path = $parsed['path'];
    $query = $parsed['query'] ?? null;
    $host = $parsed['host'] ?? 'dotdoth.com';

    $params = [];
    if ($width) {
        $params[] = 'w=' . $width;
    }
    if ($height) {
        $params[] = 'h=' . $height;
    }
    $cdnUrl = "https://cdn.statically.io/img/{$host}"
        . (count($params) ? '/'.implode(',', $params) : '')
        . "{$path}" . ($query ? urlencode('?'.$query) : '');
@endphp

<img src="{{ $cdnUrl }}" {{ $attributes }} />
