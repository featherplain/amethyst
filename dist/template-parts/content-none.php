<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>

<section class="not-found">
	<h2 class="not-found__title"><?php esc_html_e( 'Nothing Found', 'amethyst' ); ?></h2>
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'amethyst' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'amethyst' ); ?></p>
		<?php get_search_form(); ?>

	<?php else : ?>

		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'amethyst' ); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</section><!-- .not-found -->
