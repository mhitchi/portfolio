<?php
/**
 * Register menus
 * 
 * @package Marmalil
 * 
 */

 //outside the loop
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
            'marmalil-header-menu' => esc_html__( 'Header Menu', 'marmalil' ),
            'marmalil-footer-menu' => esc_html__( 'Footer Menu', 'marmalil' )
        ]);
    }

    public function get_menu_id( $location ) {
        // get all locations available
        $locations = get_nav_menu_locations();

        // get object id by location
        $menu_id = $locations[$location];

        // if $menu_id isn't empty, then return it, or else return null
        return ! empty( $menu_id ) ? $menu_id : '';
    }

    public function get_child_menu_items( $menu_array, $parent_id ) {
        $child_menus = [];
        if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {
            foreach ( $menu_array as $menu ) {
                if ( intval( $menu->menu_item_parent ) === $parent_id ) {
                    array_push( $child_menus, $menu );
                }
            }
        }
        return $child_menus;
    }

 }