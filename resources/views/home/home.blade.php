@extends('master.index')

@section('content')
<div class="pattern">
    <img src="{{url('')}}/image/pattern2.png" >
</div>
<div class="row slogan">
  <div class="col-md-7">
    <h1>Ask, Find and Get</h1>
    <h2>Whatever you need</h2>
  </div>
  <div class="col-md-5">
  </div>
</div>
<div class="pattern2">
    <img src="{{url('')}}/image/pattern3.png" >
</div>
<div class="row tentang slideanim">
  <div class="col-md-7">
    <img src="{{url('')}}/image/mascot.png" alt="Gea">
  </div>
  <div class="col-md-5">
    <p class="judul">Tentang <b>Gea</b></p>
    <p class="isi">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
  </div>
</div>
<div class="pattern3">
    <img src="{{url('')}}/image/pattern4.png" >
</div>
<div class="row fitur">
  <div class="slideanim">
    <p class="judul">Fitur <b>Gea</b></p>
    <div class="garis"></div>
  </div>
  <div class="isi slideanim">
    <a href="#">
      <div class="col-md-4">
        <div class="icon"><img src="{{url('')}}/image/analysis.png" alt="Analysis"></div>
        <p><b>Produk</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
    </a>
    <a href="#">
      <div class="col-md-4">
        <div class="icon"><img src="{{url('')}}/image/conv.png" alt="Analysis"></div>
        <p><b>Simulasi</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
    </a>
    <a href="#">
      <div class="col-md-4">
        <div class="icon"><img src="{{url('')}}/image/cs.png" alt="Analysis"></div>
        <p><b>Info Harga Pasar</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
    </a>
  </div>
</div>
<div class="row findus slideanim">
  <p class="judul">Temukan <b>Gea</b> di</p>
  <div class="isi slideanim">
    <a href="#"><div class="sosmed"><img src="{{url('')}}/image/instagram.png" alt="Analysis"></div></a>
    <a href="#"><div class="sosmed"><img src="{{url('')}}/image/twitter.png" alt="Analysis"></div></a>
    <a href="#"><div class="sosmed"><img src="{{url('')}}/image/facebook.png" alt="Analysis"></div></a>
  </div>
</div>
<div class="row copyright slideanim">
  <img src="{{url('')}}/image/pegadaian_center.png" alt="Logo Pegadaian">
</div>
@endsection
@push('extra-script')
<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
          method: 'GET', 
          url: '/getHargaEmas', 
          success: function(response){ 
              console.log('Success Login and Save to DB HargaEmas'); 
          },
          error: function(jqXHR, textStatus, errorThrown) { 
              console.log(JSON.stringify(jqXHR));
              console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
          }
      });
		})
	</script>
@endpush
