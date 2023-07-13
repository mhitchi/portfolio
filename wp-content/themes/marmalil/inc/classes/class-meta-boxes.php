<?php
/**
 * register custom meta boxes
 * 
 * @package Marmalil
 * 
 */

 //outside the loop
 namespace MARMALIL_THEME\Inc;

 use MARMALIL_THEME\Inc\Traits\Singleton;

 class Meta_Boxes {
    use Singleton;

    protected function __construct() {
        // load other classes.
        Assets::get_instance();

        // load hooks
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filter
        add_action( 'add_meta_boxes', [ $this, 'add_custom_meta_box' ] );
    }

    public function add_custom_meta_box( $post ) {
        // add post types into array below
        $screens = [ 'post' ];
        foreach ( $screens as $screen ) {
            add_meta_box(
                'wporg_box_id',          // unique id
                'Custom Meta Box Title', // box title
                'wporg_custom_box_html', // content callback, must be of typle callable
                $screen                  // post type
            );
        }
    }

 }