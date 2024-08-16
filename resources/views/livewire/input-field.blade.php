<?php


use function Livewire\Volt\{state};
use function Livewire\Volt\{computed};



state(['label' => 'Input Label']); 
state(['variable']); 
state(['is_required' => false]); 
state(['placeholder' => "Placeholder for input field"]); 




?>




<div>
    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <input type="text" id="id_{{$variable}}" wire:model='{{$variable}}' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $placeholder }}" {{  $is_required ? 'required' : ''}} />
</div>
