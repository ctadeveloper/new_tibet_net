<?php

/**
 * Custom functions
 */

//  Removing the dashbard from website 
show_admin_bar(false);

function remove_caption_padding($width)
{
    return $width - 10;
}
// 
function cta_hide_sidebar()
{

    if ((has_post_format(array('gallery')) && is_single())
        || (has_post_format(array('chat')) && is_single())
        || (has_post_format(array('aside')) && is_single())
        || (has_post_format(array('video')) && is_single())
    ) {
        return true;
    } else {
        return false;
    }
}
// CTA Theme Setting
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'CTA Theme Settings',
        'menu_title'    => 'CTA Theme Settings',
        'menu_slug'     => 'cta-theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Homepage Settings',
        'menu_title'    => 'Homepage',
        'parent_slug'   => 'cta-theme-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Social Settings',
        'menu_title'    => 'Social',
        'parent_slug'   => 'cta-theme-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'cta-theme-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Support PopUp',
        'menu_title'    => 'Support PopUp',
        'parent_slug'   => 'cta-theme-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Why Tibet Matters PopUp',
        'menu_title'    => 'Why Tibet Mtters  PopUp',
        'parent_slug'   => 'cta-theme-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Sidebar',
        'menu_title'    => 'Sidebar',
        'parent_slug'   => 'cta-theme-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'cta-theme-settings',
    ));
}

// Widget Footer 
// Registration
/* Widget Footer*/
register_sidebar(array(
    'name'          => __('Footer Column 1', 'roots'),
    'id'            => 'footer-col1',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
));

register_sidebar(array(
    'name'          => __('Footer Column 2', 'roots'),
    'id'            => 'footer-col2',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
));

register_sidebar(array(
    'name'          => __('Footer Column 3', 'roots'),
    'id'            => 'footer-col3',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
));

register_sidebar(array(
    'name'          => __('Footer Column 4', 'roots'),
    'id'            => 'footer-col4',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
));
register_sidebar(array(
    'name'          => __('Footer Column 5', 'roots'),
    'id'            => 'footer-col5',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
));
/**
 * Registering different
 * Post formats
 *  */ 
function register_post_format()
{
    add_theme_support('post-formats', array('gallery', 'video', 'chat', 'aside','status', 'link','quote'));
}
// Renaming the formats
add_action('after_setup_theme', 'register_post_format');
function rename_post_formats($safe_text)
{
    if ($safe_text == 'Standard')
        return 'Standard Post';
    if ($safe_text == 'Gallery')
        return 'Photo News';
    if ($safe_text == 'Aside')
        return 'Periodical';
    if ($safe_text == 'Chat')
        return 'Publication';
    if ($safe_text == 'Status')
        return 'Announcement';
    if ($safe_text == 'Link')
        return 'Statement';
    if ($safe_text == 'Quote')
        return 'Photo or Video of the Day';
    return $safe_text;
}
add_filter('esc_html', 'rename_post_formats');

?>