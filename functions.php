<?php
/**
 * amethyst functions and definitions.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */

if ( ! function_exists( 'amethyst_setup' ) ) :
/*
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function amethyst_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'amethyst', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for post thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 774, 400, true );

	/*
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'global_nav' => esc_html__( 'Global Menu', 'amethyst' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	/*
	 * Set up the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'amethyst_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	/*
	 * Enable support editor-style on WordPress dashboard.
	 */
	add_editor_style( array(
		'assets/css/editor-style.css',
		'assets/genericons/genericons.css'
	) );

}
endif; // amethyst_setup
add_action( 'after_setup_theme', 'amethyst_setup' );

/*
 * Extend the default WordPress body classes.
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function amethyst_body_classes( $classes ) {
	if ( is_active_sidebar( 'sidebar' ) && ! is_attachment() && ! is_404() && ! is_page_template( 'template-parts/single-column.php' ))
		$classes[] = 'sidebar';

	return $classes;
}
add_filter( 'body_class', 'amethyst_body_classes' );

/*
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function amethyst_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'amethyst_content_width', 774 );
}
add_action( 'after_setup_theme', 'amethyst_content_width', 0 );

/*
 * Register search form.
 */
function amethyst_search_form( $form ) {
	$form = '<div class="search"><form role="search" method="get" id="searchform" class="search__form" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . esc_html__( 'Search for...', 'amethyst' ) . '</label>
	<input class="search__field" type="text" value="' . get_search_query() . '" placeholder="' . __( 'Search for...', 'amethyst' ) . '" name="s" id="s" />
	<input class="search__submit" type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'amethyst' ) .'" /></form></div>';

	return $form;
}
add_filter( 'get_search_form', 'amethyst_search_form' );

/*
 * Register excerpt length.
 */
function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*
 * Register widget area.
 */
function amethyst_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'amethyst' ),
		'id'            => 'sidebar',
		'description'   => __( 'Main Widgets Sidebar. Shows up in all pages.', 'amethyst' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'amethyst' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Will show a widgets area on the footer. Shows up in all pages.', 'amethyst' ),
		'before_widget' => '<aside id="%1$s" class="widget widget--footer %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'amethyst_widgets_init' );

/*
 * Enqueue scripts and styles.
 */
function amethyst_scripts() {

	// genericons
	wp_enqueue_style( 'amethyst-genericons', get_template_directory_uri() . '/assets/genericons/genericons.css', array(), '3.4' );

	// stylesheet
	wp_enqueue_style( 'amethyst-style', get_stylesheet_uri() );

	// javascripts
	wp_enqueue_script( 'amethyst-js-foundation', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'amethyst-js-script', get_template_directory_uri() . '/assets/js/script.min.js', array( 'jquery' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amethyst_scripts' );

/*
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/*
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
