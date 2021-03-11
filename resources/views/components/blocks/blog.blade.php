<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <x-img class="h-72 w-full object-cover"
            :src="$post->featureImage()"
            width="650"
            alt="{{ $post->title }}" />
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <div class="block mt-2">
                <h3 class="text-3xl font-semibold text-gray-900 text-gray-800 hover:text-indigo-500 transition duration-200">
                    <a href="{{ $post->link() }}">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="mt-3 text-base text-gray-500">
                    {{ substr($post->description(), 0, 322) }}...
                </p>
            </div>
        </div>
        <div class="mt-6 flex justify-between text-sm text-gray-500">
            in <x-category-href :name="$post->category" class="text-indigo-500 hover:text-indigo-700" />
            <span>
                {{ $post->created_at }}
            </span>
        </div>
    </div>
</div>
