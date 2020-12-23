<div id="hFeaturedNews__sideNews" class="col-md-12 col-sm-12">
    <!-- <h6 class="border-bottom font-weight-bolder pb-1">News Other Featured</h6> -->
    <?php
    $flash_news_loop = new WP_Query(array(
        'cat' => 607,
        'posts_per_page' => 6,
        'orderby' => 'date', 'order' => 'DESC',
        // 'offset' => 5,
        'paged' => $paged
    ));
    while ($flash_news_loop->have_posts()) : $flash_news_loop->the_post();
        // Thumbnail URL
        $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        // $post_index_img = cta_thumb(120, 80);
        $post_index_img = thumbResizeIM($thumb_url, 120, 80, get_the_ID());
        if ($post_index_img != '') {
            $img_html = '<img class="w-100 rounded lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
        } else {
             // if (!is_page_template( 'page-homepage.php' )) {
        // $default_thumb = default_thumb(120,80);
            $img_html = '<img class="w-100 lazyload blur-up"  data-src="' . get_template_directory_uri() . '/img/cta_grid_default_120x80.jpg" alt="' . get_the_title() . '"' . "\r\n";

        }
    ?>
        <div class="row media px-0 py-2">
        <!-- <div class="media py-2"> -->
            <div class="col-md-3 px-0 col-3">
                <a href="<?php echo get_permalink(); ?>">
                    <?php echo $img_html; ?>
                </a>
            </div>
            <div class="col-md-9 col-9">
                <a href="<?php echo get_permalink(); ?>">
                    <h6 class="font-weight-bolder"><?php echo excerpt_title_length(75) ?></h6>
                </a>
                <p class="small text-muted p-0 m-0"><?php echo get_the_time("F j, Y"); ?>
                    <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
                </p>
                <p class="text-muted m-0 p-0 d-none d-md-block"><?php echo get_print_excerpt(100).'...' ?></p>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata();
    ?>
</div>