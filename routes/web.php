<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ServiceController;


Route::resource('profiles', ProfileController::class);
Route::resource('apartments', ApartmentController::class);
Route::resource('services', ServiceController::class);
Route::get('/', function () {
    return view('welcome');
});

