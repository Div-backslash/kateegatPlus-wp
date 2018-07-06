<?php 
/*
******************************************
My super Custom Post Type
******************************************
*/

function kattegatplus_post_type() {
// set up labels
$labels = array(
'name' => 'Themes',
'singular_name' => 'Theme',
'add_new' => 'Add New Theme',
'add_new_item' => 'Add New Theme',
'edit_item' => 'Edit Theme',
'new_item' => 'New Theme',
'all_items' => 'All Themes',
'view_item' => 'View Theme',
'search_items' => 'Search Themes',
'not_found' => 'No Themes Found',
'not_found_in_trash' => 'No Themes found in Trash',
'parent_item_colon' => '',
'menu_name' => 'Themes',
);

//register post type
register_post_type( 'product', array(
'labels' => $labels,
'has_archive' => true,
'public' => true,
'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
'taxonomies' => array( 'post_tag', 'category' ),
'exclude_from_search' => false,
'capability_type' => 'post',
'rewrite' => array( 'slug' => 'products' ),
)
);
}
add_action( 'init', 'kattegatplus_post_type' );
?>