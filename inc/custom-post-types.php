<?php
/*-----------------------------------------------------------------------------
  Register Custom Post Types
-----------------------------------------------------------------------------*/
// Register Resources Custom Taxonomy
function resources() {

	$labels = array(
		'name'                       => _x( 'Resources', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Resource', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Resources', 'text_domain' ),
		'all_items'                  => __( 'All Resources', 'text_domain' ),
		'parent_item'                => __( 'Parent Resource', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Resource:', 'text_domain' ),
		'new_item_name'              => __( 'New Resource Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Resource', 'text_domain' ),
		'edit_item'                  => __( 'Edit Resource', 'text_domain' ),
		'update_item'                => __( 'Update Resource', 'text_domain' ),
		'view_item'                  => __( 'View Resource', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Resources with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Resources', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Resources', 'text_domain' ),
		'search_items'               => __( 'Search Resources', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Resources', 'text_domain' ),
		'items_list'                 => __( 'Resources list', 'text_domain' ),
		'items_list_navigation'      => __( 'Resources list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'resource', array( 'post' ), $args );

}
add_action( 'init', 'resources', 0 );
