<?php

/**
 * Theme Header Template - Marmalil
 * 
 * @package Marmalil
 */
?>

<!-- add logo for home and links to design and development -->
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php add_theme_support( 'title-tag') ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <?php 
        if ( function_exists( 'wp_body_open' ) ) {
            wp_body_open();
        }
    ?>
    <div id="page" class="site">
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Design</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
