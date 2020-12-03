<?php
/**
 * The right sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>
	<h5 class="text-dark font-weight-bolder py-2 border-top border-dark">FEATURED NEWS</h5>
	<?php
		$flash_news_loop = new WP_Query(array(
			'category_name' => 'featured-flash-news',
			'posts_per_page' => 4,
			'orderby' => 'date', 'order' => 'DESC',
			'paged' => $paged
		));
		while ($flash_news_loop->have_posts()) : $flash_news_loop->the_post();
		?>
			<div class="my-2 p-1 bg-light">
				<a class="text-dark" href="<?php echo get_permalink(); ?>">
					<h6><?php echo excerpt_title_length(80) ?></h6>
				</a>
				<h6 class="small text-muted mr-2"><?php echo get_the_time("F j, Y"); ?> <i class="fas fa-share-alt"></i></h6>
			</div>
		<?php endwhile;
		wp_reset_postdata();
		?>

		<div class="my-2">
			<h5 class="text-dark font-weight-bolder py-2 border-top border-dark">TOP STORIES</h5>
			<div class="row">
				<?php
				$related_post = new WP_Query(array(
					'cat' => 5,
					'posts_per_page' => 6,
					'orderby' => 'date',
					'order' => 'DESC'
				));
				while($related_post->have_posts()) : $related_post->the_post();
					$thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
					// ImgMagick
					// $thumb1 = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
					$cta_has_thumb = '';
					$post_index_img = cta_thumb(280, 140);
					if ($post_index_img != '') {
						$img_html = '<img class="img-responsive w-100 lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
					} else { // if (!is_page_template( 'page-homepage.php' )) {
						$img_html = '<img class="img-responsive w-100 lazyload blur-up" data-src="' . get_template_directory_uri() . '/img/cta_grid_default-280x140.jpg" alt="' . get_the_title() . '"' . "\r\n";
						// $cta_has_thumb = ' cta_no_thumb';
					}
				?>
				<!-- TOP Stories -->
				<div class="col-md-12 col-sm-6 py-1">
					<a href="<?php echo get_permalink()?>">
						<?php echo $img_html ?>
					</a>
					<div class="p-1">
						<a class="text-dark"href="<?php echo get_permalink(); ?>" >
							<h6><?php echo excerpt_title_length(80) ?></h6>
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
</div><!-- #right-sidebar -->
