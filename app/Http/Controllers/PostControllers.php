<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostControllers extends Controller
{
    public function index()
    {
        return view('home');
    }
}
