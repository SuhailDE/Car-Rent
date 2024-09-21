<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Frontend\CarController as FrontendCarController;
use App\Http\Controllers\Frontend\RentalController as FrontendRentalController;

Route::prefix('admin')->group(function () {
    Route::resource('cars', CarController::class);
    Route::resource('rentals', RentalController::class);
    Route::resource('customers', CustomerController::class);
});

// Frontend routes
Route::get('/', [FrontendCarController::class, 'index']);
Route::get('/book/{id}', [FrontendRentalController::class, 'create']);
