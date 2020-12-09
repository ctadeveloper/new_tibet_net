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
        <div class="col-md-4 col-sm-12 my-2">
            <?php include(TEMPLATEPATH . '/templates/home/content-featured_sidebar_news.php'); ?>
        </div>
    </div>
</section>