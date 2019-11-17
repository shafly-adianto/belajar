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

    public function simulasiGadai()
    {
    	return view('simulasi.simulasiGadai');
    }

    public function simulasiBeliEmas()
    {
        return view('simulasi.simulasiBeliEmas');
    }

    public function simulasiKreditAmanah()
    {
        return view('simulasi.simulasiKreditAmanah');
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
