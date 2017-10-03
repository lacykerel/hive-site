<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header>
		<div class="brand-container">
			<div class="brand"><a href="/"><img src=""/> Hive</a></div>
		</div>
		<div class="menu-toggle">
			<button id="open-button" class="pull-right"><span><img class="comb" src="<?php bloginfo('template_directory');?>/assets/img/comb.svg"/></span>Menu</button>
		</div>
		<div class="menu-wrap">
			<div class="menu nav-contain hide">
				<a href="#" class="close-button" id="close-button">Close Button</a>
				<nav id="site-navigation" class="main-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary-menu',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="content-wrap site-content">
		<div class="content">
