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

				<ins data-revive-zoneid="7" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
				<script>
				(function () {
				  var d = document, s = d.createElement('script'), p = d.location.protocol,
					  i = d.getElementsByTagName('ins'), j = i[i.length-1];
				  try {
					s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
					  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
					s.async = true; j.appendChild(s);
				  } catch (e) {}
				})();
				</script>
				
			</div>
			<div style="max-width:728px;margin:0 auto;">

				<ins data-revive-zoneid="4" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
				<script>
				(function () {
				  var d = document, s = d.createElement('script'), p = d.location.protocol,
					  i = d.getElementsByTagName('ins'), j = i[i.length-1];
				  try {
					s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
					  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
					s.async = true; j.appendChild(s);
				  } catch (e) {}
				})();
				</script>
				
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
