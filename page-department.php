<?php
/**
 * Template Name: Deparment
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>


<div class="pt-4" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="col-12 site-main" id="main">
                    <?php
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'loop-templates/content', 'page' );
                    }
                    ?>
                <ul class="nav nav-pills mb-5 justify-content-center text-center" id="pills-tab" role="tablist">
                        <li class="nav-item active"><a href="#about" class="nav-link" data-toggle="tab">
                        <div class="tab_l1">ABOUT US</div></a>
                    </li>
                    <?php if (get_field('programs_tab_items')){  ?>
                        <li class="nav-item"><a href="#programs" class="nav-link" data-toggle="tab">
                        <div class="tab_l1">PROGRAMS</div></a>
                    </li>
                    <?php } ?>
                    <?php if (get_field('announcements_tab_items')){  ?>
                        <li class="nav-item"><a href="#announcements" class="nav-link" data-toggle="tab">
                        <div class="tab_l1">ANNOUNCEMENTS</div>
                        </a></li>
                    <?php } ?>
                </ul>
                <div  class="tab-content">
                    <!-- About Us -->
                    <div class="tab-pane active" id="about">
                        <?php 
                        if (get_field('about_tab_items')){
                        $vtabs_navtabs_acc = '';
                        $vtabs_panes_acc = '';
                        $loop_num = 0;
                            while(the_repeater_field('about_tab_items')): 

                                $vtab_header = get_sub_field('about_tab_item_title');
                                $vtab_content = get_sub_field('about_tab_item_content');
                            
                            $post_id = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($vtab_header))))));
                                $post_id = str_replace(' ', '', $post_id);
                        
                                $vtabs_navtabs_acc .= '<li class="nav-item';
                                if ($loop_num == 0) {
                                    $vtabs_navtabs_acc .= ' active';
                                };
                            
                                $vtabs_navtabs_acc .= '""><a class="nav-link" href="#tab-' . $post_id . '" data-toggle="tab">' . $vtab_header . '</a></li> ' . "\r\n";
                                $vtabs_panes_acc .= '<div class="tab-pane';
                                if ($loop_num == 0) {
                                    $vtabs_panes_acc .= ' active';
                                };
                                $vtabs_panes_acc .= '" id="tab-' . $post_id . '">' . "\r\n";
                                $vtabs_panes_acc .= $vtab_content;      
                                $vtabs_panes_acc .= '</div>' . "\r\n";

                                $loop_num = $loop_num +1;
                            endwhile; 
                            echo '<div  class="row">' . "\r\n";  
                            //echo '<div id="content-vtabs-wrapper">' . "\r\n";  
                            echo '<div class="col-md-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">' . "\r\n"; 
                            echo '<ul class="nav nav-tabs">' . "\r\n";
                            echo $vtabs_navtabs_acc;               
                            echo '</ul>' . "\r\n";
                            echo '</div> <!-- #vtabs-ul-wrapper -->' . "\r\n";
                            echo '<div class="tab-content col-md-9">' . "\r\n";
                            echo $vtabs_panes_acc; 
                            echo '</div> <!-- #vtab-content-wrapper -->' . "\r\n";
                            //echo '</div> <!-- #content-vtabs-wrapper -->' . "\r\n";
                            echo '</div> <!-- .row -->' . "\r\n";
                        } else {
                            echo 'add items to About Tab Items in the post editor';
                        } 
                        ?>
                    </div>
                    <!-- Programs -->
                    <div class="tab-pane" id="programs">
                        <?php 
                        if (get_field('programs_tab_items')){
                        $vtabs_navtabs_acc = '';
                        $vtabs_panes_acc = '';
                        $loop_num = 0;
                            while(the_repeater_field('programs_tab_items')): 

                                $vtab_header = get_sub_field('programs_tab_item_title');
                                $vtab_content = get_sub_field('programs_tab_item_content');
                            
                            $post_id = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($vtab_header))))));
                                $post_id = str_replace(' ', '', $post_id);
                        
                                $vtabs_navtabs_acc .= '<li class="nav-item';
                                if ($loop_num == 0) {
                                    $vtabs_navtabs_acc .= ' active';
                                };
                            
                                $vtabs_navtabs_acc .= '""><a class="nav-link" href="#tab-' . $post_id . '" data-toggle="tab">' . $vtab_header . '</a></li> ' . "\r\n";
                                $vtabs_panes_acc .= '<div class="tab-pane';
                                if ($loop_num == 0) {
                                    $vtabs_panes_acc .= ' active';
                                };
                                $vtabs_panes_acc .= '" id="tab-' . $post_id . '">' . "\r\n";
                                $vtabs_panes_acc .= $vtab_content;      
                                $vtabs_panes_acc .= '</div>' . "\r\n";

                                $loop_num = $loop_num +1;
                            endwhile; 
                            echo '<div  class="row">' . "\r\n";  
                            //echo '<div id="content-vtabs-wrapper">' . "\r\n";  
                            echo '<div class="col-md-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">' . "\r\n"; 
                            echo '<ul class="nav nav-tabs">' . "\r\n";
                            echo $vtabs_navtabs_acc;               
                            echo '</ul>' . "\r\n";
                            echo '</div> <!-- #vtabs-ul-wrapper -->' . "\r\n";
                            echo '<div class="tab-content col-md-9">' . "\r\n";
                            echo $vtabs_panes_acc; 
                            echo '</div> <!-- #vtab-content-wrapper -->' . "\r\n";
                            //echo '</div> <!-- #content-vtabs-wrapper -->' . "\r\n";
                            echo '</div> <!-- .row -->' . "\r\n";
                        } else {
                            echo 'add items to About Tab Items in the post editor';
                        } 
                        ?>
                    </div>
                    <!-- Announcements -->
                    <div class="tab-pane" id="announcements">
                        <?php 
                            if (get_field('announcements_tab_items')){
                            $vtabs_navtabs_acc = '';
                            $vtabs_panes_acc = '';
                            $loop_num = 0;
                                while(the_repeater_field('announcements_tab_items')): 

                                    $vtab_header = get_sub_field('announcements_tab_title');
                                    $vtab_content = get_sub_field('announcements_tab_item_content');
                                    
                                    $post_id = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($vtab_header))))));
                                    $post_id = str_replace(' ', '', $post_id);

                                    $vtabs_navtabs_acc .= '<li class="nav-item';
                                    if ($loop_num == 0) {
                                        $vtabs_navtabs_acc .= ' active';
                                    };
                                
                                    $vtabs_navtabs_acc .= '""><a class="nav-link" href="#tab-' . $post_id . '" data-toggle="tab">' . $vtab_header . '</a></li> ' . "\r\n";
                                    $vtabs_panes_acc .= '<div class="vtab-pane tab-pane';
                                    if ($loop_num == 0) {
                                        $vtabs_panes_acc .= '  active';
                                    };
                                    $vtabs_panes_acc .= '" id="tab-' . $post_id . '">' . "\r\n";
                                    $vtabs_panes_acc .= $vtab_content;      
                                    $vtabs_panes_acc .= '</div>' . "\r\n";

                                    $loop_num = $loop_num +1;

                                endwhile; 

                                echo '<div id="content-vtabs" class="row">' . "\r\n";  
                                //echo '<div id="content-vtabs-wrapper">' . "\r\n";  
                                echo '<div class="col-md-3 nav flex-column nav-pills" role="tablist" aria-orientation="vertical">' . "\r\n"; 
                                echo '<ul class="nav nav-tabs">' . "\r\n";
                                echo $vtabs_navtabs_acc;               
                                echo '</ul>' . "\r\n";
                                echo '</div> <!-- #vtabs-ul-wrapper -->' . "\r\n";
                                echo '<div id="content-vtab-content-wrapper" class="col-md-9">' . "\r\n";
                                echo '<div class="tab-content">' . "\r\n";
                                echo $vtabs_panes_acc; 
                                echo '</div> <!-- .tab-content -->' . "\r\n";
                                echo '</div> <!-- #vtab-content-wrapper -->' . "\r\n";
                                //echo '</div> <!-- #content-vtabs-wrapper -->' . "\r\n";
                                echo '</div> <!-- .row -->' . "\r\n";
                            echo ' </div>';

                            } 
                        ?>
                    </div>     
                </div>
			</main><!-- #main -->
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();