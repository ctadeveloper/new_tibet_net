<section id="hTibetToday">
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
            <a href="/category/flash-news/">
                <h5 class="text-dark font-weight-bold border-left pl-2 border-danger">TIBET TODAY</h5>
                </a>
            </div>
            <?php
            $tibet_today = new WP_Query(array(
                'cat' => 1,
                'posts_per_page' => 4,
                'orderby' => 'date', 'order' => 'DESC',
                'paged' => $paged
            ));
            while ($tibet_today->have_posts()) : $tibet_today->the_post();
                // Thumbnail Url
                $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                // ImgMagick
                // $thumb1 = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
                if($thumb_url == ''){
                    $thumb_url = get_template_directory_uri().'/img/cta_grid_default_280x140.jpg';
                }
                $post_index_img = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
                if ($post_index_img != '') {
                    $img_html = '<img class="w-100 lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                } else { // if (!is_page_template( 'page-homepage.php' )) {
                    $img_html = '<img class="w-100 lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                    // $cta_has_thumb = ' cta_no_thumb';
                }
            ?>
                <div class="col-md-3 col-sm-6 col-6 py-3">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php echo $img_html; ?>
                    </a>
                    <div class="p-1">
                        <h6 class="text-dark" >
                            <a href="<?php echo get_permalink(); ?>" >
                                    <?php echo excerpt_title_length(80) ?>
                                </a>
                        </h6>
                        <h6 class="small text-muted"><?php echo get_the_time("F j, Y"); ?>
                            <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
                        </h6>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>