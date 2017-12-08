(function ($) {
  console.log('test');
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

})(jQuery);