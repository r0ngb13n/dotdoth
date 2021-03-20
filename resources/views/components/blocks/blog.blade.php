<div class="flex flex-row overflow-hidden">
    <div class="flex-1 bg-white flex flex-row justify-between">
        <div class="flex-none w-20 mt-2 tracking-wide sm:w-28 mr-2">
            <div class="flex w-a flex-col text-right text-sm text-gray-500">
                <div>
                    <x-category-href :name="$post->category" class="text-indigo-500 hover:text-indigo-700" />
                </div>
                <span>
                    {{ $post->created_at }}
                </span>
            </div>
        </div>
        <div class="flex-1">
            <div class="block">

                <p class="font-light text-sm text-gray-500" >
                    <x-category-href :name="$post->origin" class="text-gray-500" />
                </p>
                
                <h2 class="text-xl leading-6 font-medium text-gray-900 sm:text-2xl ">
                    <a href="{{ $post->link() }}">
                        {{ $post->title }}
                    </a>
                </h2>

                <p class="mt-1 leading-5 font-light text-gray-500 sm:mt-1.5" >
                    {{ substr($post->description(), 0, 322) }}
                </p>

            </div>
        </div>
    </div>
</div>
