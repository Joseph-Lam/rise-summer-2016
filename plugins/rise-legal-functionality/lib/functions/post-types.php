<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Services Post Type
function rise_legal_register_services_cpt() {

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
		'supports'              => array( 'title', 'editor', 'thumbnail',),
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
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'rise_legal_register_services_cpt', 0 );

// Register Resources Custom Post Type
function rise_legal_register_resources_cpt() {

	$labels = array(
		'name'                  => 'Resources',
		'singular_name'         => 'Resource',
		'menu_name'             => 'Resources',
		'name_admin_bar'        => 'Resources',
		'archives'              => 'Resources Archives',
		'parent_item_colon'     => 'Resource Item:',
		'all_items'             => 'All Resources',
		'add_new_item'          => 'Add New Resource',
		'add_new'               => 'Add New Resource',
		'new_item'              => 'New Resource',
		'edit_item'             => 'Edit Resource',
		'update_item'           => 'Update Resources',
		'view_item'             => 'View Resource',
		'search_items'          => 'Search Resource',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into resource',
		'uploaded_to_this_item' => 'Uploaded to this resource',
		'items_list'            => 'Resource list',
		'items_list_navigation' => 'Resources list navigation',
		'filter_items_list'     => 'Filter resources list',
	);
	$args = array(
		'label'                 => 'Resource',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'resources', $args );

}
add_action( 'init', 'rise_legal_register_resources_cpt', 0 );



// Register People Custom Post Type
function rise_legal_register_our_people_cpt() {

	$labels = array(
		'name'                  => 'People',
		'singular_name'         => 'Person',
		'menu_name'             => 'Our People',
		'name_admin_bar'        => 'Our People',
		'archives'              => 'People Archives',
		'parent_item_colon'     => 'Person Item:',
		'all_items'             => 'All People',
		'add_new_item'          => 'Add New Person',
		'add_new'               => 'Add New Person',
		'new_item'              => 'New Person',
		'edit_item'             => 'Edit Person',
		'update_item'           => 'Update People',
		'view_item'             => 'View Person',
		'search_items'          => 'Search People',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into person',
		'uploaded_to_this_item' => 'Uploaded to this person',
		'items_list'            => 'People list',
		'items_list_navigation' => 'People list navigation',
		'filter_items_list'     => 'Filter people list',
	);
	$args = array(
		'label'                 => 'Person',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'our_people', $args );

}
add_action( 'init', 'rise_legal_register_our_people_cpt', 0 );


// Register FAQ Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => 'FAQ',
		'singular_name'         => 'FAQ',
		'menu_name'             => 'FAQ',
		'name_admin_bar'        => 'FAQ',
		'archives'              => 'FAQ Archives',
		'parent_item_colon'     => 'Parent FAQ:',
		'all_items'             => 'All FAQ',
		'add_new_item'          => 'Add New FAQ',
		'add_new'               => 'Add FAQ',
		'new_item'              => 'New FAQ',
		'edit_item'             => 'Edit FAQ',
		'update_item'           => 'Update FAQ',
		'view_item'             => 'View FAQ',
		'search_items'          => 'Search FAQ',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into FAQ',
		'uploaded_to_this_item' => 'Uploaded to this FAQ',
		'items_list'            => 'FAQ list',
		'items_list_navigation' => 'FAQ list navigation',
		'filter_items_list'     => 'Filter FAQ list',
	);
	$args = array(
		'label'                 => 'FAQ',
		'description'           => 'Frequently Asked Questions',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-testimonial',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'custom_post_type', 0 );