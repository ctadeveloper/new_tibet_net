<?php

// let's create the function for the custom type
function custom_post_resolutions() { 
	// creating (registering) the custom type 
	register_post_type( 'cta-resolutions', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Intl Resolutions & Statements', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'International Resolution or Statement', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All International Resolutions and Statements', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New International Resolution or Statement', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit International Resolutions and Statements', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New International Resolution or Statement', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View International Resolution or Statement', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search International Resolution or Statement', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'International Resolutions & Statements', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'show_in_rest' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-admin-site', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'international-resolutions', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'international-resolutions', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			// 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
			'supports' => array( 'title', 'editor', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */
	// register_taxonomy_for_object_type( 'cta-resolution-country', 'cta-resolutions' );
	// register_taxonomy_for_object_type( 'category', 'cta-resolutions' );
} 
	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_resolutions');
	function cta_resolution_countries() {
	    $labels = array(
	        'name'                       => _x( 'Statements and Resolutions Countries', 'Taxonomy General Name', 'text_domain' ),
	        'singular_name'              => _x( 'Statements and Resolutions Country', 'Taxonomy Singular Name', 'text_domain' ),
	        'menu_name'                  => __( 'Statements and Resolutions Country', 'text_domain' ),
	        'all_items'                  => __( 'All Statements and Resolutions Countries', 'text_domain' ),
	        'parent_item'                => __( 'Parent Statements and Resolutions Country', 'text_domain' ),
	        'parent_item_colon'          => __( 'Parent Statements and Resolutions Countries:', 'text_domain' ),
	        'new_item_name'              => __( 'New Statements and Resolutions Country', 'text_domain' ),
	        'add_new_item'               => __( 'Add New Statements and Resolutions Country', 'text_domain' ),
	        'edit_item'                  => __( 'Edit Statements and Resolutions Country', 'text_domain' ),
	        'update_item'                => __( 'Update Statements and Resolutions Country', 'text_domain' ),
	        'separate_items_with_commas' => __( 'Separate Statements and Resolutions Countries with commas', 'text_domain' ),
	        'search_items'               => __( 'Search Statements and Resolutions Countries', 'text_domain' ),
	        'add_or_remove_items'        => __( 'Add or remove Statements and Resolutions Country', 'text_domain' ),
	        'choose_from_most_used'      => __( 'Choose from the most used Statements and Resolutions Countries', 'text_domain' ),
	        'not_found'                  => __( 'Statements and Resolutions Country Not Found', 'text_domain' ),
	    );
	    $args = array(
	        'labels'                     => $labels,
	        'hierarchical'               => false,
	       // 'public'                     => true,
	        'show_ui'                    => true,
		'show_in_rest'		     => true,
	        'show_admin_column'          => true,
	        'show_in_nav_menus'          => false,
	        'show_tagcloud'              => false,
	        'query_var'             	 => true,
	        'meta_box_cb'                => true,
	        'rewrite' => array('slug' => 'resolution-country'),
	    );
	    register_taxonomy( 'cta-resolution-country', array( 'cta-resolutions' ), $args );
	}
	// Hook into the 'init' action
	add_action( 'init', 'cta_resolution_countries', 0 );
	
  
	/*
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'cta-resolution-country', 
    	array('cta-resolutions'), 
    	array('hierarchical' => FALSE,                
    		'labels' => array(
    			'name' => __( 'Statements and Resolutions Countries', 'bonestheme' ), 
    			'singular_name' => __( 'Statements and Resolutions Country', 'bonestheme' ), 
    			'search_items' =>  __( 'Statements and Resolutions Countries', 'bonestheme' ), 
    			'all_items' => __( 'All Statements and Resolutions Countries', 'bonestheme' ), 
    			'parent_item' => __( 'Parent Statements and Resolutions Country', 'bonestheme' ), 
    			'parent_item_colon' => __( 'Parent Statements and Resolutions Country:', 'bonestheme' ), 
    			'edit_item' => __( 'Edit Statements and Resolutions Country', 'bonestheme' ), 
    			'update_item' => __( 'Update Statements and Resolutions Country', 'bonestheme' ), 
    			'add_new_item' => __( 'Add New Statements and Resolutions Country', 'bonestheme' ), 
    			'new_item_name' => __( 'New Quote Statements and Resolutions Country', 'bonestheme' ) 
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'resolution-country' ),
    	)
    );   

	*/  	

?>
