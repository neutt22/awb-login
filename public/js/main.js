$(document).ready(function () {

  // $('.search-container').on('click', function(){
  //   $(this).css('-moz-box-shadow', '0 0 15px white');
  //   $(this).css('-webkit-box-shadow', '0 0 15px white');
  //   $(this).css('box-shadow', '0 0 15px white');
  // }).on('focusout', function(){
  //   $(this).css('box-shadow', 'none');
  // });

  // Scroll to top display
  $(window).scroll(function(){

    if($(this).scrollTop() > 540) {
      $('.scroll-top').fadeIn();
    }else {
      $('.scroll-top').fadeOut();
    }
  });

  // Scroll to top click event
  $('.scroll-top').click(function() {
    $('html, body').animate({scrollTop: 0}, 800);
  });

});
