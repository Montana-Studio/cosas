<?php 
    global $post, $posts;
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('lazy'); ?> data-original="<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>">
    
    <?php if(!wp_is_mobile()){ ?>
        <div class="hover-content">
           <div class="shares-post">
            <p>comparte en</p>
            
            <a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a>
            
            <a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a>
                
            <a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a>
            
            <a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a>
            
           </div>
            <div class="btn_more">
                <a href="<?php echo get_permalink(); ?>">seguir leyendo</a>
            </div>
        </div>
    <?php } ?>
    
	<footer class="entry-footer">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {

			$cats = get_the_category();
		?>
		
		<h2 class="entry-title">
		    <a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">
            <?php 

                if (strlen($post->post_title) > 35) {

                    echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...';

                } else {
                    the_title();
                } 
            }?>
            </a>
		</h2>
       
        <div class="times-post">
            <i class="fa fa-clock-o"></i> <?php the_time('l, j F Y'); ?>
        </div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->