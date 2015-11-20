<?php

// Register Custom Post Type
function rokophoto_portfolio() {

	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'rokophoto' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'rokophoto' ),
		'menu_name'           => __( 'Portfolio', 'rokophoto' ),
		'parent_item_colon'   => __( 'Parent Item:', 'rokophoto' ),
		'all_items'           => __( 'All Items', 'rokophoto' ),
		'view_item'           => __( 'View Item', 'rokophoto' ),
		'add_new_item'        => __( 'Add New Item', 'rokophoto' ),
		'add_new'             => __( 'Add New', 'rokophoto' ),
		'edit_item'           => __( 'Edit Item', 'rokophoto' ),
		'update_item'         => __( 'Update Item', 'rokophoto' ),
		'search_items'        => __( 'Search Item', 'rokophoto' ),
		'not_found'           => __( 'Not found', 'rokophoto' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'rokophoto' ),
	);
	$args = array(
		'label'               => __( 'portfolio', 'rokophoto' ),
		'description'         => __( 'Your portfolio items.', 'rokophoto' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'portfolio', $args );

}

// Hook into the 'init' action
add_action( 'init', 'rokophoto_portfolio', 0 );

?>