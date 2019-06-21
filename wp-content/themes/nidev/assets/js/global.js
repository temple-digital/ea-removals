jQuery(document).ready(function ($) {

    // #Nav #Slide #Out
    $('.nav-toggle').on('click', function () {
        $('html').toggleClass('nav-open');
        setTimeout(function () {
            $('html').toggleClass('nav-opened');

            $('body').on('touchmove', function (e) {
                e.preventDefault()
            });
            $('.side-nav').on("touchmove", function (e) {
                e.stopPropagation()
            });
        }, 250);
    });

    //#Header #Scroll
    $(window).on("scroll", function () {
        if ($(window).scrollTop() >= 10 ){
            $(".header").addClass("is-active");
        } else {
            $(".header").removeClass("is-active");
        }
    });

    // Blocker
    $('.blocker').on('click touchmove', function (e) {
        e.preventDefault();
        $('body, .header').off('touchmove');
        $('html').removeClass('nav-open');
        setTimeout(function () {
            $('html').removeClass('nav-opened');
        }, 250);
    });


    //Basic #Anchor #smooth #scroll
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
    
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 130
            }, 1000);

            return false;
        }
    });

    // #Testimonials
    if ($('.testimonial-slider').length) {

        $(".testimonial-slider").royalSlider({
            slidesSpacing: 0,
            sliderTouch: false,
            addActiveClass: true,
            arrowsNav: false,
            loop: true,
            arrowsNavAutoHide: false,
            controlNavigation: 'none',
            autoScaleSlider: false,
            imageScaleMode: 'none',
            imageAlignCenter: false,
            imageScalePadding: 0,
            autoHeight: true,
            keyboardNavEnabled: true,
            autoPlay: {
                delay:	5000,
                enabled: true,
                pauseOnHover: false
            }
        });  
    }

});