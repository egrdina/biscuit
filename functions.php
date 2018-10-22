<?php
/**
 * Enqueues scripts and styles for front-end.
 */

/**
 * Allow pages (like About) to have featured images
 */
add_theme_support( 'post-thumbnails' );

/**
 * Add Excerpt and Custom Fields support to the Portfolio Custom Post Type.
 *
 * @see https://wordpress.org/support/topic/no-excerpt-on-portfolio-posts/
 */
function add_portfolio_excerpt_custom_fields() {
	add_post_type_support( 'jetpack-portfolio', 'excerpt' );
	add_post_type_support( 'jetpack-portfolio', 'custom-fields' );
    add_theme_support( 'post-thumbnails', array( 'jetpack-portfolio' ) );

}
add_action( 'init', 'add_portfolio_excerpt_custom_fields' );

/**
 * Set up stylesheets
 */
function biscuit_scripts_styles() {
	global $wp_styles;

	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/bootstrap-3.3.7/bootstrap.min.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Karma|Raleway:500');
	wp_enqueue_style('biscuit-style', get_stylesheet_uri());
}

function custom_load_font_awesome() {
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );
}

add_action('wp_enqueue_scripts', 'biscuit_scripts_styles');

function wpmu_burger_menu_scripts() {
	
	wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/scripts/burger-menu-script.js', array( 'jquery' ) );
 
}
add_action( 'wp_enqueue_scripts', 'wpmu_burger_menu_scripts' );