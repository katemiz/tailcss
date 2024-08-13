



<section class="container mx-auto px-4 bg-red-300">



    <livewire:header type="Hero" title="Product Form" subtitle="Add New Product"/>




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



    <livewire:file-upload model_name="Record" mid="3" isMultiple="{{true}}" />






<div class="columns">

    <div class="column is-narrow">
        <p class="is-size-7">ADDED</p>
        <p>csenyilmaz@masttech.com</p>
        <p>2024-07-11 08:51:15</p>
    </div>
    <div class="column is-narrow">
        <p class="is-size-7">MODIFED</p>
        <p>csenyilmaz@masttech.com</p>
        <p>2024-07-11 08:51:15</p>
    </div>

    <div class="column">
        <p class="is-size-7">APPROVED</p>
        <p>csenyilmaz@masttech.com</p>
        <p>2024-07-11 08:51:15</p>
    </div>

    <div class="column is-narrow has-text-right">
        <p class="is-size-7">STATUS</p>
        <p class="has-text-weight-bold ">WIP</p>
    </div>

    <div class="column is-narrow has-text-right">
        <div class="card-image ">
            <figure class="image is-64x64 is-inline-block">
                <!--?xml version="1.0" encoding="UTF-8"?-->
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="48" height="48" viewBox="0 0 48 48"><rect x="0" y="0" width="48" height="48" fill="#ffffff"></rect><g transform="scale(2.207)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M9 0L9 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L7 9L7 10L6 10L6 11L7 11L7 10L8 10L8 8L10 8L10 10L9 10L9 11L8 11L8 12L5 12L5 10L4 10L4 12L5 12L5 13L7 13L7 14L5 14L5 15L4 15L4 16L3 16L3 17L4 17L4 18L5 18L5 17L7 17L7 18L6 18L6 19L8 19L8 20L4 20L4 19L3 19L3 18L2 18L2 17L1 17L1 18L0 18L0 19L1 19L1 18L2 18L2 19L3 19L3 20L2 20L2 21L8 21L8 23L9 23L9 25L8 25L8 26L9 26L9 27L8 27L8 29L9 29L9 28L11 28L11 29L12 29L12 25L13 25L13 26L15 26L15 24L16 24L16 25L19 25L19 22L20 22L20 26L19 26L19 27L17 27L17 26L16 26L16 27L13 27L13 28L14 28L14 29L15 29L15 28L19 28L19 29L21 29L21 28L23 28L23 29L24 29L24 28L23 28L23 27L21 27L21 25L22 25L22 26L24 26L24 27L27 27L27 29L28 29L28 27L29 27L29 26L28 26L28 22L29 22L29 21L27 21L27 20L29 20L29 17L28 17L28 15L29 15L29 14L25 14L25 16L26 16L26 15L27 15L27 17L28 17L28 18L27 18L27 20L26 20L26 22L27 22L27 23L25 23L25 20L24 20L24 19L25 19L25 18L26 18L26 17L25 17L25 18L24 18L24 15L23 15L23 14L22 14L22 13L24 13L24 11L26 11L26 12L25 12L25 13L26 13L26 12L27 12L27 13L29 13L29 12L28 12L28 10L29 10L29 9L28 9L28 8L26 8L26 9L25 9L25 8L22 8L22 10L18 10L18 9L17 9L17 8L18 8L18 7L19 7L19 9L20 9L20 8L21 8L21 6L20 6L20 5L18 5L18 7L17 7L17 6L16 6L16 4L15 4L15 3L16 3L16 0L15 0L15 1L13 1L13 0L12 0L12 1L11 1L11 2L9 2L9 1L10 1L10 0ZM18 0L18 1L17 1L17 3L18 3L18 4L20 4L20 3L21 3L21 2L20 2L20 3L18 3L18 2L19 2L19 1L20 1L20 0ZM13 2L13 3L12 3L12 4L9 4L9 5L10 5L10 6L9 6L9 7L10 7L10 8L11 8L11 9L12 9L12 10L11 10L11 11L9 11L9 13L8 13L8 14L7 14L7 15L5 15L5 16L4 16L4 17L5 17L5 16L7 16L7 15L8 15L8 16L9 16L9 17L10 17L10 16L12 16L12 17L11 17L11 19L12 19L12 20L14 20L14 21L15 21L15 22L13 22L13 23L16 23L16 21L19 21L19 19L20 19L20 18L21 18L21 20L23 20L23 19L22 19L22 18L21 18L21 17L19 17L19 16L18 16L18 18L17 18L17 19L16 19L16 17L17 17L17 14L19 14L19 15L20 15L20 14L19 14L19 13L21 13L21 11L20 11L20 12L18 12L18 10L17 10L17 11L16 11L16 9L14 9L14 13L13 13L13 14L14 14L14 13L15 13L15 15L16 15L16 16L15 16L15 18L14 18L14 16L12 16L12 14L9 14L9 13L12 13L12 12L13 12L13 8L14 8L14 6L13 6L13 5L14 5L14 3L15 3L15 2ZM11 5L11 6L10 6L10 7L11 7L11 6L12 6L12 8L13 8L13 6L12 6L12 5ZM15 6L15 7L16 7L16 8L17 8L17 7L16 7L16 6ZM19 6L19 7L20 7L20 6ZM0 8L0 9L2 9L2 10L1 10L1 11L0 11L0 12L1 12L1 13L0 13L0 15L1 15L1 16L2 16L2 15L1 15L1 14L3 14L3 13L2 13L2 12L3 12L3 9L4 9L4 8L3 8L3 9L2 9L2 8ZM23 9L23 10L22 10L22 12L23 12L23 11L24 11L24 10L25 10L25 9ZM26 9L26 10L28 10L28 9ZM1 11L1 12L2 12L2 11ZM15 11L15 13L18 13L18 12L16 12L16 11ZM9 15L9 16L10 16L10 15ZM21 15L21 16L22 16L22 17L23 17L23 15ZM9 18L9 20L8 20L8 21L9 21L9 22L11 22L11 20L10 20L10 18ZM13 18L13 19L14 19L14 20L16 20L16 19L14 19L14 18ZM17 19L17 20L18 20L18 19ZM0 20L0 21L1 21L1 20ZM21 21L21 24L24 24L24 21ZM22 22L22 23L23 23L23 22ZM10 23L10 25L11 25L11 23ZM17 23L17 24L18 24L18 23ZM25 24L25 25L27 25L27 24ZM27 26L27 27L28 27L28 26ZM25 28L25 29L26 29L26 28ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z" fill="#000000"></path></g></g></svg>

            </figure>
        </div>
    </div>

</div>



</section>





<section class="section container">

    <script src="{{ asset('/ckeditor5/ckeditor.js') }}"></script>

    <header class="mb-6">
        <h1 class="title has-text-weight-light is-size-1">Standard Families</h1>
        <h2 class="subtitle has-text-weight-light">{{ $uid ? 'Update Standard Family Attribues': 'Add New Standard Family' }}</h2>
    </header>

    @if ($uid)
    <p class="title has-text-weight-light is-size-2">{{ $standard_number }}</p>
    @endif


    <form method="POST" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label class="label">Standard Number</label>
            <div class="control">
                <input class="input" type="text" wire:model='standard_number' placeholder="eg DIN 912 ...">
            </div>

            @error('standard_number')
                <div class="notification is-danger is-light is-size-7 p-1 mt-1">{{ $message }}</div>
            @enderror

        </div>


        <div class="field">
            <label class="label">Standard Description</label>
            <div class="control">
                <input class="input" type="text" wire:model='description' placeholder="eg Hexagon Socket Head Shoulder Screws ...">
            </div>

            @error('description')
                <div class="notification is-danger is-light is-size-7 p-1 mt-1">{{ $message }}</div>
            @enderror

        </div>


        <livewire:ck-editor
            wire:model="remarks"
            cktype="STANDARD"
            label='Document Synopsis / Notes / Remarks'
            placeholder='Document Synopsis / Notes / Remarks ....'
            :content="$remarks"/>

        @error('remarks')
            <div class="notification is-danger is-light is-size-7 p-1 mt-1">{{ $message }}</div>
        @enderror

        <div class="field block">
            <label class="label">Attach Original Document</label>

            @livewire('file-list', [
                'canDelete' => true,
                'model' => 'Standard',
                'modelId' => $uid,
                'tag' => 'STD',                          // Any tag other than model name
            ])

            <div class="control">
                @livewire('file-upload', [
                    'model' => 'Standard',
                    'modelId' => $uid ? $uid : false,
                    'isMultiple'=> true,                   // can multiple files be selected
                    'tag' => 'STD'                         // Any tag other than model name
                ])
            </div>
        </div>


        <div class="buttons is-right">
            <button wire:click.prevent="storeUpdateItem()" class="button is-dark">
                {{ $uid ? 'Update Standard Family' : 'Add New Standard Family'}}
            </button>
        </div>




    </form>

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}


</section>
