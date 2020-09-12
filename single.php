<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package VincentPritchard_Writing
 */

get_header();
?>
<div class="content-wrapper">
	<div class="container <?php if ( is_active_sidebar( 'sidebar' ) ) { echo 'has-sidebar'; } ?>">
		<main id="primary" class="site-main" >

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

	<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>
