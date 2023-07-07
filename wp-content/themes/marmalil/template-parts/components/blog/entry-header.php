<?php
/**
 * Template for post entry header
 * 
 * @package marmalil
 */

 $the_post_id = get_the_ID();
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
            'featured-large',
            [
                'sizes' => '(max-width: 590px) 590px, 425px',
                'class' => 'ft-img-lg thumbnail'
            ]
         )
    }

    ?>