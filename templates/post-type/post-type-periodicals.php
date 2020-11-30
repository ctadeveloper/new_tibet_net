<?php



// let's create the function for the custom type
function custom_post_periodicals() { 
	// creating (registering) the custom type 
	register_post_type( 'cta-periodicals', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Periodicals', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Periodical', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Periodicals', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Periodical', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Periodicals', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Periodical', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Periodical', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Periodical', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Periodicals Published by CTA', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-book-alt', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'periodicals', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'periodicals', /* you can rename the slug here */
			'capability_type' => 'post',
			'show_in_rest' => true,
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			// 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
			'supports' => array( 'title', 'editor', 'author', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'cta-periodical-title', 'cta-periodical' );
	/* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type( 'post_tag', 'custom_type' );
	
} 


	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_periodicals');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'cta-periodical-title', 
    	array('cta-periodicals'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Periodical Title', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Periodical Title', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Periodical Titles', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Periodical Titles', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Periodical Title', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Periodical Title:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Periodical Title', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Periodical Title', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Periodical Title', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Periodical Title Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
		'show_in_rest' => true,
    		'rewrite' => array( 'slug' => 'custom-slug' ),
    	)
    );   
    	

?>
