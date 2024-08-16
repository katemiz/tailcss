<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Str;
use App\Models\GenericModel;


class GenericModelActions extends Component
{

    public $uid = false;

    public $p1;
    public $p2;
    public $p3;

    public $media = [];


    public function render()
    {







        return view('form-generic',[
            'item' => $this->getProps()
        ]);
    }









    public function storeUpdateItem () {

        if ( $this->uid ) {
            $this->update();
        } else {
            $this->store();
        }
    }






    public function store() {

        $props = [
            'p1' => $this->p1,
            'p2' => $this->p2,
            'p3' => $this->p3,
        ];

        $record = GenericModel::create($props);

        $this->dispatch('triggerAttachment', mid: $record->id,collection:"SVG",model_name:"GenericModel" );


        // redirect('/details/Detail/view/'.$current_item->is_mirror_of);
        // return true;



    }





    public function update() {

        $props = [
            'p1' => $this->p1,
            'p2' => $this->p2,
            'p3' => $this->p3,
        ];

        GenericModel::whereId($this->uid)->update($props);

        $this->dispatch('triggerAttachment', mid: $this->uid,collection:"SVG",model_name:"GenericModel" );


        // redirect('/details/Detail/view/'.$current_item->is_mirror_of);
        // return true;



    }





    public function getProps() {

        if (request('id')) {

            $this->uid = request('id');

            $kayit = GenericModel::find(request('id'));

            $this->p1 = $kayit->p1;
            $this->p2 = $kayit->p2;
            $this->p3 = $kayit->p3;

            $this->media = $kayit->getMedia('SVG');

            return $kayit;
        }
        
        return false;
    }




}


















