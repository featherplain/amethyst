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
		<div class="post__image"><img src="http://placehold.jp/1500x590.png" alt=""></div>
	</header><!-- / .post__header -->

	<div class="post__content">
		<div class="editor-style">

			<?php the_content(); ?>

		</div>

		<?php
			wp_link_pages( array(
				'before'					 => '<p class="post__pager">' . esc_html__( 'Pages: ', 'othello' ),
				'after'  					 => '</p>',
			) );
		?>

	</div><!-- .post__content -->
	<footer class="post__footer">
	  <div class="post__meta post__meta--footer">

			<?php the_tags( '<div class="post__tag">' , ',' , '</div>' ); ?>

			<?php // category
			$cats = get_the_category();
			$cat_html = '';
			foreach ( $cats as $cat) {
				$cat_html = '<div class="post__category"><a href="' . get_category_link( $cat->cat_ID ) . '">' . $cat->name . '</a></div>';
			}
			?>
			<?php echo $cat_html; ?>

	  </div>
	</footer>
</article><!-- / #post-## .post -->

<?php the_post_navigation(); ?>

