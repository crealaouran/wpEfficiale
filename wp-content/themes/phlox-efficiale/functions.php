<?php
/**
 * Phlox-efficiale Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package phlox-efficiale
 */

add_action( 'wp_enqueue_scripts', 'phlox_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function phlox_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'phlox-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'phlox-efficiale-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'phlox-style' )
	);

}
