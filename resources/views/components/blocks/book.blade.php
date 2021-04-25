<div class="flex space-x-5">
    <div class="w-1/4">
        <x-img class="object-fill h-full" :src="$post->featureImage()" height="300" />
    </div>

    <div class="w-3/4">
        <p class="font-light text-sm text-gray-500" >
            <x-category-href :name="$post->origin" class="text-gray-500" />
        </p>
        <h2 class="text-lg leading-5 font-medium text-gray-900 sm:text-2xl ">
            <a href="{{ $post->link() }}">
                {{ $post->title }}
            </a>
        </h3>
        <div class="mt-1 leading-5 font-light text-gray-500 sm:mt-1.5">
            {{ $post->description }}
        </div>
        <div class="mt-5 text-gray-500">Trang thai : {{ $post->status ?? 'In Progress' }}</div>
    </div>
</div>