$(document).ready(function() {
  
  $('.gp li').on('click', function() {
      var headphonesColor = $(this).attr('data-image');
  
      $('.active').removeClass('active');
      $('#img_chinh img[data-image = ' + headphonesColor + ']').addClass('active');
      $(this).addClass('active');
  });
  
});