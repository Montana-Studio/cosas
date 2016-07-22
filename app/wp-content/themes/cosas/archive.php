<?php get_header(); ?>

		<section class="page-content">
			<div class="breadcrumbs">

			<?php 
				if ( function_exists('yoast_breadcrumb') ){
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				} 
			?>

			</div>
			<div style="max-width:320px;margin:0 auto;">
			<ins data-revive-zoneid="7" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
			<script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
			</div>
			<div style="max-width:728px;margin:0 auto;">
			<ins data-revive-zoneid="4" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
			<script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
			</div>       
            <h1 class="titus"><?php _e( 'Archives', 'html5blank' ); ?></h1>
            
            <div class="post-list">

			<?php get_template_part('loop-paginas'); ?>

			<?php get_template_part('pagination'); ?>
			</div>
			<div class="pagination">
                <?php get_template_part('pagination-main'); ?>
            </div>
		</section>

<?php get_footer(); ?>
