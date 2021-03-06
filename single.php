<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Touchpoint
 * @since Touchpoint 1.0
 */

get_header(); ?>

	<main class="site-content" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content' ); ?>

			<nav class="nav-single">
				<h3 class="assistive-text"><?php _e( 'Post navigation', 'touchpoint' ); ?></h3>
				<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'touchpoint' ) . '</span> %title' ); ?></span>
				<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'touchpoint' ) . '</span>' ); ?></span>
			</nav><!-- .nav-single -->

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>
		
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>