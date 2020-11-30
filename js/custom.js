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
// data-toggle="modal" data-target="#exampleModal"
// $("#myModal").modal('show');

$("#menu-item-160184").click(function () {
    console.log("check");
    $("#exampleModal").addClass("modal fade show");
    $("#exampleModal").css('display', 'block');
});

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

// RoyalSlider
jQuery(document).ready(function ($) {
    jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.175, 0.885, 0.320, 1.275)';
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
    // Video Tibet tv
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

    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
    imgWidth: 640,
    imgHeight: 360

  });
//  Slick Js
//  Home Immportant Topic
    $('.importantTopciSlider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    // centerMode: true,
    // fade: true,
    // cssEase: 'linear',
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
        },
        {
        breakpoint: 480,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
    });
});


