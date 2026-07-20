<?php

use Illuminate\Support\Facades\Route;

Route::view('/admin', 'welcome')->name('admin');

Route::view('/stories', 'stories')->name('stories');

Route::view('/', 'home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
