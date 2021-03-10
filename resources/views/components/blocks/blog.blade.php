<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <img class="h-72 w-full object-cover"
            src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
            alt="">
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <div class="block mt-2">
                <h3>
                    <a href="{{ $post->link() }}" class="text-3xl font-semibold text-gray-900">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="mt-3 text-base text-gray-500">
                    {{ $post->description() }}
                </p>
            </div>
        </div>
        <div class="mt-6 flex justify-between text-sm text-gray-500">
            <a href="#">
                {{ $post->category ?? 'Uncategorized' }}
            </a>
            <span>
                6 min read
            </span>
        </div>
    </div>
</div>
