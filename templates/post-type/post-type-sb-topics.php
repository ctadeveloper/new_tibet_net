<?php

// let's create the function for the custom type
function custom_post_sb_topics() { 
	// creating (registering) the custom type 
	register_post_type( 'cta-sb-topics', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Sidebar Topics', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Sidebar Topic', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Sidebar Topics', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Sidebar Topic', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Sidebar Topics', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Sidebar Topic', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Sidebar Topic', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Sidebar Topic', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Sidebar Topics', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-pressthis', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'topics', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'cta-sb-topics', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			// 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
			'supports' => array( 'title', 'page-attributes')
	 	) /* end of options */
	); /* end of register post type */
	
	
	
} 


	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_sb_topics');
	
    	

?>
