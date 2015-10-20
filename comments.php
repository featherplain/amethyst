<?php
/**
 * The template for displaying comments.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments__title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'amethyst' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav class="comments__nav" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'amethyst' ); ?></h2>

			<div class="comments__nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'amethyst' ) ); ?></div>
			<div class="comments__nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'amethyst' ) ); ?></div>

		</nav><!-- / .comments__nav -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="comments__list">
			<?php
				wp_list_comments( array(
					'avatar_size' => '48px',
					'style'       => 'ul',
					'short_ping'  => true,
				) );
			?>
		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav class="comments__nav" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'amethyst' ); ?></h2>

				<div class="comments__nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'amethyst' ) ); ?></div>
				<div class="comments__nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'amethyst' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- / .comment__nav -->
		<?php endif; // Check for comment navigation. ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="comments__text"><?php esc_html_e( 'Comments are closed.', 'amethyst' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- / .comments -->
