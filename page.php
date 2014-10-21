<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Touchpoint
 * @since Touchpoint 1.0
 */

get_header(); ?>

	<main class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
		
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>