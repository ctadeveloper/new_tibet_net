<section id="hImportantTopic">
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <h6 class="text-dark font-weight-bolder border-left pl-2 border-danger">IMPORTANT TOPICS</h6>
            </div>
            <div class="col-12">
                <div class="importantTopciSlider">
                    <?php
                    $sidebar_topic = new WP_Query(array(
                        // 'post_type' => 'cta-sb-topics',
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));
                    while ($sidebar_topic->have_posts()) : $sidebar_topic->the_post();
                        // Thumbnail Url

                        $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

                        // ImgMagick
                        // $thumb1 = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
                        $cta_has_thumb = '';
                        $post_index_img = cta_thumb(280, 140);

                        if ($post_index_img != '') {
                            $img_html = '<img class="list-item-image img-responsive w-100 rounded-top lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                        } else { // if (!is_page_template( 'page-homepage.php' )) {
                            $img_html = '<img class="list-item-image img-responsive w-100 lazyload blur-up" data-src="' . get_template_directory_uri() . '/img/cta_grid_default-280x140.jpg" alt="' . get_the_title() . '"' . "\r\n";
                            // $cta_has_thumb = ' cta_no_thumb';
                        }
                    ?>
                        <div class="mx-3">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php echo $img_html; ?>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>