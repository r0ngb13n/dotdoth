<x-layout :title="$post->title">

        <div class="post-content relative max-w-screen-md mx-auto">
            <h1 class="text-4xl tracking-wide font-medium text-black sm:text-5xl text-left">{{ $post->title }}</h1>

            <div class="meta flex text-sm text-gray-500 mt-3 sm:mt-2.5">
                <div>
                    <span><x-category-href :name="$post->category" class="text-grey-500 uppercase" />;&nbsp;</span>
                </div>
                <div>
                    <span>Viết vào:&nbsp;<time datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></span>
                </div>
            </div>

            <div class="mt-12 leading-6 post-content font-light">
                {!! $post->content !!}
            </div>
        </div>
</x-layout>
