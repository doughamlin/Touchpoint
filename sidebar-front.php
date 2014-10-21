<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage Touchpoint
 * @since Touchpoint 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'front-1' ) && ! is_active_sidebar( 'front-2' ) )
	return;

// If we get this far, we have widgets.
?>
<aside id="rail" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'front-1' ) ) : ?>
	<div class="first front-widgets">
		<?php dynamic_sidebar( 'front-1' ); ?>
	</div><!-- .first -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'front-2' ) ) : ?>
	<div class="second front-widgets">
		<?php dynamic_sidebar( 'front-2' ); ?>
	</div><!-- .second -->
	<?php endif; ?>
</aside><!-- #rail -->