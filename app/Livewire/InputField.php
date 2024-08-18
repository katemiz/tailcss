<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;
use App\Livewire\FileList;
use Livewire\Attributes\On;


use Illuminate\Support\Facades\Log;






class InputField extends Component
{

    public $label = 'Input Label';
    public $placeholder = 'Default Placeholder';
    public $is_required = false;



    #[Modelable]
    public $variable = '';


    public function render()
    {
        return view('livewire.input-field');
    }








}
