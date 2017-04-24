$(document).ready(function(){
  $("#sidebar > div").hover(function() {
    /* Stuff to do when the mouse enters the element */
    $(this).children('a').
    $(this).children('div.sub_menu').show();
  }, function() {
    /* Stuff to do when the mouse leaves the element */
    $(this).children('div.sub_menu').hide();
  });
});
