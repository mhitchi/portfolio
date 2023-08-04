<?php
/**
 * 
 * Single post template
 * 
 * @package marmalil
 */

 get_header();
?>
 <div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php
            if ( have_posts() ) :
                ?>
                <div class="container">
                    <?php 
                    // checks if page is home (homepage or blog home)
                    //if it's home AND it isn't front page
                        if ( is_home() && ! is_front_page() ) {
                    ?>
                        <header class="mb-5">
                            <h1 class="page-title screen-reader-text">
                                <?php single_post_title()?>
                            </h1>
                        </header>
                    <?php
                        }

                        while (have_posts() ) : the_post();
                   
                    //plan: https://codepen.io/eorlandno/pen/LYYpypz
                
                /*.php file extention not needed on this next part*/
                get_template_part( 'template-parts/content-none' );
                    endwhile;
        ?>

    </main>
</div>

 <?php get_footer() ?>