<?php

use function Livewire\Volt\{state};
use function Livewire\Volt\{computed};

use App\Models\Record;

state(['mid']); // Model ID

$media = computed(function () {
    return Record::find($this->mid)->getMedia('SVG');
});


?>

<div class="flex min-h-screen items-center justify-center">

    <div class="overflow-x-auto w-full">

        <p class="mb-2">Customer Drawings</p>

        <table class="min-w-full bg-white shadow-md ">

            <thead>
            <tr class="bg-gray-200 text-gray-700">
                <th class="py-3 px-4 text-left">Filename</th>
                <th class="py-3 px-4 text-left">MIME Type</th>
                <th class="py-3 px-4 text-left">Size</th>
                <th class="py-3 px-4 text-left">Actions</th>
            </tr>
            </thead>

            <tbody class="text-blue-gray-900">

                @foreach ($this->media as $m)

                    <tr class="border-b border-blue-gray-200">

                        <td class="py-1 px-4">
                            <button class="text-blue-800 font-bold py-2 rounded inline-flex items-center">
                                <x-carbon-document class="w-5 h-5 me-2" /> {{ $m->file_name }}
                                <span>{{ $m->file_name }}</span>
                            </button>
                        </td>

                        <td class="py-1 px-4">{{ $m->mime_type }}</td>
                        <td class="py-1 px-4">{{ $m->size }}</td>
                        <td class="py-1 px-4">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-800">
                                <x-carbon-trash-can class="w-5 h-5 me-2 text-red-500" />
                            </a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

    </div>

</div>
