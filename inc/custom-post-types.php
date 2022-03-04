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
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'post-format', array( 'post' ), $args );

}
add_action( 'init', 'formats', 0 );


// Register Course Level Custom Taxonomy
function levels() {
	$labels = array(
		'name'                       => _x( 'Levels', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Level', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Levels', 'text_domain' ),
		'all_items'                  => __( 'All Levels', 'text_domain' ),
		'parent_item'                => __( 'Parent Level', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Level:', 'text_domain' ),
		'new_item_name'              => __( 'New Level Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Level', 'text_domain' ),
		'edit_item'                  => __( 'Edit Level', 'text_domain' ),
		'update_item'                => __( 'Update Level', 'text_domain' ),
		'view_item'                  => __( 'View Level', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Levels with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Levels', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Levels', 'text_domain' ),
		'search_items'               => __( 'Search Levels', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Levels', 'text_domain' ),
		'items_list'                 => __( 'Levels list', 'text_domain' ),
		'items_list_navigation'      => __( 'Levels list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'post-levels', array( 'post' ), $args );

}
add_action( 'init', 'levels', 0 );


//Staff CPT slug rename
add_filter( 'register_post_type_args', 'f1_register_post_type_args', 10, 2 );
function f1_register_post_type_args( $args, $post_type ) {
	if ( 'f1_staffgrid_cpt' === $post_type ) {
			$args['rewrite']['slug'] = 'practice-leader';
	}
	return $args;
}

// Register Lesson Custom Post Type
function lessons() {

	$labels = array(
		'name'                  => _x( 'Lesson', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Lesson', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Lessons', 'text_domain' ),
		'name_admin_bar'        => __( 'Lessons', 'text_domain' ),
		'archives'              => __( 'Lesson Archives', 'text_domain' ),
		'attributes'            => __( 'Lesson Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Lesson:', 'text_domain' ),
		'all_items'             => __( 'All Lessons', 'text_domain' ),
		'add_new_item'          => __( 'Add New Lesson', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Lesson', 'text_domain' ),
		'edit_item'             => __( 'Edit Lesson', 'text_domain' ),
		'update_item'           => __( 'Update Lesson', 'text_domain' ),
		'view_item'             => __( 'View Lesson', 'text_domain' ),
		'view_items'            => __( 'View Lessons', 'text_domain' ),
		'search_items'          => __( 'Search Lesson', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Lesson', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Lesson', 'text_domain' ),
		'items_list'            => __( 'Lessons list', 'text_domain' ),
		'items_list_navigation' => __( 'Lessons list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Lessons list', 'text_domain' ),
	);
  $rewrite = array(
    'slug'                  => 'training',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
	$args = array(
		'label'                 => __( 'Lesson', 'text_domain' ),
		'description'           => __( 'Lesson', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'page-attributes' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'training',
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'lesson', $args );

}
add_action( 'init', 'lessons', 0 );

// Register Course Custom Taxonomy
function courses() {

	$labels = array(
		'name'                       => _x( 'Courses', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Course', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Courses', 'text_domain' ),
		'all_items'                  => __( 'All Courses', 'text_domain' ),
		'parent_item'                => __( 'Parent Course', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Course:', 'text_domain' ),
		'new_item_name'              => __( 'New Course Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Course', 'text_domain' ),
		'edit_item'                  => __( 'Edit Course', 'text_domain' ),
		'update_item'                => __( 'Update Course', 'text_domain' ),
		'view_item'                  => __( 'View Course', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Courses with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Courses', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Courses', 'text_domain' ),
		'search_items'               => __( 'Search Courses', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Courses', 'text_domain' ),
		'items_list'                 => __( 'Courses list', 'text_domain' ),
		'items_list_navigation'      => __( 'Courses list navigation', 'text_domain' ),
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
	register_taxonomy( 'course', array( 'lesson' ), $args );

}
add_action( 'init', 'courses', 0 );