<x-layout :title="$post->title">

        <div class="post-content relative max-w-screen-md mx-auto">
            <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-5xl text-left">{{ $post->title }}</h1>

            <div class="meta flex text-sm text-gray-500 mt-3 sm:mt-5 space-x-5">
                <div>
                    <span>In <x-category-href :name="$post->category" class="text-indigo-500 hover:text-indigo-700" /></span>
                </div>
                <div>
                    <span>at <time datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></span>
                </div>
            </div>

            <div class="mt-12 leading-7 post-content font-base">
                {!! $post->content !!}
            </div>
        </div>
</x-layout>
