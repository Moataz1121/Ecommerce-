<?php

use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use App\Http\Controllers\AdminAuth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
   
    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('moataz');

 
});

Route::middleware('auth')->group(function () {
   
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
