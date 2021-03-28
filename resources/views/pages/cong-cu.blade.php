<x-layout :categories="$posts->map(fn ($post) => $post->category)->unique()">
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
            <div class="page-title">
                <h2 class="bigText">
                    Công cụ
                </h2>
                <p class="subText">
                    Công cụ, tiện ích, ứng dụng.
                </p>
            </div>

            <div class="mt-10 max-w-xl mx-auto grid gap-14 sm:mt-10 sm:gap-24 sm:max-w-xl lg:grid-cols-1">
                @foreach ($posts as $post)
                    @if($post->category === "Công cụ" && $post->status == 1)
                        <x-blocks.review :post="$post" />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
