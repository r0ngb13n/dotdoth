<x-layout :categories="$posts->map(fn ($post) => $post->category)->unique()">
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
            <div class="page-title">
                <h2 class="bigText">
                    Trang chủ
                </h2>
                <p class="subText">
                    Chưa biết để trang chủ như nào. 
                </p>
            </div>

            <div class="mt-10 max-w-xl mx-auto grid gap-6 sm:mt-10 sm:gap-12 sm:max-w-xl lg:grid-cols-1">
                @foreach ($posts as $post)
                    @if($post->status == 1)
                        <x-blocks.blog :post="$post" />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
