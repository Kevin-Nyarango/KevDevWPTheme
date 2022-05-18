<?php

    //fontawesome and  Js files
    function KevDev_setup(){
    
      wp_enqueue_script('fontawesome', '//use.fontawesome.com/635c463b27.js');

      wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);

    };

    add_action('wp_enqueue_scripts', 'KevDev_setup');


    // Theme Support
    function KevDev_init(){
      add_theme_support ('post-thumbnails');
      add_theme_support ('html5',
        array('comment-list', 'comment-form')
      );
      // Post Formats
      add_theme_support('post-formats', array('aside'));

    };

    add_action('after_setup_theme', 'KevDev_init');
  

    // Projects Custom Post Type

    function KevDev_custom_projects_post_type(){
      register_post_type('project',
      array(
        'rewrite' => array('slug' => 'projects'),
        'labels' => array(
          'name'=> 'Projects',
          'singlar_name' => 'Project',
          'add_new_item' => 'Add New Project',
          'edit_item' => 'Edit Project'
        ),
        'menu_icon' => 'dashicons-admin-links',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title', 'thumbnail', 'editor', 'excerpt', 'comments', 'custom-fields',
        ),
        'taxonomies' => array('category'),
        ));
    };

    
    add_action('init', 'KevDev_custom_projects_post_type');

    // Services Custom Post Type

    function KevDev_custom_services_post_type(){
      register_post_type('service',
      array(
        'rewrite' => array('slug' => 'services'),
        'labels' => array(
          'name'=> 'Services',
          'singlar_name' => 'Service',
          'add_new_item' => 'Add New Service',
          'edit_item' => 'Edit Service'
        ),
        'menu_icon' => 'dashicons-admin-multisite',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title', 'thumbnail', 'excerpt'
        )
        ));
    };

    
    add_action('init', 'KevDev_custom_services_post_type');


    //widget locations
    function wpb_init_widget($id){
      register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div  class="p-4 mb-3 bg-light rounded">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
      ));
    }

    add_action('widgets_init', 'wpb_init_widget');


?>


