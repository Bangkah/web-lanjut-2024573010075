<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/calculator',[CalculatorController::class, 'index']);
Route::post('/calculator',[CalculatorController::class, 'calculate'])->name('calculator.calculate');



         