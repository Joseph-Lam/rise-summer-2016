<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Services Post Type
function rise_legal_register_services_offered() {

	$labels = array(
		'name'                  => 'Services',
		'singular_name'         => 'Service',
		'menu_name'             => 'Services',
		'name_admin_bar'        => 'Services',
		'archives'              => 'Services Archives',
		'parent_item_colon'     => 'Service Item:',
		'all_items'             => 'All Services',
		'add_new_item'          => 'Add New Service',
		'add_new'               => 'Add New Service',
		'new_item'              => 'New Service',
		'edit_item'             => 'Edit Services',
		'update_item'           => 'Update Services',
		'view_item'             => 'View Service',
		'search_items'          => 'Search Services',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into service',
		'uploaded_to_this_item' => 'Uploaded to this service',
		'items_list'            => 'Services list',
		'items_list_navigation' => 'Services list navigation',
		'filter_items_list'     => 'Filter services list',
	);
	$args = array(
		'label'                 => 'Service',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-heart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'rise_legal_register_services_offered', 0 );