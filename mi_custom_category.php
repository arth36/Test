<?php

function mi_category_hierarchical_taxonomy(){

    $labels = array(
        'name' => __('Menu Categories', 'wp-menu'),
        'singular_name' => __('Menu Category', 'wp-menu'),
        'search_items' => __('Search Menu Category', 'wp-menu'),
        'all_items' => __('All Menu Categories', 'wp-menu'),
        'parent_item' => __('Parent Menu Category', 'wp-menu'),
        'parent_item_colon' => __('Parent Menu Category', 'wp-menu'),
        'edit_item' => __('Edit Menu Category', 'wp-menu'),
        'update_item' => __('Update Menu Category', 'wp-menu'),
        'add_new_item' => __('Add New Menu Category', 'wp-menu'),
        'new_item_name' => __('New Menu Category Name', 'wp-menu'),
        'menu_name' => __('Menu Categories', 'wp-menu'),
        'orderby' => 'count'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'menu_category' ),
    );

    register_taxonomy( 'menu_category', array('menu'), $args );

}

add_action( 'init', 'mi_category_hierarchical_taxonomy' );