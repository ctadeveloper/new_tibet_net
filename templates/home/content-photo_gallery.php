<section id="hPhotoGallery">
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <h5 class="text-dark font-weight-bolder border-left pl-2 border-primary">IN PICTURES</h6>
            </div>
            <?php
            $galleries = new WP_Query(array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cta_content_type',
                        'field' => 'slug',
                        'terms' => 'photos'
                    )
                ),
                // 'category_name' => 'featured-flash-news',

                // 'cat' => 1,
                'posts_per_page' => 4,
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => $paged
            ));
            while ($galleries->have_posts()) : $galleries->the_post();
                $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                if($thumb_url == ''){
                    $thumb_url = get_template_directory_uri().'/img/cta_grid_default.jpg';
                }
                // $post_index_img = cta_thumb(280, 140);
                $post_index_img = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
                if ($post_index_img != '') {
                    $img_html = '<img class="img-responsive rounded w-100 lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                } else { // if (!is_page_template( 'page-homepage.php' )) {
                    $img_html = '<img class="rounded img-responsive w-100 rounded-top lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";

                    // $cta_has_thumb = ' cta_no_thumb';
                }
            ?>
                <div class="col-md-3 col-sm-6 col-6 py-3">
                    <a href="<?php echo get_permalink(); ?>">
                        <div class="position-relative">
                            <?php echo $img_html; ?>
                            <i class="far fa-images position-absolute text-white" style="left:2%;bottom:3%"></i>
                        </div>
                    </a>
                    <div class="p-1">
                        <h6 class="text-dark">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php echo excerpt_title_length(50) ?>
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
    <!-- Potala -->
    <div id="hPotala"></div>
</section>