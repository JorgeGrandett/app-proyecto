<?php

use Illuminate\Support\Facades\Route;

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/drivers', 'drivers')->name('drivers');
Route::view('/', 'index')->name('index');
Route::view('/rutas', 'rutas')->name('rutas');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
