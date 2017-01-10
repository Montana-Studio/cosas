jQuery(document).ready(function($){
        $('.embeVideoVimeoSmall').click(function(){
            $('#embed1').hide()
            $('#embed2').show()
            var videoID_Youtube = $('.embeVideoYoutubeSmall').attr('data-id')
            $('#embed1').attr('src','https://www.youtube.com/embed/'+videoID_Youtube+'?enablejsapi=1')
            var videoID = $(this).attr('data-id')
            var date = $(this).parent().parent().find('.date-video').text()
            var title = $(this).parent().parent().find('.title-video').text()
            $('.title-video-principal .titulo-principal').text(title)
            $('.title-video-principal .info-principal.info-principal').text(date)
            $('.video-play .title-video-principal').fadeIn('slow')
                loadVideoVimeo2(videoID)
        })

        $('.embeVideoYoutubeSmall').click(function(){
            $('#embed2').hide()
            var videoID = $(this).attr('data-id')
            var date = $(this).parent().parent().find('.date-video').text()
            var title = $(this).parent().parent().find('.title-video').text()
            $('.title-video-principal .titulo-principal').text(title)
            $('.title-video-principal .info-principal.info-principal').text(date)
            if($('#embed1').length>0){
                loadVideoVimeo(videoID,1)
                loadVideoYoutube(videoID)
                $('#embed1').attr('src','https://www.youtube.com/embed/'+videoID+'?enablejsapi=1')
            }
            $('.video-play .title-video-principal').fadeIn('slow')           
        })


        if($('.embeVideoVimeo').attr('data-origen')=='vimeo'){
            var videoID = $('.embeVideoVimeo').attr('data-id')
            loadVideoVimeo(videoID)
        }else{
            if($('.embeVideoYoutube').attr('data-origen')=='youtube'){
                var videoID = $('.embeVideoYoutube').attr('data-id')
                loadVideoYoutube(videoID)
            }
        }


        function loadVideoYoutube(videoID, vimeo=0){
            var player;

            player = new YT.Player('embed1', {
                height: '360',
                width: '640',
                videoId: videoID,
                events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
                }
            });
            $('#embed1').show()

            function onPlayerReady(event) {
                //event.target.playVideo();
            }

            var done = false;
            function onPlayerStateChange(event) {        
                if(event.data === 1){          
                    jQuery(document).ready(function($){
                        $('.video-play .title-video-principal').fadeOut('slow');
                    });
                }else if(event.data === 2||event.data === 0 ){
                    jQuery(document).ready(function($){
                        $('.video-play .title-video-principal').fadeIn('slow');
                    });
                }
            }
            function stopVideo() {
                player.stopVideo();
            }
        }

        function loadVideoVimeo(videoID, youtube=0){
            
            var options = {
                id: videoID,
                width: 640,
                autopause: true,
                autoplay: false

            };
            var player = new Vimeo.Player('embed2', options);

            if(youtube==1){
                player.setCurrentTime(0).then(function(seconds) {
                    player.pause().then(function() {
                       //$('.title-video-principal').fadeIn('slow');
                    }).catch(function(error) {
                        switch (error.name) {
                            default:
                                console.log(error.name)
                                break;
                        }
                    });
                }).catch(function(error) {
                    switch (error.name) {
                        default:
                           console.log(error.name)
                         break;
                    }
                });
            }else{
                var player = new Vimeo.Player('embed2', options);
                player.setCurrentTime(0).then(function(seconds) {
                    player.pause().then(function() {
                       //$('.title-video-principal').fadeIn('slow');
                    }).catch(function(error) {
                        switch (error.name) {
                            default:
                                console.log(error.name)
                                break;
                        }
                    });
                }).catch(function(error) {
                    switch (error.name) {
                        default:
                           console.log(error.name)
                         break;
                    }
                });

                player.on('play', function() {
                    $('.video-play .title-video-principal').fadeOut('slow');
                });
                player.on('pause', function() {
                    $('.video-play .title-video-principal').fadeIn('slow');
                });
            }

            
        }
        function loadVideoVimeo2(videoID){
           var player = new Vimeo.Player('embed2');
           if(player){
            player.loadVideo(videoID).then(function(id) {
                player.on('play', function() {
                    $('.video-play .title-video-principal').fadeOut('slow');
                });
                player.on('pause', function() {
                    $('.video-play .title-video-principal').fadeIn('slow');

                });
            }).catch(function(error) {
                switch (error.name) {
                    default:
                        console.log(error.name)
                        break;
                }
            });
           }
        }
    });