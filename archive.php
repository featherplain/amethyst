<?php
/**
 * The main template file.
 *
 * @package amethyst
 * @author featherplain
 * @link http://asknode.net/
 * @license GPLv2 or later
 */

get_header(); ?>

	<?php the_archive_title( '<h2 class="page-title">', '</h2>' ); ?>

	<?php get_template_part( 'index' ); ?>

<?php get_footer(); ?>
