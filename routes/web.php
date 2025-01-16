<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/promotive', function () {
    return view('feature.promotive'); // Create a view for promotive
})->name('promotive');

Route::get('/preventive', function () {
    return view('feature.preventive'); // Create a view for preventive
})->name('preventive');

Route::get('/diagnostic', function () {
    return view('feature.diagnostic'); // Create a view for diagnostic
})->name('diagnostic');

Route::get('/monitoring', function () {
    return view('feature.monitoring'); // Create a view for monitoring
})->name('monitoring');