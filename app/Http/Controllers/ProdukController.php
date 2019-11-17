<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use Yajra\Datatables\Datatables;

class ProdukController extends Controller
{
    public $success = 'alert-success';
    public $failed = 'alert-danger';
    public $info_s = 'Success';
    public $info_f = 'Failed';

    public function data(){
        return DataTables::of(produk::query())->make(true);
    }

    public function index(){
      return view('admin_produk.index');
    }

    public function create(){
      return view('admin_produk.create');
    }

    public function store(Request $request){
      $data = new produk;
      $data->nama_produk = $request->nama_produk;
      $data->deskripsi = $request->deskripsi;
      if($data->save()){
        return redirect('/admin/produk/')->with(['css' => $this->success, 'info' => $this->info_s]);
      }else{
        return redirect('/admin/produk/')->with(['css' => $this->failed, 'info' => $this->info_f]);
      }
    }

    public function edit($id){
      $data = produk::find($id);
      return view('admin_produk.edit', compact('data'));
    }

    public function update(Request $request, $id){
      $data = produk::find($id);
      $data->nama_produk = $request->nama_produk;
      $data->deskripsi = $request->deskripsi;
      if($data->save()){
        return redirect('/admin/produk/')->with(['css' => $this->success, 'info' => $this->info_s]);
      }else{
        return redirect('/admin/produk/')->with(['css' => $this->failed, 'info' => $this->info_f]);
      }
    }

    public function delete($id){
      $data = produk::find($id);
      if($data->delete()){
        return redirect('/admin/produk/')->with(['css' => $this->success, 'info' => $this->info_s]);
      }else{
        return redirect('/admin/produk/')->with(['css' => $this->failed, 'info' => $this->info_f]);
      }
    }
}
