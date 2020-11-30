<section id="hAnnouncement">
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <h6 class="text-dark font-weight-bolder border-left pl-2 border-danger">ANNOUNCEMENTS</h6>
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
                $cta_has_thumb = '';
                $post_index_img = cta_thumb(280, 140);
                if ($post_index_img != '') {
                    $img_html = '<img class="list-item-image img-responsive w-100 rounded-top" src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                } else { // if (!is_page_template( 'page-homepage.php' )) {
                    $img_html = '<img class="list-item-image img-responsive w-100 rounded-top" height="140" width="280"  src="' . get_template_directory_uri() . '/img/cta_grid_default.jpg" alt="' . get_the_title() . '"' . "\r\n";
                    // $cta_has_thumb = ' cta_no_thumb';
                }
                $tax_args = array('orderby' => 'none');
                $term_num = 0;
                $terms = wp_get_post_terms($post->ID, 'cta_announcement_category', $tax_args);
            ?>
                <div class="col-md-3 col-sm-6 col-6">
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
                        <a href="<?php echo get_permalink(); ?>">
                            <h6 class="text-dark"><?php echo excerpt_title_length(80) ?></h6>
                        </a>
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