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
                $screen,                             // post type
                'side'                               // box placement
            );
        }
    }

    public function custom_meta_box_html( $post ) {
        $value = get_post_meta( $post->ID, '_hide_page_title', true );
        /* use nonce for verification
        */

        wp_nonce_field( plugin_basename(__FILE__), 'hide_title_meta_box_nonce_name' );
        ?>
        
        <label for="marmalil-field"><?php esc_html_e( 'Hide the page title' ); ?></label>
        <select name="marmalil_hide_title_field" id="marmalil-field" class="postbox">
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

    public function save_post_meta_data( $post_id ) {
        /**
         *  when the post is saved or updated, we get $_POST available
         * and we check if current user is authorized
         * */ 
        if ( ! current_user_can( 'edit_post', $post_id) ) {
            return;
        }

        /**
         * check if the nonce value we received is the same we created
         */
        if ( ! isset( $_POST['hide_title_meta_box_nonce_name'] ) ||
            ! wp_verify_nonce( plugin_basename( __FILE__), $_POST[ 'hide_title_meta_box_nonce_name' ])
            ) {
                return;
        }
        if(array_key_exists('marmalil_hide_title_field', $_POST)) {
            update_post_meta(
                $post_id,
                '_hide_page_title',
                $_POST['marmalil_hide_title_field']
            );
        }
    }
 }