<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the settings custom type
function settings_post_type() {
	// creating (registering) the custom type
	register_post_type( 'settings_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Site Settings', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Settings', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Settings', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Setting', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Setting', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Setting', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Setting', 'bonestheme' ), /* View Display Title */

			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'These are the sitewide settings pages', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'settings', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'settings', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */


}

	// adding the function to the Wordpress init
	add_action( 'init', 'settings_post_type');



?>
