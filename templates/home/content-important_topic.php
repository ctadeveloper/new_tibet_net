<section id="hImportantTopic">
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <h5 class="text-dark font-weight-bold border-left pl-2 border-danger">IMPORTANT TOPICS</h6>
            </div>
                    <?php
                    $sidebar_topic = new WP_Query(array(
                        'post_type' => 'cta-sb-topics',
                        'post_status' => 'publish',
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));
                    while ($sidebar_topic->have_posts()) : $sidebar_topic->the_post();
                        // Thumbnail Url
                        $thumb_url = get_field('topic_image');
                        // $thumb_url = wp_get_attachment_image_src(get_field('topic_image'),'topic-img');
                        // echo $thumb_url;
                        // echo $thumb_url;
                        // ImgMagick
                        $post_index_img = thumbResizeIM($thumb_url,140, 80,get_the_ID());
                        $default_thumb = default_thumb(140,80);
                        if ($post_index_img != '') {
                            $img_html = '<img class="list-item-image img-responsive w-100 rounded-top lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                        } else { // if (!is_page_template( 'page-homepage.php' )) {
                            $img_html = '<img class="img-responsive w-100 rounded-top" src="' . $default_thumb. '" alt="' . get_the_title() . '">' . "\r\n";
                        }
                    ?>
                        <div class="col-sm-3 col-6 col-md-2 py-1">
                            <a href="<?php echo the_field('topic_link'); ?>" target="_blank">
                                    <?php echo $img_html ?>
                                <?php
                                ?>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
        </div>
    </div>
</section>