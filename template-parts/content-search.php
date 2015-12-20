<?php
/**
 * Template part for displaying results in search pages.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" rel="bookmark" class="post__link">
		<?php the_title( '<h2 class="post__title post__title--archive">', '</h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="post__meta">
			<?php if ( is_sticky() ) : ?>
				<div class="metadata metadata--featured">
					<span><?php echo esc_html__( 'featured', 'amethyst' ); ?></span>
				</div>
			<?php endif; ?>
			<div class="metadata metadata--date">
				<time><?php the_time( get_option( 'date_format' ) ); ?></time>
			</div>
			<div class="metadata metadata--date">
				<span><?php echo get_the_author_meta( 'display_name' ); ?></span>
			</div>
		</div>
		<?php endif; ?>

		<div class="post__excerpt">
			<?php the_excerpt(); ?>
		</div>
	</a>
</article><!-- / #post-## .post -->

