<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AreaController;

Route::resource('profiles', ProfileController::class);
Route::resource('apartments', ApartmentController::class);
Route::resource('services', ServiceController::class);
Route::resource('areas', AreaController::class);
Route::get('/', function () {
    return view('welcome');
});

