<div class="row">
    <!-- <h6 class="border-bottom font-weight-bolder pb-1">News Other Featured</h6> -->
    <?php
    $flash_news_loop = new WP_Query(array(
        'category_name' => 'featured-flash-news',
        'posts_per_page' => 4,
        'orderby' => 'date', 'order' => 'DESC',
        'offset' => 5,
        'paged' => $paged
    ));
    while ($flash_news_loop->have_posts()) : $flash_news_loop->the_post();
        $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        // echo $default;
        // ImgMagick
        $post_index_img = thumbResizeIM($thumb_url, 60, 60, get_the_ID());
        if ($post_index_img != '') {
            $img_html = '<img height="60px" class="rounded w-100  lazyload blur-up" data-src="' . $post_index_img . '" alt="' . excerpt_title_length(5) . '">' . "\r\n";
        } else { // if (!is_page_template( 'page-homepage.php' )) {
            $img_html = '<img height="60px" class="rounded w-100 lazyload blur-up" data-src="' . get_template_directory_uri() . '/img/cta_grid_default_120x80.jpg" height="140" width="280" alt="' . get_the_title() . '"' . "\r\n";
        }
    ?>
        <div class="col-md-2 pr-0 col-2 py-1">
            <a href="<?php echo get_permalink(); ?>">
                <?php echo $img_html; ?>
            </a>
        </div>
        <div class="col-md-10 col-10">
            <a href="<?php echo get_permalink(); ?>">
                <h6 class="font-weight-bolder"><?php echo excerpt_title_length(50) ?></h6>
            </a>
            <p class="small text-muted p-0 m-0"><?php echo get_the_time("F j, Y"); ?>
                <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
            </p>
        </div>
    <?php endwhile;
    wp_reset_postdata();
    ?>
</div>