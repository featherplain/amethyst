<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post--page' ); ?>>
	<header class="post__header">
		<?php the_title( '<h1 class="post__title">', '</h1>' ); ?>
	</header><!-- / .post__header -->

	<div class="post__content">
		<div class="post__editor">

			<?php the_content(); ?>

		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'othello' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post__content -->
</article><!-- / #post-## .post -->

