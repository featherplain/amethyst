<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package othello
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<div class="l-sidebar" role="complementary" >
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div><!-- l-sidebar -->
