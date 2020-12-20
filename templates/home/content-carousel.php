<div class="container">
    <!-- <?php if(wp_is_mobile()):?>
        <div class="bg-light">This is mobile version</div>
    <?php else:?>
        <div class="bg-danger">This is Desktop version</div>
    <?php endif;?> -->
    <div class="row my-2">
        <div class="col-md-8 col-sm-12" id="hFeaturedNews">
            <div id="featuredSlider" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        $activetor=0;
                        $myPost = new WP_Query(array(
                            'category_name' => 'featured-flash-news',
                            'posts_per_page' => 4,
                            // 'posts_per_page' => 1,
                            'orderby' => 'date', 'order' => 'DESC',
                            'paged' => $paged
                        ));
                        while($myPost->have_posts()){
                            $myPost->the_post();
                            $activetor++;
                            // Thumbnail Url
                            $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                            // ImgMagick
                                if($thumb_url == ''){
                                    $thumb_url = get_template_directory_uri().'/img/cta_grid_default.jpg';
                                }
                                $post_index_img = thumbResizeIM($thumb_url, 770, 370, get_the_ID());
                                if ($post_index_img != '') {
                                    $img_html = '<img class="w-100 img_size lazyload blur-up"  src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                                } else { // if (!is_page_template( 'page-homepage.php' )) {
                                    $img_html = '<img class="w-100 img_size lazyload blur-up"  src="' . get_template_directory_uri() . '/img/cta_grid_default.jpg" alt="' . get_the_title() . '"' . "\r\n";
                                    // $cta_has_thumb = ' cta_no_thumb';
                                }
                        ?>
                    <div class="carousel-item <?php echo ($activetor == 1) ? 'active':''; ?>">
                        <div class="bg-dark">
                            <?php echo $img_html; ?>
                        </div>
                        <div class="carousel-caption d-none d-md-block text-left">
                            <a href="<?php echo get_permalink(); ?>" class="text-white">
                                    <h5 class="d-none d-sm-block"><?php echo the_title() ?></h5>
                                    <h5 class="d-block d-sm-none"><?php echo excerpt_title_length(120) ?></h5>
                            </a>
                            <h6 class="small text-white-50 mr-2"><?php echo get_the_time("F j, Y"); ?> <i class="fas fa-share-alt"></i></h6>
                        </div>
                    </div>    
                    <?php } ?> 	
                </div>
                <a class="carousel-control-prev bg-secondary rounded" href="#featuredSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <!-- <span class="sr-only">Previous</span> -->
                </a>
                <a class="carousel-control-next bg-secondary rounded" href="#featuredSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Featured SideNews -->
        <div class="col-md-4 col-sm-12 my-2">
            <?php include(TEMPLATEPATH . '/templates/home/content-featured_sidebar_news.php'); ?>
        </div>
    </div>
</div>