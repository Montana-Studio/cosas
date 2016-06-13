<?php
/* Template Name: Suscripcion */
get_header();
?>
<section class="page-content">
            <div class="breadcrumbs">
    
                <?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

            </div>
            
            <div class="post-list">
            <main>
                  <!-- section -->
                <section>


                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div id="post-<?php the_ID(); ?>" <?php post_class('empty-section'); ?>>

                            <div class="inside-empty-section">
                                <h2>¡Transacción realizada con éxito!</h2>
                                <a class="button" href="<?php echo site_url(); ?>">volver al home</a>  
                            </div>

                        </div>

                    </article>
                    <!-- /article -->

                <?php endwhile; ?>

                <?php else: ?>

                    <!-- article -->
                    <article>

                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                    </article>
                    <!-- /article -->

                <?php endif; ?>

                </section>
                <!-- /section -->
            </main>
           
                
            </div>
            
            <div class="pagination">
                <?php get_template_part('pagination-main'); ?>
            </div>
            
    </section>
    
<?php get_footer(); ?>
