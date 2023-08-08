<?php
/**
 * Template for entry footer
 * 
 * to be used inside of Wordpress The Loop
 * 
 * @package marmalil
 */

$the_post_id = get_the_ID();
$article_terms = wp_get_post_terms( $the_post_id, [ 'category', 'post_tag'] );

 ?>

 <div class="entry-footer mt-4">
    <?php
    ?>
</div>