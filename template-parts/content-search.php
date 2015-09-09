<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package othello
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post post--search' ); ?>>
	<a href="<?php the_permalink(); ?>" rel="bookmark">
		<h2 class="post__title"><?php the_title(); ?></h2>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="post__meta">
			<div class="post__date">
				<time><?php the_time( get_option( 'date_format' ) ); ?></time>
			</div>
			<div class="post__author">
				<span><?php echo get_the_author_meta( 'display_name' ); ?></span>
			</div>
		</div><!-- .post__meta -->
		<?php endif; ?>

		<div class="post__summary">
			<?php the_excerpt(); ?>
		</div><!-- / .post__summary -->
	</a>
</article><!-- / #post-## .post -->

