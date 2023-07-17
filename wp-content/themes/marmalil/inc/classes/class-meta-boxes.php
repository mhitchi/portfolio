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
                'hige-page-title',                   // unique id
                __( 'Hide page title', 'marmalil' ), // box title
                [ $this, 'custom_meta_box_html' ],   // content callback, must be of typle callable
                $screen                              // post type
            );
        }
    }

    public function custom_meta_box_html( $post ) {
        $value = get_post_meta( $post->ID, '_hide_page_title', true );
        ?>
        <label for="marmalil-field"><?php esc_html_e( 'Hide the page title' ); ?></label>
        <select name="marmalil-field" id="marmalil-field" class="postbox">
            <option value=""><?php esc_html_e( 'Select', 'marmalil' );?> </option>
            <option value="yes" <?php selected($value, 'yes' ); ?>>
                <?php esc_html_e( 'Yes', 'marmalil' );?>
            </option>
            <option value="no" <?php selected($value, 'no' ); ?>>
                <?php esc_html_e( 'No', 'marmalil' );?>
            </option>
        </select>
        <?php
    }

 }