<?php
/**
 * 
 * Bootstraps the theme
 * Adds all basic functions to theme
 * 
 * @package Marmalil
 */

 namespace MARMALIL_THEME\Inc;

 use MARMALIL_THEME\Inc\Traits\Singleton;

 class MARMALIL_THEME {
    use Singleton;

    protected function __construct() {

      //load class

      Assets::get_instance();
      Menus::get_instance();

      $this->setup_hooks();

    }

    protected function setup_hooks() {

      /* Actions
      */
      add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );

    }

   public function setup_theme() {

      // here's where we'll add translation support for other languages

      /*worked great*/
      add_theme_support( 'title-tag' );

      /*not working*/
      add_theme_support( 'custom-logo', [
         'height'               => 100,
         'width'                => 400,
         'flex-height'          => true,
         'flex-width'           => true,
         'header-text'          => [ 'site-title', 'site-description' ],
      ] );

      add_theme_support( 'custom-background', [
         'default-color' => '#f7f2ea',
         'default-image' => get_template_directory_uri() . 'http://localhost:8888/wordpress/wp-content/uploads/2023/05/letters-print-1.webp',
         'default-repeat'=> 'no-repeat',
      ] );

      add_theme_support( 'post-thumbnails' );

      add_theme_support( 'customze-selective-refresh-widgets' );

      add_theme_support( 'automatic-feed-links' );

      add_theme_support(
         'html5',
         [
            'search-form',
            'comment-form',
            'gallery',
            'caption',
            'script',
            'style',

         ]
      );

      add_editor_style();
      add_theme_support( 'wp-block-styles' );

      add_theme_support( 'align-wide' );

      // DEFINE CONTENT WIDTH
      global $content_width;
      if ( ! isset( $content_width ) ) [
         $content_width = 1200;
      ]
   }

    
  
 }