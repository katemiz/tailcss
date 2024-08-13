<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Str;
use App\Models\Record;


class RecordForm extends Component
{

    public $uid = false;

    public $p1 = 'dfndfjkgnfjg';
    public $p2 = 'çvmkfmerferjnf';
    public $p3 = 'dnlwejkdnd';




    public function render()
    {

        return view('product-form');
    }









    public function storeUpdateItem () {


        if ( $this->uid ) {
            $this->update();


        } else {

            $this->store();
        }

        // ATTACHMENTS, TRIGGER ATTACHMENT COMPONENT
        $this->dispatch('triggerAttachment',modelId: $this->uid);

    }






    public function store() {

        $props = [
            'p1' => $this->p1,
            'p2' => $this->p2,
            'p3' => $this->p3,
        ];

        return true;

        dd($props);


        $record = Record::create($props);


        $this->uid = $record->id;




        $record->addMedia(storage_path('demo/dds.svg'))
            ->toMediaCollection('SVG');


        $record->addMedia(storage_path('demo/dms.svg'))
            ->toMediaCollection('SVG');



        $this->dispatch('triggerAttachment', modelId: $this->uid);
        $this->action = 'VIEW';




    }







}


















