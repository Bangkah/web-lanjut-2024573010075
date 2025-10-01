<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [DemoController::class, 'hello']);
Route::get('/greet/{name', [DemoController::class, 'greet']);
Route::get('/search', [DemoController::class, 'search']);