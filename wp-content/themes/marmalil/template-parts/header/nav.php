<?php
/**
 * Header Navigation template
 * 
 * @package Marmalil
 */

 $menu_class = \Marmalil_Theme\Inc\Menus::get_instance();
 $header_menu_id = $menu_class->get_menu_id( 'marmalil-header-menu');

 $header_menus = wp_get_nav_menu_items( $header_menu_id );
?>
<!--https://codepen.io/piyushpd139/pen/gOYvZPG-->
<nav class="navbar navbar-expand-custom navbar-mainbg">
                <!-- trade for dynamic logo <a class="navbar-brand navbar-logo" href="#">Navbar</a> -->
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } else {
                    echo '<a class="navbar-brand navbar-logo" href="#"><img src="http://localhost:8888/wordpress/wp-content/uploads/2023/05/portfolio_icon.png" alt="Explore Manning Hitchings portfolio"/></a>';
                }
                ?>
                <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
                    ?>
                    <ul class="navbar-nav ml-auto">
                        <?php
                            foreach ( $header_menus as $menu_item ) {
                                if ( ! $menu_item->menu_item_parent ) {

                                }
                            }
                        ?>
                    </ul>
                    <?php 
                    }
                    ?>
                </div>
            </nav>

            <?php
                wp_nav_menu(
                    [
                        'theme_location' => 'marmalil-header-menu',
                        'container_class' => 'my_extra_menu_container_class'
                    ]
                )
            ?>