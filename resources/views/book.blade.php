<x-layout :title="$post->title">
    <div class="post-content relative max-w-screen-md">
        <h1 class="postTitle text-left  ">
            {{ $post->title }}
        </h1>

        <div class="postInfo text-left  ">
            <span><x-category-href :name="$post->category" class="uppercase" />;&nbsp;</span>
            @if($post->origin)
                <span>Thuộc:&nbsp;<x-category-href :name="$post->origin"/>;&nbsp;</span> 
            @endif
            <span>Viết vào:&nbsp;<time datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></span>
        </div>

        <div>
            <div class="postCont">
                {!! $post->content !!}
            </div>
            <div class="absolute top-0 right-0 h-full z-0">
                <x-posts.toc class="hidden lg:block fixed"/>
            </div>
        </div>
        
    </div>
</x-layout>
