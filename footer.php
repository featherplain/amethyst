<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package othello
 */

if ( ! is_active_sidebar( 'footer-widgets' ) )

?>

		</div><!-- /.l-main -->

		<footer role="contentinfo" class="l-footer">

			<div class="footer-widgets">
				<div class="footer-widgets__inner">

						<?php dynamic_sidebar( 'footer-widgets' ); ?>

				</div>
			</div><!-- / .footer-widgets -->

      <div class="copyright">
        <div class="copyright__inner">
        	<p class="copyright__text">
        		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'othello' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'othello' ), 'WordPress' ); ?></a>
        		<span>|</span>
						<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'othello' ), 'othello', '<a href="http://asknode.net/" rel="designer">featherplain</a>' ); ?>
					</p>
        </div>
      </div>
    </footer><!-- /.l-footer-->

	</div><!-- /.l-container -->

<?php wp_footer(); ?>

</body>
</html>
