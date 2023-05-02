<?php

/**
 * Theme Functions
 * 
 * @package Marmalil
 * 
 * 
 */
print_r( get_template_directory() );
wp_die();

 function marmalil_enqueue_scripts() {
    wp_enqueue_style( 'main-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js'), true )
    // wp_enqueue_style( 'blog-css', get_template_directory_uri() . 'blog.css', ['main-css']);
 }

 add_action( 'wp_enqueue_scripts', 'marmalil_enqueue_scripts')
 ?>