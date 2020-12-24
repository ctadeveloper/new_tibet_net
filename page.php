<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="pt-4" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="col-12 site-main" id="main">

			<?php
        /*
		$pfgallery_items .= '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-centered col-max-grid item thumb grid-group-item">'. "\r\n"; 
        $pfgallery_items .= '<a class="jackbox thumbnail" data-group="gallery" data-thumbnail="' . $thumb . '" '; 
        $pfgallery_items .= 'data-title="' . sanitize_text_field($pfgallery_item_cap) . ' ' . sanitize_text_field($pfgallery_item_cap) . '" data-width="1100" '; 
        $pfgallery_items .= 'data-description="' . sanitize_text_field($pfgallery_item_desc) . '" '; 
        $pfgallery_items .= 'href="' . $pfgallery_item_img . '">'. "\r\n";
        $pfgallery_items .= '<div class="jackbox-hover jackbox-hover-black jackbox-hover-magnify"></div>'. "\r\n";
        $pfgallery_items .= '<img class="group list-group-image" src="' . $thumb . '" alt="' . sanitize_text_field($pfgallery_item_cap) . '" />'. "\r\n"; 
        $pfgallery_items .= '<div class="caption">'. "\r\n"; 
        $pfgallery_items .= '<h4 class="group inner list-group-item-heading">' . $pfgallery_item_cap . '</h4>'. "\r\n"; 
        $pfgallery_items .= '</div>'. "\r\n"; 
        $pfgallery_items .= '</a>'. "\r\n";
        $pfgallery_items .= '</div>'. "\r\n"; // end item 
        */
  
    if (get_field('dep_slider_images')){

            $slider_imgs_acc = '';
            $slider_img_num = 0;
                
            while(the_repeater_field('dep_slider_images')): 

                $slider_img = get_sub_field('dep_slider_image');
                // $slider_img_thumb = thumbResizeIM($slider_img, 150, 150);
                // $slider_imgs_acc  .= '<li><a href="#"><img src="' . $slider_img . '" alt="image01" /></a></li>';
                $slider_imgs_acc  .= '<li>'. "\r\n";
                $slider_imgs_acc .= '<a class="jackbox" data-group="slider_imgs" data-thumbnail="' . $slider_img . '" '; 
        		$slider_imgs_acc .= 'data-title="' . sanitize_text_field(get_the_title()) . '" data-width="1100" '; 
        		$slider_imgs_acc .= 'data-description="" '; 
        		$slider_imgs_acc .= 'href="' . $slider_img . '">'. "\r\n";
        		$slider_imgs_acc .= '<div class="jackbox-hover jackbox-hover-black jackbox-hover-magnify"></div>'. "\r\n";
                $slider_imgs_acc  .= '<img src="' . $slider_img . '" alt="Image 1">'. "\r\n";
                $slider_imgs_acc .= '</a>'. "\r\n";
                $slider_imgs_acc  .= '</li>'. "\r\n";   

            endwhile; 
            ?>

         <div class="row">	   

		<div id="department_jcarousel" class="jcarousel-wrapper">
	        <div class="jcarousel">
	            <ul>
	                
	            	<?php echo $slider_imgs_acc; ?>

	            </ul>
	        </div>

	        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
	        <a href="#" class="jcarousel-control-next">&rsaquo;</a>

	        <p class="jcarousel-pagination"></p>
	    </div>

	    </div>

    <?php  }  ?>

 	

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );
				}
				?>

				<?php 
					if(get_field('about_tab_items')){
						echo true;
					}else{
						echo false;
					}
				?>

			</main><!-- #main -->
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
