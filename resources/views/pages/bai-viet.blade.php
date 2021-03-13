<x-layout :categories="$posts->map(fn ($post) => $post->category)->unique()">
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-wider font-regular text-black sm:text-3xl">
                    Các bài viết
                </h2>
                <p class="text-base mt-2 max-w-xl mx-auto text-gray-500 tracking-widest font-light sm:mt-2 sm:text-lg">
                    Các bài viết được tổng hợp, chọn lọc cũng như ý kiến cá nhân của người viết 
                </p>
            </div>

            <div class="mt-10 max-w-xl mx-auto grid gap-14 sm:mt-10 sm:gap-24 sm:max-w-lg lg:grid-cols-1">
                @foreach ($posts as $post)
                    @if($post->category != "review")
                    <x-blocks.blog :post="$post" />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
