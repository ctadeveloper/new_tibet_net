<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/


// let's create the function for the custom type
function custom_post_sbs_items() { 
	// creating (registering) the custom type 
	register_post_type( 'cta-sbs-items', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Sidebar Slider Items', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Sidebar Slider Item', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Sidebar Slider Items', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Sidebar Slider Item', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Sidebar Slider Items', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Sidebar Slider Item', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Sidebar Slider Item', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Sidebar Slider Item', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Sidebar Slider Items', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-welcome-widgets-menus', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'sb_slide', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'cta-sbs-items', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			// 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
			'supports' => array( 'title')
	 	) /* end of options */
	); /* end of register post type */
	
	
	
} 


	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_sbs_items');
	
    	

?>
