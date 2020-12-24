<section id="hAnnouncement">
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
            <a href="/category/announcements/">
                <h5 class="text-dark font-weight-bolder border-left pl-2 border-danger">ANNOUNCEMENTS</h6>
                </a>
            </div>
            <?php
            $human_right = new WP_Query(array(
                // 'category_name' => 'announcements',
                // 'category_name' => 'featured-flash-news',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cta_content_type',
                        'field' => 'slug',
                        'terms' => 'announcements'
                    )
                ),
                'posts_per_page' => 4,
                'orderby' => 'date', 'order' => 'DESC',
                'paged' => $paged,
                // 'offset' => 3,

            ));
            while ($human_right->have_posts()) : $human_right->the_post();
                // Thumbnail Url
                $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                // ImgMagick
                // $thumb1 = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
                $post_index_img = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
                // $default_thumb = default_thumb(280, 140);
                if ($post_index_img != '') {
                    $img_html = '<img class="img-responsive w-100 img_size lazyload blur-up rounded-top" src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                } else { // if (!is_page_template( 'page-homepage.php' )) {
                    $img_html = '<img class="img-responsive w-100 img_size lazyload blur-up rounded-top"  src="' . get_template_directory_uri() . '/img/cta_grid_default-280x140.jpg" alt="' . get_the_title() . '"' . "\r\n";
                }
                $tax_args = array('orderby' => 'none');
                $term_num = 0;
                $terms = wp_get_post_terms($post->ID, 'cta_announcement_category', $tax_args);
            ?>
                <div class="col-md-3 col-sm-6 col-6 py-3">
                    <div class="p-0 position-relative">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php echo $img_html; ?>
                        </a>
                        <div class="position-absolute ml-1" style="bottom:2px">
                            <?php
                            foreach ($terms as $term) {
                                // echo "<button class='btn btn-secondary btn-sm rounded small border-left'>";
                                echo "<small class='p-1 bg-secondary text-white'>";
                                echo "<i class='fas fa-bullhorn mr-1'></i>";
                                echo excerpt_general_length($term->name,30);
                                echo "</small>";
                                // echo "</button>";
                            }
                            ?>
                            <!-- <button class="btn btn-secondary rounded-0 btn-sm small"><i class="fas fa-bullhorn mr-1"></i>Department of Education</button> -->
                        </div>
                    </div>
                    <div class="p-1">
                        <h6 class="text-dark">
                            <a href="<?php echo get_permalink(); ?>">
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