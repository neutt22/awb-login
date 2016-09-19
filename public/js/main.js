$(document).ready(function () {

  $('.search-container').on('click', function(){
    $(this).css('-moz-box-shadow', '0 0 15px white');
    $(this).css('-webkit-box-shadow', '0 0 15px white');
    $(this).css('box-shadow', '0 0 15px white');
  }).on('focusout', function(){
    $(this).css('box-shadow', 'none');
  });

});
