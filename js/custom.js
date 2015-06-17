//Change URL with page scroll
$(document).bind('scroll',function(e){
    $('section').each(function(){
        if (
           $(this).offset().top < window.pageYOffset + 10
//begins before top
        && $(this).offset().top + $(this).height() > window.pageYOffset + 10
//but ends in visible area
//+ 10 allows you to change hash before it hits the top border
        ) {
            window.location.hash = $(this).attr('id');
        }
    });
});
$(function() {
	$('.nav li a').on('click',function(event){
		var $anchor = $(this);
		event.preventDefault();
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500,'easeInOutExpo');
	});
});