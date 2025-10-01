<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $message = "Welcome to the Home Page!";
        return view('home', compact('message'));
    }

    public function about()
    {
        $message = "This is the About Page.";
        return view('about', compact('message'));
    }   

    public function contact()
    {
        $message = "Reach us through the Contact Page.";
        return view('contact', compact('message'));
    }
}
