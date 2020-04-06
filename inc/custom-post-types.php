<?php
/*-----------------------------------------------------------------------------
  Register Custom Post Types
-----------------------------------------------------------------------------*/
// Register Formats Custom Taxonomy
function formats() {
	$labels = array(
		'name'                       => _x( 'Formats', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Format', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Formats', 'text_domain' ),
		'all_items'                  => __( 'All Formats', 'text_domain' ),
		'parent_item'                => __( 'Parent Format', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Format:', 'text_domain' ),
		'new_item_name'              => __( 'New Format Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Format', 'text_domain' ),
		'edit_item'                  => __( 'Edit Format', 'text_domain' ),
		'update_item'                => __( 'Update Format', 'text_domain' ),
		'view_item'                  => __( 'View Format', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Formats with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Formats', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Formats', 'text_domain' ),
		'search_items'               => __( 'Search Formats', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Formats', 'text_domain' ),
		'items_list'                 => __( 'Formats list', 'text_domain' ),
		'items_list_navigation'      => __( 'Formats list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'post-format', array( 'post' ), $args );

}
add_action( 'init', 'formats', 0 );
