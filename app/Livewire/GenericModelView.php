<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\GenericModel;


class GenericModelView extends Component
{

    public $uid;

    public $p1;
    public $p2;
    public $p3;





    public function render()
    {


        $this->setProps();


        return view('view-generic');
    }


    public function setProps()
    {

        $this->uid = request('id');

        $item = GenericModel::find($this->uid);


        $this->p1 = $item->p1;
        $this->p2 = $item->p2;
        $this->p3 = $item->p3;


    }



}
