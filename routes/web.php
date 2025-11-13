<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AirParcelController;
use App\Http\Controllers\SeaParcelController;
use App\Http\Controllers\RoadParcelController;
use App\Http\Controllers\RailParcelController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\ServicesController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/about',[AboutController::class, 'about'])->name('about');
Route::get('/services',[ServicesController::class, 'services'])->name('services');
Route::get('/airparcel',[AirParcelController::class, 'AirParcel'])->name('airparcel');
Route::get('/seaparcel', [SeaParcelController::class, 'SeaParcel'])->name('seaparcel');
Route::get('/roadparcel', [RoadParcelController::class, 'RoadParcel'])->name('roadparcel');
Route::get('/railparcel', [RailParcelController::class, 'RailParcel'])->name('railparcel');
Route::get('/contact', [ContactUsController::class, 'ContactUs'])->name('contact us');
Route::get('/tracking', [TrackingController::class, 'Tracking'])->name('tracking');
Route::get('/services', [ServicesController::class, 'Services'])->name('services');
