<li id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
    <span class="hoverzoom hide">
        
        <i class="fa fa-search-plus"></i>
        
    </span>
    <script type="text/javascript" async>
    
        jQuery(document).ready(function($){
            $('#post-<?php the_ID(); ?>').click(function(){
                $('.loadimage').attr('style','background-image:url(<?php the_post_thumbnail_url(); ?>);');
                $('.dataimage').prepend('<h2><?php the_title(); ?></h2>');
                $('#loadOverlay').fadeIn();
            });
            $('.closeimage').click(function(){
                $('.loadimage').attr('style','');
                $('.dataimage h2').remove();
                $('#loadOverlay').fadeOut();
            });
        });
            
    </script>
</li><!-- #post-## -->