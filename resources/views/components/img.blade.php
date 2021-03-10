@props([
    'src',
    'width' => null,
    'height' => null
])

@php
    $parsed = parse_url($src);
    ['host' => $host, 'path' => $path] = $parsed;
    $query = $parsed['query'] ?? null;

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
