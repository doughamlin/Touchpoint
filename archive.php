<?php
/**
 * The template for displaying Archive pages.
 *
 * @package WordPress
 * @subpackage Touchpoint
 * @since Touchpoint 1.0
 */

get_header(); ?>

	<main class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'touchpoint' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'touchpoint' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'touchpoint' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'touchpoint' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'touchpoint' ) ) . '</span>' );
					else :
						_e( 'Archives', 'touchpoint' );
					endif;
				?></h1>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content' );

			endwhile;

			touchpoint_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>