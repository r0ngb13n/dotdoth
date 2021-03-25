<x-layout :title="$post->title">
    <div class="post-content relative max-w-screen-md sm:max-w-screen-sm mx-auto">
        <h1 class="text-3xl tracking-wide text-gray-900 text-left font-semibold md:text-4xl">{{ $post->title }}</h1>

        <div class="meta flex text-sm text-gray-500 mt-3 sm:mt-2.5">
            <div>
                <span><x-category-href :name="$post->category" class="text-grey-500 uppercase" />;&nbsp;</span>
            </div>
            <div>
                <span>Viết vào:&nbsp;<time datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></span>
            </div>
        </div>

        <div>
            <div class="mt-6 leading-8 post-content sm:mt-12">
                {!! $post->content !!}
            </div>
            <div class="absolute top-0 right-0 h-full z-0">
                <x-posts.toc class="hidden lg:block fixed"/>
            </div>
        </div>
    </div>
</x-layout>
