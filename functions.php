<?php

    define('THEME_URI', get_template_directory_uri() );
    define('THEME_PATH', get_template_directory() );

    function son_load_assets() {
        // CSS
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('son-style', THEME_URI . '/assets/css/app.css');
        // JS
        wp_enqueue_script('son-js', THEME_URI . '/assets/js/app.js', [], '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'son_load_assets');

    /** ADMIN BAR */
    show_admin_bar(false);

    /** SUPPORTS */
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    /** MENU */
    register_nav_menus( array(
        'main_menu' => 'Menu Principal'
    ));

    /** IMAGE SIZE */
    // add_image_size('thumb1', 640, 360, true);
    // add_image_size('thumb2', 960, 540, true);
