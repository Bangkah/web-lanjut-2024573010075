<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function hello() 
    {
        $name = 'laravel Learner';
        return view('hello', ['name' => $name]);
    }

    public function greet($name)
    {
        return view('greet', ['name' => ucfirst($name)]);
    }

    public function search(Request $request)
    {
        $keyboard = $request -> query('q', 'none');
        return view ('search', ['keyboard' => $keyboard]);
    }
}
