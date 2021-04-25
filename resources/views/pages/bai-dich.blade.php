<x-layout>
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
         <div class="page-title">
                <h2 class="bigText">
                    Bài dịch
                </h2>
                <p class="subText">
                    Dịch sách hay các báo cáo, nghiên cứu, ...
                </p>
            </div>

            <div class="mt-10 max-w-xl mx-auto grid gap-14 sm:mt-10 sm:gap-24 sm:max-w-xl lg:grid-cols-1">
                <!-- should filter only posts you need -->
                @foreach ($posts as $post)
                    @if($post->layout === "book" && $post->status == 1)
                        <x-blocks.book :post="$post" />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
