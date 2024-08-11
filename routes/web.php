<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\CreateRecords;
use App\Livewire\Welcome;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', Welcome::class);

Route::get('/create_record', CreateRecords::class);

