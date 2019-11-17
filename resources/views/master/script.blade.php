<script src="{{url('')}}/jquery/jquery.min.js"></script>
<script src="{{url('')}}/bootstrap/bootstrap.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
<script>
var botmanWidget = {
  introMessage: "Hallo, aku Gea. Ada yang bisa aku bantu?",
  title: "Gea Chat",
  frameEndpoint: "{{url('')}}/chat.html",
  placeholderText: 'Ketik Disini',
  mainColor: '#00AB4E',
  bubbleBackground: '#00AB4E',
  aboutText: 'Kelompok 5',
  // bubbleAvatarUrl: 'https://www.applozic.com/assets/resources/images/Chat-Bot-Icon@512px.svg'
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
