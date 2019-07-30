<?php

function cdswebinar_init() {
    $labels = array(
		'name'               => __( 'Cdswebinars', 'cdswebinar' ),
		'singular_name'      => __( 'Cdswebinar', 'cdswebinar' ),
		'menu_name'          => __( 'Cdswebinars', 'cdswebinar' ),
		'name_admin_bar'     => __( 'Cdswebinar', 'cdswebinar' ),
		'add_new'            => __( 'Add New', 'cdswebinar' ),
		'add_new_item'       => __( 'Add New Cdswebinar', 'cdswebinar' ),
		'new_item'           => __( 'New Cdswebinar', 'cdswebinar' ),
		'edit_item'          => __( 'Edit Cdswebinar', 'cdswebinar' ),
		'view_item'          => __( 'View Cdswebinar', 'cdswebinar' ),
		'all_items'          => __( 'All Cdswebinars', 'cdswebinar' ),
		'search_items'       => __( 'Search Cdswebinars', 'cdswebinar' ),
		'parent_item_colon'  => __( 'Parent Cdswebinars:', 'cdswebinar' ),
		'not_found'          => __( 'No Cdswebinars found.', 'cdswebinar' ),
		'not_found_in_trash' => __( 'No Cdswebinars found in Trash.', 'cdswebinar' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'A custom post type for cdswebinars.', 'cdswebinar' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cdswebinar' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
        // 'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array( 'category', 'post_tag') // check this one
	);

	register_post_type( 'cdswebinar', $args );
}