<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  @include('master.head')
</head>
<body>
  @include('master.nav')
  <div class="container-fluid">
  <div id="chatbot"><span class="fas fa-2x fa-comments icon"></div>
    @yield('content')
  </div>
</body>
  @include('master.script')
  @stack('extra-script')
</html>
