<?php
// Register CTA Content Type Taxonomy
function cta_content_type() {

    $labels = array(
        'name'                       => _x( 'Content Types', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Content Type', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Content Types', 'text_domain' ),
        'all_items'                  => __( 'All Content Types', 'text_domain' ),
        'parent_item'                => __( 'Parent Content Type', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Content Type:', 'text_domain' ),
        'new_item_name'              => __( 'New Content Type', 'text_domain' ),
        'add_new_item'               => __( 'Add New Content Type', 'text_domain' ),
        'edit_item'                  => __( 'Edit Content Type', 'text_domain' ),
        'update_item'                => __( 'Update Content Type', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Content Types with commas', 'text_domain' ),
        'search_items'               => __( 'Search Content Types', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Content Types', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used iContent Types', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        "rewrite" => array('slug' => 'posts'),
        'meta_box_cb'                => false,
    );
    register_taxonomy( 'cta_content_type', array( 'post' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'cta_content_type', 0 );

// Register Custom Taxonomy
function cta_video_categories() {

    $labels = array(
        'name'                       => _x( 'CTA Video Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'CTA Video Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'CTA Video Categories', 'text_domain' ),
        'all_items'                  => __( 'All CTA Video Categories', 'text_domain' ),
        'parent_item'                => __( 'Parent CTA Video Category', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent CTA Video Category:', 'text_domain' ),
        'new_item_name'              => __( 'New CTA Video Category Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New CTA Video Category', 'text_domain' ),
        'edit_item'                  => __( 'Edit CTA Video Category', 'text_domain' ),
        'update_item'                => __( 'Update CTA Video Category', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate CTA Video Categories with commas', 'text_domain' ),
        'search_items'               => __( 'Search CTA Video Categories', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove CTA Video Category', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used CTA Video Categories', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => true,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'videos'),
    );
    register_taxonomy( 'cta_video_category', array( 'post' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_video_categories', 0 );



// Register Custom Taxonomy
function cta_photo_topics() {

    $labels = array(
        'name'                       => _x( 'CTA Photo Topics', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'CTA Photo Topic', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'CTA Photo Topics', 'text_domain' ),
        'all_items'                  => __( 'All Photo Topics', 'text_domain' ),
        'parent_item'                => __( 'Parent CTA Photo Topic', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent CTA Photo Topic:', 'text_domain' ),
        'new_item_name'              => __( 'New CTA Photo Topic Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New CTA Photo Topic', 'text_domain' ),
        'edit_item'                  => __( 'Edit CTA Photo Topic', 'text_domain' ),
        'update_item'                => __( 'Update CTA Photo Topic', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate CTA Photo Topics with commas', 'text_domain' ),
        'search_items'               => __( 'Search CTA Photo Topics', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove CTA Photo Topic', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used CTA Photo Topics', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => true,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'photos'),
    );
    register_taxonomy( 'cta_photo_topic', array( 'post' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_photo_topics', 0 );



// Register Custom Taxonomy
function cta_periodical_titles() {

    $labels = array(
        'name'                       => _x( 'CTA Periodical Titles', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'CTA Periodical Title', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'CTA Periodical Titles', 'text_domain' ),
        'all_items'                  => __( 'All CTA Periodical Titles', 'text_domain' ),
        'parent_item'                => __( 'Parent CTA Periodical Title', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent CTA Periodical Title:', 'text_domain' ),
        'new_item_name'              => __( 'New CTA Periodical Title Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New CTA Periodical Title', 'text_domain' ),
        'edit_item'                  => __( 'Edit CTA Periodical Title', 'text_domain' ),
        'update_item'                => __( 'Update CTA Periodical Title', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate CTA Periodical Titles with commas', 'text_domain' ),
        'search_items'               => __( 'Search CTA Periodical Titles', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove CTA Periodical Title', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used CTA Periodical Titles', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
	'show_in_rest'		     => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'periodicals'),
    );
    register_taxonomy( 'cta_periodical_title', array( 'post' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_periodical_titles', 0 );


// Register Custom Taxonomy
function cta_publication_categories() {

    $labels = array(
        'name'                       => _x( 'CTA Publication Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'CTA Publication Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'CTA Publication Categories', 'text_domain' ),
        'all_items'                  => __( 'All CTA Publication Categories', 'text_domain' ),
        'parent_item'                => __( 'Parent CTA Publication Category', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent CTA Publication Category:', 'text_domain' ),
        'new_item_name'              => __( 'New CTA Publication Category Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New CTA Publication Category', 'text_domain' ),
        'edit_item'                  => __( 'Edit CTA Publication Category', 'text_domain' ),
        'update_item'                => __( 'Update CTA Publication Category', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate CTA Publication Categories with commas', 'text_domain' ),
        'search_items'               => __( 'Search CTA Publication Categories', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove CTA Publication Category', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used CTA Publication Categories', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => true,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'publications'),
    );
    register_taxonomy( 'cta_publication_category', array( 'post' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_publication_categories', 0 );



// Register Custom Taxonomy
function cta_statement_categories() {

    $labels = array(
        'name'                       => _x( 'CTA Statement Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'CTA Statement Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'CTA Statement Categories', 'text_domain' ),
        'all_items'                  => __( 'All CTA Statement Categories', 'text_domain' ),
        'parent_item'                => __( 'Parent CTA Statement Category', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent CTA Statement Category:', 'text_domain' ),
        'new_item_name'              => __( 'New CTA Statement Category Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New CTA Statement Category', 'text_domain' ),
        'edit_item'                  => __( 'Edit CTA Statement Category', 'text_domain' ),
        'update_item'                => __( 'Update CTA Statement Category', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate CTA Statement Categories with commas', 'text_domain' ),
        'search_items'               => __( 'Search CTA Statement Categories', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove CTA Statement Category', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used CTA Statement Categories', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => true,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'statements'),
    );
    register_taxonomy( 'cta_statement_category', array( 'post' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_statement_categories', 0 );



// Register Custom Taxonomy
function cta_announcement_categories() {

    $labels = array(
        'name'                       => _x( 'CTA Announcement Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'CTA Announcement Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'CTA Announcement Categories', 'text_domain' ),
        'all_items'                  => __( 'All CTA Announcement Categories', 'text_domain' ),
        'parent_item'                => __( 'Parent CTA Announcement Category', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent CTA Announcement Category:', 'text_domain' ),
        'new_item_name'              => __( 'New CTA Announcement Category Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New CTA Announcement Category', 'text_domain' ),
        'edit_item'                  => __( 'Edit CTA Announcement Category', 'text_domain' ),
        'update_item'                => __( 'Update CTA Announcement Category', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate CTA Announcement Categories with commas', 'text_domain' ),
        'search_items'               => __( 'Search CTA Announcement Categories', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove CTA Announcement Category', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used CTA Announcement Categories', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => true,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'announcements'),
    );
    register_taxonomy( 'cta_announcement_category', array( 'post' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_announcement_categories', 0 );



// Register Custom Taxonomy
function news_from_other_sites_source() {

    $labels = array(
        'name'                       => _x( 'NFOS Sources', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'NFOS Source', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'NFOS Sources', 'text_domain' ),
        'all_items'                  => __( 'All NFOS Sources', 'text_domain' ),
        'parent_item'                => __( 'Parent NFOS Source', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent NFOS Source:', 'text_domain' ),
        'new_item_name'              => __( 'New NFOS Source', 'text_domain' ),
        'add_new_item'               => __( 'Add New NFOS Source', 'text_domain' ),
        'edit_item'                  => __( 'Edit NFOS Source', 'text_domain' ),
        'update_item'                => __( 'Update NFOS Source', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate NFOS Sources with commas', 'text_domain' ),
        'search_items'               => __( 'Search NFOS Sources', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove NFOS Source', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used NFOS Sources', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => true,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'source'),
    );
    register_taxonomy( 'nfos-source', array( 'post' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'news_from_other_sites_source', 0 );

/*
function move_and_hide_nfos_metabox() {
  // remove_meta_box('tagsdiv-nfos-source', 'post', 'side');
    global $parent_file;
    if (($parent_file == 'edit.php') || ($parent_file == 'post-new.php')) {
   
   add_meta_box( 'tagsdiv-nfos-source', 'Add another "News From Other Sites" Source Publisher:', 'post_tags_meta_box', 'post', 'normal', 'high', array( 'taxonomy' => 'nfos-source' ));
    ?>  
    <style>
    #tagsdiv-nfos-source {display:none;}
    </style>
    <script type="text/javascript">
    //<![CDATA[
    jQuery(function($)
    {
        function my_check_categories()
        {
            $('#tagsdiv-nfos-source').hide();
            $('#categorychecklist input[type="checkbox"]').each(function(i,e)
            {
                var id = $(this).attr('id').match(/-([0-9]*)$/i);
                id = (id && id[1]) ? parseInt(id[1]) : null ;
                if ($.inArray(id, [29]) > -1 && $(this).is(':checked'))
                {
                    $('#tagsdiv-nfos-source').show();
                }
            });
        }
        $('#categorychecklist input[type="checkbox"]').live('click', my_check_categories);
        my_check_categories();
    });
    //]]>
    </script>
    <?php 
     }
} 
add_action('admin_head', 'move_and_hide_nfos_metabox');  
*/

/*
add_action('edit_form_after_title', function() {
    global $post, $wp_meta_boxes;
    do_meta_boxes(get_current_screen(), 'advanced', $post);
    unset($wp_meta_boxes[get_post_type($post)]['advanced']);
});
*/


// Register Custom Taxonomy
function cta_authors() {

    $labels = array(
        'name'                       => _x( 'CTA Authors', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'CTA Author', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'CTA Authors', 'text_domain' ),
        'all_items'                  => __( 'All CTA Authors', 'text_domain' ),
        'parent_item'                => __( 'Parent CTA Author', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent CTA Author:', 'text_domain' ),
        'new_item_name'              => __( 'New CTA Author', 'text_domain' ),
        'add_new_item'               => __( 'Add New CTA Author', 'text_domain' ),
        'edit_item'                  => __( 'Edit CTA Author', 'text_domain' ),
        'update_item'                => __( 'Update CTA Author', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate CTA Authors with commas', 'text_domain' ),
        'search_items'               => __( 'Search CTA Authors', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove CTA Author', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used CTA Authors', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => true,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'author'),
    );
    register_taxonomy( 'cta-authors', array( 'post' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_authors', 0 );


// Register Custom Taxonomy
function cta_immolator_genders() {

    $labels = array(
        'name'                       => _x( 'Immolator Genders', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Immolator Gender', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Gender', 'text_domain' ),
        'all_items'                  => __( 'All Immolator Genders', 'text_domain' ),
        'parent_item'                => __( 'Parent Immolator Gender', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Immolator Gender:', 'text_domain' ),
        'new_item_name'              => __( 'New Immolator Gender', 'text_domain' ),
        'add_new_item'               => __( 'Add New Immolator Gender', 'text_domain' ),
        'edit_item'                  => __( 'Edit Immolator Gender', 'text_domain' ),
        'update_item'                => __( 'Update Immolator Gender', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Immolator Genders with commas', 'text_domain' ),
        'search_items'               => __( 'Search Immolator Genders', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Immolator Gender', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Immolator Genders', 'text_domain' ),
        'not_found'                  => __( 'Immolator Gender Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
	'show_in_rest'	 	     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'gender'),
    );
    register_taxonomy( 'cta-immolator-gender', array( 'self-immolator' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_immolator_genders', 0 );

// Register Custom Taxonomy
function cta_immolator_affiliations() {

    $labels = array(
        'name'                       => _x( 'Immolator Affiliation', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Immolator Affiliation', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Affiliation', 'text_domain' ),
        'all_items'                  => __( 'All Immolator Affiliations', 'text_domain' ),
        'parent_item'                => __( 'Parent Immolator Affiliation', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Immolator Affiliation:', 'text_domain' ),
        'new_item_name'              => __( 'New Immolator Affiliation', 'text_domain' ),
        'add_new_item'               => __( 'Add New Immolator Affiliation', 'text_domain' ),
        'edit_item'                  => __( 'Edit Immolator Affiliation', 'text_domain' ),
        'update_item'                => __( 'Update Immolator Affiliation', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Immolator Affiliations with commas', 'text_domain' ),
        'search_items'               => __( 'Search Immolator Affiliations', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Immolator Affiliation', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Immolator Affiliations', 'text_domain' ),
        'not_found'                  => __( 'Immolator Affiliation Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'affiliation'),
    );
    register_taxonomy( 'cta_immolator_affiliation', array( 'self-immolator' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_immolator_affiliations', 0 );

// Register Custom Taxonomy
function cta_immolator_statuses() {

    $labels = array(
        'name'                       => _x( 'Immolator Status', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Immolator Status', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Status', 'text_domain' ),
        'all_items'                  => __( 'All Immolator Statuses', 'text_domain' ),
        'parent_item'                => __( 'Parent Immolator Status', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Immolator Status:', 'text_domain' ),
        'new_item_name'              => __( 'New Immolator Status', 'text_domain' ),
        'add_new_item'               => __( 'Add New Immolator Status', 'text_domain' ),
        'edit_item'                  => __( 'Edit Immolator Status', 'text_domain' ),
        'update_item'                => __( 'Update Immolator Status', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Immolator Statuses with commas', 'text_domain' ),
        'search_items'               => __( 'Search Immolator Statuses', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Immolator Status', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Immolator Statuses', 'text_domain' ),
        'not_found'                  => __( 'Immolator Status Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'status'),
    );
    register_taxonomy( 'cta_immolator_status', array( 'self-immolator' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_immolator_statuses', 0 );

// Register Custom Taxonomy
function cta_immolator_age_ranges() {

    $labels = array(
        'name'                       => _x( 'Immolator Age Ranges', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Immolator Age Range', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Age', 'text_domain' ),
        'all_items'                  => __( 'All Immolator Age Ranges', 'text_domain' ),
        'parent_item'                => __( 'Parent Immolator Age Range', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Immolator Age Ranges:', 'text_domain' ),
        'new_item_name'              => __( 'New Immolator Age Range', 'text_domain' ),
        'add_new_item'               => __( 'Add New Immolator Age Range', 'text_domain' ),
        'edit_item'                  => __( 'Edit Immolator Age Range', 'text_domain' ),
        'update_item'                => __( 'Update Immolator Age Range', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Immolator Age Ranges with commas', 'text_domain' ),
        'search_items'               => __( 'Search Immolator Age Ranges', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Immolator Age Range', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Immolator Age Ranges', 'text_domain' ),
        'not_found'                  => __( 'Immolator Age Range Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
	'show_in_rest'		     => true,
        'show_tagcloud'              => false,
        'meta_box_cb'                => false,
        "rewrite" => array('slug' => 'age'),
    );
    register_taxonomy( 'cta_immolator_age_range', array( 'self-immolator' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'cta_immolator_age_ranges', 0 );
