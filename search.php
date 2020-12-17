<?php
/**
 * The template for displaying search results pages
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$paged = (get_query_var('paged'))? absint(get_query_var('paged')) :1;

?>
<section class="bg-danger py-2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 py-2">
			<header class="page-header">
							<h3 class="page-title text-white">
								<?php
								printf(
									/* translators: %s: query term */
									esc_html__( 'Search Results for: %s', 'understrap' ),
									'<span >' . get_search_query() . '</span>'
								);
								?>
							</h3>

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
<div class="wrapper container" id="search-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					<div class="col-12">
						<div class="row">
							<?php 
							$posts = new WP_Query(array(
								's'=>get_search_query(),
								'paged' => $paged,
							));
						?>
						<?php while ($posts->have_posts()) :$posts->the_post();?>
							<?php if($posts->current_post == 0):?>
								<?php get_template_part( 'loop-templates/content', 'heropost');?>
							<?php else:?>
							<?php  get_template_part( 'loop-templates/content', 'search' );?>
							<?php endif;?>
						<?php endwhile;?>
						<?php else : ?>
							<?php get_template_part( 'loop-templates/content', 'none' ); ?>
						<?php endif; ?>
						<?php wp_reset_postdata();?> 
						</div>
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

</div><!-- #search-wrapper -->

<?php
get_footer();
