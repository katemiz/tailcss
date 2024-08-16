<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;
use Livewire\Attributes\On;


use Illuminate\Support\Facades\Log;


use App\Models\GenericModel;

use Spatie\MediaLibrary\MediaCollections\Models\Media;



class FileList extends Component
{

    public $mid;
    public $label;
    public $model;
    public $model_name;
    public $collection;
    public $media = [];

    public $media_id;


    public function render()
    {
        $this->setModel();
        $this->media = $this->model->getMedia($this->collection);
        return view('livewire.file-list');
    }




    public function setModel() {

        switch ($this->model_name) {

            default:
            case 'GenericModel':



                $this->model = GenericModel::find($this->mid);
                break;

        }



        return false;
    }


    public function triggerMediaDelete($idMedia) {

        $this->media_id = $idMedia;
        $this->dispatch('deleteConfirm', media_id:$idMedia);
    }








    #[On('deleteConfirmed')]
    public function deleteMedia() {

        $media = $this->model->media()->findOrFail($this->media_id);
        $media->delete();


        $this->dispatch('mediaDeleted');

    }






    public function downloadMedia(Int $idMedia) {


        $media = $this->model->getMedia('*');


        foreach ($media as $m) {

            if ($m->id == $idMedia) {

                return $m;

                // $url = $m->getFullUrl();

            }
        }

        // dd($url);

        // $this->media_id = $idMedia;
        // $this->dispatch('deleteConfirm', media_id:$idMedia);
    }














}
