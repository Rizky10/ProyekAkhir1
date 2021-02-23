$(window).scroll(function(){
  var wscroll = $(this).scrollTop();
  if( wscroll > $('.ok').offset().top  - 600 ){
    $('.ok .ss').each(function(i){

      setTimeout(function(){
            $('.ss').eq(i).addClass('po');
      }, 300 * (i+1) );
    });
  }
  if( wscroll > $('.oak').offset().top  - 600 ){
    $('.oak .ssa').each(function(i){

      setTimeout(function(){
            $('.ssa').eq(i).addClass('po');
      }, 300 * (i+1) );
    });
  }
});
