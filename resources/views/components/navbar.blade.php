<div class="flex space-x-5">
	@php
		$menuItems = [
			['name' => 'Home', 'url' => '/'],
			['name' => 'Reviews', 'url' => '#'],
			['name' => 'Tools', 'url' => '#'],
		];
	@endphp

	@foreach ($menuItems as $menuItem)
		<a href="{{ $menuItem['url'] }}" class="text-cyan-500 hover:underline">{{ $menuItem['name'] }}</a>
	@endforeach
</div>
