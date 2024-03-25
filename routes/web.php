<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


//NO AUTH ROUTES
Route::get('/',[DashboardController::class,'welcome'] );

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    //AUTH ROUTES
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
