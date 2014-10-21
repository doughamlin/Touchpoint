<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Touchpoint
 * @since Touchpoint 1.0
 */

get_header(); ?>

	<main class="site-content" role="main">	

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Sorry, the page could not be found.', 'touchpoint' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'No page exists at this URL. You may have mistyped the URL. Try searching:', 'touchpoint' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

	</main>

<?php get_footer(); ?>