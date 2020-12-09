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
		<?php the_title( '<h2 class="entry-title border-bottom pb-2">', '</h2>' ); ?>
		<div class="entry-meta">
			<?php understrap_posted_on(); ?>
			<?php edit_post_link( __( '<i class="fas fa-edit"></i> ', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

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
