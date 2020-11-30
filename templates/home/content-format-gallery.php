  <?php
    $cta_has_thumb = '';
    $post_index_img = cta_thumb(280, 140);


    if ($post_index_img != '') {
        $img_html = '<img class="list-item-image img-responsive rounded w-100 lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
    } else { // if (!is_page_template( 'page-homepage.php' )) {
        $img_html = '<img class="list-item-image img-responsive w-100 lazyload blur-up" data-src="' . get_template_directory_uri() . '/img/cta_grid_default.jpg" alt="' . get_the_title() . '"' . "\r\n";
        // $cta_has_thumb = ' cta_no_thumb';
    }
    ?>
  <div class="col-md-3 col-sm-6 col-6">
      <a href="<?php echo get_permalink(); ?>">
          <div class="position-relative">
              <?php echo $img_html; ?>
              <i class="far fa-images position-absolute text-white" style="left:2%;bottom:3%"></i>
          </div>
      </a>
      <div class="p-1">
          <a href="<?php echo get_permalink(); ?>">
              <h6 class="text-dark"><?php echo excerpt_title_length(50) ?></h6>
          </a>
          <h6 class="small text-muted"><?php echo get_the_time("F j, Y"); ?>
              <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
          </h6>
      </div>
  </div>