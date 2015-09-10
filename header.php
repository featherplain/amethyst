<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package othello
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
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'othello' ); ?></a>

	<div class="l-container">
    <header role="banner" class="l-header">
      <div class="l-header__inner">
      	<h1 class="site-title">
      		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      	</h1>

        <nav class="gnav" role="navigation">
        	<a href="#" title="menu" role="button" class="gnav__btn"></a>
        	<div class="gnav__inner">
        		<div class="gnav__search">
	        		<?php get_search_form(); ?>
        		</div>
	        	<?php // global navigation
	        	wp_nav_menu( array(
	        		'theme_location' => 'global_nav',
	        		'container'      => false,
	        		'menu_id'        => 'menu',
	        		'menu_class'     => 'gnav__list',
	        		'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>' )
	        		);
	        	?>
        	</div>
        </nav>
      </div><!-- /.l-header__inner -->
    </header><!-- /.l-header -->

		<div id="main" role="main" class="l-main">
