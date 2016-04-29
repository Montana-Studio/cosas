<?php get_header(); ?>

	<!-- section -->
	<section class="single-content">
    
    <div class="breadcrumbs">
        
        <?php the_breadcrumb(); ?>
        
    </div>
    
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           
            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );?>
			
			<div class="img-post-single" style="background-image:url('<?php echo $src[0]; ?>');">
			    
			    <div class="data-post-single">
			        
                    <h1><?php the_title(); ?></h1>
			        <div class="times-post">
                        <i class="fa fa-clock-o"></i> <?php the_time('l, F g A');?>
                    </div>
                    <span class="author">
                        <i class="fa fa-user"></i> <?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?>
                    </span>
			    </div>
			    
			</div>
            
            <div class="sharecontent">
                <div class="shares-post">
                
                <a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a>

                <a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', '', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-twitter"></i></a>

                <a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a>

               </div>
            </div>
            
            <div class="post-single">
                
                <?php the_content(); ?>
                
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
