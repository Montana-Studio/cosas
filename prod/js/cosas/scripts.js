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
});