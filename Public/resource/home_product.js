$(function(){
  // 单个产品方块，鼠标悬停效果
  $(".product").hover(function() {
    /* Stuff to do when the mouse enters the element */
    $(this).css('border','1px solid #FF9900');
    $(this).find('button').show();
  }, function() {
    /* Stuff to do when the mouse leaves the element */
    $(this).css('border','1px solid #fff');
    $(this).find("button").hide();
  });
});
