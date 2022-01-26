<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

	<!-- Meta
	============================================= -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

	<meta name="author" content="Larry Martinez">
	<!-- description -->
	<meta name="description"
		content="El Sistema de Gestión de Seguridad y Salud en el Trabajo (SG-SST)">
	<!-- keywords -->
	<meta name="keywords"
		content="seguridad,legal,abogados,salud,trabajo,comunicacion,derecho">

	<!-- Stylesheets
	============================================= -->
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="<?php echo IMAGESPATH; ?>/general-elements/favicon/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo IMAGESPATH; ?>/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo IMAGESPATH; ?>/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo IMAGESPATH; ?>/general-elements/favicon/apple-touch-icon-114x114.png">
	<!-- Title
	============================================= -->
	<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name');?></title>

	<?php wp_head();?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">



</head>

<body class="layout-2" <?php body_class();?>>
	<div id="scroll-progress">
		<div class="scroll-progress"><span class="scroll-percent"></span></div>
	</div>

	<!-- Whatsapp -->
	<!-- <div id="myButton"></div> -->




	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-bar-1" class="header-bar">

				<div class="header-bar-wrap">

					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="row bar-top-header">
									<div class="col-md-6">
										<div class="info-top">
											<ul class="info-list">
												<li><i class="fas fa-envelope"></i><a
														href="mailto:contacto@comsejur.com"> contacto@comsejur.com</a>
												</li>
												<li><i class="fas fa-clock"></i> Lunes - Viernes: 8.00 am - 7.00pm</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<div class="social-top">
											<ul class="social-list text-right">
												<li><a href="https://www.facebook.com/comsejur" target="_self"><i
															class="fab fa-facebook-f"></i></a></li>
												<li><a href="https://twitter.com/comsejur" target="_self"><i
															class="fab fa-twitter"></i></a>
												</li>
												<li><a href="https://www.instagram.com/comsejursas/" target="_self"><i
															class="fab fa-instagram"></i></a></li>
												<li><a href="www.linkedin.com/in/comsejur" target="_self"><i
															class="fab fa-linkedin-in"></i></a></li>
												<li><a href="https://www.tiktok.com/es/" target="_self"><i
															class="fab fa-tiktok"></i></a>
												</li>
												<li><a href="https://www.youtube.com/channel/UCoDlg9yCME2OF1-dnVkGSTA"
														target="_self"><i class="fab fa-youtube"></i></a></li>
											</ul>
										</div>
									</div>
								</div>



								<div class="hb-content">
									<a class="logo logo-header" href="index.php">
										<img src="<?php echo IMAGESPATH; ?>/files/logo-white-comsejur.svg" alt="Comsejur SAS">
										<h3><span class="colored">Comsejur SAS</span></h3>
									</a><!-- .logo end -->
									<div class="hb-meta">
                                    <?php wp_nav_menu(array(
                                            'theme_location' => 'main-menu',
                                            'menu_id' => 'menuNvigation',
                                            'menu_class' => 'menu-navigation'
                                        ));?>
									</div><!-- .hb-meta end -->
								</div><!-- .hb-content end -->


							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

					<div class="menu-mobile">
						<a class="logo logo-header" href="index.php">
							<img src="<?php echo IMAGESPATH; ?>/files/logo-color-comsejur.png" alt="Comsejur SAS">
						</a><!-- .logo end -->

						<div class="navigation-mobile">
							<a role="button" id="btnMobile" class="btn-mobile" href="#"><i class="fas fa-bars"></i></a>
							<nav id="navigationMobile" class="nav-mobile">
								<li><a href="#">INICIO</a></li>
								<li><a href="#">NUESTROS SERVICIOS</a></li>
								<li><a href="#">QUIENES SOMOS</a></li>
								<li><a href="#">CONTACTO</a></li>
								<div class="social-top-2">
									<ul class="social-list">
										<li><a href="https://www.facebook.com/comsejur" target="_self"><i
													class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://twitter.com/comsejur" target="_self"><i
													class="fab fa-twitter"></i></a>
										</li>
										<li><a href="https://www.instagram.com/comsejursas/" target="_self"><i
													class="fab fa-instagram"></i></a></li>
										<li><a href="www.linkedin.com/in/comsejur" target="_self"><i
													class="fab fa-linkedin-in"></i></a></li>
										<li><a href="https://www.tiktok.com/es/" target="_self"><i
													class="fab fa-tiktok"></i></a>
										</li>
										<li><a href="https://www.youtube.com/channel/UCoDlg9yCME2OF1-dnVkGSTA"
												target="_self"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</nav>

						</div><!-- .hb-meta end -->

					</div><!-- .menu-mobile end -->

				</div><!-- .header-bar-wrap -->

			</div><!-- #header-bar-1 end -->

		</header><!-- #header end -->