@php
	$categoryNames = ['Bài viết', 'Đánh giá', 'Bài Dịch', 'Công cụ'];
@endphp
<div>
	<!-- main menu -->
	<div class="flex flex-wrap items-center justify-between space-x-3 sm:space-x-10 relative" x-data="{open: false}">

        <div>
            <a href="/" class="text-lg" title="home page">
                <x-logo class="w-16 h-16 sm:w-16 sm:h-16" />
            </a>
        </div>

        <div class="absolute right-0 top-0 h-screen w-1/2 bg-white flex flex-col px-6 pt-24 z-10 space-y-5 content-right transition sm:flex sm:relative sm:h-auto sm:w-auto sm:flex-row sm:h-auto sm:bg-transparent sm:pt-5 sm:px-0 sm:flex-grow sm:justify-start sm:items-center sm:content-center sm:space-y-0" :class="{'hidden': open === false}">
            @foreach ($categoryNames as $categoryName)
                <x-category-href :name="$categoryName"
                    class="text-sm sm:text-lg uppercase sm:tracking-widest sm:mr-12 hover:underline text-right sm:text-center" />
            @endforeach
        </div>

        <div class="mobile-menu sm:hidden absolute right-0 top-0 mt-7 mr-5 z-20" @click="open = !open">
            <svg x-show="!open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            <svg x-show="open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </div>
	</div>

	<hr class="border sm:mt-0">
</div>
