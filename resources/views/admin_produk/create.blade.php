@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Produk</div>
        <div class="card-body">
          <form action="{{url('')}}/admin/produk/store" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" class="form-control" name="nama_produk">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" name="deskripsi" rows="8" cols="80"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button> <a href="{{url('')}}/admin/produk" class="btn btn-default">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
