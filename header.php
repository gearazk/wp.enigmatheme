<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
		<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" />
	<?php } ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div>
	<div class="navigation_menu "  data-spy="affix" data-offset-top="115" id="enigma_nav_top">

		<!-- Header Section -->
		<div class="header_section hd_cover" <?php if ( has_header_image() ) { ?> style='background-image: url("<?php header_image(); ?>")' <?php  } ?> >
			<div class="container" >
				<!-- Logo & Contact Info -->
				<div class="row ">
					<?php if($wl_theme_options['title_position']) { ?>
						<div class="col-md-6 col-sm-12 wl_rtl" >
							<div claSS="logo logocenter">
								<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									<?php if($wl_theme_options['upload_image_logo']){ ?>
										<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
									<?php } else {
										echo get_bloginfo('name');
									} ?>
								</a>
								<p><?php //bloginfo( 'description' ); ?></p>
							</div>
						</div>
					<?php } else { ?>
						<div class="col-md-6 col-sm-12 wl_rtl" >
							<div claSS="logo">
								<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									<?php if($wl_theme_options['upload_image_logo']){ ?>
										<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
									<?php } else {
										echo get_bloginfo('name');
									} ?>
								</a>
								<p><?php //bloginfo( 'description' ); ?></p>
							</div>
						</div>
					<?php } ?>
					<ul class="social">
						<?php if (!is_user_logged_in()) { ?>
						<li class="login_btn"  ><a href="<?php echo wp_login_url() ?>"><i class="fa fa-address-card"></i> LOGIN</a></li>
						<?php }?>
					</ul>

				</div>
				<!-- /Logo & Contact Info -->
			</div>

		</div>
		<!-- /Header Section -->
		<!-- Navigation  menus -->
		<span id="header_shadow"></span>
		<div class="container navbar-container" >
			<nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">

						<span class="sr-only"><?php _e('Toggle navigation','enigma');?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="menu" class="collapse navbar-collapse ">
					<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'weblizar_fallback_page_menu',
							'walker' => new weblizar_nav_walker(),
						)
					);	?>
				</div>
			</nav>
		</div>
	</div>