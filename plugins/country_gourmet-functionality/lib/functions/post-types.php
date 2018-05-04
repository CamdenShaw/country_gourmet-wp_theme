<?php
/**
 * POST TYPES
 * 
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Menu Post Type
function country_gourmet_cpt_menus() {
    $labels = array(
        'name'                  => 'menus',
        'singular_name'         => 'menu',
        'menu_name'             => 'Menus',
        'name_admin_bar'        => 'Menus',
        'archives'              => 'Menu Archives',
        'attributes'            => 'Menu Attributes',
        'parent_item_colon'     => 'Parent Menu:',
        'all_items'             => 'All Menus',
        'add_new_item'          => 'Add New Menu',
        'add_new'               => 'Add New',
        'new_item'              => 'New Menu',
        'edit_item'             => 'Edit Menu',
        'update_item'           => 'Update Menu',
        'view_item'             => 'View Menu',
        'view_items'            => 'View Menus',
        'search_items'          => 'Search Menus',
        'not_found'             => 'Not Found',
        'not_found_in_trash'    => 'Not Found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set Featured Image',
        'remove_featured_image' => 'Remove Featured Image',
        'use_featured_image'    => 'Use as Featured Image',
        'insert_into_item'      => 'Insert Into Menu',
        'uploaded_to_this_item' => 'Upload to This Menu',
        'items_list'            => 'Menu List',
        'items_list_navigation' => 'Menu List Navigation',
        'filter_items_list'     => 'Filter Menus List'
    );
    $args = array(
        'label'                 => 'Menu',
        'description'           => 'A custom post-type for uploading menu items for Country Gourmet.',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-clipboard',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicity_queryable'   => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'menu', $args);
}
add_action( 'init', 'country_gourmet_cpt_menus', 0);