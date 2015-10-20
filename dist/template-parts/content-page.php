<?php
/**
 * Template part for displaying page content in page.php.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post--page' ); ?>>
	<header class="post__header">
		<?php the_title( '<h1 class="post__title post__title--page">', '</h1>' ); ?>
		<?php // post thumbnail
			$size = 'thumb774x400';
			the_post_thumbnail( $size, array( 'class'	=> 'attachment-' . $size . ' post__image' ) );
		?>
	</header><!-- / .post__header -->

	<div class="post__content">
		<div class="post__editor">

			<?php the_content(); ?>

		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'amethyst' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post__content -->
</article><!-- / #post-## .post -->

