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
$paged = (get_query_var('paged'))? absint(get_query_var('paged')) :1;
if(is_category()){
	$cat_id = get_query_var('cat');
}else{
	$cat_id = 1;
}
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
			<main class="site-main container" id="main">
				<div class="row">
					<?php 
						if(is_archive()){
							if(is_tax()){
								$tax = $wp_query->get_queried_object();
								$posts = new WP_Query(array(
									'paged' => $paged,
									'tax_query' =>array(
										array(
											// 'taxonomy' => 'cta_content_type',
											'taxonomy' => $tax->taxonomy,
											'field' => 'slug',
											'terms' => $tax->slug,
										)
									)
								));
							}else{
								// starting query
								$posts = new WP_Query(array(
									'cat' => $cat_id,
									'paged' => $paged,
								));
							}
						}?>
						<?php while ($posts->have_posts()) :$posts->the_post();?>
							<?php if($posts->current_post == 0):?>
								<?php get_template_part( 'loop-templates/content', 'heropost');?>
							<?php else:?>
							<?php  get_template_part( 'loop-templates/content', get_post_format());?>
							<?php endif;?>
						<?php endwhile;?>
						<?php wp_reset_postdata();?> 
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
