<?php

/**
 * Plugin Name: MAM Project Portfolio
 * Plugin URI: https://github.com/moveaheadmedia/mam-project-portfolio/
 * Description:  Use this plugin to add Project Portfolio Post Type
 * Version: 1.0.0
 * Author: Ali
 * Author URI: https://github.com/moveaheadmedia/
 * License: GPL
 */


// Register Custom Post Type
function mam_project_portfolio()
{

    $labels = array(
        'name' => _x('Project Portfolios', 'Post Type General Name', 'mam-project-portfolio'),
        'singular_name' => _x('Project Portfolio', 'Post Type Singular Name', 'mam-project-portfolio'),
        'menu_name' => __('Project Portfolios', 'mam-project-portfolio'),
        'name_admin_bar' => __('Project Portfolio', 'mam-project-portfolio'),
        'archives' => __('Item Archives', 'mam-project-portfolio'),
        'attributes' => __('Item Attributes', 'mam-project-portfolio'),
        'parent_item_colon' => __('Parent Item:', 'mam-project-portfolio'),
        'all_items' => __('All Items', 'mam-project-portfolio'),
        'add_new_item' => __('Add New Item', 'mam-project-portfolio'),
        'add_new' => __('Add New', 'mam-project-portfolio'),
        'new_item' => __('New Item', 'mam-project-portfolio'),
        'edit_item' => __('Edit Item', 'mam-project-portfolio'),
        'update_item' => __('Update Item', 'mam-project-portfolio'),
        'view_item' => __('View Item', 'mam-project-portfolio'),
        'view_items' => __('View Items', 'mam-project-portfolio'),
        'search_items' => __('Search Item', 'mam-project-portfolio'),
        'not_found' => __('Not found', 'mam-project-portfolio'),
        'not_found_in_trash' => __('Not found in Trash', 'mam-project-portfolio'),
        'featured_image' => __('Featured Image', 'mam-project-portfolio'),
        'set_featured_image' => __('Set featured image', 'mam-project-portfolio'),
        'remove_featured_image' => __('Remove featured image', 'mam-project-portfolio'),
        'use_featured_image' => __('Use as featured image', 'mam-project-portfolio'),
        'insert_into_item' => __('Insert into item', 'mam-project-portfolio'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'mam-project-portfolio'),
        'items_list' => __('Items list', 'mam-project-portfolio'),
        'items_list_navigation' => __('Items list navigation', 'mam-project-portfolio'),
        'filter_items_list' => __('Filter items list', 'mam-project-portfolio'),
    );
    $args = array(
        'label' => __('Project Portfolio', 'mam-project-portfolio'),
        'description' => __('Project Portfolio', 'mam-project-portfolio'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'taxonomies' => array('post_tag'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',

    );
    register_post_type('project-portfolio', $args);

}

add_action('init', 'mam_project_portfolio', 0);

