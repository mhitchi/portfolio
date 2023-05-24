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

      $this->setup_hooks();

    }

    protected function setup_hooks() {

      /* Actions
      */
      add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );

    }

   public function setup_theme() {
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
         'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
         'default-repeat'=> 'no-repeat',
      ] );
   }

    
  
 }