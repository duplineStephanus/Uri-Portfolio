<?php

use Illuminate\Support\Facades\Route;

Route::view('/admin', 'admin')->name('admin');

Route::view('/stories', 'story-show')->name('story-show');

Route::view('/', 'home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
