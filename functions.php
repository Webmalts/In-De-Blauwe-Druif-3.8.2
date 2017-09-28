<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

  // Theme Support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));


  }

  add_action('after_setup_theme','wpb_theme_setup');

// Customizer File
require get_template_directory(). '/inc/customizer.php';
