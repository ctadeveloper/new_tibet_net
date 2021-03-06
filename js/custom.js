/**
 * Author : Rinzin
 * Description : Adding Custom Javascrtip for website / and override for the exiting css
 * Version : 1.0
 *
*/

$(window).on("scroll", function () {
    if ($(window).scrollTop() > 81) {
        $("#main-nav").addClass("sticky_header");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $("#main-nav").removeClass("sticky_header");
    }
});
// Adding search icon at menu
$("#main-menu").append("<i id='home-search-icon' class='fas fa-search align-middle fa-1x text-white px-2 pt-3' style='font-size:1.5em'></i>");

$("#home-search-icon").click(function(){
        $("#myModal").modal();
        console.log("this is clicked");
})
// CTA Websites Menu
$("#menu-item-160184").click(function(){
    $("#cta-websites-modal").modal();
    // $("#myModal").modal();
    // console.log("this is clicked");
})
// 
/**
 * Customizing dropdown menu
 * on hover
 *  */ 
// 
$('ul.navbar-nav li.menu-item-has-children').hover(function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
// lazyloading images
$("img").addClass("lazyload blur-up");
// RoyalSlider
jQuery(document).ready(function ($) {
    // jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.175, 0.885, 0.320, 1.275)';
// Featured Slider News
    $('#slider-with-blocks-1').royalSlider({
        autoPlay: {
            // autoplay options go gere
            stopAtAction: false,
            enabled: true,
            pauseOnHover: true,
            delay: 4000
        },
        arrowsNav: true,
        arrowsNavAutoHide: false,
        fadeinLoadedSlide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'bullets',
        imageScaleMode: 'none',
        imageAlignCenter: false,
        blockLoop: true,
        loop: true,
        autoHeight:true,
        numImagesToPreload: 6,
        transitionType: 'fade',
        keyboardNavEnabled: true,
        block: {
            delay: 400
        }
    });
// Tibet TV Video JS
  $('#video-gallery').royalSlider({
    arrowsNav: false,
    fadeinLoadedSlide: true,
    controlNavigationSpacing: 0,
    controlNavigation: 'thumbnails',
    thumbs: {
      autoCenter: false,
      fitInViewport: true,
      orientation: 'vertical',
      spacing: 0,
      paddingBottom: 0
    },
    keyboardNavEnabled: true,
    imageScaleMode: 'fill',
    imageAlignCenter:true,
    slidesSpacing: 0,
    loop: false,
    loopRewind: true,
    numImagesToPreload: 3,
    video: {
      autoHideArrows:true,
      autoHideControlNav:false,
      autoHideBlocks: true
    }, 
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 450,
    imgWidth: 640,
    imgHeight: 360

  });
//   Photo Gallery Royalslider
 $('#gallery').royalSlider({
    fullscreen: {
      enabled: true,
      nativeFS: true
    },
    controlNavigation: 'thumbnails',
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 600,
    loop: false,
    imageScaleMode: 'fit-if-smaller',
    navigateByClick: true,
    numImagesToPreload:2,
    arrowsNav:true,
    arrowsNavAutoHide: true,
    arrowsNavHideOnTouch: true,
    keyboardNavEnabled: true,
    fadeinLoadedSlide: true,
    globalCaption: true,
    globalCaptionInside: true,
    thumbs: {
      appendSpan: true,
      firstMargin: true,
      paddingBottom: 4
    }
    
  });

//  Slick Js
//  Home Immportant Topic
//  $('.importantTopciSlider').slick({
//     dots: true,
//     infinite: false,
//     speed: 300,
//     // centerMode: true,
//     // fade: true,
//     cssEase: 'linear',
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     responsive: [
//         {
//         breakpoint: 1024,
//         settings: {
//             slidesToShow: 3,
//             slidesToScroll: 3,
//             infinite: true,
//             dots: true
//         }
//         },
//         {
//         breakpoint: 600,
//         settings: {
//             slidesToShow: 2,
//             slidesToScroll: 2
//         }
//         },
//         {
//         breakpoint: 480,
//         settings: {
//             slidesToShow: 3,
//             slidesToScroll: 1
//         }
//         }
//     ]
//     });
// Publiction / Periodicals
    // $(document).ready(function () {
});
// Removing blur for gallery
// if($('#gallery')){
//     if($("rsNavItem")){
//         $("img").removeClass('blur-up lazyloading');
//     }
// }