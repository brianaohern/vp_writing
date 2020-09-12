<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VincentPritchard_Writing
 */

?>

	<footer id="colophon" class="site-footer container">
		<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div id="footer-widgets" class="footer-widgets widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div><!-- #footer-widgets -->
		<?php endif; ?>
		<div class="site-info">
			<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
				<div class="footer-menu">
					<div id="more-by">More by <a href="https://vincentpritchard.com" target="_blank">Vincent Pritchard</a>:</div>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'menu_id'        => 'footer-menu',
							)
						);
					?>
				</div>
			<?php endif; ?>
			<div id="website-creator">
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Website created by %1$s', 'vp_writing' ), '<a href="https://brianaohern.com" target="_blank">Briana O\'Hern</a>' );
				?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
