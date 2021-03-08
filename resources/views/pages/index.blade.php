<x-layout>

	<div class="relative">
    	<div class="relative max-w-7xl mx-auto">
	      <div class="text-center">
	        <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
	          From the blog
	        </h2>
	        <p class="mt-3 max-w-2xl mx-auto text-gray-500 sm:mt-4">
	          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
	        </p>
	      </div>
	      <div class="mt-12 max-w-lg mx-auto grid gap-10 lg:grid-cols-2 lg:max-w-none">
			@foreach ($posts as $post)
				<x-blocks.blog :post="$post" />
			@endforeach
	      </div>
	    </div>
	  </div>

</x-layout>
