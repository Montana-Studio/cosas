jQuery(document).ready(function($){
    
    $('#slider3, #slider5').responsiveSlides({
        auto:false,
        nav: true,
        prevText:'<i class="fa fa-angle-right"></i>',
        nextText:'<i class="fa fa-angle-left"></i>'
    });
    $('#slider4').responsiveSlides({
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
});


function fbShare(url, title, descr, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
}
function twShare(url, title, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.alert('http://twitter.com/share?url=' + url + '&text=' + title, '', 'left=0,top=0,width=' + winWidth + ',height=' + winHeight + ',personalbar=0,toolbar=0,scrollbars=0,resizable=0');
}
function piShare(url, title, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open('https://pinterest.com/pin/create/button/?url=' + url + '&media=' + image + '&description=' + title +'');
}