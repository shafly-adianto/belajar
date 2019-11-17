<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sub_produk;
use Yajra\Datatables\Datatables;

class SubProdukController extends Controller
{
  public $success = 'alert-success';
  public $failed = 'alert-danger';
  public $info_s = 'Success';
  public $info_f = 'Failed';

  public function data($id){
      $data = sub_produk::where('id_produk','=',$id)->get();
      return DataTables::of($data)->make(true);
  }

  public function index($id){
    return view('admin_sub_produk.index', compact('id'));
  }

  public function create($id){
    return view('admin_sub_produk.create', compact('id'));
  }

  public function store(Request $request, $id){
    $data = new sub_produk;
    $data->id_produk = $id;
    $data->nama_sub_produk = $request->nama_sub_produk;
    $data->deskripsi = $request->deskripsi;
    if($data->save()){
      return redirect('/admin/sub_produk/'.$id)->with(['css' => $this->success, 'info' => $this->info_s]);
    }else{
      return redirect('/admin/sub_produk/'.$id)->with(['css' => $this->failed, 'info' => $this->info_f]);
    }
  }

  public function edit($id){
    $data = sub_produk::find($id);
    return view('admin_sub_produk.edit', compact('data'));
  }

  public function update(Request $request, $id){
    $data = sub_produk::find($id);
    $data->nama_sub_produk = $request->nama_sub_produk;
    $data->deskripsi = $request->deskripsi;
    if($data->save()){
      return redirect('/admin/sub_produk/'.$data->id_produk)->with(['css' => $this->success, 'info' => $this->info_s]);
    }else{
      return redirect('/admin/sub_produk/'.$data->id_produk)->with(['css' => $this->failed, 'info' => $this->info_f]);
    }
  }

  public function delete($id, $kode){
    $data = sub_produk::find($id);
    if($data->delete()){
      return redirect('/admin/sub_produk/'.$kode)->with(['css' => $this->success, 'info' => $this->info_s]);
    }else{
      return redirect('/admin/sub_produk/'.$kode)->with(['css' => $this->failed, 'info' => $this->info_f]);
    }
  }
}
