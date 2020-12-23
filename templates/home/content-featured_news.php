<section class="container">
    <h5 class="text-dark pt-2">Welcome to Tibet.net</h5>
    <div class="row my-2" id="hFeaturedNews">
        <div id="hFeaturedNews__news" class="col-md-8 col-sm-12">
            <div id="slider-with-blocks-1" class="royalSlider rsMinW">
                <?php
                $flash_news_loop = new WP_Query(array(
                    'category_name' => 'featured-flash-news',
                    'posts_per_page' => 4,
                    // 'posts_per_page' => 1,
                    'orderby' => 'date', 'order' => 'DESC',
                    'paged' => $paged
                ));
                while ($flash_news_loop->have_posts()) : $flash_news_loop->the_post();
                    // Thumbnail Url
                    $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    // ImgMagick
                        $post_index_img = thumbResizeIM($thumb_url, 770, 370, get_the_ID());
                        if ($post_index_img != '') {
                            $img_html = '<img class="w-100 img_size lazyload blur-up rounded-top"  src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                        } else { // if (!is_page_template( 'page-homepage.php' )) {
                            $img_html = '<img class="w-100 img_size lazyload blur-up rounded-top"  src="' . get_template_directory_uri() . '/img/cta_grid_default_770x370.jpg" alt="' . get_the_title() . '"' . "\r\n";
                            // $cta_has_thumb = ' cta_no_thumb';
                        }

                ?>
                    <div class="rsContent">
                        <div class="bContainer">
                            <div class="image_overlay">
                                <?php echo $img_html; ?>
                            </div>
                            <div class="meta">
                                <a href="<?php echo get_permalink(); ?>">
                                    <h5 class="d-none d-sm-block"><?php echo the_title() ?></h5>
                                    <h5 class="d-block d-sm-none"><?php echo excerpt_title_length(120) ?></h5>
                                </a>
                                <h6 class="small text-white-50 mr-2"><?php echo get_the_time("F j, Y"); ?> <i class="fas fa-share-alt"></i></h6>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- Featured SideNews -->
        <div class="col-md-4 col-sm-12" id="hFeaturedNews__sideNews">
            <?php include(TEMPLATEPATH . '/templates/home/content-featured_sidebar_news.php'); ?>
        </div>
    </div>
</section>