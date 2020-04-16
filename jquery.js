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

      $(document).ready(()=>{ 
        $(".ma_1_submit").on('click',()=>{
        $("html, body").animate({scrollTop: $(".ma_1_submit").parent().parent().offset().top + $(".ma_1_submit").parent().parent().parent().height()}, 250);
        });});