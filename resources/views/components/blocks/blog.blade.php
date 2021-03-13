<div class="flex flex-row overflow-hidden">
    <div class="flex-1 bg-white flex flex-row mt-2 justify-between">
        <div class="flex-none w-20  text-right sm:pt-2 tracking-wide mr-2 sm:w-28">
            <div class="flex w-a flex-col text-xs text-gray-500 sm:text-sm">
                <div>
                    <x-category-href :name="$post->category" class="text-indigo-500 hover:text-indigo-700 uppercase" />
                </div>
                <span>
                    {{ $post->created_at }}
                </span>
            </div>
        </div>
        <div class="flex-1">
            <div class="block">
                <h3 class="text-lg leading-5 font-medium text-gray-900 sm:text-2xl ">
                    <a href="{{ $post->link() }}">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="mt-1 text-base leading-5 font-light text-gray-500 sm:mt-1.5" >
                    {{ substr($post->description(), 0, 322) }}
                </p>
            </div>
        </div>
    </div>
</div>
