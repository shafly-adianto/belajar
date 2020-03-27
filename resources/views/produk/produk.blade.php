@extends('master.index')

@section('content')
<div class="row tentang">
  <div class="col-md-7">
    <img src="{{url('')}}/image/mascot.png" alt="Gea">
  </div>
  <div class="col-md-5">
    <p class="judul">Produk <b>Pegadaian</b></p>
    <div class="panel-group" id="accordion" style="margin-top: 20px; margin-left: -10px">
      @foreach($data as $key=>$value)
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key+1}}"><b>{{$value->nama_produk}}</b></a>
          </h4>
        </div>
        <div id="collapse{{$key+1}}" class="panel-collapse collapse @if($key==0) in @endif">
          <div class="panel-body">{{$value->deskripsi}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
