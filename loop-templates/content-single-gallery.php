<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">

		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<div class="entry-meta">
			<?php understrap_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<div class="entry-content">
     <?php if(get_field('pfgallery_images_repeater')): ?>
          <?php 
		  $pfgallery_items = '';
		  $caption = '';
          $pfgallery_imgNum = 1;
          while(the_repeater_field('pfgallery_images_repeater')): ?>
          <?php
          $pfgallery_item_img = get_sub_field('pfgallery_image');
          $pfgallery_item_cap = get_sub_field('pfgallery_image_caption');
          $pfgallery_photog_credit = get_sub_field('pfgallery_photog_credit');
          $pfgallery_custom_img_width = get_field('pfgallery_image_custom_width');
          $pfgallery_custom_img_height = get_field('pfgallery_image_custom_height');

          if ($pfgallery_photog_credit != '') {

              $pfgallery_item_cap = $pfgallery_item_cap . ' Photo/' . $pfgallery_photog_credit;

          }
          $full_img = $pfgallery_item_img;
          $parsedurl = parse_url($full_img);  
          $thumb_file   = $_SERVER['DOCUMENT_ROOT'] . $parsedurl['path'];
          if (file_exists($thumb_file)){
              $thumb_img = thumbResizeIM($full_img, 90, 120, $pfgallery_imgNum); 
              $medium_img = thumbResizeIM($full_img, 800, 600, $pfgallery_imgNum); 
			  $pfgallery_items .= '<a class="rsImg"  data-rsBigImg="' . $full_img . '" href="' . $full_img . '">' . $pfgallery_item_cap . '<img  class="rsTmb mx-1" src="' . $thumb_img . '" />
			  '.$pfgallery_item_cap.'
			  </a>'; 
			//  $pfgallery_items .= '<a class="rsImg my-2" data-rsbigimg="' . $full_img . '" href="' . $full_img . '">Vincent van Gogh - Still Life: Vase with Twelve Sunflowers<img width="96" height="72" class="rsTmb" src="' . $thumb_img . '"></a>';
			  $pfgallery_imgNum = $pfgallery_imgNum +1;
			//   $caption .= $pfgallery_item_cap;

           } ?>

		  <?php endwhile; ?>
         <div id="gallery" class="w-100 royalSlider rsDefault">            
			  <?php echo $pfgallery_items; ?>
          </div> 
    <?php endif; ?> 
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->


</article><!-- #post-## -->
