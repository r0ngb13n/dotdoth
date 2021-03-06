@php
	$categoryNames = ['Bài viết', 'Đánh giá', 'Bài Dịch', 'Công cụ'];
@endphp
<div>
	<!-- main menu -->
	<div class="flex flex-wrap items-center justify-between space-x-3 md:space-x-4 sm:space-x-10 relative navlayout" x-data="{open: false}">
        <div>
            <a href="/" class="text-lg" title="Trang Chủ">
                <x-logo class="w-12 h-12 sm:w-12 sm:h-12 mt-2 sm:mt-0" />
            </a>
        </div>

        <div class="fixed pr-5 right-0 top-0 w-1/2 h-12 bg-white shadow-lg overflow-hidden
            bg-white flex flex-col pt-24 z-10 content-right transition hidden
            sm:bg-transparent sm:shadow-none sm:flex sm:relative sm:h-auto sm:w-auto sm:flex-row
            sm:h-auto sm:bg-transparent sm:pt-8 sm:px-5 sm:flex-grow sm:justify-start sm:items-center
            sm:content-center sm:space-y-0
            md:mt-0
            "
        	:class="{'hidden': open === false}">
            @foreach ($categoryNames as $categoryName)
                <x-category-href :name="$categoryName"
                    class="text-xl sm:text-base uppercase md:mr-7 sm:tracking-widest sm:mr-12 hover:underline text-right sm:text-center" />
            @endforeach
            <div @click="open = false" class="absolute top-0 right-0 mr-5 mt-7 sm:hidden">
            	<svg x-show="open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        	</div>
        </div>

        <div class="mobile-menu sm:hidden absolute right-0 top-0 mt-7 mr-5" @click="open = true">
        	<svg x-show="!open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </div>
	</div>

	<hr class="border sm:mt-0">
</div>
