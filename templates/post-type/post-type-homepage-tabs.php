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
function custom_post_footer_tabs() { 
	// creating (registering) the custom type 
	register_post_type( 'cta-footer-tabs', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Footer Tabs', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Footer Tab', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Footer Tabs', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Footer Tab', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Footer Tabs', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Footer Tab', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Footer Tab', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Footer Tab', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Footer Tabs', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-feedback', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'cta-footer-tabs', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'cta-footer-tabs', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			// 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
			'supports' => array( 'title', 'editor', 'page-attributes')
	 	) /* end of options */
	); /* end of register post type */
	
	
	
} 


	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_footer_tabs');
	
    	

?>
