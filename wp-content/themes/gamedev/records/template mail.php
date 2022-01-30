<?php

add_action( 'init', 'temp_mail' ); // register post type

function temp_mail()
{
    $labels = array
    (
        'name' 					=> 'Templates',
        'singular_name'			=> 'Template',
        'add_new' 				=> 'Add',
        'add_new_item' 			=> 'Add',
        'edit_item' 			=> 'Edit',
        'new_item' 				=> 'New',
        'all_items' 			=> 'Template',
        'view_item' 			=> 'View',
        'search_items' 			=> 'Search',
        'not_found' 			=> 'Not found',
        'not_found_in_trash' 	=> 'Not found',
        'menu_name' 			=> 'Templates'
    );
    $args = array
    (
        'labels' 				=> $labels,
        'public' 				=> false,
        'show_ui' 				=> true,
        'has_archive' 			=> false,
        'menu_icon' 			=> 'dashicons-email-alt',
        'menu_position' 		=> 10,
        'publicly_queryable'	=> true,
        'supports' 				=> array( 'title', 'editor',),
    );
    register_post_type('template', $args);
}
