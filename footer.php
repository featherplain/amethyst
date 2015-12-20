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
        	<p id="credit" class="siteinfo__credit">
        		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'amethyst' ), 'WordPress' ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'amethyst' ), 'WordPress' ); ?></a>
        		<span class="siteinfo__sep">&nbsp;|&nbsp;</span>
        		<a href="<?php echo esc_url( __( 'http://asknode.net/', 'amethyst' ), 'featherplain' ); ?>"><?php printf( esc_html__( 'Theme by %s', 'amethyst' ), 'featherplain' ); ?></a>
					</p>
					<p id="copy" class="siteinfo__copy">&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php bloginfo( 'name' ); ?></p>
        </div>
      </div><!-- / .siteinfo -->
    </footer><!-- / .l-footer -->

	</div><!-- /.l-container -->

<?php wp_footer(); ?>

</body>
</html>
