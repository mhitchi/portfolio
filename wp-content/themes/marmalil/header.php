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
    <p>header here</p>
