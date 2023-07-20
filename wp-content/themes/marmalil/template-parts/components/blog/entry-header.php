<?php
/**
 * Template for post entry header
 * 
 * @package marmalil
 */

 
 $the_post_id = get_the_ID();
 $hide_title get_post_meta( $the_post_id, '_hide_page_title', true );
 
 $has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
 ?>

 <header class="entry-header">
    <?php
    //featured image
    if ( $has_post_thumbnail ) {
        ?>
        <div class="entry-image mb-3">
            <a href="<?php echo esc_url( get_permalink() ); ?>">
            </a>
         </div>
         <?php
         the_post_custom_thumbnail(
            $the_post_id,
            'featured-thumbnail',
            [
                'sizes' => '(max-width: 280px) 280px, 280px',
                'class' => 'ft-img-lg thumbnail'
            ]
         )
    }

    ?>