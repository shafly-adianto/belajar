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
        <li><a href="{{url('')}}/produk" class="{{ Request::is('produk') ? 'active' : '' }}">Produk</a></li>
        <li>
          <a class="dropdown-toggle" data-toggle="dropdown" class="{{ Request::is('produk') ? 'active' : '' }}" href="#">Simulasi</a>
          <ul class="dropdown-menu">
            <li><a href="/simulasiGadai">Simulasi Gadai</a></li>
            <li><a href="/simulasiBeliEmas">Simulasi Beli Emas</a></li>
            <li><a href="/simulasiKreditAmanah">Simulasi Kredit Amanah</a></li>
          </ul>
        </li>
        <li><a href="{{url('')}}/info_harga_pasar" class="{{ Request::is('info_harga_pasar') ? 'active' : '' }}">Info Harga Pasar</a></li>
      </ul>
    </div>
  </div>
</nav>