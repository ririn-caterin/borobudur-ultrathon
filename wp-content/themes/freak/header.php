<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 * @package freak
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav id="mobile-static-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'static' ) ); ?>
</nav>

<?php if ( !get_theme_mod('freak_disable_static_bar_mobile') ) : ?>
	<button class="mobile-toggle-button"><i class="fa fa-bars"></i></button>

<?php endif; ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'freak' ); ?></a>
	<div id="jumbosearch">
		<span class="fa fa-remove closeicon"></span>
		<div class="form">
			<?php get_search_form(); ?>
		</div>
	</div>


	<?php if ( !get_theme_mod('freak_disable_static_bar') ) : ?>
	<div id="static-bar">
		<div id="static-logo">
			<?php if ( get_theme_mod('freak_logo') != "" ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod('freak_logo') ); ?>"></a>
			<?php else : ?>
					<h1 class="site-title title-font"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>
		</div>


		<div id="static-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'static' ) ); ?>
		</div>

		<a id="searchicon" >
			<i class="fa fa-search"></i>
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="header-mobile site-header <?php do_action('freak_header_class'); ?>" role="banner" <?php do_action('freak_parallax_options'); ?>>
		<div class="layer">
			<div class="container">
				<div class="row padding20">
					<div class="col-xs-2">
						
					</div>
					<div class="col-xs-6">
						<a href="http://localhost/borobudur-ultrahon/"><img class="logoku" src="http://localhost/borobudur-ultrathon/wp-content/uploads/2015/12/logoku.png"></a>
					</div>
					<div class="col-xs-4">
						<a class="languen" href="<?php echo qtranxf_get_url_for_language('', 'id', true); ?>" ><img class="icon-bahasa-mobile" src="http://localhost/borobudur-ultrathon/wp-content/uploads/2016/09/eng.png"></a>
						<a class="languen" href="<?php echo qtranxf_get_url_for_language('', 'en', true); ?>" ><img class="icon-bahasa-mobile-eng" src="http://localhost/borobudur-ultrathon/wp-content/uploads/2016/09/eng.png"></a>
					</div>
				</div>
			</div>	<!--container-->
		</div>
	</header><!-- #masthead -->

	<header id="masthead" class="header-dekstop site-header <?php do_action('freak_header_class'); ?>" role="banner" <?php do_action('freak_parallax_options'); ?>>
		<div class="layer">
			<div class="container-fluid">
				<div class="row padding1010">
					<div class="col-md-2 col-xs-2">
						<a href="http://localhost/borobudur-ultrahon/"><img class="logoku" src="http://localhost/borobudur-ultrathon/wp-content/uploads/2015/12/logoku.png"></a>
					</div>
					<div class="col-md-8 col-xs-8">
						<div class="row">
							<nav id="top-menu" class="style-top-menu">
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
							</nav>
						</div>
					</div>
					<div class="col-md-2 col-xs-2">
						<div class="row dua-bahasa">
							<a class="languen" href="<?php echo qtranxf_get_url_for_language('', 'id', true); ?>" ><img class="icon-bahasa" src="http://localhost/borobudur-ultrathon/wp-content/uploads/2016/09/ind.png"></a>
							<a class="languen" href="<?php echo qtranxf_get_url_for_language('', 'en', true); ?>" ><img class="icon-bahasa-eng" src="http://localhost/borobudur-ultrathon/wp-content/uploads/2016/09/eng.png"></a>
						</div>
						<!--<div class="row">
							<div class="input-group">
						      <input type="text" class="form-control" placeholder="Search">
						      <span class="input-group-btn" >
						        <button class="btn btn-default" type="button"><span style="color:#000;" class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						      </span>
						    </div>
						</div>-->
					</div>
				</div>
			</div>	<!--container-->

			<!--<div id="top-bar" style="z-index:2;">
				<div class="container">
					<nav id="top-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>
				</div>
			</div> -->
		</div>
	</header><!-- #masthead -->


	<?php get_template_part('slider', 'nivo'); ?>
	<?php get_template_part('featured', 'posts'); ?>

	<div class="container-fluid">

		<div id="content" class="site-content container-fluid">
