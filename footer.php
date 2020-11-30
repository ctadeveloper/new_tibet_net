<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<footer>
    <div class="wrapper" id="cta_footer_blue">
        <!-- <div class="wrapper" id="cta_footer_green"> -->
        <!-- Info -->
        <div id="footer_info" class="d-none d-sm-block">
            <div class="container">
                <img src="<?php echo get_template_directory_uri() . '/img/cta-divider.png' ?>" class="img-fluid pt-3" alt="">

                <div class="row py-2">
                    <div class="col-md-3">
                        <h5 class="footer_header">About Tibet</h5>
                        <ul class="footer_list">
                            <li class="text-white-50"><a href="/about-tibet/tibet-at-a-glance/" target="_self">Tibet at a Glance</a></li>
                            <li><a href="/about-tibet/the-tibetan-national-flag/" target="_self">Tibetan National Flag</a></li>
                            <li><a href="/about-tibet/worldwide-tibet-movement/" target="_self">Global Tibet Movement</a></li>
                        </ul>
                        <h5 class="footer_header">Key Issues</h5>
                        <ul class="footer_list">
                            <li><a href="/important-issues/issues-facing-tibet-today/" target="_self">Issues Facing Tibet</a></li>
                            <li><a href="/important-issues/sino-tibetan-dialogue/" target="_self">Sino Tibetan Dialogue</a></li>
                            <li><a href="http://mwa.tibet.net/" target="_blank" rel="noopener">Middle Way Approach</a></li>
                            <li><a href="/dolgyal-shugden/" target="_blank" rel="noopener">Dolgyal-Shugden</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="footer_header">About CTA</h5>
                        <ul class="footer_list">
                            <li><a href="http://new.tibet.net:8888//about-cta/constitution/" target="_self">Constitution</a></li>
                            <li><a href="http://new.tibet.net:8888//about-cta/leadership/" target="_self">Leadership</a></li>
                            <li><a href="http://new.tibet.net:8888//about-cta/judiciary/" target="_self">Judiciary</a></li>
                            <li><a href="http://new.tibet.net:8888/about-cta/legislature/" target="_self">Legislature</a></li>
                            <li><a href="http://new.tibet.net:8888/about-cta/executive/" target="_self">Executive</a></li>
                            <li><a href="http://new.tibet.net:8888//about-cta/election-commission/" target="_self">Election Commission</a></li>
                            <li><a href="http://new.tibet.net:8888/about-cta/public-service-commission/" target="_self">Public Service Commission</a></li>
                            <li><a href="http://new.tibet.net:8888/about-cta/office-of-the-auditor-general/" target="_self">Auditor General</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="footer_header">Departments</h5>
                        <ul class="footer_list">
                            <li><a href="http://new.tibet.net:8888/religion/" target="_self">Religion &amp; Culture</a></li>
                            <li><a href="http://new.tibet.net:8888/home/" target="_self">Home</a></li>
                            <li><a href="http://new.tibet.net:8888/finance/" target="_self">Finance</a></li>
                            <li><a href="http://new.tibet.net:8888/education/" target="_self">Education</a></li>
                            <li><a href="http://new.tibet.net:8888/security/" target="_self">Security</a></li>
                            <li><a href="http://new.tibet.net:8888/information/" target="_self">Information &amp; International Relations</a></li>
                            <li><a href="http://new.tibet.net:8888/health/" target="_self">Health</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-3">
                        <h5 class="footer_header">Media Center</h5>
                        <ul class="footer_list">
                            <li><a href="http://new.tibet.net:8888/posts/announcements/" target="_self">Announcements</a></li>
                            <li><a href="http://new.tibet.net:8888/category/media-center/press-release/" target="_self">Press Releases</a></li>
                            <li><a href="http://new.tibet.net:8888/posts/periodicals/" target="_self">Periodicals</a></li>
                            <li><a href="http://new.tibet.net:8888/posts/publications/" target="_self">Publications</a></li>
                            <li><a href="http://new.tibet.net:8888/category/flash-news/" target="_self">News Archive</a></li>
                            <li><a href="http://new.tibet.net:8888/posts/videos/" target="_self">Tibet TV Videos</a></li>
                            <li><a href="http://new.tibet.net:8888/posts/photos/" target="_self">Photo Galleries</a></li>
                            <li><a href="http://new.tibet.net:8888/archive/" target="_self">Tibet.net Archive</a></li>
                        </ul>
                    </div> -->
                    <div class="col-md-3">
                        <h5>Sign Up</h5>
                        <p class="small">Email us: </p>
                        <input type="text" class="form-control">
                        <button class="btn btn-sm btn-danger mt-3">Subscribe</button>
                        <ul class="footer_sign_up py-3">
                            <li><a href="http://new.tibet.net:8888/religion/" target="_self"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="http://new.tibet.net:8888/religion/" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://new.tibet.net:8888/religion/" target="_self"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="http://new.tibet.net:8888/religion/" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copy Right -->
        <div id="footer_copy_right">
            <div class="<?php echo esc_attr($container); ?>">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <footer class="site-footer py-4" id="colophon">
                            <div class="site-info">
                                <div class="col-sm-12 small">
                                    <i class="fa fa-copyright mr-2"></i> <?php echo date("Y"); ?> Central Tibetan Administration <a href="https://tibet.net/privacy-policy-2/" class="mx-3">Privacy Policy</a><a href="#">Terms of Service</a>
                                </div>
                            </div><!-- .site-info -->
                        </footer><!-- #colophon -->
                    </div>
                    <!--col end -->
                </div><!-- row end -->
            </div>
        </div><!-- wrapper end -->

    </div><!-- #page we need this extra closing tag here -->
</footer>

<?php wp_footer(); ?>

</body>

</html>