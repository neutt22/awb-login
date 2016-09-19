$(document).ready(function () {

  $('.search-container').on('click', function(){
    $(this).css('box-shadow', '0 0 15px white');
  });

  $('.search-container').on('focusout', function(){
    $(this).css('box-shadow', 'none');
  });

});
