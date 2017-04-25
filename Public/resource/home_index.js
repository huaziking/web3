// 定义变量t,n,count
var t = n = 0,
    count;
$(document).ready(function() {
    // count是获取到列表里面有几张图片
    count = $("#banner_list a").length;
    // 只显示第一张图片
    $("#banner_list a:not(:first-child)").hide();
    // 获取幻灯片的alt属性，然后显示在#banner_info里面
    $("#banner_info").html($("#banner_list a:first-child").find("img").attr('alt'));

    $("#banner_info").click(function() {
        window.open($("#banner_list a:first-child").attr('href'), "_blank")
    });
    $("#banner li").click(function() {
        var i = $(this).text() - 1; //获取Li元素内的值，即1，2，3，4
        n = i;
        if (i >= count) return;
        $("#banner_info").html($("#banner_list a").eq(i).find("img").attr('alt'));
        $("#banner_info").unbind().click(function() {
            window.open($("#banner_list a").eq(i).attr('href'), "_blank")
        }) $("#banner_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
        document.getElementById("banner").style.background = "";
        $(this).toggleClass("on");
        $(this).siblings().removeAttr("class");
    });
    t = setInterval("showAuto()", 4000);
    $("#banner").hover(function() {
        clearInterval(t)
    },
    function() {
        t = setInterval("showAuto()", 4000);
    });
})

function showAuto() {
    n = n >= (count - 1) ? 0 : ++n;
    $("#banner li").eq(n).trigger('click');
}
