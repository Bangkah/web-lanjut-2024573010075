<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route:: controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about' , 'about') ->name('about');
    Route::get('/contact', 'contact')->name('contact');
});
