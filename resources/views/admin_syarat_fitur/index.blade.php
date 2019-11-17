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
        <div class="card-header">Syarat Fitur</div>
        <div class="card-body">
          @if(session('css'))
          <div class="alert {{session('css')}} alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('info')}}
          </div>
           @endif
          <a href="{{url('')}}/admin/syarat_fitur/create_syarat/{{$id}}/{{$kode}}" class="btn btn-sm btn-primary" style="float:right; margin-bottom: 20px">Tambah Data</a>
          <table class="table table-striped table-bordered" style="width:100%" id="tabel1">
            <thead>
              <tr>
                <th>Syarat</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
          <a href="{{url('')}}/admin/syarat_fitur/create_fitur/{{$id}}/{{$kode}}" class="btn btn-sm btn-primary" style="float:right; margin-bottom: 20px; margin-top: 20px">Tambah Data</a>
          <table class="table table-striped table-bordered" style="width:100%" id="tabel2">
            <thead>
              <tr>
                <th>Fitur</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
          <a href="{{url('')}}/admin/sub_produk/{{$kode}}" style="margin-top: 10px; padding-left:0" class="btn btn-default">Back</a>
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
    $('#tabel1').DataTable({
      "lengthChange": false,
      "searching": false,
      "iDisplayLength": 5,
      "responsive": true,
      processing: true,
      serverSide: true,
      ajax: '{{url('')}}/admin/syarat_fitur/data_syarat/{{$id}}',
      columns: [
      { data: 'syarat' },
      {
        data: null,
        searchable: false,
        render: function(data) {
          return '<a href="{{url('')}}/admin/syarat_fitur/edit_syarat/'+data.id+'/{{$id}}/{{$kode}}" style="margin-left: 8px" class="btn btn-warning btn-sm" role="button">Edit</a><a href="{{url('')}}/admin/syarat_fitur/delete_syarat/'+data.id+'/{{$id}}/{{$kode}}" class="btn btn-danger btn-sm" style="margin-left: 8px" role="button">Hapus</a>';
        }
      }
      ]
    });

    $('#tabel2').DataTable({
      "lengthChange": false,
      "searching": false,
      "iDisplayLength": 5,
      "responsive": true,
      processing: true,
      serverSide: true,
      ajax: '{{url('')}}/admin/syarat_fitur/data_fitur/{{$id}}',
      columns: [
      { data: 'fitur' },
      {
        data: null,
        searchable: false,
        render: function(data) {
          return '<a href="{{url('')}}/admin/syarat_fitur/edit_fitur/'+data.id+'/{{$id}}/{{$kode}}" style="margin-left: 8px" class="btn btn-warning btn-sm" role="button">Edit</a><a href="{{url('')}}/admin/syarat_fitur/delete_fitur/'+data.id+'/{{$id}}/{{$kode}}" class="btn btn-danger btn-sm" style="margin-left: 8px" role="button">Hapus</a>';
        }
      }
      ]
    });
  });
</script>
@endpush
