<?php
/**
 * Enqueue theme assets
 * 
 * @package Marmalil
 * 
 */

 namespace MARMALIL_THEME\Inc;

 use MARMALIL_THEME\Inc\Traits\Singleton;

 class Assets {
    use Singleton;

    protected function __construct() {
        // load other classes.
        Assets::get_instance();

        // load hooks
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filter
        
    }

   
 }