<?php

/*
Define directory variables.
*/
require get_template_directory() . '/inc/define.php';

/*
Disable Guttenberg
*/
add_filter( 'use_block_editor_for_post', '__return_false' );

/*
Remove Posts from wp-admin menu
*/
function post_remove() { 
   remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove'); 

/*
Register Product Post Type
*/
register_taxonomy('product_category', 'product', array(
    'hierarchical' => true,
    'labels' => array(
        'name' => __('Product Category'),
        'singular_name' => __('product_category'),
        'search_items' => __('Search Category'),
        'popular_items' => __('Popular Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Categories'),
        'parent_item_colon' => __('Parent Categories:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'separate_items_with_commas' => __('Separate categories with commas'),
        'add_or_remove_items' => __('Add or remove Categories'),
        'choose_from_most_used' => __('Choose from the most used Categories'),
        'menu_name' => __('Product Categories'),
    ),
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'product-category'),
));

$product_args = array(
    'labels' => array(
        'name'               => 'Products',
        'singular_name'      => 'Product',
        'add_new'            => 'New Product',
        'add_new_item'       => 'Add New Product',
        'edit_item'          => 'Edit Product',
        'new_item'           => 'New Product',
        'view_item'          => 'View Product',
        'search_items'       => 'Search Products',
        'not_found'          => 'No Products Found',
        'not_found_in_trash' => 'No Products In The Trash'
    ),
    'description' => 'Products written by Admin',
    'public' => true,
    'has_archive' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'supports' => array( 'title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'product'),
    'menu_position' => 8,
);
register_post_type( 'product', $product_args );