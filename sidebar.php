<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package amethyst
 * @author featherplain
 * @link http://asknode.net/
 * @license GPLv2 or later
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<div class="l-sidebar" role="complementary" >
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div><!-- l-sidebar -->
