<script src="{{url('')}}/jquery/jquery.min.js"></script>
<script src="{{url('')}}/jquery/jquery.mask.min.js"></script>
<script src="{{url('')}}/bootstrap/bootstrap.min.js"></script>
<!-- <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> -->
<script>
// var botmanWidget = {
//   introMessage: "Hallo, ada yang bisa Gea bantu?",
//   title: "Gea Chat",
//   frameEndpoint: "{{url('')}}/chat.html",
//   placeholderText: 'Ketik Disini',
//   mainColor: '#00AB4E',
//   bubbleBackground: '#00AB4E',
//   aboutText: 'Kelompok 5',
//   // bubbleAvatarUrl: 'https://www.applozic.com/assets/resources/images/Chat-Bot-Icon@512px.svg'
// };

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
      loadDoc(kata.value);
      document.getElementById("txtChatbot").value = "";
    }
  });
});

function loadDoc(kata) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    type:'POST',
    url:'http://localhost/belajar/public/getAnswer',
    data:{inputan: kata},
    success:function(data){
      document.getElementById("bodyChatbot").innerHTML += 
      "<div style='width: 100%; float: right; text-align: right; color: #72BF44; padding-left: 60px; margin-bottom: 20px'>"
      +kata+
      "</div>"+
      "<div style='width: 100%; float: right; padding-right: 40px; text-align: justify; text-justify: inter-word; margin-bottom: 20px'>"
      +data+
      "</div>";
    }
  });
}
</script>
