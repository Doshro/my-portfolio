<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<script src="https://kit.fontawesome.com/6b35074062.js" crossorigin="anonymous"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- google font for homepage hero text-->
	<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Roboto:wght@100;300;500;700&display=swap" rel="stylesheet">
	<!-- font for homepage heading text -->
	<link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Caveat&family=Courgette&family=Merienda&family=Oleo+Script:wght@400;700&family=Roboto:wght@100;300;500;700&display=swap" rel="stylesheet">
	<!-- font for gratitude list -->
	<link href="https://fonts.googleapis.com/css2?family=Aladin&family=Amaranth&family=Caveat&family=Charm&family=Courgette&family=Fugaz+One&family=Italianno&family=Merienda&family=Oleo+Script:wght@400;700&family=Podkova&family=Roboto:wght@100;300;500;700&display=swap" rel="stylesheet">
	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'travelsite' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
			</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'travelsite' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
