<?php get_header(); ?>

	<!-- section -->
	<section class="single-content">
    
    <div class="breadcrumbs">
        
        <?php the_breadcrumb(); ?>
        
    </div>
<div style="max-width:728px;margin:0 auto;">
    <ins data-revive-zoneid="5" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
    <script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
</div>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           <?php 
				global $post, $posts;
				$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
				$first_img = $matches [1] [0];
			?>
			
               <div class="img-post-single" style="background-image:url('<?php if(is_singular("horoscopo")){ echo get_field("img_interior"); }else{ global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}} ?>');">
            
			    <div class="data-post-single">
			        
                    <h1><?php the_title(); ?></h1>
			        <div class="times-post">
                        <i class="fa fa-clock-o"></i> <?php the_time('l, j F Y'); ?>
                    </div>
                    <span class="author">
                        <i class="fa fa-user"></i> <?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?>
                    </span>
			    </div>
			    
			</div>
            
            <div class="sharecontent">
                <div class="shares-post">
                
                <a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook-square"></i></a>

                <a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', '', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-twitter-square"></i></a>
                
                <?php if(wp_is_mobile()){ ?>
                    <a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a>
                <?php } ?>
                
                <a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest-square"></i></a>
                
                <a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus-square"></i></a>
                
                <a href="mailto:?subject=<?php the_title(); ?>&amp;body=<?php the_title(); ?> <?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) ); ?> - <?php echo the_permalink(); ?>" ><i class="fa fa-envelope-square"></i></a>

               </div>
            </div>
            
            <div class="post-single">
                
                <?php the_content(); ?>
                
                <div class="fb-comments" data-href="<?php echo the_permalink(); ?>" data-numposts="3" data-width="100%" data-order-by="reverse_time"></div>
            </div>
            
            <?php 
                if(!wp_is_mobile()){
                    get_sidebar(); 
                }
            ?>
            
			<?php //comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Lo sentimos nada para mostrar.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->

<?php get_footer(); ?>
