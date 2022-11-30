<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->middleware(['auth'])->name('index');

Route::get('/contacts', function () {
    return view('contacts');
})->middleware(['auth'])->name('contacts');

Route::get('/about-coach', function () {
    return view('about-coach');
})->middleware(['auth'])->name('about-coach');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
