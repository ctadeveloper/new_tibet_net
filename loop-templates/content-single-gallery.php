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
			  $pfgallery_items .= '<a class="rsImg"  data-rsBigImg="' . $full_img . '" href="' . $full_img . '">' . $pfgallery_item_cap . '<img  class="rsTmb mx-1" src="' . $thumb_img . '" /></a>'; 
			//  $pfgallery_items .= '<a class="rsImg my-2" data-rsbigimg="' . $full_img . '" href="' . $full_img . '">Vincent van Gogh - Still Life: Vase with Twelve Sunflowers<img width="96" height="72" class="rsTmb" src="' . $thumb_img . '"></a>';
              $pfgallery_imgNum = $pfgallery_imgNum +1;
           } ?>

          <?php endwhile; ?>
         <div id="gallery" class="w-100 royalSlider rsDefault">            
              <?php echo $pfgallery_items; ?>
          </div> 
    <?php endif; ?> 
		<!-- <div id="gallery" class="w-100 royalSlider rsDefault"> -->
			<!-- <a class="rsImg" data-rsw="400" data-rsh="500" data-rsbigimg="../img/paintings/1.jpg" href="../img/paintings/700x500/1.jpg">Vincent van Gogh - Still Life: Vase with Twelve Sunflowers<img width="96" height="72" class="rsTmb" src="../img/paintings/t/1.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="632" data-rsh="500" data-rsbigimg="../img/paintings/2.jpg" href="../img/paintings/700x500/2.jpg">Vincent van Gogh - The Starry Night<img width="96" height="72" class="rsTmb" src="../img/paintings/t/2.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="336" data-rsh="500" data-rsbigimg="../img/paintings/3.jpg" href="../img/paintings/700x500/3.jpg">Leonardo da Vinci - Mona Lisa<img width="96" height="72" class="rsTmb" src="../img/paintings/t/3.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="417" data-rsh="500" data-rsbigimg="../img/paintings/4.jpg" href="../img/paintings/700x500/4.jpg">Grant DeVolson Wood - American Gothic<img width="96" height="72" class="rsTmb" src="../img/paintings/t/4.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="601" data-rsh="500" data-rsbigimg="../img/paintings/5.jpg" href="../img/paintings/700x500/5.jpg">Rembrandt - The Night Watch<img width="96" height="72" class="rsTmb" src="../img/paintings/t/5.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="350" data-rsh="500" data-rsbigimg="../img/paintings/6.jpg" href="../img/paintings/700x500/6.jpg">Johannes Vermeer - Girl with a Pearl Earring<img width="96" height="72" class="rsTmb" src="../img/paintings/t/6.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="596" data-rsh="500" data-rsbigimg="../img/paintings/7.jpg" href="../img/paintings/700x500/7.jpg">Paul Cezanne - Card Players<img width="96" height="72" class="rsTmb" src="../img/paintings/t/7.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="700" data-rsh="414" data-rsbigimg="../img/paintings/8.jpg" href="../img/paintings/700x500/8.jpg">Ilya Repin - Reply of the Zaporozhian Cossacks<img width="96" height="72" class="rsTmb" src="../img/paintings/t/8.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="470" data-rsh="500" data-rsbigimg="../img/paintings/9.jpg" href="../img/paintings/700x500/9.jpg">Ivan Aivazovsky - Chesmabattle<img width="96" height="72" class="rsTmb" src="../img/paintings/t/9.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="500" data-rsh="500" data-rsbigimg="../img/paintings/10.jpg" href="../img/paintings/700x500/10.jpg">Gustav Klimt - The Kiss<img width="96" height="72" class="rsTmb" src="../img/paintings/t/10.jpg"></a> -->
			<!-- <a class="rsImg" data-rsw="700" data-rsh="475" data-rsbigimg="../img/paintings/11.jpg" href="../img/paintings/700x500/11.jpg">Ivan Shishkin - Morning in a Pine Forest<img width="96" height="72" class="rsTmb" src="../img/paintings/t/11.jpg"></a> -->
		<!-- </div> -->
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
