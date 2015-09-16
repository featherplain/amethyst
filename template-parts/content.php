<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package othello
 */

?>

<article class="post">
	<a href="<?php the_permalink(); ?>" class="post__link">
		<?php the_title( '<h2 class="post__title post__title--archive">', '</h2>' ); ?>

		<div class="post__meta">
			<div class="metainfo metainfo--date">
				<time><?php the_time( get_option( 'date_format' ) ); ?></time>
			</div>
			<div class="metainfo metainfo--author">
				<span><?php echo get_the_author_meta( 'display_name' ); ?></span>
			</div>
		</div>
    <?php // post thumbnail
		$size = 'thumb744x400';
		the_post_thumbnail( $size, array( 'class'	=> 'attachment-' . $size . ' post__image' ) );
		?>
		<div class="post__excerpt">
			<?php the_excerpt(); ?>
		</div>
	</a>
</article>
