<x-layout :title="$post->title">
    <div class="post-content relative mx-auto sm:max-w-screen-md">
        <h1 class="text-3xl tracking-wide text-left text-gray-900 font-semibold md:text-4xl md:text-center">{{ $post->title }}</h1>

        <div class="text-left text-sm text-gray-500 mt-3 sm:mt-2.5 md:text-center">
            <span><x-category-href :name="$post->category" class="text-grey-500 uppercase" />;&nbsp;</span>
            <span>Viết vào:&nbsp;<time datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></span>
        </div>

        <div>
            <div class="mt-6 leading-8 post-content rvlayout sm:mt-12">
                {!! $post->content !!}
            </div>
            <div class="absolute top-0 right-0 h-full z-0">
                <x-posts.toc class="hidden lg:block fixed"/>
            </div>
        </div>
    </div>
</x-layout>
