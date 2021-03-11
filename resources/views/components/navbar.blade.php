@php
	$menuItems = [
		['name' => 'Trang chủ', 'url' => '/'],
		['name' => 'BÀI VIẾT', 'url' => '#'],
		['name' => 'ĐÁNH GIÁ', 'url' => '#'],
	];
	$categoryNames = ['Câu chuyện', 'Pha cà phê', 'Sản xuất'];
@endphp
<div>
	<!-- main menu -->
	<div class="flex flex-wrap items-end space-x-3 sm:space-x-10">

		<a href="/" class="text-lg" title="home page">
			<x-logo />
		</a>
		@foreach ($menuItems as $menuItem)
			<a href="{{ $menuItem['url'] }}" class="text-sm sm:text-lg uppercase sm:tracking-widest text-cyan-500 hover:underline">{{ $menuItem['name'] }}</a>
		@endforeach
	</div>

	<hr class="border bg-gray-500 sm:mt-5">

	<!-- sub menu -->
	<div class="flex space-x-10 sm:mt-5">
		@foreach ($categoryNames as $categoryName)
			<x-category-href
				:name="$categoryName"
				class="text-sm sm:text-lg uppercase sm:tracking-widest text-cyan-500 hover:underline" />
		@endforeach
	</div>

</div>
