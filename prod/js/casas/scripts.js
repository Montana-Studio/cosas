jQuery(document).ready(function($){
	$('.mobile-icon-menu').click(function() {
		$('.MenuMobile-Open').toggleClass('openMobile');
	});   
	$(function() {
	    $('.rslides').responsiveSlides({
			auto: true,             // Boolean: Animate automatically, true or false
			speed: 500,            // Integer: Speed of the transition, in milliseconds
			timeout: 8000,          // Integer: Time between slide transitions, in milliseconds
			pager: false,           // Boolean: Show pager, true or false
			nav: true,             // Boolean: Show navigation, true or false
			random: false,          // Boolean: Randomize the order of the slides, true or false
			pause: false,           // Boolean: Pause on hover, true or false
			pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			prevText: '<i class="fa fa-angle-left"></i>',   // String: Text for the "previous" button
			nextText: '<i class="fa fa-angle-right"></i>',       // String: Text for the "next" button
			before: function(){},   // Function: Before callback
			after: function(){}     // Function: After callback
		});
	});
	$(function() {
	    $('.rslides-video').responsiveSlides({
			auto: true,             // Boolean: Animate automatically, true or false
			speed: 500,            // Integer: Speed of the transition, in milliseconds
			timeout: 8000,          // Integer: Time between slide transitions, in milliseconds
			pager: false,           // Boolean: Show pager, true or false
			nav: true,             // Boolean: Show navigation, true or false
			random: false,          // Boolean: Randomize the order of the slides, true or false
			pause: false,           // Boolean: Pause on hover, true or false
			pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			prevText: '<i class="fa fa-angle-left"></i>',   // String: Text for the "previous" button
			nextText: '<i class="fa fa-angle-right"></i>',       // String: Text for the "next" button
			before: function(){},   // Function: Before callback
			after: function(){}     // Function: After callback
		});
	});
	$('.share-mobile').click(function() {
		//$('.share-post').toggleClass('show-options-share');
		$(this).siblings('div').toggleClass('show-options-share');
		$(this).closest('div').toggleClass('options-open');
	});
	$('.buscar-home').click(function(){
		$('.buscador-open').toggleClass('show-search');
		$('.buscar-home').hide();
	});
	$('.close-search').click(function(){
		$('.buscador-open').toggleClass('show-search');
		$('.buscar-home').show();
	});

	$('.gallery-icon a').colorbox({
		rel:'gallery',
		width: '95%',
		height: 'auto',
		maxWidth: '760',
		maxHeight: '700',
		previous:'<i class="fa fa-angle-left"></i>',
		next:'<i class="fa fa-angle-right"></i>',
		close: '<i class="fa fa-close"></i>',
		current:'Imagen {current} de {total}',
		title: function() { return $(this).find('img').attr('alt'); },
		transition:'fade',
		scalePhotos: true,
		preloading: false,
		className: true,
		fadeOut: 600,
		slideshowAuto: true,
		scrolling: 'false'

	});  
	$('.gallery').prepend('<div class="title-section">Galería de imágenes</div>');

	$(document).bind('cbox_open', function() {
	    $('html').css({ overflow: 'hidden' });
	}).bind('cbox_closed', function() {
	    $('html').css({ overflow: '' });
	});

	$('#dg-container').gallery({
		current		: 100, 	
		autoplay	: true,
		interval	: 5000  
	}); 


}); 



function fbShare(url, title, descr, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
}
function twShare(url, title, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
	window.open('http://twitter.com/share?url=' + url + '&text=' + title, 'intent', 'left='+ winLeft+',top='+winTop+',width=' + winWidth + ',height=' + winHeight + ',personalbar=0,toolbar=0,scrollbars=0,resizable=0');
}
function piShare(url, title, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open('https://pinterest.com/pin/create/button/?url=' + url + '&media=' + image + '&description=' + title +'&left='+ winLeft+'&top='+winTop+'&width=' + winWidth + '&height=' + winHeight);
}
function GoogleShare(url, title, image, winWidth, winHeight) {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
} 
