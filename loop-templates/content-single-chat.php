<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php 
  echo"<script language='javascript'>

$(document).ready(function () {
    $('#book').flipBook({
        pdfUrl:'../book2.pdf',
    });

})
</script>
";
?>
Chat / Publication
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">

		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<div class="entry-meta">
			<?php understrap_posted_on(); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
	$field = get_field('publication_pdf');
	// var_dump($field);
	?>
	
		<!-- <?php the_content(); ?> -->
		<div id="books">
			<p>Real 3D Flipbook has lightbox feature - book can be displayed in the same page with lightbox effect.</p>
			<p>Click on a book cover to start reading.</p>
			<img src="../page1.jpg" />
		</div>
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
