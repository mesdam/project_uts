<?php
/**
 * Theme functions and definitions
 *
 * @package Blog Gutener
 */

require get_stylesheet_directory() . '/inc/customizer/customizer.php';
require get_stylesheet_directory() . '/inc/customizer/loader.php';

if ( ! function_exists( 'blog_gutener_enqueue_styles' ) ) :
	/**
	 * @since Blog Gutener 1.0.0
	 */
	function blog_gutener_enqueue_styles() {
		wp_enqueue_style( 'blog-gutener-style-parent', get_template_directory_uri() . '/style.css' );
	}

endif;
add_action( 'wp_enqueue_scripts', 'blog_gutener_enqueue_styles', 1 );

function blog_gutener_body_classes( $classes ) {
	if ( get_theme_mod( 'sidebar_settings', 'no-sidebar' ) == 'no-sidebar' ){
		$classes[] = 'content-no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'blog_gutener_body_classes' );

function blog_gutener_setup() {
	remove_theme_support( 'custom-background' );
}
add_action( 'after_setup_theme', 'blog_gutener_setup', 99 );
