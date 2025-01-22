<?php

//vendor routes

use App\Http\Controllers\VendorDashboardController;
use App\Http\Controllers\VendorProfileController;
use App\Http\Controllers\VendorServicesController;
use Illuminate\Support\Facades\Route;



Route::get('dashboard', [VendorDashboardController::class, 'dashboard'])->name('dashboard');

Route::get('profile', [VendorProfileController::class,'index'])->name('profile');

Route::post('profile/update', [VendorProfileController::class, 'profileUpdate'])->name('profile.update');

Route::post('profile/update/password', [VendorProfileController::class, 'updatePassword'])->name('password.update');


Route::resource('services', VendorServicesController::class);


