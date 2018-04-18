(function ($) {
  
  $('.owl-carousel').owlCarousel({
    nav:true,
    dots:true,
    dotsEach:true,
    dotData:true,
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:true,
        }
    }
});

if($('.owl-carousel2').length){

    if($('.owl-carousel2').css('display') === 'none'){
        // console.log('owl is hidden ');
    }
    else if($('.owl-carousel2').css('display') === 'block') {
        // console.log('owl is visible');
        $('.owl-carousel2').owlCarousel({
            center:true,
            nav:true,
            dots:true,
            dotsEach:true,
            dotData:true,
            loop:true,
            margin:10,
            responsiveClass:true,
            mouseDrag:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:true,
                }
            }
        });
    }

} 





})(jQuery);