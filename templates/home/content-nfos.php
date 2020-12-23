<!-- News from other site -->
<section id="hNfos" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="text-dark border-left pl-2 mb-3 border-primary">TIBET AROUND THE WORLD</h5>
                <?php
                $nfos = new WP_Query(array(
                    'cat' => 29,
                    'posts_per_page' => 1,
                    'orderby' => 'date', 
                    'order' => 'DESC',
                    // 'offset' => 2,

                ));
                while ($nfos->have_posts()) : $nfos->the_post();
                    // Thumbnail Url
                    $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    $post_index_img = thumbResizeIM($thumb_url, 770, 370, get_the_ID());
                    if ($post_index_img != '') {
                        $img_html = '<img class=" w-100 rounded-top lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                    } else { // if (!is_page_template( 'page-homepage.php' )) {
                        $img_html = '<img class="w-100 lazyload blur-up" height="370" width="770" data-src="' . get_template_directory_uri() . '/img/cta_grid_default_770x370.jpg" alt="' . get_the_title() . '"' . "\r\n";
                        // $cta_has_thumb = ' cta_no_thumb';
                    }
                    ?>
                    <?php echo $img_html; ?>
                    <div class="p-1">
                        <!-- title -->
                        <h5 class="text-dark">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php echo excerpt_title_length(80) ?>
                            </a>
                        </h5>
                        <!-- date -->
                        <p class="small text-muted"><?php echo get_the_time("F j, Y"); ?>
                            <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
                        </p>
                        <!-- Excerpt -->
                        <p class="text-muted"><?php echo get_print_excerpt(250) ?></p>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
                <!-- other contents -->
                <div class="row py-3">
                    <?php
                    $flash_news_loop = new WP_Query(array(
                        'cat' => 29,
                        'posts_per_page' => 4,
                        'orderby' => 'date', 
                        'order' => 'DESC',
                        // 'paged' => $paged,
                        'offset' => 1,

                    ));
                    while ($flash_news_loop->have_posts()) : $flash_news_loop->the_post();
                        // Thumbnail Url
                        $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        // ImgMagick
                        $post_index_img = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
                        if ($post_index_img != '') {
                            $img_html = '<img class="list-item-image img-responsive w-100 rounded-top"  height="140" width="280" src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                        } else { // if (!is_page_template( 'page-homepage.php' )) {
                            $img_html = '<img class="list-item-image img-responsive w-100 rounded-top" height="140" width="280" src="' . get_template_directory_uri() . '/img/cta_grid_default_280x140.jpg" alt="' . get_the_title() . '"' . "\r\n";
                            // $cta_has_thumb = ' cta_no_thumb';
                        }
                    ?>
                        <div class="col-6">
                            <!-- image -->
                            <a href="<?php echo get_permalink(); ?>">
                                <?php echo $img_html; ?>
                            </a>
                            <div class="p-1">
                                <!-- Title -->
                                <h6 class="text-dark">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php echo excerpt_title_length(80) ?>
                                    </a>
                                </h6>
                                <!-- date -->
                                <p class="small text-muted"><?php echo get_the_time("F j, Y"); ?>
                                    <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <!-- CTA Report -->
            <div class="col-md-6">
                <h5 class="text-dark font-weight-bolder border-left pl-2" style="border-left: solid 3px #28a745 !important;">CTA REPORTS</h5>
                <?php include(TEMPLATEPATH . '/templates/home/content-cta_report.php'); ?>
            </div>
        </div>
    </div>
</section>