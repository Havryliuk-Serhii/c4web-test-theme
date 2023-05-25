<?php
/**
 * Philharmo Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Philharmo_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function spc_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Philharmo Theme, use a find and replace
		* to change 'spc' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'spc', get_template_directory() . '/languages' );

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
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'spc' ),
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'spc_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function spc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'spc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'spc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'spc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function spc_scripts() {
	wp_enqueue_style( 'spc-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('spc-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css',array(), '3.3.7');
	wp_enqueue_style('spc-carousel-style', get_template_directory_uri() . '/css/owl.carousel.min.css',array(), '2.2.1');
	wp_enqueue_style('spc-font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css',array(), ' 4.7.0');
	wp_enqueue_style('spc-animate-style', get_template_directory_uri() . '/css/animate.css',array(), '3.5.2');
	wp_enqueue_style('spc-stylesheet-style', get_template_directory_uri() . '/css/stylesheet.css');

	wp_enqueue_script( 'spc-jquery-script', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.1.1',
		true );
	wp_enqueue_script( 'spc-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7',
		true );
	wp_enqueue_script( 'spc-carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.2.1',
		true );
	wp_enqueue_script( 'spc-h5validate-script', get_template_directory_uri() . '/js/jquery.h5validate.js', array('jquery'), '',
		true );
	wp_enqueue_script( 'spc-main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'spc_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Bootstrap nav walker
 */
require get_template_directory() . '/inc/classes/class_bootstrap_nav_walker.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Functions that connect acf blocks to WordPress
 */
require get_template_directory() . '/inc/block-functions.php';
