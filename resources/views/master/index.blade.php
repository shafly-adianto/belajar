<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  @include('master.head')
  <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
  @include('master.nav')
  <div class="container-fluid">
    <div id="chatbotKetik">
      <div class="headerChatbot"><span class="fas fa-times" id="closeChatbot"></div>
      <div id="bodyChatbot"></div>
      <div class="inputChatbot">
        <input type="text" id="txtChatbot" placeholder="Ketik pesan disini"/>
      </div>
    </div>
    <div id="chatbot"><span class="fas fa-2x fa-comments icon"></div>
    @yield('content')
  </div>
</body>
  @include('master.script')
  @stack('extra-script')
</html>
