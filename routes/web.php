<?php

use Illuminate\Support\Facades\Route;
use App\Models\modalidades;





Route::get('/', function () {
    return view('index', ['modalidades'=>modalidades::all()]);
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

Route::resource('modalidades', modalidadesController::class);
require __DIR__.'/auth.php';

