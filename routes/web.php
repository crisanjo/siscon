<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;


Route::resource('apartments', ApartmentController::class);
Route::get('/', function () {
    return view('welcome');
});

