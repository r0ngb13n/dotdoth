@php
    $origin = $_GET['origin'] ?? null;
@endphp

<x-book-page :origin="$origin" :posts="$posts">

</x-book-page>