<?php
function birds_custom_post_type()
{
    register_post_type('birds_species',
        array(
            'labels' => array(
                'name' => __('Birds', 'textdomain'),
                'singular_name' => __('Bird', 'textdomain'),
                'add_new_item' => __('Add Bird'),
            ),
            'public'      => true,
            'has_archive' => 'birds',
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'birds_custom_post_type');
