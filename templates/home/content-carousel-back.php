<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
		<?php
			$indicator=0;
            $servicePost = new WP_Query(array(
                'category_name' => 'featured-flash-news',
                'posts_per_page' => 4,
                'orderby' => 'date', 'order' => 'DESC',
                'paged' => $paged
            ));
            while($servicePost->have_posts()){
                $servicePost->the_post();
		?>
            <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $indicator; ?>" class="<?php echo ($indicator == 1) ? 'active':''; ?>"></li>
		<?php $indicator++; } ?>
    </ol>
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
		?>
        <div class="carousel-item <?php echo ($activetor == 1) ? 'active':''; ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="d-block" alt="...">
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