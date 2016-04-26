<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cosas
 */

?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' ); ?>

<?php 
	if (is_category('entrevista')){?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="img-post" style="background-image: url('<?php echo $src[0]; ?>');">
			<a href="<?php echo get_permalink(); ?>" class="more-link"><i class="fa fa-plus-circle"></i></a>
		</div>
	<?php }elseif(is_category(array('personaje-nacional','politica-nacional','espectaculos-nacional'))){ ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="img-post" style="background-image: url('<?php echo $src[0]; ?>');">
			<a href="<?php echo get_permalink(); ?>" class="more-link"><i class="fa fa-plus-circle"></i></a>
		</div>
	<?php }else{ ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $src[0]; ?>');">

		<a href="<?php echo get_permalink(); ?>" class="more-link"><i class="fa fa-plus-circle"></i></a>
	<?php }
?>

	<footer class="entry-footer">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {

			$cats = get_the_category();
		?>

		<?php 
			if (is_category('espectaculos')){
				echo '';
			}elseif(is_category('entrevista' )){
				echo '';
			}else{
		?>
			<span><?php echo $cats[0]->cat_name;?></span>
		<?php
			}
		?>
		
		<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">
		<?php 

			if (strlen($post->post_title) > 35) {
				
				echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';

			} else {
				the_title();
			} 
		}?>
		</a></h2>
			<div class="times-post">
				<i class="fa fa-clock-o"></i> <?php the_time('l, F g A');?>
			</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
