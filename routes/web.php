<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Middleware\LogAccess; 

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/contact', 'contact')->name('contact')->middleware(LogAccess::class);
});


