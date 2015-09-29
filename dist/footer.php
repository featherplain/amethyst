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

      <div class="siteinfo">
        <div class="siteinfo__inner">
        	<p id="credit" class="siteinfo__text">
        		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'othello' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'othello' ), 'WordPress' ); ?></a>
					</p>
        </div>
      </div>
    </footer><!-- /.l-footer-->

	</div><!-- /.l-container -->

<?php wp_footer(); ?>

</body>
</html>
