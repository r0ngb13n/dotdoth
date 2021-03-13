<div class="flex flex-col overflow-hidden">
    <div class="flex-shrink-0">
        <x-img class="h-80 w-full object-cover"
            :src="$post->featureImage()"
            width="650"
            alt="{{ $post->title }}" />
    </div>
    <div class="flex-1 bg-white flex flex-col mt-2 justify-between">
        <div class="flex-1">
            <div class="block">
                <h3 class="text-3xl font-normal text-gray-900">
                    <a href="{{ $post->link() }}">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="mt-1.5 text-light text-gray-500" >
                    {{ substr($post->description(), 0, 322) }}
                </p>
            </div>
        </div>
        <div class="mt-4 flex justify-between text-sm text-gray-500 text-sm">
            <div>
                <x-category-href :name="$post->category" class="text-indigo-500 hover:text-indigo-700 uppercase" />
            </div>
            <span>
                {{ $post->created_at }}
            </span>
        </div>
    </div>
</div>
