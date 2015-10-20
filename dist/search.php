<?php
/**
 * The template for displaying search results pages.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */

get_header(); ?>

	<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'amethyst' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	<div class="l-primary">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- / .l-primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
