<x-layout :title="$post->title">
    <div class="post-content relative mx-auto">
        <h1 class="text-3xl tracking-wide text-left text-gray-900  md:text-4xl md:text-center">{{ $post->title }}</h1>

        <div class="text-left text-sm text-gray-500 mt-3 sm:mt-2.5 md:text-center">
            <span><x-category-href :name="$post->category" class="text-grey-500 uppercase" />;&nbsp;</span>
            <span>Viết vào:&nbsp;<time datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></span>
        </div>
        <div class="text-left text-base text-gray-500 mt-1.5 sm:mt-1.5 md:text-center">
            <span>Thuộc:&nbsp;<x-category-href :name="$post->origin" class="text-grey-500" /></span> 
            <!-- Khi nào click vào kéo từ bên phải sang như cái nav bar trên giao diện điện thoại, hiển thị thông tin và các bài viết con chung 1 origin -->
        </div>

        <div class="mt-6 leading-8 post-content sm:mt-12 font-light">
            {!! $post->content !!}
        </div>
    </div>
</x-layout>
