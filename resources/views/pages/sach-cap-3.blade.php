<x-layout>
    <div class="relative">
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center tracking-wider max-w-xl mx-auto">
                <h2 class="text-3xl font-regular text-gray-900">
                    Dịch
                </h2>
                <p class="text-base mt-2  text-gray-500 font-light sm:text-lg">
                    Dịch sách hay các báo cáo, nghiên cứu, ..
                </p>
            </div>

            <div class="mt-10 max-w-xl mx-auto grid gap-14 sm:mt-10 sm:gap-24 sm:max-w-xl lg:grid-cols-1">
                <!-- should filter only posts you need -->
                @foreach ($posts as $post)
                    <div class="flex space-x-5">
                        <div class="w-1/4">
                            <x-img class="object-fill h-full" :src="$post->featureImage()" height="300" />
                        </div>

                        <div class="w-3/4">
                            <h2 class="text-lg leading-5 font-medium text-gray-900 sm:text-2xl ">
                                <a href="{{ $post->link() }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <div>
                                {{ $post->description }}
                            </div>
                            <div class="mt-5 text-gray-500">Trang thai : {{ $post->status ?? 'Inprogress' }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
