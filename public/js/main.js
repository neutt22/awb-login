$(document).ready(function () {

  $(document).foundation();

  $('.search-container').on('click', function(){
    $(this).css('-moz-box-shadow', '0 0 15px gray');
    $(this).css('-webkit-box-shadow', '0 0 15px gray');
    $(this).css('box-shadow', '0 0 15px gray');
  }).on('focusout', function(){
    $(this).css('box-shadow', 'none');
  });

  // Scroll to top display
  $(window).scroll(function(){

    if($(this).scrollTop() > 300){
      $('.logo img').css('width', '65px');
    } else {
      var current = Foundation.MediaQuery.current;
      var width = 0;
      if(current == 'small'){
        console.log('We at mobile: ' + current);
        width = '75px';
      }else {
        console.log('We at Desktop: ' + current);
        width = '100px';
      }
      $('.logo img').css('width', width);
    }

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
