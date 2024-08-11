<?php

use function Livewire\Volt\{state};
use function Livewire\Volt\{computed};

state(['type','neutral']); // success,fail,warning,info,neutral
state(['message']); // success,fail,warning,info,neutral


$cssadd = computed(function () {

    switch ($this->type) {
        case 'success':
            return "text-green-800 bg-green-50";
            break;

        case 'fail':
            return "text-red-800 bg-red-50";
            break;

        case 'warning':
            return "text-yellow-800 bg-yellow-50";
            break;

        case 'info':
            return "text-blue-800 bg-blue-50";
            break;

        default:
        case 'neutral':
            return "text-gray-800 bg-gray-50";
            break;
    }

});



?>












<div class="p-4 mb-4 text-sm rounded-lg {{ $this->cssadd }}" role="alert">
   {{ $message }}
</div>

