<?php

/**
 * Template Name: Front Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header(); ?>
    <?php
    get_template_part('/templates/home/content', 'carousel');
    /* Featured News */
    get_template_part('/templates/home/content', 'featured_news');

    /* TibetToday */
    get_template_part('/templates/home/content', 'tibet_today');

    /* News from other site & CTA Report */
    get_template_part('/templates/home/content', 'nfos');

    /* Human Right Situation in Tibet */
    get_template_part('/templates/home/content', 'human_right_situation');

    /* Announcement */
    get_template_part('/templates/home/content', 'announcement');

    /*Important Topics  */
    get_template_part('/templates/home/content', 'important_topic');

    /* Tibet TV */
    get_template_part('/templates/home/content', 'tibet_tv');

    /* Periodicals & Publication */
    get_template_part('/templates/home/content', 'publication_periodical');

    /* Photo Gallery */
    get_template_part('/templates/home/content', 'photo_gallery');
    ?>
<!-- Footer -->
<?php 

?>
<?php get_footer();
get_template_part('/templates/search', 'modal');
