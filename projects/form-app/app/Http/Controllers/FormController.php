<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function handleForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'age' => 'required|integer|min:1',
            'password' => 'required|min:6',
            'gender' => 'required',
            'role' => 'required',
            'bio' => 'required',
            'confirm' => 'accepted',
        ]);

        return redirect()->route('form.result')->with('data', $validated);
    }

    public function showResult()
    {
        $data = session('data');
        return view('result', compact('data'));
    }
}


