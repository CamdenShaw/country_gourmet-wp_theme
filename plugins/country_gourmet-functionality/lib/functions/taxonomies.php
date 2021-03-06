<?php
/**
 * TAXONOMIES
 * 
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Menu Taxonomy
function country_gourmet_tax_menu() {
    $labels = array(
        'name'                          => 'Menus',
        'singular_name'                 => 'Menu',
        'menu_name'                     => 'Menu Type',
        'all_items'                     => 'All Menus',
        'parent_item'                   => 'Parent Menu',
        'parent_item_colon'             => 'Parent Menu:',
        'new_item_name'                 => 'New Menu Name',
        'add_new_item'                  => 'Add New Menu',
        'edit_item'                     => 'Edit Menu',
        'update_item'                   => 'Update Menu',
        'view_item'                     => 'View Menu',
        'separate_items_with_commas'    => 'Separate Menus with Commas',
        'add_or_remove_items'           => 'Add or Remove Menus',
        'choose_from_most_used'         => 'Choose from the Most Used',
        'popular_items'                 => 'Popular Menus',
        'search_items'                  => 'Search Menus',
        'not_found'                     => 'Not Found',
        'no_terms'                      => 'No Menus',
        'items_list'                    => 'Menus List',
        'items_list_navigation'         => 'Menus List Navigation',
    );
    $args = array (
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloug'     => true,
        'show_in_rest'      => true,
    );
    register_taxonomy( 'menus-type', array( 'menu' ), $args );
}
add_action( 'init', 'country_gourmet_tax_menu', 0 );

function country_gourmet_tax_artworks() {
    $labels = array(
        'name'                          => 'Artworks',
        'singular_name'                 => 'Artwork',
        'menu_name'                     => 'Artwork Type',
        'all_items'                     => 'All Artworks',
        'parent_item'                   => 'Parent Artwork',
        'parent_item_colon'             => 'Parent Artwork:',
        'new_item_name'                 => 'New Artwork Name',
        'add_new_item'                  => 'Add New Artwork',
        'edit_item'                     => 'Edit Artwork',
        'update_item'                   => 'Update Artwork',
        'view_item'                     => 'View Artwork',
        'separate_items_with_commas'    => 'Separate Artworks with Commas',
        'add_or_remove_items'           => 'Add or Remove Artworks',
        'choose_from_most_used'         => 'Choose from the Most Used',
        'popular_items'                 => 'Popular Artworks',
        'search_items'                  => 'Search Artworks',
        'not_found'                     => 'Not Found',
        'no_terms'                      => 'No Artworks',
        'items_list'                    => 'Artworks List',
        'items_list_navigation'         => 'Artworks List Navigation',
    );
    $args = array (
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloug'     => true,
        'show_in_rest'      => true,
    );
    register_taxonomy( 'artworks-type', array( 'artwork' ), $args );
}
add_action( 'init', 'country_gourmet_tax_artworks', 0 );
?>