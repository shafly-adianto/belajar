<script src="{{url('')}}/jquery/jquery.min.js"></script>
<script src="{{url('')}}/jquery/jquery.mask.min.js"></script>
<script src="{{url('')}}/bootstrap/bootstrap.min.js"></script>
<script>
var idUser = generateId(20);

$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});

$(document).ready(function(){
  $("#chatbot").click(function(){
    $("#chatbotKetik").show(400);
    $("#chatbot").hide();
  });

  $("#closeChatbot").click(function(){
    $("#chatbot").show();
    $("#chatbotKetik").hide(400);
  });

  $("#txtChatbot").keypress(function(event) {
    if (event.keyCode == 13) {
      event.preventDefault();

      kata = document.getElementById("txtChatbot");

      document.getElementById("bodyChatbot").innerHTML += 
      "<div class='chatRight'>"
      +kata.value+
      "</div>";

      loadDoc(idUser, kata.value);
      document.getElementById("txtChatbot").value = "";
    }
  });
});

function restartChat(){
  loadDoc(idUser, "/restart");
}

function postData(value){
  loadDoc(idUser, value);
}

function dec2hex (dec) {
  return ('0' + dec.toString(16)).substr(-2)
}

function generateId (len) {
  var arr = new Uint8Array((len || 40) / 2)
  window.crypto.getRandomValues(arr)
  return Array.from(arr, dec2hex).join('')
}

function loop(data2){
  var data = "<option disabled hidden selected value> Pilih .. </option>";
  for(object2 in data2){
     data += "<option value='"+data2[object2].payload+"'>"+data2[object2].title+"</option>";       
  }

  return data;
}

function loadDoc(user, kata) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    type:'POST',
    url:'/getAnswer',
    data:{inputan: kata, user: user},
    success:function(data){
      for(object in data){
        document.getElementById("bodyChatbot").innerHTML += 
        "<div class='chatLeft'>"
        +data[object].text+
        "</div>";
        
        if(data[object].buttons){
          var data2 = data[object].buttons;

          document.getElementById("bodyChatbot").innerHTML += 
            "<select class='dropDown' onchange='postData(this.value)'>"
            +
            loop(data2)
            +
            "</select>"
            ;
        }
      }
      
      var scroll = document.getElementById("bodyChatbot");
      scroll.scrollTop = scroll.scrollHeight;
    }
  });
}
</script>
