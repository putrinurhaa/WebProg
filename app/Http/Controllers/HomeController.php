<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
        return redirect('/home');
    }

    public function index()
    {
        return view('home');
    }
}
