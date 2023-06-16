<?php
/**
 * 
 * Main template
 * 
 * @package marmalil
 */

 get_header();
?>
 <div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php
            if ( have_posts() ) {
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
                    ?>
                    <div class="row">
                    <?php
                        $index = 0;
                        //set number of columns
                        $column_count = 3;
                        //Case: index = 0;
                        //START THE LOOP
                        while ( have_posts() ) : the_post();
                            //if remainder of index and column count is 0, print 3 columns (on desktop)
                            if ( 0 === $index % $column_count ) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                    <?php
                            }
            ?>              <div class="post_card">
                                <h2><?php the_title(); ?></h2>
                                <div class="excerpt">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                    <?php
                            //increment index
                            $index++;

                            //now that index !== 0, check if it's remainder with the column count is 0,
                            //if not, continue iterating through columns
                            if ( 0 !== $index && 0 === $index % $column_count ) {
                    ?> 
                        </div> <!--col-->
                    <?php
                            }
                        endwhile;
                    ?>
                    </div> <!-- row -->
                    plan: https://codepen.io/eorlandno/pen/LYYpypz
                </div>
                <?php
            }
        ?>

    </main>
</div>

 <?php get_footer() ?>
