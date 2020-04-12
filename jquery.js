$(document).ready(function() {
    $(window).keydown(function(event){
      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });
  });


  $(document).ready(()=>{ 
    $(".q0a1").on('click',()=>{
        $("html, body").animate({scrollTop: $(".q0").offset().top + $(".q0").height()}, 250);
      });});
