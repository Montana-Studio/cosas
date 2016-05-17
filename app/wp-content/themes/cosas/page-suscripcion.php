<?php
/* Template Name: Suscripcion */
get_header();
?>
<section class="page-content">
            <div class="breadcrumbs">

                <?php the_breadcrumb(); ?>

            </div>
            <h1 class="titus"><?php the_title(); ?></h1>
            
            <div class="post-list">
            
            <?php if(is_page('exito')){ ?>
                       
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-pag'); ?>>

                <?php the_title(); the_content(); ?>

                </article>
            <?php }elseif(is_page('carro')){ ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-pag'); ?>>

                <?php the_content(); ?>

                </article>
            <?php }else{ ?>
               <p>no  hay nada para mostrar</p>
            <?php } ?>
                
            </div>
            
            <div class="pagination">
                <?php get_template_part('pagination-main'); ?>
            </div>
            
		</section>
		
<?php get_footer(); ?>