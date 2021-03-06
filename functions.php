<?php
/**
 * Enqueues scripts and styles for front-end.
 */

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
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/font-awesome-4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Karma|Raleway:500');
    
	wp_enqueue_style('biscuit-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'biscuit_scripts_styles');

