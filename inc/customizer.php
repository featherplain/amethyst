<?php
/**
 * Amethyst Theme Customizer.
 *
 * Author     : featherplain
 * Author URI : http://asknode.net/
 * License    : GPLv2 or later
 * License URI: license.txt
 */


/*
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function amethyst_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'amethyst_customize_register' );

/*
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function amethyst_customize_preview_js() {
	wp_enqueue_script( 'amethyst_customizer', get_template_directory_uri() . '/assets/js/customizer.min.js', array( 'customize-preview' ), '20150916', true );
}
add_action( 'customize_preview_init', 'amethyst_customize_preview_js' );
