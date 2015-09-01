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

?>

			</div><!-- /.l-primary -->
		</div><!-- /.l-main -->

		<footer role="contentinfo" class="l-footer">
      <div class="instagram">
        <div class="instagram__inner">
          <div class="photos">
            <ul class="photos__list">
              <li class="photos__item"><a href="#" title=""><img src="http://placehold.jp/170x170.png" alt=""></a></li>
              <li class="photos__item"><a href="#" title=""><img src="http://placehold.jp/170x170.png" alt=""></a></li>
              <li class="photos__item"><a href="#" title=""><img src="http://placehold.jp/170x170.png" alt=""></a></li>
              <li class="photos__item"><a href="#" title=""><img src="http://placehold.jp/170x170.png" alt=""></a></li>
              <li class="photos__item"><a href="#" title=""><img src="http://placehold.jp/170x170.png" alt=""></a></li>
              <li class="photos__item"><a href="#" title=""><img src="http://placehold.jp/170x170.png" alt=""></a></li>
            </ul>
          </div>
          <p class="instagram__description">INSTAGRAM@FEATHERPLAIN</p>
        </div>
      </div>
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
