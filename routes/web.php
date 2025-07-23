<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ProtocolController;
use App\Http\Controllers\ReadjustmentController;
use App\Http\Controllers\VisitController;

Route::resource('profiles', ProfileController::class);
Route::resource('apartments', ApartmentController::class);
Route::resource('services', ServiceController::class);
Route::resource('areas', AreaController::class);
Route::resource('statuses', StatusController::class);
Route::resource('feedbacks', FeedbackController::class);
Route::resource('providers', ProviderController::class);
Route::resource('types', TypeController::class);
Route::resource('users', UserController::class);
Route::resource('contracts', ContractController::class);
Route::resource('protocols', ProtocolController::class);
Route::resource('readjustments', ReadjustmentController::class);
Route::resource('visits', VisitController::class);

Route::get('/', function () {
    return view('welcome');
});

