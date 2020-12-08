<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="col-md-4 col-sm-6 py-3" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<!-- <div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php
					// Thumbnail Url
					$thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
					// ImgMagick
					// $thumb1 = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
					$cta_has_thumb = '';
					$post_index_img = cta_thumb(980, 460);
					if ($post_index_img != '') {
						$img_html = '<img class="w-100 rounded-top lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
					} else { // if (!is_page_template( 'page-homepage.php' )) {
						$img_html = '<img class="w-100 lazyload blur-up" data-src="' . get_template_directory_uri() . '/img/cta_grid_default.jpg" alt="' . get_the_title() . '"' . "\r\n";
						// $cta_has_thumb = ' cta_no_thumb';
					}
					?>
				<a href="<?php echo get_permalink(); ?>">
					<?php echo $img_html; ?>
				</a>
			</div>
			<div class="col-md-6">
				<a href="<?php echo get_permalink(); ?>">
				<h3 class="font-weigh-bold"><?php echo the_title(); ?></h4>
				</a>
				<p class="small text-muted font-weight-bold"><?php echo get_the_time("F j, Y"); ?>
					<?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
				</p>
				<p class="text-secondary"><?php echo get_print_excerpt(500)?></p>
			</div>
		</div>
	</div> -->

	
	<?php
		// Thumbnail Url
		$thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
		// ImgMagick
		// $thumb1 = thumbResizeIM($thumb_url, 280, 140, get_the_ID());
		$cta_has_thumb = '';
		$post_index_img = cta_thumb(280, 140);
		if ($post_index_img != '') {
			$img_html = '<img class="w-100 lazyload blur-up" data-src="' . $post_index_img . '" alt="' . get_the_title() . '">' . "\r\n";
		} else { // if (!is_page_template( 'page-homepage.php' )) {
			$img_html = '<img class="w-100 lazyload blur-up" data-src="' . get_template_directory_uri() . '/img/cta_grid_default-280x140.jpg" alt="' . get_the_title() . '"' . "\r\n";
			// $cta_has_thumb = ' cta_no_thumb';
		}
	?>
	<a href="<?php echo get_permalink(); ?>">
	<?php echo $img_html; ?>
	</a>
	<header class="entry-header">
		<h5 class="entry-title text-dark pt-2">
			<a href="<?php echo get_permalink(); ?>">
				<?php echo excerpt_title_length(50) ?>
			</a>
		</h3>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
                        <p class="small text-muted font-weight-bold">
						<?php echo get_the_time("F j, Y"); ?>
                            <?php include(TEMPLATEPATH . '/templates/social_share_api.php'); ?>
				<!-- <?php understrap_posted_on(); ?> -->
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php 
	if ( !empty( get_the_content() ) ):?>
	<div class="entry-content m-0 text-muted">
		<a href="<?php echo get_permalink(); ?>">
			<?php echo get_print_excerpt(150).'..'; ?>
		</a>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>
		
	</div><!-- .entry-content -->
	<?php endif; ?>
	<!-- .entry-footer -->

</article><!-- #post-## -->
