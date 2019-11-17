@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Syarat</div>
        <div class="card-body">
          <form action="{{url('')}}/admin/syarat_fitur/store_syarat/{{$id}}/{{$kode}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <textarea class="form-control" name="syarat" rows="8" cols="80"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button> <a href="{{url('')}}/admin/syarat_fitur/index/{{$id}}/{{$kode}}" class="btn btn-default">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
