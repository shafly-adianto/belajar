<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
    	return view('home.home');
    }

    public function simulasi()
    {
    	return view('simulasi');
    }
}
