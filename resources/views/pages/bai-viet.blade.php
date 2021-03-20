<x-layout :categories="$posts->map(fn ($post) => $post->category)->unique()">
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center tracking-wider max-w-xl mx-auto">
                <h2 class="text-3xl font-regular text-gray-900">
                    Bài viết
                </h2>
                <p class="text-base mt-2  text-gray-500 font-light sm:text-lg">
                    Các bài viết được tổng hợp từ nhiều nguồn có chọn lọc.
                </p>
            </div>

            <div class="mt-10 max-w-xl mx-auto grid gap-6 sm:mt-10 sm:gap-12 sm:max-w-xl lg:grid-cols-1">
                @foreach ($posts as $post)
                    @if($post->layout !== "book" && $post->layout !== "review" )
                        <x-blocks.blog :post="$post" />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
