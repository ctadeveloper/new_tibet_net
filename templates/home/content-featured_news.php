<section class="container">
    <h5 class="text-dark pt-2">Welcome to Tibet.net</h5>
    <div class="row my-2" id="hFeaturedNews">
        <div id="hFeaturedNews__news" class="col-md-8 col-sm-12">
            <div id="slider-with-blocks-1" class="royalSlider rsMinW">
                <?php
                $flash_news_loop = new WP_Query(array(
                    'category_name' => 'featured-flash-news',
                    'posts_per_page' => 4,
                    'orderby' => 'date', 'order' => 'DESC',
                    'paged' => $paged
                ));
                while ($flash_news_loop->have_posts()) : $flash_news_loop->the_post();
                    // Thumbnail Url
                    $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    // ImgMagick
                    $thumb1 = thumbResizeIM($thumb_url, 770, 370, get_the_ID());
                ?>
                    <div class="rsContent">
                        <div class="bContainer">
                            <div class="image_overlay">
                                <img src="<?php echo $thumb1; ?>" alt="<?php echo esc_html(get_the_title()); ?>" class="img-responsive w-100 lazyload blur-up">
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
        <div id="hFeaturedNews__sideNews" class="col-md-4 col-sm-12">
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
                // $thumb1 = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
                $cta_has_thumb = '';
                $post_index_img = cta_thumb(60, 60);
                if ($post_index_img != '') {
                    $img_html = '<img class="rounded w-100 rounded-top lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                } else { // if (!is_page_template( 'page-homepage.php' )) {
                    $img_html = '<img class="rounded w-100 rounded-top lazyload blur-up" data-src="' . get_template_directory_uri() . '/img/cta_grid_default-280x140.jpg" height="140" width="280" alt="' . get_the_title() . '"' . "\r\n";
                }
            ?>
                <div class="row">
                        <div class="col-md-2 px-0 col-3">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php echo $img_html; ?>
                            </a>
                        </div>
                        <div class="col-md-10 col-9">
                            <a href="<?php echo get_permalink(); ?>">
                                <h6 class="font-weight-bolder"><?php echo excerpt_title_length(75) ?></h6>
                            </a>
                            <p class="small text-muted p-0 m-0"><?php echo get_the_time("F j, Y"); ?>
                                <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
                            </p>
                            <!-- <p class="text-muted m-0 p-0 d-none d-md-block"><?php echo get_print_excerpt(100).'...' ?></p> -->
                        </div>
                    <!-- <div class="col-3">
                    
                            <a href="<?php echo get_permalink(); ?>">
                                <img data-src="<?php echo $thumb1; ?>" alt="<?php echo esc_html(get_the_title()); ?>" class="w-100 rounded mr-3 lazyload blur-up">
                            </a>
                    </div> -->

                    <!-- <div class="col-9">
                                <a href="<?php echo get_permalink(); ?>">
                                    <h6 class="mt-0 font-weight-bolder"><?php echo excerpt_title_length(50) ?></h6>
                                </a>
                                <p class="small text-muted p-0"><?php echo get_the_time("F j, Y"); ?>
                                    <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>