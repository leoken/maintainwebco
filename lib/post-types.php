<?php if ( ! function_exists('maintainwebco_post_types') ) {

// Register Custom Post Type
function maintainwebco_post_types() {

	$labels = array(
		'name'                => _x( 'Carousels', 'Post Type General Name', 'maintainwebco' ),
		'singular_name'       => _x( 'Carousel', 'Post Type Singular Name', 'maintainwebco' ),
		'menu_name'           => __( 'Carousels', 'maintainwebco' ),
		'parent_item_colon'   => __( 'Parent Item:', 'maintainwebco' ),
		'all_items'           => __( 'All Items', 'maintainwebco' ),
		'view_item'           => __( 'View Item', 'maintainwebco' ),
		'add_new_item'        => __( 'Add New Item', 'maintainwebco' ),
		'add_new'             => __( 'Add New', 'maintainwebco' ),
		'edit_item'           => __( 'Edit Item', 'maintainwebco' ),
		'update_item'         => __( 'Update Item', 'maintainwebco' ),
		'search_items'        => __( 'Search Item', 'maintainwebco' ),
		'not_found'           => __( 'Not found', 'maintainwebco' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'maintainwebco' ),
	);
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//    'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
	);
	register_post_type( 'carousel', $args );

	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'maintainwebco' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'maintainwebco' ),
		'menu_name'           => __( 'Services', 'maintainwebco' ),
		'parent_item_colon'   => __( 'Parent Item:', 'maintainwebco' ),
		'all_items'           => __( 'All Services', 'maintainwebco' ),
		'view_item'           => __( 'View Item', 'maintainwebco' ),
		'add_new_item'        => __( 'Add New Service', 'maintainwebco' ),
		'add_new'             => __( 'Add New', 'maintainwebco' ),
		'edit_item'           => __( 'Edit Item', 'maintainwebco' ),
		'update_item'         => __( 'Update Item', 'maintainwebco' ),
		'search_items'        => __( 'Search Item', 'maintainwebco' ),
		'not_found'           => __( 'Not found', 'maintainwebco' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'maintainwebco' ),
	);
	$rewrite = array(
		'slug'                => 'services',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'service', 'maintainwebco' ),
		'description'         => __( 'Services we offer to clients', 'maintainwebco' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'service', $args );

	$labels = array(
		'name'                => _x( 'Clients', 'Post Type General Name', 'maintainwebco' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'maintainwebco' ),
		'menu_name'           => __( 'Clients', 'maintainwebco' ),
		'parent_item_colon'   => __( 'Parent Item:', 'maintainwebco' ),
		'all_items'           => __( 'All Clients', 'maintainwebco' ),
		'view_item'           => __( 'View Item', 'maintainwebco' ),
		'add_new_item'        => __( 'Add New Client', 'maintainwebco' ),
		'add_new'             => __( 'Add New', 'maintainwebco' ),
		'edit_item'           => __( 'Edit Item', 'maintainwebco' ),
		'update_item'         => __( 'Update Item', 'maintainwebco' ),
		'search_items'        => __( 'Search Item', 'maintainwebco' ),
		'not_found'           => __( 'Not found', 'maintainwebco' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'maintainwebco' ),
	);
	$rewrite = array(
		'slug'                => 'clients',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'client', 'maintainwebco' ),
		'description'         => __( 'Types of customer we work with', 'maintainwebco' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'client', $args );

	$labels = array(
		'name'                => _x( 'Features', 'Post Type General Name', 'maintainwebco' ),
		'singular_name'       => _x( 'Feature', 'Post Type Singular Name', 'maintainwebco' ),
		'menu_name'           => __( 'Features', 'maintainwebco' ),
		'parent_item_colon'   => __( 'Parent Item:', 'maintainwebco' ),
		'all_items'           => __( 'All Features', 'maintainwebco' ),
		'view_item'           => __( 'View Item', 'maintainwebco' ),
		'add_new_item'        => __( 'Add New Feature', 'maintainwebco' ),
		'add_new'             => __( 'Add New', 'maintainwebco' ),
		'edit_item'           => __( 'Edit Item', 'maintainwebco' ),
		'update_item'         => __( 'Update Item', 'maintainwebco' ),
		'search_items'        => __( 'Search Item', 'maintainwebco' ),
		'not_found'           => __( 'Not found', 'maintainwebco' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'maintainwebco' ),
	);
	$rewrite = array(
		'slug'                => 'features',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'feature', 'maintainwebco' ),
		'description'         => __( 'Features included with our various services', 'maintainwebco' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'feature', $args );

}

// Hook into the 'init' action
add_action( 'init', 'maintainwebco_post_types', 0 );

}