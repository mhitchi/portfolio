<?php
/**
 * 
 * Bootstraps the theme
 * Adds all basic functions to theme
 * 
 * @package Marmalil
 */

 namespace MARMALIL_THEME\Inc;

 use MARMALIL_THEME\Inc\Traits\Singleton;

 class MARMALIL_THEME {
    use Singleton;

    protected function __construct() {
        // load other classes.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filter
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
    }

    public function register_styles() {
         //register styles 
        wp_register_style( 'main-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
        wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
        //enqueue styles
        wp_enqueue_style( 'main-css' );
        wp_enqueue_style( 'bootstrap-css' );
    }

    public function register_scripts() {

    }
 }