<?php
  function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'wpbootstrap'),
      'description' => sprintf(__('Options for showcase','indeblauwedruif')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/image1.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'wpbootstrap'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));


    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'IndevblauweDruif'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://test.com', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 5
    ));


      // info1 Section
    $wp_customize->add_section('info1', array(
      'title'   => __('Info1', 'wpbootstrap'),
      'description' => sprintf(__('Options for info1','indeblauwedruif')),
      'priority'    => 140
    ));

    $wp_customize->add_setting('info1_image', array(
      'default'   => get_bloginfo('template_directory').'/img/image1.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'info1_image', array(
      'label'   => __('info1 Image', 'wpbootstrap'),
      'section' => 'info1',
      'settings' => 'info1_image',
      'priority'  => 1
    )));


    $wp_customize->add_setting('info1_heading', array(
      'default'   => _x('Onze Visie', 'IndevblauweDruif'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('info1_heading', array(
      'label'   => __('Heading', 'wpbootstrap'),
      'section' => 'info1',
      'priority'  => 2
    ));

    $wp_customize->add_setting('info1_text', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('info1_text', array(
      'label'   => __('Text', 'wpbootstrap'),
      'section' => 'info1',
      'priority'  => 3
    ));


    // Afbeelding dozen nummer 1
    $wp_customize->add_section('box1', array(
    'title'   => __('box1', 'wpbootstrap'),
    'description' => sprintf(__('Options for box1','indeblauwedruif')),
    'priority'    => 140
    ));

    $wp_customize->add_setting('box1_image', array(
    'default'   => get_bloginfo('template_directory').'/img/venice-2578238_1920-4.jpg',
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box1_image', array(
    'label'   => __('box1 Image', 'wpbootstrap'),
    'section' => 'box1',
    'settings' => 'box1_image',
    'priority'  => 1
    )));


    $wp_customize->add_setting('box1_heading', array(
    'default'   => _x('Wijnwijzer', 'IndevblauweDruif'),
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box1_heading', array(
    'label'   => __('Heading', 'wpbootstrap'),
    'section' => 'box1',
    'priority'  => 2
    ));


    // Afbeelding dozen nummer 2
    $wp_customize->add_section('box1', array(
    'title'   => __('box2', 'wpbootstrap'),
    'description' => sprintf(__('Options for box2','indeblauwedruif')),
    'priority'    => 140
    ));

    $wp_customize->add_setting('box2_image', array(
    'default'   => get_bloginfo('template_directory').'/img/venice-2578238_1920-4.jpg',
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box1_image', array(
    'label'   => __('box1 Image', 'wpbootstrap'),
    'section' => 'box1',
    'settings' => 'box1_image',
    'priority'  => 1
    )));


    $wp_customize->add_setting('box1_heading', array(
    'default'   => _x('Wijnwijzer', 'IndevblauweDruif'),
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box1_heading', array(
    'label'   => __('Heading', 'wpbootstrap'),
    'section' => 'box1',
    'priority'  => 2
    ));


    // Afbeelding dozen nummer 3
    $wp_customize->add_section('box1', array(
    'title'   => __('box1', 'wpbootstrap'),
    'description' => sprintf(__('Options for box1','indeblauwedruif')),
    'priority'    => 140
    ));

    $wp_customize->add_setting('box1_image', array(
    'default'   => get_bloginfo('template_directory').'/img/venice-2578238_1920-4.jpg',
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box1_image', array(
    'label'   => __('box1 Image', 'wpbootstrap'),
    'section' => 'box1',
    'settings' => 'box1_image',
    'priority'  => 1
    )));


    $wp_customize->add_setting('box1_heading', array(
    'default'   => _x('Wijnwijzer', 'IndevblauweDruif'),
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box1_heading', array(
    'label'   => __('Heading', 'wpbootstrap'),
    'section' => 'box1',
    'priority'  => 2
    ));


    // Afbeelding dozen nummer 4
    $wp_customize->add_section('box1', array(
    'title'   => __('box1', 'wpbootstrap'),
    'description' => sprintf(__('Options for box1','indeblauwedruif')),
    'priority'    => 140
    ));

    $wp_customize->add_setting('box1_image', array(
    'default'   => get_bloginfo('template_directory').'/img/venice-2578238_1920-4.jpg',
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box1_image', array(
    'label'   => __('box1 Image', 'wpbootstrap'),
    'section' => 'box1',
    'settings' => 'box1_image',
    'priority'  => 1
    )));


    $wp_customize->add_setting('box1_heading', array(
    'default'   => _x('Wijnwijzer', 'IndevblauweDruif'),
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box1_heading', array(
    'label'   => __('Heading', 'wpbootstrap'),
    'section' => 'box1',
    'priority'  => 2
    ));

    // Afbeelding dozen nummer 5
    $wp_customize->add_section('box1', array(
    'title'   => __('box1', 'wpbootstrap'),
    'description' => sprintf(__('Options for box1','indeblauwedruif')),
    'priority'    => 140
    ));

    $wp_customize->add_setting('box1_image', array(
    'default'   => get_bloginfo('template_directory').'/img/venice-2578238_1920-4.jpg',
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box1_image', array(
    'label'   => __('box1 Image', 'wpbootstrap'),
    'section' => 'box1',
    'settings' => 'box1_image',
    'priority'  => 1
    )));


    $wp_customize->add_setting('box1_heading', array(
    'default'   => _x('Wijnwijzer', 'IndevblauweDruif'),
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box1_heading', array(
    'label'   => __('Heading', 'wpbootstrap'),
    'section' => 'box1',
    'priority'  => 2
    ));

    // Afbeelding dozen nummer 6
    $wp_customize->add_section('box1', array(
    'title'   => __('box1', 'wpbootstrap'),
    'description' => sprintf(__('Options for box1','indeblauwedruif')),
    'priority'    => 140
    ));

    $wp_customize->add_setting('box1_image', array(
    'default'   => get_bloginfo('template_directory').'/img/venice-2578238_1920-4.jpg',
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box1_image', array(
    'label'   => __('box1 Image', 'wpbootstrap'),
    'section' => 'box1',
    'settings' => 'box1_image',
    'priority'  => 1
    )));


    $wp_customize->add_setting('box1_heading', array(
    'default'   => _x('Wijnwijzer', 'IndevblauweDruif'),
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box1_heading', array(
    'label'   => __('Heading', 'wpbootstrap'),
    'section' => 'box1',
    'priority'  => 2
    ));

    // Afbeelding dozen nummer 7
    $wp_customize->add_section('box1', array(
    'title'   => __('box1', 'wpbootstrap'),
    'description' => sprintf(__('Options for box1','indeblauwedruif')),
    'priority'    => 140
    ));

    $wp_customize->add_setting('box1_image', array(
    'default'   => get_bloginfo('template_directory').'/img/venice-2578238_1920-4.jpg',
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box1_image', array(
    'label'   => __('box1 Image', 'wpbootstrap'),
    'section' => 'box1',
    'settings' => 'box1_image',
    'priority'  => 1
    )));


    $wp_customize->add_setting('box1_heading', array(
    'default'   => _x('Wijnwijzer', 'IndevblauweDruif'),
    'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box1_heading', array(
    'label'   => __('Heading', 'wpbootstrap'),
    'section' => 'box1',
    'priority'  => 2
    ));





  }

  add_action('customize_register', 'wpb_customize_register');
