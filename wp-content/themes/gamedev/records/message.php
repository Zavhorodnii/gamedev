<?php

add_action( 'init', 'dev_message' ); // register post type

function dev_message()
{
    $labels = array
    (
        'name' 					=> 'Messages',
        'singular_name'			=> 'Message',
        'add_new' 				=> 'Add',
        'add_new_item' 			=> 'Add',
        'edit_item' 			=> 'Edit',
        'new_item' 				=> 'New',
        'all_items' 			=> 'Messages',
        'view_item' 			=> 'View',
        'search_items' 			=> 'Search',
        'not_found' 			=> 'Not found',
        'not_found_in_trash' 	=> 'Not found',
        'menu_name' 			=> 'Messages'
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
        'supports' 				=> array( 'title', 'editor', 'custom-fields', ),
    );
    register_post_type('message', $args);
}
