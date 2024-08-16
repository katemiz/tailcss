<section class="container mx-auto px-4 bg-red-300">

    <livewire:header type="Hero" title="Generic View Page" subtitle="Generic View Detail Subtitle"/>




    <div class="flex p-8 bg-white">
        <div class="w-1/2 bg-amber-300">

            <div class="inline-flex rounded-lg border border-gray-100 bg-gray-100 gap-4">
                <x-carbon-add class="w-6 h-8 bg-red-500"/>

                <button class="text-blue-800 py-0 rounded inline-flex items-center bg-red-300">
                    <x-carbon-show-data-cards class="w-5 h-5 me-2" />
                    <span>List All</span>
                </button>
            </div>

        </div>
        <div class="w-1/2 text-right bg-green-300">dddd</div>
    </div>

    <livewire:file-list mid="{{$uid}}" model_name="GenericModel" collection="SVG" label="Customer Drawings"/>


    <livewire:info-box mid="{{$uid}}"/>


</section>
