<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        return view('calculator');
    }

    public function calculate(Request $request){

        $validate = $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
            'operator' => 'required|in:add,sub,mul,div',

        ]);

        $result = match ($validate['operator']){
            'add' => $validate['number1'] + $validate['number2'],
            'sub' => $validate['number1'] - $validate['number2'],
            'mul' => $validate['number1'] * $validate['number2'],
            'div' => $validate['number2'] != 0 ? ($validate['number1'] / $validate['number2']) : 'error division by 0'
        };

        return view('calculator',[
            'result' => $result,
            'number1' => $validate['number1'],
            'number2' => $validate['number2'],
            'operator' => $validate['operator'],

        ]);
    }
}
