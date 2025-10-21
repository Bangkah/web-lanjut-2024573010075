<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function handleForm(Request $request)
    {
        $customMessages = [
            'name.required' => 'Kami perlu tahu nama Anda!',
            'email.required' => 'Email Anda penting bagi kami.',
            'email.email' => 'Hmm... itu tidak terlihat seperti email yang valid.',
            'password.required' => 'Jangan lupa untuk set password.',
            'password.min' => 'Password harus minimal :min karakter.',
            'username.regex' => 'Username hanya boleh berisi huruf dan angka.',
        ];

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'username' => ['required', 'regex:/^[a-zA-Z0-9]+$/'],
            'password' => 'required|min:6',
        ], $customMessages);

        return redirect()->route('register.show')->with('success', 'Registrasi berhasil!');
    }
}

