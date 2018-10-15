$(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop()> 400){
            $('show').addClass('scroll')    
        }
        if ($(this).scrollTop() < 400){
            $('show').removeClass('scroll')
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