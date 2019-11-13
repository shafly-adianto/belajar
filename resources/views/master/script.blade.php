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
