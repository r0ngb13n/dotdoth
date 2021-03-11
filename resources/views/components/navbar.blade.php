@php
	$categoryNames = ['Câu chuyện', 'Pha cà phê', 'Sản xuất'];
@endphp
<div>
	<!-- main menu -->
	<div class="flex items-end space-x-10">
		@php
			$menuItems = [
				['name' => 'Trang chủ', 'url' => '/'],
				['name' => 'BÀI VIẾT', 'url' => '#'],
				['name' => 'ĐÁNH GIÁ', 'url' => '#'],
				['name' => 'DỊCH', 'url' => '#'],
				['name' => 'CÔNG CỤ', 'url' => '#'],
			];
		@endphp

		<a href="/" class="text-lg uppercase tracking-widest" title="home page">
			<x-logo />
		</a>
		@foreach ($menuItems as $menuItem)
			<a href="{{ $menuItem['url'] }}" class="text-lg uppercase tracking-widest text-cyan-500 hover:underline">{{ $menuItem['name'] }}</a>
		@endforeach
	</div>

	<hr class="border bg-gray-500 mt-5">

	<!-- sub menu -->
	<div class="flex space-x-10 mt-5">
		@foreach ($categoryNames as $categoryName)
			<x-category-href
				:name="$categoryName"
				class="text-lg uppercase tracking-widest text-cyan-500 hover:underline" />
		@endforeach
	</div>

</div>
