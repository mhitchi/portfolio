<?php
/**
 * Register menus
 * 
 * @package Marmalil
 * 
 */

 namespace MARMALIL_THEME\Inc;

 use MARMALIL_THEME\Inc\Traits\Singleton;

 class Menus {
    use Singleton;

    protected function __construct() {
        // load other classes.
        Assets::get_instance();

        // load hooks
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filter
        add_action( 'init', [ $this, 'register_menus' ] );
    }

    public function register_menus() {
        register_nav_menus ( [
            'marmalil-header-menu' => __( 'Header Menu' ),
            'marmalil-footer-menu' => __( 'Extra Menu' )
        ]);
    }
 }