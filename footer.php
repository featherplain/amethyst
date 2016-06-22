<?php
/**
 * The template for displaying the footer.
 *
 * @package amethyst
 * @author featherplain
 * @link http://asknode.net/
 * @license GPLv2 or later
 */

if ( ! is_active_sidebar( 'footer-widgets' ) ) :

?>

		</div><!-- /.l-main -->

		<footer role="contentinfo" class="l-footer">

			<div class="footer-widgets">
				<div class="footer-widgets__inner">

						<?php dynamic_sidebar( 'footer-widgets' ); ?>

				</div>
			</div><!-- / .footer-widgets -->

			<div class="siteinfo">
				<div class="siteinfo__inner">
					<p id="credit" class="siteinfo__credit">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'amethyst' ), 'WordPress' ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'amethyst' ), 'WordPress' ); ?></a>
						<span class="siteinfo__sep">&nbsp;|&nbsp;</span>
						<a href="<?php echo esc_url( __( 'http://asknode.net/', 'amethyst' ), 'featherplain' ); ?>"><?php printf( esc_html__( 'Theme by %s', 'amethyst' ), 'featherplain' ); ?></a>
					</p>
					<div class="siteinfo__social">
						<nav class="snav">
							<?php
							wp_nav_menu( array(
									'theme_location' => 'social_nav',
									'container'      => false,
									'items_wrap'     => '<ul id="%1$s" class="snav__list">%3$s</ul>',
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>',
								)
							);
							?>
					  </nav>
					</div>
					<p id="copy" class="siteinfo__copy">
						<?php echo esc_html( '&copy;&nbsp;' . date( 'Y' ) . '&nbsp;' . get_bloginfo( 'name' ) ); ?>
					</p>
				</div>
			</div><!-- / .siteinfo -->
		</footer><!-- / .l-footer -->

	</div><!-- /.l-container -->

<?php
endif;
?>
<?php wp_footer(); ?>

</body>
</html>
