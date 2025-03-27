<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApartmentController;


Route::resource('profiles', ProfileController::class);
Route::resource('apartments', ApartmentController::class);
Route::get('/', function () {
    return view('welcome');
});

