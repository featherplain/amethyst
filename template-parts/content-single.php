<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package othello
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
	<header class="post__header">
		<?php the_title( '<h1 class="post__title">', '</h1>' ); ?>

		<div class="post__meta">
			<div class="post__date">
				<time><?php the_time( get_option( 'date_format' ) ); ?></time>
			</div>
			<div class="post__author">
				<span><?php echo get_the_author_meta( 'display_name' ); ?></span>
			</div>
		</div><!-- .post__meta -->

	</header><!-- / .post__header -->

	<div class="post__content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'othello' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post__content -->
	<footer class="post__footer">
	  <div class="post__meta post__meta--footer">
	    <div class="post__tag"><?php the_tags(); ?></div>
	    <div class="post__comment"><a href="#">No Comments</a></div>
	  </div>
	</footer>
</article><!-- / #post-## .post -->

