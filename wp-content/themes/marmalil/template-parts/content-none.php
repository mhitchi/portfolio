<?php

/**
 * 
 * Template part for displaying a message that posts cannot be found
 * 
 * @package Marmalil
 */

 ?>

 <section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'No Posts Found', 'marmalil' ); ?></h1>
    </header>


    <div class="page-content">
        <?php
            /*if it's the blog homepage and user can publish posts*/
            if ( is_home() && current_user_can( 'publish_posts' ) ) {
        ?>
                <p>
                    <?php
                        printf(
                            /*strips disallowed html*/
                            /*string printed, allowed html */
                            wp_kses(  
                                __( 'Ready to publish your first post? <a href="%s"> Get started here</a>', 'marmalil' ),
                                [
                                    'a' => [
                                        'href' => []
                                    ]
                                ]
                            ),
                            esc_url( admin_url( 'post-new.php' ) )
                        )
                    ?>
                </p>
        <?php
            } elseif ( is_search() ) {
                ?>
                    <p><?php exc_html_e( 'Sorry, but nothing matched your search. Please try again.' ); ?></p>
                <?php
                get_search_form();
            } else {
                ?>
                    <p><?php exc_html_e( 'Sorry, we cannot find that page. Perhaps search could help.' ); ?></p>
                <?php
                get_search_form();
            }
        ?>
    </div>
 </section>