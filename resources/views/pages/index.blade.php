<x-layout :categories="$posts->map(fn ($post) => $post->category)->unique()">
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                    Đánh giá và so sánh
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-gray-500 sm:mt-4">
                    Các bài viết đánh giá mang tính khách quan. </p>
            </div>

            <div class="mt-12 max-w-2xl mx-auto grid gap-20 lg:grid-cols-1">
                @foreach ($posts as $post)
                    <x-blocks.blog :post="$post" />
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
