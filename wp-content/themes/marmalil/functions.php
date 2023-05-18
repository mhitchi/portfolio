<?php

/**
 * Theme Functions
 * 
 * @package Marmalil
 * 
 * 
 */
// print_r( get_template_directory() );
// wp_die();

if ( ! defined( 'MARMALIL_DIR_PATH' ) ) {
   define( 'MARMALIL_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

require_once MARMALIL_DIR_PATH . './inc/helpers/autoloader.php';

function marmalil_get_theme_instance() {
   \MARMALIL_THEME\Inc\MARMALIL_THEME::get_instance();
}
marmalil_get_theme_instance();

 function marmalil_enqueue_scripts() {
   // //register styles 
   // wp_register_style( 'main-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
   // wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );

   //register scripts
   wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true );
   wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false , true );
    // wp_enqueue_style( 'blog-css', get_template_directory_uri() . 'blog.css', ['main-css']);
 
    //register style first, then enqueue conditionally, like on a certain page
   // if (is_archive() ) {wp_enqueue_style('main-css');}

   //enqueue styles and scripts
   wp_enqueue_style( 'main-css' );
   wp_enqueue_style( 'bootstrap-css' );
   wp_enqueue_script( 'main-js' );
   wp_enqueue_script( 'bootstrap-js' );
}

 add_action( 'wp_enqueue_scripts', 'marmalil_enqueue_scripts');
 ?>