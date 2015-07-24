$(function() {
    $('.nav li a').on('click',function(event){
        var $anchor = $(this);
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500,'easeInOutExpo');
    });
});

//This is to test my gallery

