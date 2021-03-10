<x-layout :title="$post->title">

        <div class="post-content relative max-w-screen-md mx-auto">
            <h1 class="text-3xl tracking-tight font-bold text-gray-900 sm:text-5xl text-left">{{ $post->title }}</h1>

            <div class="meta flex text-sm text-gray-500 mt-5 space-x-5">
                <div>
                    <span>Category:</span>
                    <span><x-category-href :name="$post->category" /></span>
                </div>
                <div>
                    <span>Created at:</span>
                    <span>{{ $post->created_at }}</span>
                </div>
            </div>

            <div class="mt-12 leading-7 post-content font-base">
                {!! $post->content !!}
            </div>
        </div>
</x-layout>
