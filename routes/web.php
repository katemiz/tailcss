<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\CreateRecords;
use App\Livewire\RecordForm;
use App\Livewire\Welcome;
use App\Livewire\ProductView;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', Welcome::class);
Route::get('/create_record', CreateRecords::class);
Route::get('/form_record', RecordForm::class);
Route::get('/product_view', ProductView::class);


