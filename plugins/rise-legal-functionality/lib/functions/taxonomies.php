 <?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom People Group Taxonomy
function rise_legal_register_people_group_taxonomy() {

	$labels = array(
		'name'                       => 'People Groups',
		'singular_name'              => 'People Group',
		'menu_name'                  => 'People Groups',
		'all_items'                  => 'All People Groups',
		'parent_item'                => 'People Group Item',
		'parent_item_colon'          => 'People Group Item:',
		'new_item_name'              => 'New People Group Name',
		'add_new_item'               => 'Add New People Group',
		'edit_item'                  => 'Edit People Groups',
		'update_item'                => 'Update People Groups',
		'view_item'                  => 'View People Groups',
		'separate_items_with_commas' => 'Separate People Groups with commas',
		'add_or_remove_items'        => 'Add or remove People Groups',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular People Groups',
		'search_items'               => 'Search People Groups',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No People Groups',
		'items_list'                 => 'People Groups list',
		'items_list_navigation'      => 'People Groups list navigation',
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
	register_taxonomy( 'people_group', array( 'our_people' ), $args );

}
add_action( 'init', 'rise_legal_register_people_group_taxonomy', 0 );
