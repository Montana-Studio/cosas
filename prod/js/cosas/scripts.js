jQuery(document).ready(function($){
    
    $('#slider3, #slider5').responsiveSlides({
        auto:true,
        nav: true,
        prevText:'<i class="fa fa-angle-right"></i>',
        nextText:'<i class="fa fa-angle-left"></i>'
    });
    $('#slider4').responsiveSlides({
        auto:false,
        pager:true,
        manualControls:''
    });
    
    //MENU
    $('#site-navigation').toggle(function(){

        $('#page').animate({
            left:-250
        },{
            duration:'1000'
        });
        $('#menu-content').animate({
            right:0
        },{
            duration:'1000',
            complete:function(){
                $('#site-navigation i').toggleClass('fa-bars fa-close');
            }
        });

    },function(){

        $('#page').animate({
            left:0
        },{
            duration:'1000'
        });
        $('#menu-content').animate({
            right:-250
        },{
            duration:'1000',
            complete:function(){
                $('#site-navigation i').toggleClass('fa-close fa-bars');
            }
        });

    });
    
    //LASTS
    $('#view-lasts').on('click',function(){
        $('.last-content-desk').slideToggle(function(){
            $('#view-lasts i').toggleClass('fa-angle-up fa-angle-down');
        });
    });
    
    //SEARCH
    $('.close-search').on('click',function(){
        $('.search-content').fadeOut();
        $('.main-search i').toggleClass('fa-times fa-search');
    });
    
    $('.main-search-open').toggle(function(){
        $('.search-content').fadeIn();
        $('.main-search i').toggleClass('fa-search fa-times');
    },function(){
        $('.search-content').fadeOut();
        $('.main-search i').toggleClass('fa-times fa-search');
    });
    
    //MARQUEE
    $('.marquee').marquee({
        pauseOnHover:true,
        duplicated:true,
        startVisible:true,
        duration:20000,
        gap: 10
    });
    
	
	$('.susc-news .newsletter a').on('click',function(event){
		event.preventDefault();
		$('.overlays-suscnews .susContent').slideToggle(function(){
			
			if ($('.overlays-suscnews .susContent').is(':hidden')){
				$('.newsletter a').addClass('bgClose');
				$('.newsletter a').removeClass('bgOpen');
			}else{
				$('.newsletter a').addClass('bgOpen');
				$('.newsletter a').removeClass('bgClose');
			}
		});
	});
	
	$('.susc-news .suscripciones a').on('click',function(event){
		event.preventDefault();
		$('.overlays-suscnews .newsContent').slideToggle(function(){
			
			if ($('.overlays-suscnews .newsContent').is(':hidden')){
				$('.suscripciones a').addClass('bgClose');
				$('.suscripciones a').removeClass('bgOpen');
			}else{
				$('.suscripciones a').addClass('bgOpen');
				$('.suscripciones a').removeClass('bgClose');
			}
		});
	});
	
	$('.susc-news2 .newsletter .btnNews').on('click',function(){
		if($('.susc-news2 .suscripciones .floatSusc').is(':hidden')){
			$('.susc-news2 .newsletter .floatNews').slideToggle();	
		}else{
			$('.susc-news2 .suscripciones .floatSusc').slideToggle(function(){
				$('.susc-news2 .newsletter .floatNews').slideToggle();
			});
		}
	});
	$('.susc-news2 .suscripciones .btnSusc').on('click',function(){
		if($('.susc-news2 .newsletter .floatNews').is(':hidden')){
			$('.susc-news2 .suscripciones .floatSusc').slideToggle();	
		}else{
			$('.susc-news2 .newsletter .floatNews').slideToggle(function(){
				$('.susc-news2 .suscripciones .floatSusc').slideToggle();
			});
		}
	});
    
	//Instagram oroder
    $('.contInstagram').isotope({
        layoutMode: 'packery',
        percentPosition: true
    });

    //WOOCOMMERCE
    $('.inside-despacho').click(function(){
        $('.info-sidebar.popups-despacho').toggleClass('show-popups');  
    });

    $('.close-popups.close-despacho').click(function(){
        $('.info-sidebar.popups-despacho').toggleClass('show-popups');  
    });

    $('.inside-medios-pago').click(function(){
        $('.info-sidebar.popups-medios-pago').toggleClass('show-popups');  
    });

    $('.close-popups.close-medios').click(function(){
        $('.info-sidebar.popups-medios-pago').toggleClass('show-popups');  
    });

    /*Load images*/
    $('.lazy').lazyload({
        effect : 'fadeIn',
        failure_limit : 5,
        threshold : 200
    });

    /*Facebook Share*/
    $('.facebook_share').on('click', function(event) {
        event.preventDefault();
        var url = $(this).attr('title');
        var title = $(this).attr('name');
       // console.log(url+title);
        $.ajaxSetup({ cache: true });
            $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
			/* jshint ignore:start */
            FB.init({
              appId: '259189257792642',
              version: 'v2.6'
            });
            FB.ui({
                method: 'share',
                title: title,
                href: url,
              },
              function(response) {
                if (response && !response.error_code) {
                  //console.log('Posting completed.');
                } else {
                  //console.log('Error while posting.');
                }
            });
			/* jshint ignore:end */
      });
    });
	
	/* jshint ignore:start */

		var swiper = new Swiper('.swiper-container-video', {
			paginationClickable: true,
			direction: 'vertical',
			slidesPerView: 3,
			spaceBetween: 10,
			nextButton: '.btn-next',
			prevButton: '.btn-prev'
		});
		var columnas = new Swiper('.swiper-columnas', {
			nextButton: '.vermas',
			prevButton: '.vermenos',
			direction: 'vertical',
			slidesPerView: 3,
			paginationClickable: true,
		}); 
	/* jshint ignore:end */
});

function fbShare(url, title, descr, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
}
function twShare(url, title, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open('http://twitter.com/share?url=' + url + '&text=' + title, '', 'left=0,top=0,width=' + winWidth + ',height=' + winHeight + ',personalbar=0,toolbar=0,scrollbars=0,resizable=0');
}
function piShare(url, title, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open('https://pinterest.com/pin/create/button/?url=' + url + '&media=' + image + '&description=' + title +'');
}