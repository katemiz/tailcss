<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;
use App\Livewire\FileList;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;


use Illuminate\Support\Facades\Log;


use App\Models\GenericModel;



class FileUpload extends Component
{
    use WithFileUploads;

    // public $idAttach;
    // public $hasForm = false;
    // public $model;
    // public $modelId;
    public $isMultiple = false;
    // public $tag = false;
    // public $canEdit = false;

    public $dosyalar = [];


    public function render()
    {
        return view('livewire.file-upload');
    }


    public function removeFile($fileToRemove) {

        foreach ($this->dosyalar as $key => $dosya) {
            if ($dosya->getClientOriginalName() == $fileToRemove) {
                unset($this->dosyalar[$key]);
            }
        }
    }


    #[On('triggerAttachment')]
    public function uploadAttach(Int $mid,String $collection, String $model_name) {

        $model = $this->setModel($model_name,$mid);

        foreach ($this->dosyalar as $dosya) {
            $model->addMedia($dosya)->toMediaCollection($collection);
        }
    }



    public function setModel($model_name,$mid) {


        switch ($model_name) {

            default:
            case 'GenericModel':
                return GenericModel::find($mid);
                break;

        }

        return false;
    }






}
