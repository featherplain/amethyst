<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package amethyst
 * @author featherplain
 * @link http://asknode.net/
 * @license GPLv2 or later
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post--page' ); ?>>
	<header class="post__header">
		<?php the_title( '<h1 class="post__title post__title--page">', '</h1>' ); ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post__image"><?php the_post_thumbnail(); ?></div>
		<?php endif; ?>
	</header><!-- / .post__header -->

	<div class="post__content">

		<?php the_content(); ?>

	</div><!-- .post__content -->
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'amethyst' ),
			'after'  => '</div>',
		) );
	?>
</article><!-- / #post-## .post -->

