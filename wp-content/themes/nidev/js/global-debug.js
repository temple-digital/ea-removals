jQuery(document).ready(function ($) {

    // Explore responsive
    $(".explore").click(function() {
      var windowSize = $(window).width();
      var $offset = 0;

      if (windowSize <= 640) {
        $offset = 0;
      }

      $('html,body').animate({
        scrollTop: $(".explore").offset().top -$offset}, 1000);
    });


    $(".portfolio-slider .text .text-btn .plus-icon").click(function() {
		$(this).closest('.portfolio-item').find('.text').toggleClass('active');
        return false;
    });

    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop();
    //     if (scroll >= 500) {
    //         $(".hero .text").addClass("fixed");
    //     } else {
    //         $(".hero .text").removeClass("fixed");
    //     }
    // });
});

// #Icon slider
if ($('.section--featured-posts .owl-carousel').length) {
    $('.section--featured-posts .owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            380: {
                items: 2
            },
            560: {
                items: 3
            },
            767: {
                items: 4
            },
            1630: {
                items: 6
            }
        }
    });
}//end Icon Slider
