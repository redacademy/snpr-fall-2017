<?php
/**
 * SOSNPR Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SOSNPR_Theme
 */

if ( ! function_exists( 'sosnpr_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function sosnpr_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // sosnpr_setup
add_action( 'after_setup_theme', 'sosnpr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function sosnpr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sosnpr_content_width', 640 );
}
add_action( 'after_setup_theme', 'sosnpr_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sosnpr_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sosnpr_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function sosnpr_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'sosnpr_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function sosnpr_scripts() {
	wp_enqueue_style('sosnpr-font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	wp_enqueue_style( 'sosnpr-style', get_stylesheet_uri() );

	wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css' );

	wp_enqueue_style( 'owl-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css' );

	


	wp_enqueue_script('jquery');

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );


	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/build/js/smooth-scroll.min.js', array('jquery'),null, true );

	wp_enqueue_script( 'feedback', get_template_directory_uri() . '/build/js/feedback.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'searchbar-toggle', get_template_directory_uri() . '/build/js/searchbar-toggle.min.js', array('jquery','smooth-scroll'), '20130115', true );

	wp_enqueue_script( 'about-us-toggle', get_template_directory_uri() . '/build/js/about-us-toggle.min.js', array('jquery', 'menu-toggle', 'smooth-scroll'),null, true );

	wp_enqueue_script( 'resources-toggle', get_template_directory_uri() . '/build/js/resources-toggle.min.js', array('jquery'),null, true );	

	wp_enqueue_script( 'mail-subscription', get_template_directory_uri() . '/build/js/mail-subscription.min.js', array('jquery'),null, true );

	wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js', array('jquery'), false, true );

	
	wp_enqueue_script( 'menu-toggle', get_template_directory_uri() . '/build/js/menu-toggle.min.js', array('jquery', 'owl-carousel'), false, true );

	wp_enqueue_script( 'sosnpr-owl-carousel', get_template_directory_uri() . '/build/js/owl-carousel.min.js', array('jquery', 'owl-carousel'), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sosnpr_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


