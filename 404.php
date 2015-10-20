<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */

get_header(); ?>

<div class="l-primary">
	<section class="not-found">

		<h2 class="not-found__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'amethyst' ); ?></h2>
		<div class="not-found__content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'amethyst' ); ?></p>

			<?php get_search_form(); ?>

			<?php the_widget( 'WP_Widget_Recent_Posts', 'dropdown=1' ); ?>

			<?php the_widget( 'WP_Widget_Categories', 'dropdown=1' ); ?>

			<?php
				/* translators: %1$s: smiley */
				$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'amethyst' ), convert_smilies( ':)' ) ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
			?>

			<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

		</div><!-- / .not-found__content -->
	</section><!-- / .not-found -->
</div><!-- / .l-primary -->

<?php get_footer(); ?>
