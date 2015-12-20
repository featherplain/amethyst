<?php
/**
 * Template part for displaying single posts.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post__header">
		<?php the_title( '<h1 class="post__title">', '</h1>' ); ?>

		<div class="post__meta">
			<?php if ( is_sticky() ) : ?>
				<div class="metadata metadata--featured">
					<span><?php echo esc_html__( 'featured', 'amethyst' ); ?></span>
				</div>
			<?php endif; ?>
			<div class="metadata metadata--date">
				<span><?php the_time( get_option( 'date_format' ) ); ?></span>
			</div>
			<div class="metadata metadata--author">
				<span><?php echo get_the_author_meta( 'display_name' ); ?></span>
			</div>
		</div>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post__image"><?php the_post_thumbnail(); ?></div>
		<?php endif; ?>
	</header><!-- / .post__header -->

	<div class="post__content">
		<div class="post__editor">

			<?php the_content(); ?>

		</div>

		<?php
			wp_link_pages( array(
				'before' => '<p class="post__pager">' . esc_html__( 'Pages: ', 'amethyst' ),
				'after'  => '</p>',
			) );
		?>

	</div><!-- .post__content -->
	<footer class="post__footer">
	  <div class="post__meta post__meta--footer">

			<?php the_tags( '<div class="metadata metadata--tag">' , ',' , '</div>' ); ?>

			<?php // category
			$cats = get_the_category();
			$cat_html = '';
			foreach ( $cats as $cat) {
				$cat_html = '<div class="metadata metadata--category"><a href="' . get_category_link( $cat->cat_ID ) . '">' . $cat->name . '</a></div>';
			}
			?>
			<?php echo $cat_html; ?>

	  </div>
	</footer>
</article><!-- / #post-## .post -->

<?php the_post_navigation(); ?>

