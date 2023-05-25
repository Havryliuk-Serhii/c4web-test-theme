<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Philharmo_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function spc_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'spc_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function spc_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'spc_pingback_header' );
/**
 * Register Option page
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}
/**
 * Add custom class to logo link
 */
function my_custom_logo_class( $html ) {
	$html = str_replace( 'custom-logo-link', 'custom-logo-link logoPage', $html );
	return $html;
}
add_filter( 'get_custom_logo', 'my_custom_logo_class' );
