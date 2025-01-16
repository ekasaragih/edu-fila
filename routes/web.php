<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/promotive', [PageController::class, 'promotive'])->name('promotive');
Route::get('/preventive', [PageController::class, 'preventive'])->name('preventive');
Route::get('/diagnostic', [PageController::class, 'diagnostic'])->name('diagnostic');
Route::get('/monitoring', [PageController::class, 'monitoring'])->name('monitoring');