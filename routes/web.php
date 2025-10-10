<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AirParcelController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/airparcel', [AirParcelController::class, 'AirParcel']);
