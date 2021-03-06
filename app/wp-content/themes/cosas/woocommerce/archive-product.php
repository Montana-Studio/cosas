<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<div class="content-woocomerce-center">

		<?php
			/**
			 * woocommerce_before_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			do_action( 'woocommerce_before_main_content' );
		?>

			<div class="title-susc">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

					<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
					
				<?php endif; ?>
			</div>	

			<?php
				/**
				 * woocommerce_archive_description hook.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
			?>

			<?php if ( have_posts() ) : ?>

				<?php
					/**
					 * woocommerce_before_shop_loop hook.
					 *
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					//do_action( 'woocommerce_before_shop_loop' );
				?>

				<?php woocommerce_product_loop_start(); ?>

					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php
					/**
					 * woocommerce_after_shop_loop hook.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				?>

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

				<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>

		<?php
			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
		?>
		<div class="sidebar-woocomerce">

			<div class="sidebar-seccion despacho-seccion"  style="background:url('<?php echo get_template_directory_uri(); ?>/img/delivery-cosas.jpg?>');">  
				<div class="inside-despacho">
					<div class="title-despacho">
						<mark>Cobertura de </mark>
						<mark>despacho</mark>
					</div>
				</div>
			</div>

			<div class="info-sidebar popups-despacho">
				<div class="popups-bg"></div>
				<div class="popups-info">
					<h3 class="title-susc">Cobertura de despacho</h3>
					<div class="close-popups close-despacho"><i class="fa fa-close"></i></div>
					<div class="cobertura">
					
					    <ul>
                            <li>
                                <mark>Provincia Santiago</mark>
                                <ul>
                                    <li>Santiago</li>
                                    <li>Cerrillos</li>
                                    <li>Cerro Navia</li>
                                    <li>Conchalí</li>
                                    <li>El Bosque</li>
                                    <li>Estación Central </li>
                                    <li>Huechuraba</li>
                                    <li>Independencia</li>
                                    <li>La Cisterna</li>
                                    <li>La Florida</li>
                                    <li>La Pintana</li>
                                    <li>La Granja</li>
                                    <li>La Reina</li>
                                    <li>Las Condes</li>
                                    <li>Lo Barnechea</li>
                                    <li>Lo Espejo</li>
                                    <li>Lo Prado</li>
                                    <li>Macul</li>
                                    <li>Maipú</li>
                                    <li>Ñuñoa</li>
                                    <li>Pedro A. Cerda</li>
                                    <li>Peñalolén</li>
                                    <li>Providencia</li>
                                    <li>Pudahuel</li>
                                    <li>Quilicura</li>
                                    <li>Quinta Normal</li>
                                    <li>Recoleta</li>
                                    <li>Renca</li>
                                    <li>San Joaquín</li>
                                    <li>San Miguel</li>
                                    <li>San Ramón</li>
                                    <li>Vitacura</li>
                                </ul>
                            </li>
                            <li>
                                <mark>Provincia Cordillera</mark>
                                <ul>
                                    <li>Puente Alto</li>
                                </ul>
                            </li>
                            <li>
                                <mark>Provincia Maipo</mark>
                                <ul>
                                    <li>San Bernardo</li>
                                </ul>
                            </li>
					    </ul>
					</div>
				</div>
			</div>

			<div class="sidebar-seccion medios-de-pago"  style="background:url('<?php echo get_template_directory_uri(); ?>/img/medios-de-pago-cosas.jpg?>');">  
				<div class="inside-medios-pago">
					<div class="title-despacho">
						<mark>Medios de </mark>
						<mark>Pago</mark>
					</div>
				</div>
			</div>

			<div class="info-sidebar popups-medios-pago">
				<div class="popups-bg"></div>
				<div class="popups-info">
					<h3 class="title-susc">Medios de pago</h3>
					<div class="close-popups close-medios"><i class="fa fa-close"></i></div>
					<div class="cobertura-2">
                        <ul>
                            <li>Cheque</li>
                            <li>Tarjeta de Crédito</li>
                            <li>Transferencia Electrónica</li>
                            <li>Depósito bancario</li>
                            <li>Efectivo</li>
                            <li>WebPay</li>
                            <li>PAT (Pago automático tarjeta de crédito) <small>*Debe firmar mandato</small></li>
                        </ul>					
					</div>
				</div>
			</div>

		</div>	

	</div>	



		<!--?php
			/**
			 * woocommerce_sidebar hook.
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			//do_action( 'woocommerce_sidebar' );
		?-->
	

	

<?php get_footer( 'shop' ); ?>
