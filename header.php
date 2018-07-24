<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package CustomBooths
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'custombooths' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">

				<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	 <?php
	 					wp_nav_menu( array(
	 						'theme_location' => 'primary',
	 						'menu_id'        => 'primary-menu',
	 						'menu_class' 		 => 'nav-menu',
	 					) );
	 					?>
 </div>
</nav><!-- #site-navigation -->
				<?php

				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$custombooths_description = get_bloginfo( 'description', 'display' );
					if ( $custombooths_description || is_customize_preview() ) :
						?>

					<?php endif; ?>
				</div><!-- .site-branding -->

			</header><!-- #masthead -->

			<div id="content" class="site-content" style="background-image: url(<?php header_image(); ?>)">
				<strong><p class="site-description" ><?php echo $custombooths_description; /* WPCS: xss ok. */ ?></p></strong>
				<p class="site-decoration-text">choose from a range of pre-built packages for all events and parties or buil your own.</p>
				<button class="site-description-button">packages</button>
			</div>
