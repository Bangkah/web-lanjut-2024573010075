<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasarBladeController;
use App\Http\Controllers\LogicController;

Route::get('/logic', [LogicController::class, 'show']);
Route::get('/dasar', [DasarBladeController::class, 'showData']);
use App\Http\Controllers\PageController;

Route::get('/admin', [PageController::class, 'admin']);
Route::get('/user', [PageController::class, 'user']);

Route::get('/', function () {
    return view('welcome');
});

