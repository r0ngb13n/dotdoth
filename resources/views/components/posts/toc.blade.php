<div {{ $attributes->merge(['class' => "fixed"]) }} x-data="makeData()">
    <div class="table-of-contents w-72 sticky top-0 right-0 ml-5 pt-5 pl-5">
        <ol class="list-decimal list-inside"  style="list-style-type:none;">
            <template x-for="item in items" :key="item.id">                                        
                <li class="transition text-gray-300 hover:text-gray-500">
                    <a x-bind:href="`#${item.id}`" x-text="item.label" class=" text-gray-300 hover:text-gray-500"></a>                   
                    <template x-if="item.children.length">
                        <ul class="list-decimal list-inside text-sm" style="list-style-type: none;">
                            <template x-for="subItem in item.children" :key="subItem.id">
                                <li class="transition text-gray-300 hover:text-gray-500">
                                    <a x-bind:href="`#${subItem.id}`" x-text="subItem.label" class=" text-gray-300 hover:text-gray-500"></a>                   
                                </li>
                            </template>
                        </ul>
                    </template>
                </li>                
            </template>
        </ol>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <script>
        function makeData() {        
            const items = [...document.querySelectorAll('h2, h3')].map(function (ele) {
                return {
                    id: ele.getAttribute('id'),
                    label: ele.textContent,
                    level: parseLevel(ele.nodeName),
                    children: []
                };
            });
            
            let tree = [];            
            for (let i = 0; i < items.length; i++) {
                let item = items[i];

                if (item.level === 2) {
                    tree.push(item);
                }

                if (item.level === 3) {
                    if (item.id === null ){ //skip khi không thấy id
                        continue;
                    }
                    tree[tree.length - 1].children.push(item);                  
                }
            }

            return {items: tree};
        }

        function parseLevel(heading) {
            return parseInt(heading.substr(1,1));
        }
    </script>
@endpush

