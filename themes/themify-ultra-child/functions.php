<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 */
function themify_custom_enqueue_child_theme_styles() {
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'themify_custom_enqueue_child_theme_styles', 11 );


function custom_styles() {

	wp_register_style('door-css', get_stylesheet_directory_uri() . '/css/door.css' );

	if( is_front_page() ) {

			wp_enqueue_style( 'door-css' );

	}
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

function custom_scripts() {

	wp_register_script('main-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), false);
	wp_register_script('door-js', get_stylesheet_directory_uri() . '/js/door.js', array('jquery'), false);

	wp_enqueue_script('main-js');

	if( is_front_page() ){

		wp_enqueue_script('door-js');

	}
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );