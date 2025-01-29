<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DiagnosticController;


// Authentication
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/promotive', [PageController::class, 'promotive'])->name('promotive');
Route::get('/preventive', [PageController::class, 'preventive'])->name('preventive');
Route::get('/monitoring', [PageController::class, 'monitoring'])->name('monitoring');
Route::get('/diagnostic', [PageController::class, 'diagnostic'])->name('diagnostic');
Route::post('/diagnostic', [DiagnosticController::class, 'store'])->name('diagnostic.store');



