<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<section class="bg-light py-2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav">
					<?php
						while ( have_posts() ) {
							the_post();
					
							// catetory id
							$categories = get_the_category();
							foreach ($categories as $category) {?>
								<li class="nav-item text-muted font-weight-normal px-1">
									<a href="/category/<?php echo $category->category_nicename;?>">
										<?php echo $category->name?> |
									</a>
								</li>
							<?php
							}
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="my-3" id="single-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<!-- Do the left sidebar check -->

			<main class="col-md-9 col-12 site-main" id="main">
				<?php
				while ( have_posts() ) {
					the_post();
					// catetory id
					$categories = get_the_category();
					// var_dump($categories);
					$cat_id = $categories[0]->term_id;
					// Post Format
					$format = get_post_format();
					if(false === $format){
						$format = 'single';
					}
						get_template_part( 'loop-templates/content-single', get_post_format() );

					// include (TEMPLATEPATH.'/loop-templates/content-'.$format.'.php');
					// if($format === 'gallery'){
					// 	get_template_part( 'loop-templates/content', 'single-'.$format );
					// }
					// if($format === 'aside' || $format === 'chat'){
					// 	// $url = get_field('publication_pdf');
					// 	// echo $url;
					// 	get_template_part( 'loop-templates/content', 'single-publication');
					// }else{
					// 	get_template_part( 'loop-templates/content', 'single' );
					// }
					understrap_post_nav($cat_id);
				}
				?>

			</main><!-- #main -->
			<aside class="col-md-3" id="rightSidebar">
				<?php get_template_part('global-templates/right-sidebar-check');?>
			</aside>
			<!-- Do the right sidebar check -->
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #single-wrapper -->
<?php
get_footer();
