<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fitur_produk;
use App\syarat_produk;
use Yajra\Datatables\Datatables;

class SyaratFiturController extends Controller
{
  public $success = 'alert-success';
  public $failed = 'alert-danger';
  public $info_s = 'Success';
  public $info_f = 'Failed';

  public function data_fitur($id){
      $data = fitur_produk::where('id_sub_produk','=',$id)->get();
      return DataTables::of($data)->make(true);
  }

  public function data_syarat($id){
      $data = syarat_produk::where('id_sub_produk','=',$id)->get();
      return DataTables::of($data)->make(true);
  }

  public function index($id, $kode){
    return view('admin_syarat_fitur.index', compact('id', 'kode'));
  }

  public function create_syarat($id, $kode){
    return view('admin_syarat_fitur.create_syarat', compact('id', 'kode'));
  }

  public function create_fitur($id, $kode){
    return view('admin_syarat_fitur.create_fitur', compact('id', 'kode'));
  }

  public function store_syarat(Request $request, $id, $kode){
    $data = new syarat_produk;
    $data->id_sub_produk = $id;
    $data->syarat = $request->syarat;
    if($data->save()){
      return redirect('/admin/syarat_fitur/index/'.$id.'/'.$kode)->with(['css' => $this->success, 'info' => $this->info_s]);
    }else{
      return redirect('/admin/syarat_fitur/index/'.$id.'/'.$kode)->with(['css' => $this->failed, 'info' => $this->info_f]);
    }
  }

  public function store_fitur(Request $request, $id, $kode){
    $data = new fitur_produk;
    $data->id_sub_produk = $id;
    $data->fitur = $request->fitur;
    if($data->save()){
      return redirect('/admin/syarat_fitur/index/'.$id.'/'.$kode)->with(['css' => $this->success, 'info' => $this->info_s]);
    }else{
      return redirect('/admin/syarat_fitur/index/'.$id.'/'.$kode)->with(['css' => $this->failed, 'info' => $this->info_f]);
    }
  }

  public function edit_syarat($id, $kode, $kode2){
    $data = syarat_produk::find($id);
    return view('admin_syarat_fitur.edit_syarat', compact('data','kode','kode2'));
  }

  public function edit_fitur($id, $kode, $kode2){
    $data = fitur_produk::find($id);
    return view('admin_syarat_fitur.edit_fitur', compact('data','kode','kode2'));
  }

  public function update_syarat(Request $request, $id, $kode, $kode2){
    $data = syarat_produk::find($id);
    $data->syarat = $request->syarat;
    if($data->save()){
      return redirect('/admin/syarat_fitur/index/'.$kode.'/'.$kode2)->with(['css' => $this->success, 'info' => $this->info_s]);
    }else{
      return redirect('/admin/syarat_fitur/index/'.$kode.'/'.$kode2)->with(['css' => $this->failed, 'info' => $this->info_f]);
    }
  }

  public function update_fitur(Request $request, $id, $kode, $kode2){
    $data = fitur_produk::find($id);
    $data->fitur = $request->fitur;
    if($data->save()){
      return redirect('/admin/syarat_fitur/index/'.$kode.'/'.$kode2)->with(['css' => $this->success, 'info' => $this->info_s]);
    }else{
      return redirect('/admin/syarat_fitur/index/'.$kode.'/'.$kode2)->with(['css' => $this->failed, 'info' => $this->info_f]);
    }
  }

  public function delete_syarat($id, $kode, $kode2){
    $data = syarat_produk::find($id);
    if($data->delete()){
      return redirect('/admin/syarat_fitur/index/'.$kode.'/'.$kode2)->with(['css' => $this->success, 'info' => $this->info_s]);
    }else{
      return redirect('/admin/syarat_fitur/index/'.$kode.'/'.$kode2)->with(['css' => $this->failed, 'info' => $this->info_f]);
    }
  }

  public function delete_fitur($id, $kode, $kode2){
    $data = fitur_produk::find($id);
    if($data->delete()){
      return redirect('/admin/syarat_fitur/index/'.$kode.'/'.$kode2)->with(['css' => $this->success, 'info' => $this->info_s]);
    }else{
      return redirect('/admin/syarat_fitur/index/'.$kode.'/'.$kode2)->with(['css' => $this->failed, 'info' => $this->info_f]);
    }
  }
}
