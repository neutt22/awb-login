$(document).ready(function () {

  $(document).foundation();

  $('.search-container').on('click', function(){
    $(this).css('-moz-box-shadow', '0 0 15px gray');
    $(this).css('-webkit-box-shadow', '0 0 15px gray');
    $(this).css('box-shadow', '0 0 15px gray');
  }).on('focusout', function(){
    $(this).css('box-shadow', 'none');
  });

  $('.content-cover').click(function(){
    $('label[for="nav-trigger"]').click();
  });

  // Set top menu height for transition animation
  var topMenu = $('.top-menu');
  var topMenuHeight = topMenu.height();

  topMenu.css('height', topMenu.height());

  // Scroll to top display
  $(window).scroll(function(){

    if($(this).scrollTop() > 540) {
      topMenu.height(0);
      $('.scroll-top').fadeIn();
    }else {
      topMenu.css('height', topMenuHeight);
      $('.scroll-top').fadeOut();
    }
  });

  // Scroll to top click event
  $('.scroll-top').click(function() {
    $('html, body').animate({scrollTop: 0}, 800);
  });

  // Prevent negative numbers on qty column of cart page

  // Select your input element.
  var number = document.getElementById('qty');

  // Listen for input event on numInput.
  number.onkeydown = function(e) {
      if(!((e.keyCode > 95 && e.keyCode < 106)
        || (e.keyCode > 47 && e.keyCode < 58)
        || e.keyCode == 8)) {
          return false;
      }
  }

});
