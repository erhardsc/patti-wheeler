<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 */
function themify_custom_enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'themify_custom_enqueue_child_theme_styles', 11 );


function passionswithpurpose_styles_scripts() {

  wp_register_style('animsition-css', get_stylesheet_directory_uri() . '/lib/animsition/css/animsition.min.css' );

  wp_register_script('main-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), false);
  wp_register_script('animsition-js', get_stylesheet_directory_uri() . '/lib/animsition/js/animsition.min.js', array('jquery'), false);

}
add_action( 'wp_enqueue_scripts', 'passionswithpurpose_styles_scripts' );