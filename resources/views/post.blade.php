<x-layout :title="$post->title">

	<div>

		<div class="relative max-w-screen-md mx-auto">
			<h1 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl text-center">{{ $post->title }}</h1>

			<div class="meta flex text-sm text-gray-500 mt-5 space-x-5 justify-center">
				<div>
					<span>Category:</span>
					<span>{{ $post->category }}</span>
				</div>
				<div>
					<span>Created at</span>
					<span>{{ $post->created_at }}</span>
				</div>
				<div>
					<span>Last edited at</span>
					<span>{{ $post->updated_at }}</span>
				</div>
			</div>

			<div class="mt-20 leading-7 post-content font-base">
			    {!! $post->content !!}
			</div>
		</div>
    </div>
</x-layout>
