<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
		<?php
			$activetor=0;
            $myPost = new WP_Query(array(
                'category_name' => 'featured-flash-news',
                'posts_per_page' => 4,
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
                        $img_html = '<img class="w-100 img_size rounded-top"  src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
                    } else { // if (!is_page_template( 'page-homepage.php' )) {
                        $img_html = '<img class="w-100 img_size rounded-top"  src="' . get_template_directory_uri() . '/img/cta_grid_default.jpg" alt="' . get_the_title() . '"' . "\r\n";
                        // $cta_has_thumb = ' cta_no_thumb';
                    }
        ?>
        
        <div class="carousel-item <?php echo ($activetor == 1) ? 'active':''; ?>">
        <?php echo $img_html; ?>
        </div>    
			
        <?php } ?> 	
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>