<x-layout :categories="$posts->map(fn ($post) => $post->category)->unique()">
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
         <div class="page-title">
                <h2 class="bigText">
                    Đánh giá
                </h2>
                <p class="subText">
                    Đánh giá, so sánh khách quan.
                </p>
            </div>

            <div class="mt-10 max-w-xl mx-auto grid gap-14 sm:mt-10 sm:gap-24 sm:max-w-xl lg:grid-cols-1">
                @foreach ($posts as $post)
                    @if($post->layout === "review")
                        <x-blocks.review :post="$post" />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
