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

<div class="wrapper" id="single-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					// catetory id
					$categories = get_the_category();
					// var_dump($categories);
					$cat_id = $categories[0]->term_id;
					get_template_part( 'loop-templates/content', 'single' );
					understrap_post_nav($cat_id);
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->

		</div><!-- .row -->

	</div><!-- #content -->
</div><!-- #single-wrapper -->
<?php
get_footer();
