<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('')}}"><img src="{{url('')}}/image/logo.png" width="100"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('')}}/produk" class="{{ Request::is('*produk*') ? 'active' : '' }}">Produk</a></li>
        <li><a href="{{url('')}}/simulasi" class="{{ Request::is('*simulasi*') ? 'active' : '' }}">Simulasi</a></li>
        <li><a href="{{url('')}}/info_harga_pasar" class="{{ Request::is('*info_harga_pasar*') ? 'active' : '' }}">Info Harga Pasar</a></li>
      </ul>
    </div>
  </div>
</nav>
