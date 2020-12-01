<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- <link rel="stylesheet" href="/css/fontawesome.min.css"> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="<?php get_template_directory_uri()?>/js/jquery.min.js"></script> -->
    <?php wp_head(); ?>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"> -->
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
    <?php do_action('wp_body_open'); ?>
    <div id="cta-official-site">
        <!-- ******************* The Navbar Area ******************* -->
        <div id="nav_bar_blue">
            <!-- <div id="nav_bar_green"> -->
            <div class="header_logo">
                <!-- Header -->
                <div class="container">
                    <div class="d-flex">
                        <div class="mr-auto p-2 w-25 d-none d-sm-block">
                            <img data-src="<?php echo get_template_directory_uri() . '/img/CTA-logo.png' ?>" class="img-fluid lazyload blur-up" alt="">
                        </div>
                        <div class="mr-auto p-2 w-75 d-block d-sm-none">
                            <img data-src="<?php echo get_template_directory_uri() . '/img/CTA-logo.png' ?>" class="img-fluid lazyload blur-up" alt="">
                        </div>
                        <div class="align-self-center">
                            <a href="https://xizang-zhiye.org" target="_blank" class="btn btn-sm btn-danger font-weight-bolder my-1">中文</a>
                            <a href="https://bod.asia" target="_blank" class="btn btn-sm btn-danger mr-2 font-weight-bolder">བོད་ཡིག</a>
                        </div>
                    </div>
                    <!-- <ul>
                        <li>Tibetan</li>
                        <li>Chinese</li>
                    </ul> -->
                </div>
            </div>
            <nav id="main-nav" class="navbar navbar-expand-md navbar-dark" aria-labelledby="main-nav-label">
                <?php if ('container' === $container) : ?>
                    <div class="container">
                    <?php endif; ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- The WordPress Menu goes here -->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 2,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>
                    <?php if ('container' === $container) : ?>
                    </div><!-- .container -->
                <?php endif; ?>
            </nav><!-- .site-navigation -->
            <!-- Modal -->
        </div><!-- #wrapper-navbar end -->