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

	$('#cboxPrevious').append('>');
	$('#cboxNext').append('<');
	$('#cboxClose').append('x'); 

	$(document).bind('cbox_open', function() {
	    $('html').css({ overflow: 'hidden' });
	}).bind('cbox_closed', function() {
	    $('html').css({ overflow: '' });
	});

}); 
