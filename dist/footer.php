<?php
/**
 * The template for displaying the footer.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
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

      <div class="siteinfo">
        <div class="siteinfo__inner">
        	<p id="credit" class="siteinfo__text">
        		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'amethyst' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'amethyst' ), 'WordPress' ); ?></a>
					</p>
        </div>
      </div>
    </footer><!-- /.l-footer-->

	</div><!-- /.l-container -->

<?php wp_footer(); ?>

</body>
</html>
