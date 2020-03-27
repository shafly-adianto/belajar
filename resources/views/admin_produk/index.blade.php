@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Produk</div>
        <div class="card-body">
          @if(session('css'))
          <div class="alert {{session('css')}} alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('info')}}
          </div>
           @endif
          <a href="{{url('')}}/admin/produk/create" class="btn btn-sm btn-primary" style="float:right; margin-bottom: 20px">Tambah Data</a>
          <table class="table table-striped table-bordered" style="width:100%" id="tabel">
            <thead>
              <tr>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('extra-script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
  $(function() {
    $('#tabel').DataTable({
      "lengthChange": false,
      "searching": false,
      "iDisplayLength": 5,
      "responsive": true,
      processing: true,
      serverSide: true,
      ajax: '{!! route('produk.data') !!}',
      columns: [
      { data: 'nama_produk' },
      { data: 'deskripsi' },
      {
        data: null,
        searchable: false,
        render: function(data) {
          return '<a href="{{url('')}}/admin/sub_produk/'+data.id+'" class="btn btn-info btn-sm" role="button">Detail</a><a href="{{url('')}}/admin/produk/edit/'+data.id+'" style="margin-left: 8px" class="btn btn-warning btn-sm" role="button">Edit</a><a href="{{url('')}}/admin/produk/delete/'+data.id+'" class="btn btn-danger btn-sm" style="margin-left: 8px" role="button">Hapus</a>';
        }
      }
      ]
    });
  });
</script>
@endpush
