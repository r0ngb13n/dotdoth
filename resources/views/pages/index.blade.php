<x-layout :categories="$posts->map(fn ($post) => $post->category)->unique()">
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-4xl tracking-wider font-regular text-black sm:text-4xl">
                    Thiện địa hội
                </h2>
                <p class="mt-2 max-w-2xl mx-auto text-gray-500 tracking-widest font-light sm:mt-4 sm:text-xl">
                    FREE PORNO cho mọi nhà 
                </p>
            </div>

            <div class="mt-12 max-w-2xl mx-auto grid gap-10 sm:mt-16 sm:gap-24 lg:grid-cols-1">
                @foreach ($posts as $post)
                    <x-blocks.blog :post="$post" />
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
