<?php

use App\Http\Controllers\ClickController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;


//NO AUTH ROUTES
Route::get('/',[DashboardController::class,'welcome'] );

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    //AUTH ROUTES
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/links',LinkController::class);
    Route::resource('/clicks',ClickController::class);
});
