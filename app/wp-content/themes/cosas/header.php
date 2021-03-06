<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">

        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="t3ZzTf56DVibMj83nCiwk60zQNI8En98nNOm-p7xpN0" />

        <?php
            wp_head();
        
            if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){
        ?>
                <style>
                    .color-repost{
                        fill:#fa4b2a;
                    }
                </style>
        <?php
            }
        ?>
<!--hello my name is Mauro-->
	</head>
        <body <?php body_class(); ?>>
        
         <?php if($GLOBALS['detectBlogs']['suscripciones']==$GLOBALS['detectBlogs']['blogId']){ ?>
         
         <?php }else{ ?>
         
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <?php } ?>
        
        <?php get_template_part('content-svg'); ?>

        <div id="menu-content" class="menu-list">
           <a href="<?php echo site_url();?>">
                <?php
                    if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){
                ?>
                        <svg  viewBox="0 0 759 262" class="menu-logo repost-bg">
                            <use xlink:href="#logo-repost" class="logo-menu repost"/>
                        </svg>
                <?php
                    }elseif($GLOBALS['detectBlogs']['lujo']==$GLOBALS['detectBlogs']['blogId']){
                ?>
                        <svg viewBox="0 0 792 268" class="lujo-bg">
                            <use xlink:href="#logo-lujo" class="logo-menu"/>
                        </svg>
                <?php
                    }elseif($GLOBALS['detectBlogs']['couture']==$GLOBALS['detectBlogs']['blogId']){
                ?>
                        <svg viewBox="0 0 792 268" class="lujo-bg">
                            <use xlink:href="#logo-couture" class="logo-menu"/>
                        </svg>
                <?php }else{ ?>
                        <svg viewBox="0 0 759 232" class="menu-logo">
                            <use xlink:href="#logo-cosas" class="logo-menu"/>
                        </svg>
                    
                <?php } ?>
            </a>
            <div class="menu">
                <?php html5blank_nav('header-menu'); ?>
            </div>

            <div class="redes">
                <ul>
                    <li><a href="https://www.facebook.com/revistacosas"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/RevistaCosas"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/revistacosas"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/user/CosasChile"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>

            <div class="network">
                <ul>
                    <li>
                        <a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['cosas']) ?>">
                            <svg viewBox="0 0 792 268">
                                <use xlink:href="#logo-cosas"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']) ?>">
                            <svg viewBox="0 0 792 268">
                                <use xlink:href="#logo-casas"/>
                            </svg>
                        </a>	
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['couture']) ?>">
                            <svg viewBox="0 0 792 268">
                                <use xlink:href="#logo-couture"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['lujo']) ?>">
                            <svg viewBox="0 0 792 268">
                                <use xlink:href="#logo-lujo"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['repost']) ?>">
                            <svg viewBox="0 0 792 268">
                                <use xlink:href="#logo-repost"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        
        <div class="search-content">
            
            <?php get_template_part('searchform'); ?>
            
        </div>
		<!-- wrapper -->
		<div id="page" class="site">

            <div class="search-content">
		
                <?php echo get_search_form(); ?>

            </div>
            <header id="masthead" class="site-header">

                <div class="logo-medio">
					<a href="<?php echo site_url();?>" title="Revista COSAS - Una revista internacional">
					<?php if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){ ?>
						<svg  viewBox="0 0 759 262" class="repost-bg">
							<use xlink:href="#logo-repost" class="logo-head repost"/>
						</svg>

					<?php
						}elseif($GLOBALS['detectBlogs']['lujo']==$GLOBALS['detectBlogs']['blogId']){
					?>
						<svg viewBox="0 0 792 268" class="lujo-bg">
							<use xlink:href="#logo-lujo" class="logo-menu"/>
						</svg>
					<?php
						}elseif($GLOBALS['detectBlogs']['couture']==$GLOBALS['detectBlogs']['blogId']){
					?>
						<svg viewBox="0 0 792 268" class="lujo-bg">
							<use xlink:href="#logo-couture" class="logo-menu"/>
						</svg>
					<?php }else{ ?>
						<svg  viewBox="0 0 759 262">
							<use xlink:href="#logo-cosas" class="logo-head"/>
						</svg>
					<?php } ?>
					</a>

					<div class="date hide">
						<span>
							<?php $nommes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); $nomdia = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"); $dia = date("j"); $mes = date("n"); $diasemana = date("w"); $hoy = $nomdia[$diasemana]." ".$dia." de ".$nommes[$mes-1]." del ".date('Y'); echo $hoy; ?>
						</span>
					</div>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <i class="fa fa-bars"></i>
                </nav><!-- #site-navigation -->

                <div class="main-search main-search-open">
                    <i class="fa fa-search"></i>
                </div>
                
                <div class="meta-info hide">
                    
                    <div class="redes">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/revistacosas"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/RevistaCosas"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/revistacosas"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/CosasChile"><i class="fa fa-youtube-play"></i></a
                            ></li>
                        </ul>
                    </div>
                    
                    <div class="susc-news2">
                    	
                    	<div class="newsletter">
                    		
                    		<div class="btnNews">
								Regístrate a nuestro <br>
								<strong>NEWSLETTER</strong>
							</div>
                    		
                    		<div class="floatNews hide">
                    			
                    			<div class="titNews">
									<span>Regístrate a nuestro</span>
									<br>
									<span>NEWSLETTER</span>
								</div>
								
								<div class="formNews">
									<p>suscríbete a nuestro newsletter y recibe todas nuestras noticias en tu <span>correo electronico</span></p>
									<form class="newsletter_form">

										<input type="text" placeholder="Nombre*" class="nombre_newsletter" required>
										<input type="email" placeholder="Email*" class="correo_newsletter" required>
										
										<input type="submit" name="enviar" value="Suscríbete" placeholder="Suscríbete" class="submit_news"/>
										<small>
											<span>*campos requeridos</span>
										</small>

									</form>
                  					<div class="form-send hide"></div>
                   				</div>
                    			
                    		</div>
                    		
                    	</div>
                    	<div class="suscripciones">
                    		
                    		<div class="btnSusc">
								Suscríbete a <br>
								<svg viewBox="0 0 759 232">
									<use xlink:href="#logo-cosas" class="logo-susc"/>
								</svg>
							</div>
                    		
                    		<div class="floatSusc hide">
                    			
                    			<div class="titNews">
									Suscríbete a
								</div>
								<div class="subNews">
									<svg viewBox="0 0 759 232">
										<use xlink:href="#logo-cosas" class="logo-susc"/>
									</svg>
								</div>

								<div class="btnNews"><a href="<?php echo get_site_url($GLOBALS['detectBlogs']['suscripciones']); ?>">¡QUIERO RECIBIR LA REVISTA!</a></div>
                    			
                    		</div>
                    	</div>
                    	
                    </div>
                    
                </div>

            </header><!-- #masthead -->
            
            <?php if(wp_is_mobile()){ ?>
            <div class="susc-news">
            	<div class="newsletter">
            		<a href="#" target="_self">
            			<span>
							registrate en el
							<strong>newsletter</strong>
						</span>
            		</a>
            	</div>
            	<div class="suscripciones">
            		<a href="#" target="_self">
						<span>
							suscribete a
												
							<svg viewBox="0 0 759 232">
								<use xlink:href="#logo-cosas" class="logo-susc"/>
							</svg>
						</span>	
					</a>
            	</div>
            </div>
			<div class="overlays-suscnews">
				<div class="susContent">
					
					<div class="titSus">
						<span>Regístrate a nuestro</span>
					</div>
					<div class="subSus">
						<span>NEWSLETTER</span>
					</div>
					<p>suscríbete a nuestro newsletter y recibe todas nuestras noticias en tu <span>correo electronico</span></p>
					<form class="formSus newsletter_form">

						<input type="text" placeholder="Nombre*" class="nombre_newsletter" required>
						<input type="email" placeholder="Email*" class="correo_newsletter" required>
						<input type="submit" name="enviar" value="Suscríbete" placeholder="Suscríbete" class="submit_news"/>
						<small>*campos requeridos</small>

					</form>
						
					<div class="form-send"></div>
					
				</div>
				<div class="newsContent">
					
					<div class="titNews">
						Suscríbete a
					</div>
					<div class="subNews">
						<svg viewBox="0 0 759 232">
							<use xlink:href="#logo-cosas" class="logo-susc"/>
						</svg>
					</div>
					
					<div class="btnNews"><a href="<?php echo get_site_url($GLOBALS['detectBlogs']['suscripciones']); ?>">¡QUIERO RECIBIR LA REVISTA!</a></div>
					
				</div>
			</div>
            <?php } ?>
            
            <?php if($GLOBALS['detectBlogs']['suscripciones']==$GLOBALS['detectBlogs']['blogId']&&wp_is_mobile()){ ?>
            
            <?php }else{
            	
            	if(is_singular('branded')&&wp_is_mobile()){
					
            	}else{ ?>
					<div class="last-content">
						<?php if(!wp_is_mobile()){ ?>
						<div class="nav-deskt">

							<?php html5blank_nav('header-menu'); ?>

							<div class="tools">

								<div class="main-search main-search-open">
									<i class="fa fa-search"></i>
								</div>
								<?php if($GLOBALS['detectBlogs']['suscripciones']==$GLOBALS['detectBlogs']['blogId']){ ?>

								<?php }else{ ?>
									<div id="view-lasts" class="lasts">

										<span>06</span>
										<p>nuevos articulos</p>

										<i class="fa fa-angle-down"></i>
									</div>
								<?php } ?>
							</div>

						</div>
						<?php } ?>

						<div class="main-last">

							<span>17</span>
							<p>nuevos articulos</p>

						</div>

						<div class="post-last">

							<ul class="rslides" id="slider3">
								<?php
									$args = array (
										'post_type' => array( 'post' ),
										'posts_per_page' => '17',
										'order' => 'DESC',
										'orderby' => 'date',
									);

									$query = new WP_Query( $args );

									if ( $query->have_posts() ) {
										while ( $query->have_posts() ) {
											$query->the_post();
											get_template_part( 'loop-last');
										}
									} else {
										echo 'No hay nada para mostrar';
									}
									wp_reset_postdata();
								?>
							</ul>

						</div>
					</div>
				<?php }
            } ?>
            
            <?php if(!wp_is_mobile()){ ?>
                <div class="last-content-desk">
                    <ul class="post-last-desk">
                        <?php 
                            // WP_Query arguments
                            $lastspage = (get_query_var('paged')) ? get_query_var('paged') : 1;

                            $args = array (
                                'post_status'            => 'publish',
                                'posts_per_page'         => '6',
                                'order'                  => 'DESC',
                                'orderby'                => 'date',
                                'paged'                  => $lastspage
                            );  

                            // The Query
                            $lasts = new WP_Query( $args );

                            // The Loop
                            if ( $lasts->have_posts() ) {
                                while ( $lasts->have_posts() ) {
                                    $lasts->the_post();
                                        get_template_part('loop-lasts');
                                }
                            } else {
                                // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_postdata();
                            global $lastspage;

                            $big = 999999999;

                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $lastspage->max_num_pages,
                                'prev_text'    => '<i class="fa fa-angle-left"></i> anterior',
                                'next_text'    => 'siguiente <i class="fa fa-angle-right"></i>'
                            ) );
                        ?>
                    </ul>
                </div>
            <?php } ?>
            
            
            
           <div id="content" class="site-content">