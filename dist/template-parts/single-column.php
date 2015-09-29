<?php
/**
 * Template Name: Single column Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package othello
 */

get_header(); ?>

	<div class="l-primary l-primary--single-column">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

	</div><!-- / .l-primary .l-primary--single-column -->

<?php get_footer(); ?>
