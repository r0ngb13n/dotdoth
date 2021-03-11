<x-layout :categories="$posts->map(fn ($post) => $post->category)->unique()">
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                    Hai pro blog
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-gray-500 sm:mt-4">
                    Đẳng cấp chuyên gia pha cà phế quốc tế chia sẻ kinh nghiệm cho bạn.
                </p>
            </div>

            <div class="mt-12 max-w-2xl mx-auto grid gap-10 sm:gap-20 lg:grid-cols-1">
                @foreach ($posts as $post)
                    <x-blocks.blog :post="$post" />
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
