<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Str;
use App\Models\Record;


class CreateRecords extends Component
{
    public function render()
    {
        $this->store();
        return view('livewire.create-records');
    }





    public function store() {

        $props = [
            'p1' => Str::random(40),
            'p2' => Str::random(40),
            'p3' => Str::random(40),
        ];

        // dd($props);

        $record = Record::create($props);


        $record->addMedia(storage_path('demo/oiydw.svg'))
            ->toMediaCollection('SVG');


        $record->addMedia(storage_path('demo/dms.svg'))
            ->toMediaCollection('SVG');

    }






}


















