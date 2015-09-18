<?php
/**
 * Template Name: Single Column Page
 *
 * @since othello
 */

get_header(); ?>

<div class="l-primary">
	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
	?>
</div><!-- / .l-primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
