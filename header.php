<?php
/**
 * The header for our theme.
 *
 * @package amethyst
 * @author featherplain
 * @link http://asknode.net/
 * @license GPLv2 or later
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'amethyst' ); ?></a>

<div class="l-container">
	<header role="banner" class="l-header">
		<div class="l-header__inner">
			<div class="sitebrand">
				<h1 class="sitebrand__title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</h1>
				<p class="sitebrand__description"><?php bloginfo( 'description' ); ?></p>
			</div>

			<nav class="gnav" role="navigation">
				<div class="gnav__search">
					<?php get_search_form(); ?>
				</div>
				<button class="gnav__trigger"></button>
				<?php // Set global navigation.
				wp_nav_menu( array(
						'theme_location' => 'global_nav',
						'container'      => false,
						'menu_id'        => 'gnav-list',
						'menu_class'     => 'gnav__list',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					)
				);
				?>
			</nav>

			<?php if ( get_header_image() ) : // Display custom header image. ?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>"
						     height="<?php echo absint( get_custom_header()->height ); ?>"
						     alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
			<?php endif; // End header image check. ?>

		</div><!-- /.l-header__inner -->
	</header><!-- /.l-header -->

	<div id="main" role="main" class="l-main">
