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
    	return view('simulasi.simulasi');
    }

    public function produk()
    {
      return view('produk.produk');
    }

    public function info_harga_pasar()
    {
      return view('info_harga_pasar.info_harga_pasar');
    }
}
