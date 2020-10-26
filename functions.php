<?php

function birds_setup()
{
    // theme support
    add_theme_support('post-thumbnails');

    // register menu
    register_nav_menus(
        array('header-menu' => __('Header Menu'))
    );
}
add_action('after_setup_theme', 'birds_setup');




function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

require_once get_template_directory() . '/inc/custom_post_types.php';