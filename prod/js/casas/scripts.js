jQuery(document).ready(function($){
	$('.mobile-icon-menu').click(function() {
		$('.MenuMobile-Open').toggleClass('openMobile');
	});   
	$(function() {
	    $('.rslides').responsiveSlides();
	});
});