    <section id="hFeaturedNews" class="row">
        <h5 class="text-muted" style="font-family:'knowledge-bold';">Welcome to Tibet.net</h5>
        <div id="hFeaturedNews__news" class="col-md-8">
            <div id="hfeaturedSlider">
                <?php
                $flash_news_loop = new WP_Query(array(
                    'category_name' => 'featured-flash-news',
                    'posts_per_page' => 3,
                    'orderby' => 'date', 'order' => 'DESC',
                    'paged' => $paged
                ));

                while ($flash_news_loop->have_posts()) : $flash_news_loop->the_post();
                    // Thumbnail Url
                    $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    // ImgMagick
                    $thumb1 = thumbResizeIM($thumb_url, 770, 370, get_the_ID());
                ?>
                    <div class="image_overlay">
                        <img src="<?php echo $thumb1; ?>" alt="" class="img-responsive">

                        <div class="meta">
                            <a href="<?php echo get_permalink(); ?>">
                                <h5><?php echo the_title() ?></h5>
                            </a>
                            <h6 class="small text-white-50 mr-2"><?php echo get_the_time("F j, Y"); ?> <i class="fas fa-share-alt"></i></h6>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- Featured News sidebar -->
        <div id="hFeaturedNews__sideNews" class="col-md-4">
            Side Featured News
        </div>
    </section>