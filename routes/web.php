<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\CreateRecords;
use App\Livewire\Welcome;

use App\Livewire\GenericModelActions;
use App\Livewire\GenericModelView;
use App\Livewire\GenericModelList;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', Welcome::class);
Route::get('/create_record', CreateRecords::class);
// Route::get('/form_record', RecordForm::class);
// Route::get('/product_view', ProductView::class);







Route::get('/form_generic/{id?}', GenericModelActions::class);
Route::get('/view_generic/{id}', GenericModelView::class);
Route::get('/list_generic', GenericModelList::class);

