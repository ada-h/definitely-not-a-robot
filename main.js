$(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400){
            $('nav').addClass('scroll')    
        }
        if ($(this).scrollTop()< 400){
            $('nav').removeClass('scroll')
        }
    });
});
$(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400){
            $('.scroll').addClass('show')    
        }
        if ($(this).scrollTop()< 400){
            $('.scroll').removeClass('show')
        }
    });
});
$("icon").hover(function(){
    $("p").toggleClass(".icon-p");
});