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
function custom_post_self_immolator() { 
	// creating (registering) the custom type 
	register_post_type( 'self-immolator', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Self Immolations', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Self Immolator', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Self Immolators', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Self Immolator', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Self Immolators', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Self Immolator', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Self Immolator', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Self Immolator', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Self Immolators', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'show_in_rest' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-id', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'self-immolations', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'self-immolations', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array('category'),
			/* the next one is important, it tells what's enabled in the post editor */
			// 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
			'supports' => array( 'title', 'thumbnail', 'custom-fields')
	 	) /* end of options */
	); /* end of register post type */
	
	//	register_taxonomy_for_object_type( 'cta-quote-location', 'cta-quotes' );
	
} 


	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_self_immolator');

	/*


    	array('hierarchical' => true,    
    		'labels' => array(
    			'name' => __( 'Quote Location', 'bonestheme' ), 
    			'singular_name' => __( 'Quote Location', 'bonestheme' ), 
    			'search_items' =>  __( 'Search Quote Locations', 'bonestheme' ),
    			'all_items' => __( 'All Quote Locations', 'bonestheme' ),
    			'parent_item' => __( 'Parent Quote Location', 'bonestheme' ), 
    			'parent_item_colon' => __( 'Parent Quote Location:', 'bonestheme' ), 
    			'edit_item' => __( 'Edit Quote Location', 'bonestheme' ), 
    			'update_item' => __( 'Update Quote Location', 'bonestheme' ),
    			'add_new_item' => __( 'Add New Quote Location', 'bonestheme' ), 
    			'new_item_name' => __( 'New Quote Location Name', 'bonestheme' ) 
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'quote-location' ),
    	)
    );   
	
	*/
    	

?>
