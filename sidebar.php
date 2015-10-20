<?php
/**
 * The sidebar containing the main widget area.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<div class="l-sidebar" role="complementary" >
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div><!-- l-sidebar -->
