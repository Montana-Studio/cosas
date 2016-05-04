<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon_casas.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		
	<meta property="og:title" content="Mediatrends Group" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://mediatrendsgroup.com/" />
	<meta property="og:image" content="http://mediatrendsgroup.com/img/mediatrends-group.jpg" />
	<meta property="og:description" content="Somos un holding enfocado en generar valor integral para marcas en ecosistemas digitales." />
	<meta property="og:site_name" content="Mediatrends Group" />

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	
	<div class="logotipos-all">
		<?php get_template_part('iconos'); ?>
	</div>
	
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<div class="menuCasas menuMobile">

						<!-- logo -->
						<div class="logo">
							<a href="<?php echo get_site_url(4); ?>"> 
								<svg viewBox="0 0 792 268">
		                            <use xlink:href="#casas-logotype"/>
		                        </svg>
							</a>
						</div>
						<!-- /logo -->

						<div class="mobile-icon-menu">
							<i class="fa fa-bars"></i>
						</div> 

						<div class="rrss-desktop">
							<ul>
								<li><div class="current-date"><?php $nommes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); $nomdia = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"); $dia = date("j"); $mes = date("n"); $diasemana = date("w"); $hoy = $nomdia[$diasemana]." ".$dia." de ".$nommes[$mes-1]." del ".date(Y); echo $hoy; ?></div></li>  
								<li><a target="_blank" href="https://www.facebook.com/RevistaCASAS/"><i class="fa fa-facebook"></i></a></li>
			            		<li><a target="_blank" href="https://twitter.com/revista_casas"><i class="fa fa-twitter"></i></a></li>
			            		<li><a target="_blank" href="https://www.instagram.com/revistacasas/"><i class="fa fa-instagram"></i></a></li>
			            		<li><a target="_blank" href="https://www.youtube.com/user/revistacosas"><i class="fa fa-youtube-play"></i></a></li> 
							</ul>
						</div>

						<!-- nav -->
						<div class="navegacion-home">
							<nav class="nav" role="navigation">
								<div class="desktop-nav">
									<?php html5blank_nav(); ?> 
								</div>
							</nav> 
							<div class="buscar-home">
								<i class="fa fa-search"></i>
							</div>
							<div class="buscador-open">
								<div class="buscador-desk">
									<div class="close-search">cerrar buscador <i class="fa fa-close"></i> </div>
									<div class="search-formulario">
										<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
											<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Buscar', 'html5blank' ); ?>">
											<button class="search-submit" type="" role="button"><?php _e( '', 'html5blank' ); ?><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /nav -->

					</div>

					<div class="MenuMobile-Open">
						<div class="header-MenuMobile">
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<svg viewBox="0 0 792 268">
			                            <use xlink:href="#casas-logotype"/>
			                        </svg>
								</a>
							</div>
							<div class="mobile-icon-menu">
								<i class="fa fa-bars"></i>
							</div>
						</div>
						<div class="search-menu-mob">
							
								<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
									<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Buscar', 'html5blank' ); ?>">
									<button class="search-submit" type="" role="button"><?php _e( '', 'html5blank' ); ?><i class="fa fa-search"></i></button>
								</form>
						</div>
						<div class="menu-mob">
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
						</div>
						<div class="follow-us">
							<ul>
								<li class="title-li"><p>Siguenos en</p></li>
								<li><a target="_blank" href="https://www.facebook.com/RevistaCASAS/"><i class="fa fa-facebook"></i></a></li>
			            		<li><a target="_blank" href="https://twitter.com/revista_casas"><i class="fa fa-twitter"></i></a></li>
			            		<li><a target="_blank" href="https://www.instagram.com/revistacasas/"><i class="fa fa-instagram"></i></a></li>
			            		<li><a target="_blank" href="https://www.youtube.com/user/revistacosas"><i class="fa fa-youtube-play"></i></a></li> 
							</ul>
						</div>
						<div class="logotypes">
							<ul>
								<li>
									<a target="_blank" href="<?php echo get_site_url(1); ?>">
										<svg viewBox="0 0 792 268">
				                            <use xlink:href="#cosas-logotype"/>
				                        </svg>
									</a>
								</li>
								<li> 
									<a target="_blank" href="<?php echo get_site_url(4); ?>">
										<svg viewBox="0 0 792 268">
				                            <use xlink:href="#casas-logotype"/>
				                        </svg>
									</a>	
								</li>
								<li>
									<a target="_blank" href="http://www.cosas.com/couture/">
										<svg viewBox="0 0 792 268">
				                            <use xlink:href="#cosascouture-logotype"/>
				                        </svg>
									</a>
								</li>
								<li>
									<a target="_blank" href="http://www.cosas.com/?post_type=lujo">
										<svg viewBox="0 0 792 268">
				                            <use xlink:href="#cosaslujo-logotype"/>
				                        </svg>
									</a>
								</li>
								<li>
									<a target="_blank" href="http://www.cosas.com/repost/">
										<svg viewBox="0 0 792 268">
				                            <use xlink:href="#cosasrepost-logotype"/>
				                        </svg>
									</a>
								</li>
							</ul>
						</div>
					</div>

			</header>
			<!-- /header -->
