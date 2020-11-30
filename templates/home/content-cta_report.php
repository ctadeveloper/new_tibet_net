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
        // Title Excert
        // $thumb1 = thumbResizeIM($thumb_url, 120, 120, get_the_ID());
        $post_index_img = cta_thumb(120, 120);
        if ($post_index_img != '') {
            $img_html = '<img class="list-item-image img-responsive w-100 rounded-top lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
        } else { // if (!is_page_template( 'page-homepage.php' )) {
            $img_html = '<img class="list-item-image lazyload blur-up" data-src="' . get_template_directory_uri() . '/img/cta_grid_default.jpg" height="120" width="120" alt="' . get_the_title() . '"' . "\r\n";
            // $cta_has_thumb = ' cta_no_thumb';
        }
    ?>
        <div class="row">
            <div class="col-12">
                <div class="media my-1">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php echo $img_html; ?>
                    </a>
                    <div class="media-body ml-3">
                        <a href="<?php echo get_permalink(); ?>">
                            <h6 class="mt-0 font-weight-bolder"><?php echo excerpt_title_length(100) ?></h6>
                        </a>
                        <p class="small text-muted p-0"><?php echo get_the_time("F j, Y"); ?>
                            <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
                        </p>
                        <p class="text-muted p-0"><?php echo get_print_excerpt(100) ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata();
    ?>
</div>