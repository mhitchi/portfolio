<?php
/**
 * Template for entry content.
 * 
 * to be used inside The Loop
 * 
 * @package Marmalil
 */
?>

<div class="entry-content">
    <?php 
    if ( is_single() ) {
        the_content(
            sprintf(
                wp_kses(
                    __( 'Read more%s <span class="meta-nav">&rarr</span>', 'marmalil',
                    [
                        'span' => [
                            'class' => []
                        ]
                    ] )
                )
            )
        );
    }
    ?>
</div>