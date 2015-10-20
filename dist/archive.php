<?php
/**
 * The main template file.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */

get_header(); ?>

	<?php the_archive_title( '<h2 class="page-title">', '</h2>' ); ?>

	<?php get_template_part( 'index' ); ?>

<?php get_footer(); ?>
