<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

// Custom Post Type
require_once locate_template('/templates/post-type/post-type-featured-video.php');
require_once locate_template('/templates/post-type/post-type-sb-topics.php'); 
require_once locate_template('/templates/post-type/post-type-self-immolators.php');
require_once locate_template('/templates/post-type/post-type-resolutions.php');
// Custom Taxonomy and Post categories
require_once locate_template('/templates/post-type/custom-taxonomies.php');
// Custom Post format
require_once locate_template('/templates/post-type/post-format.php');
// Custom Library
// Excerpt functions and other functions
require_once locate_template('/templates/lib-custom.php'); 
