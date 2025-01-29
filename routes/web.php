<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminAuthController;


// Admin login routes
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('/monitoring', [PageController::class, 'monitoring'])->name('monitoring');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/promotive', [PageController::class, 'promotive'])->name('promotive');
Route::get('/preventive', [PageController::class, 'preventive'])->name('preventive');
Route::get('/diagnostic', [PageController::class, 'diagnostic'])->name('diagnostic');



