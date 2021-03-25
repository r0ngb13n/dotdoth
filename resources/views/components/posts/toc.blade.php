<div {{ $attributes->merge(['class' => "fixed"]) }} x-data="makeData()">
    <div class="table-of-contents w-96 sticky top-0 right-0 pt-5 pl-5">
        <ol class="list-decimal list-inside">
            <template x-for="item in items" :key="item.id">
                <li class="transition text-gray-300 hover:text-gray-500">
                    <a x-bind:href="`#${item.id}`" x-text="item.label" class="transition text-gray-300 hover:no-underline hover:text-gray-500"></a>
                </li>
            </template>
        </ol>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <script>
        function makeData() {
            const elements = document.querySelectorAll('h2');
            const items = [...elements].filter(function (ele) {
                return ele.getAttribute('id');
            }).map(function (ele) {
                return {
                    id: ele.getAttribute('id'),
                    label: ele.textContent
                };
            });
            return {
                items: items
            };
        }
    </script>
@endpush

