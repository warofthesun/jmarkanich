<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function portfolio_post_type() {
	// creating (registering) the custom type
	register_post_type( 'portfolio_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Portfolio Items', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Portfolio Item', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Portfolio Items', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Portfolio Item', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Portfolio', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Portfolio Item', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Portfolio Item', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Portfolio Items', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the post type for portfolio items', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'portfolio_item', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'portfolio_item', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'portfolio_type' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'portfolio_type' );

}

	// adding the function to the Wordpress init
	add_action( 'init', 'portfolio_post_type');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

	// now let's add custom categories (these act like categories)
	register_taxonomy( 'custom_cat',
		array('portfolio_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Portfolio Categories', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Portfolio Category', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Portfolio Categories', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Portfolio Categories', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Portfolio Category', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Portfolio Category:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Portfolio Category', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Portfolio Category', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Portfolio Category', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Portfolio Category Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'portfolio-item' ),
		)
	);

	// now let's add custom tags (these act like categories)
	register_taxonomy( 'custom_tag',
		array('portfolio_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => false,    /* if this is false, it acts like tags */
			'labels' => array(
				'name' => __(  'Portfolio Tags', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __(  'Portfolio Tag', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Portfolio Tags', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Portfolio Tags', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Portfolio Tag', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Portfolio Tag:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Portfolio Tag', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Portfolio Tag', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Portfolio Tag', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Portfolio Tag Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);

	


?>
