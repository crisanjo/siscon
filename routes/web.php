<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\StatusController;

Route::resource('profiles', ProfileController::class);
Route::resource('apartments', ApartmentController::class);
Route::resource('services', ServiceController::class);
Route::resource('areas', AreaController::class);
Route::resource('statuses', StatusController::class);
Route::get('/', function () {
    return view('welcome');
});

