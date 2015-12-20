<?php
/**
 * Template part for displaying posts.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>

<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" class="post__link">
		<?php the_title( '<h2 class="post__title post__title--archive">', '</h2>' ); ?>

		<div class="post__meta">
			<div class="metainfo metainfo--date">
				<span><?php the_time( get_option( 'date_format' ) ); ?></span>
			</div>
			<div class="metainfo metainfo--author">
				<span><?php echo get_the_author_meta( 'display_name' ); ?></span>
			</div>
		</div>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post__image"><?php the_post_thumbnail(); ?></div>
		<?php endif; ?>
		<div class="post__excerpt">
			<?php the_excerpt(); ?>
		</div>
	</a>
</article>
