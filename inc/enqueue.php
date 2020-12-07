<?php

/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('understrap_scripts')) {

/**
 * Javascript  /
 * Libraries Enque
 * Royalslider Script
 * Register 
 *  */
function royalslider_scripts()
{
    $the_theme     = wp_get_theme();
    $theme_version = $the_theme->get('Version');
    // Jquery
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/jquery.min.js');
        wp_enqueue_script('JQuery', get_template_directory_uri() . '/js/jquery.min.js', array(), $js_version, true);

    // RoyalSlider
    if (is_front_page() || (has_post_format(array('gallery','chat','aside'))) && is_single()) {
        // Css
        $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/royalslider/royalslider.css');
        wp_enqueue_style('royalslider-style', get_template_directory_uri() . '/js/royalslider/royalslider.css', array(), $css_version);
        // Skin
        $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/royalslider/rs-minimal-white.css');
        wp_enqueue_style('Royalslider-theme', get_template_directory_uri() . '/js/royalslider/rs-minimal-white.css', array(), $css_version);
        // Royalslider Gallery skin
                $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/royalslider/rs-default.css');
        wp_enqueue_style('Royalslider-Default-theme', get_template_directory_uri() . '/js/royalslider/rs-default.css', array(), $css_version);
        // Javascript
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/royalslider/jquery.royalslider.min.js');
        wp_enqueue_script('royalslider_scripts', get_template_directory_uri() . '/js/royalslider/jquery.royalslider.min.js', array(), $js_version, true);
        // easing effec
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/royalslider/jquery.easing-1.3.js');
        wp_enqueue_script('royalslider_jquery_easing', get_template_directory_uri() . '/js/royalslider/jquery.easing-1.3.js', array(), $js_version, true);

    }

}
add_action('wp_enqueue_scripts', 'royalslider_scripts');
    /**
     * Load theme's JavaScript and CSS sources.
     */

    function understrap_scripts()
    {
        // Get the theme data.
        $the_theme     = wp_get_theme();
        $theme_version = $the_theme->get('Version');
        // Jquery
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/jquery.min.js');
        wp_enqueue_script('JQuery', get_template_directory_uri() . '/js/jquery.min.js', array(), $js_version, true);

        // Theme css
        $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
        wp_enqueue_style('cta-style', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version);
        // Custom Js
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/custom.js');
        wp_enqueue_script('Custom-Js', get_template_directory_uri() . '/js/custom.js', array(), $js_version, true);
        // lazysize
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/lazysize/lazysize.min.js');
        wp_enqueue_script('Lazysize', get_template_directory_uri() . '/js/lazysize/lazysize.min.js', array(), $js_version, true);
        // lazysize blur
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/lazysize/ls.blur-up.min.js');
        wp_enqueue_script('Lazysize Blur', get_template_directory_uri() . '/js/lazysize/ls.blur-up.min.js', array(), $js_version, true);
        wp_enqueue_script('jquery');
        // Theme Js
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
        wp_enqueue_script('understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
} // End of if function_exists( 'understrap_scripts' ).

add_action('wp_enqueue_scripts', 'understrap_scripts');


// Social Share API
function socialShare_scripts(){
    $the_theme     = wp_get_theme();
    $theme_version = $the_theme->get('Version');
    // js
    $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/noapishare/jquery.noapishare.js');
    wp_enqueue_script('social_share_js', get_template_directory_uri() . '/js/noapishare/jquery.noapishare.js', array(), $js_version, true);
    // Slick css
    $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/noapishare/noapishare-style.css');
    wp_enqueue_style('social_share_css', get_template_directory_uri() . '/js/noapishare/noapishare-style.css', array(), $css_version);
}
add_action('wp_enqueue_scripts', 'socialShare_scripts');
/**
 * 3D Flipbook
 * Periodical / Publications books
 */
function flipbook_script(){
    $the_theme     = wp_get_theme();
    $theme_version = $the_theme->get('Version');
    if (has_post_format(array('aside','chat'))) {
    // js
    $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/flipbook/flipbook.min.js');
    wp_enqueue_script('flipbook-js', get_template_directory_uri() . '/js/flipbook/flipbook.min.js', array(), $js_version, true);
    // Slick css
    $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/flipbook/flipbook.style.css');
    wp_enqueue_style('flipbook-css', get_template_directory_uri() . '/js/flipbook/flipbook.style.css', array(), $css_version);
    // PDF.js
    $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/flipbook/pdf.js');
    wp_enqueue_script('pdf-js', get_template_directory_uri() . '/js/flipbook/pdf.js', array(), $js_version, true);
    // pdf service
    $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/flipbook/flipbook.pdfservice.min.js');
    wp_enqueue_script('pdf-service', get_template_directory_uri() . '/js/flipbook/flipbook.pdfservice.min.js', array(), $js_version, true);
    // PDf worker
    $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/flipbook/pdf.worker.min.js');
    wp_enqueue_script('pdf-worker', get_template_directory_uri() . '/js/flipbook/pdf.worker.min.js', array(), $js_version, true);


    }
}
add_action('wp_enqueue_scripts', 'flipbook_script');

/**
 * Javascript  /
 * Libraries Enque
 * Slick Script
 * Register 
 *  */
function slick_scripts(){
    $the_theme     = wp_get_theme();
    $theme_version = $the_theme->get('Version');
    // js
    $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/slick/slick.min.js');
    wp_enqueue_script('slicki', get_template_directory_uri() . '/js/slick/slick.min.js', array(), $js_version, true);
    // Slick css
    $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/slick/slick.css');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/js/slick/slick.css', array(), $css_version);
    $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/slick/slick-theme.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/js/slick/slick-theme.css', array(), $css_version);

}
add_action('wp_enqueue_scripts', 'slick_scripts');


// Social Share Kit
// function social_share_kit_scripts(){
//     $the_theme     = wp_get_theme();
//     $theme_version = $the_theme->get('Version');
//     // Css
//     $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/socialshare/social-share-kit.css');
//     wp_enqueue_script('social_share_kit_css', get_template_directory_uri() . 'js/socialshare/social-share-kit.css', array(), $js_version, true);
//     // 
//     $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/socialshare/social-share-kit.min.js');
//     wp_enqueue_script('social_share_kit_js', get_template_directory_uri() . '/js/socialshare/social-share-kit.min.js', array(), $js_version, true);
// }
// add_action('wp_enqueue_scripts', 'social_share_kit_scripts');
