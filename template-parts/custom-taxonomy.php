<?php 
// register two taxonomies to go with the post type
function kateegat_register_taxonomy() {
// set up labels
$labels = array(
'name' => 'Theme Categories',
'singular_name' => 'Theme Category',
'search_items' => 'Search Theme Categories',
'all_items' => 'All Theme Categories',
'edit_item' => 'Edit Theme Category',
'update_item' => 'Update Theme Category',
'add_new_item' => 'Add New Theme Category',
'new_item_name' => 'New Theme Category',
'menu_name' => 'Theme Categories'
);
// register taxonomy
register_taxonomy( 'productcat', 'product', array(
'hierarchical' => true,
'labels' => $labels,
'query_var' => true,
'show_admin_column' => true
) );
}
add_action( 'init', 'kateegat_register_taxonomy' );

?>