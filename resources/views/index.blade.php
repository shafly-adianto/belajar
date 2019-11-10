<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{url('')}}/image/logo.png">
  <link rel="stylesheet" href="{{url('')}}/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('')}}/css/style.css">
  <title>GEA</title>
</head>
<body>
  <nav class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#myPage"><img src="{{url('')}}/image/logo.png" width="100"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Produk</a></li>
          <li><a href="#">Simulasi</a></li>
          <li><a href="#">Info Harga Pasar</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row tentang">
      <div class="col-md-7">
        <img src="{{url('')}}/image/mascot.png" alt="Gea">
      </div>
      <div class="col-md-5">
        <p class="judul">Tentang <b>Gea</b></p>
        <p class="isi">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
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
      <img src="{{url('')}}/image/pegadaian.png" alt="Logo Pegadaian">
    </div>
  </div>
</body>
<script src="{{url('')}}/jquery/jquery.min.js"></script>
<script src="{{url('')}}/bootstrap/bootstrap.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
<script>
var botmanWidget = {
  introMessage: "Hallo, aku Gea. Ada yang bisa aku bantu?",
  title: "Gea Chat"
};

$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
</html>
