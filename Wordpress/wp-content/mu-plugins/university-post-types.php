<?php

function university_post_types(){
 //Event post type   
    register_post_type('event', array(
        'has_archive' => true,
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'capability_type' => 'event',
        'map_meta_cap' => true,
        'rewrite' => array('slug' => 'events'),
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

 //Program post type 
 
  register_post_type('program', array(
        'has_archive' => true,
        'public' => true,
        'supports' => array('title'),
        'rewrite' => array('slug' => 'programs'),
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards'
    ));

//Professor post type

    register_post_type('professor', array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
        ),
        'menu_icon' => 'dashicons-welcome-write-blog'
    ));
// Campus post type

    register_post_type('campus', array(
        'has_archive' => true,
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'campuses'),
        'labels' => array(
            'name' => 'Campuses',
            'add_new_item' => 'Add New Campus',
            'edit_item' => 'Edit Campus',
            'all_items' => 'All Campuses',
            'singular_name' => 'Campus'
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));

    // Like Post Type
     register_post_type('like', array(
        'public' => false,
        'show_ui' => true,
        'supports' => array('title'),
        'labels' => array(
            'name' => 'Likes',
            'add_new_item' => 'Add New Like',
            'edit_item' => 'Edit Like',
            'all_items' => 'All Likes',
            'singular_name' => 'Like'
        ),
        'menu_icon' => 'dashicons-heart'
    ));
 
}

add_action('init', 'university_post_types');

 ?>