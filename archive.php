<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<section class="bg-danger py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 py-2">
				<header class="page-header">
						<?php
						// the_archive_title( '<h1 class="h3 page-title text-white class="page-title">', '</h1>' );
						single_cat_title( '<h1 class="h3 page-title text-white class="page-title">', '</h1>' );
						?>
				</header><!-- .page-header -->
			</div>
		</div>
	</div>
	<div class="border-bottom border-light"></div>
	<div class="container pt-2">
		<div class="row">
			<div class="col-12 text-white-50 font-weight-bold small">
				TIBET TODAY | TIBET AROUND THE WORLD | CTA REPORTS | HUMAN RIGHTS & SITUATION INSIDE TIBET
				| IMPORTANT TOPICS | ANNOUNCEMENT | TIBET TV
			</div>
		</div>
	</div>
</section>
<div id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main container" id="main">
				<div class="row">
						<?php
						if ( have_posts() ) {
							?>
							<?php
							$query = new WP_Query(array(
								'posts_per_page' => 1,

							));
							// Start the loop.
							while ( have_posts() ) {
								the_post();
								// var_dump(get_post());
								// die();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'loop-templates/content', get_post_format() );
							}
						} else {
							get_template_part( 'loop-templates/content', 'none' );
						}
						?>
				</div>
			</main><!-- #main -->
			<div class="container my-4 d-flex justify-content-center">	
				<div class="row">
					<div class="col-12">
						<?php
						// Display the pagination component.
						understrap_pagination();
						// Do the right sidebar check.
						// get_template_part( 'global-templates/right-sidebar-check' );
						?>
					</div>
				</div>
			</div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
