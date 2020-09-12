<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VincentPritchard_Writing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vp_writing' ); ?></a>

	<header id="masthead" class="site-header container">
		<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php the_custom_logo();  ?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>

			<?php
			$vp_writing_description = get_bloginfo( 'description', 'display' );
			if ( $vp_writing_description || is_customize_preview() ) :
				?>
				<p class="site-description cursive"><?php echo $vp_writing_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</a><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'vp_writing' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
