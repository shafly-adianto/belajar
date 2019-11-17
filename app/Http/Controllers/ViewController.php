<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\produk;

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
      $data = produk::all();
      return view('produk.produk', compact('data'));
    }

    public function info_harga_pasar()
    {
      return view('info_harga_pasar.info_harga_pasar');
    }
}
