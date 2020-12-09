<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!-- Aside / Periodical -->
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title border-bottom pb-2">', '</h2>' ); ?>

		<div class="entry-meta">
			<?php understrap_posted_on(); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<a class="text-muted my-1 text-right" href="<?php echo get_field('periodical_pdf')?>" download>
			<i class="fas fa-download"></i> <span class="small">Download</span>
		</a>
		<?php
		$pdf_url = get_field('periodical_pdf');
			echo "<script>
			let url = '$pdf_url';
				document.addEventListener('adobe_dc_view_sdk.ready', function(){ 
					var adobeDCView = new AdobeDC.View({clientId: '239e472f90aa4e75b88af92eef8deaf8', divId: 'periodical-dc-view'});
					adobeDCView.previewFile({
						content:{location: {url: url}},
						metaData:{fileName: 'Bodea Brochure.pdf'}
					}, {});
				});
			</script>"
		?>
		<div id="periodical-dc-view" style="height:940px"></div>
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
