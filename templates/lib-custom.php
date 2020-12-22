<?php
// Experpt Length
function get_print_excerpt($length)
{ // Max excerpt length. Length is set in characters
    global $post;
    // $text = $post->post_excerpt;
    // if ( '' == $text ) {
    $text = get_the_content('');
    // $text = apply_filters('the_content', $text);

    $text = str_replace(']]>', ']]>', $text);
    // }
    $text = preg_replace("/\[caption.*\[\/caption\]/", '', $text);
    $text = strip_shortcodes($text); // optional, recommended
    $text = wp_strip_all_tags($text, true);
    $text = substr($text, 0, $length);
    $excerpt = reverse_strrchr($text, '.', 1);
    if ($excerpt) {
        // return apply_filters('the_excerpt',$excerpt);
        return trim($excerpt);
    } else {
        // return apply_filters('the_excerpt',$text);
        return trim($text);
    }
}

// Returns the portion of haystack which goes until the last occurrence of needle
function reverse_strrchr($haystack, $needle, $trail)
{
    return strrpos($haystack, $needle) ? substr($haystack, 0, strrpos($haystack, $needle) + $trail) : false;
}


// Imagick Magick
function thumbResizeIM($thumb, $width, $height, $key)
{
    try {
        $parsedurl = parse_url($thumb);
        $thumb_file   = $_SERVER['DOCUMENT_ROOT'] . $parsedurl['path'];
        $img_format = 'jpg';
        $save_to  = $_SERVER['DOCUMENT_ROOT'] . '/cta-thumbs/' . $key . basename($thumb, ".jpg") . '_' . $width . 'x' . $height . '.' . $img_format;
        $save_to_link = '/cta-thumbs/' . $key . basename($thumb, ".jpg") . '_' . $width . 'x' . $height . '.' . $img_format;
        if (!file_exists($save_to)) {
            $img = new Imagick($thumb_file);
            // $img->thumbnailImage($width , $height , TRUE);
            $img->cropThumbnailImage($width, $height);
            // $img->cropImage($width, $height, 30,10);
            // $img->resizeImage( $width, $height,  imagick::FILTER_LANCZOS, 1);
            // $img->scaleImage($width, $height, true); 
            $img->writeImage($save_to);
            return $save_to_link;
        } else {
            return $save_to_link;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
// CTA thumbs
function cta_thumb($width, $height)
{
    global $post;

    if (get_the_post_thumbnail($post->ID) != '') {
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
        $thumb_url = $thumb_url_array[0];
        // return $thumb_url;
        return thumbResizeIM($thumb_url, $width, $height, $post->ID);
    } else {
        // $thumb_url = catch_that_image();
        $thumb_url = 'http://new.tibet.net:8888/wp-content/themes/cta-official/img/cta_grid_default.jpg';
        // return $thumb_url;
        if ($thumb_url != '' && file_exists($thumb_url)) {
            return thumbResizeIM($thumb_url, $width, $height, '2020');
        } else {

            return '';
        }
    }
}
function default_thumb($width,$height){
    global $post;
    $thumb_url = 'http://new.tibet.net:8888/wp-content/themes/cta-official/img/cta_grid_default.jpg';
    return thumbResizeIM($thumb_url, $width, $height, $post->ID);
}
// Catch that image
function catch_that_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    // $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    // $first_img = $matches [1] [0];
    if ($output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches)) {
        $first_img = $matches[1][0];
    }
    return $first_img;
}
/**
 * Function 
 * to trim title length of news 
 * home news featured
 *  */ 
function excerpt_title_length($length)
{
    $text = get_the_title('');
    if(strlen($text)<= $length){
        return substr($text,0,$length);
    }else{
        return substr($text, 0, $length).'...';
    }
}

// General Length
function excerpt_general_length($text,$length){
    if (strlen($text) <= $length) {
        return substr($text, 0, $length);
    } else {
        return substr($text, 0, $length) . '...';
    }
}
?>