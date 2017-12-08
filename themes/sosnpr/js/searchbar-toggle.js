(function ($) {
  
    $('.search-submit').on('click', function (e) {
      e.preventDefault();
  
      $('.search-field').stop().animate(
        {width:200},"slow").focus();
      $('.search-submit').toggleClass("search-bar-open");
      $('.menu-toggle').toggleClass("search-bar-open");
  
    });
  
    $('.search-field').on('blur', function(){
      $('.search-field').stop().animate(
        {width:0},"slow");
        $('.search-submit').toggleClass("search-bar-open");
        $('.menu-toggle').toggleClass("search-bar-open");
  
    });





  //  $('.menu-item').on('click', function(){
  //    $(this).children().toggleClass('show');
  //    $(this).toggleClass('border');
     
  //    $(this).find('.down').toggleClass('see');
  //    $(this).find('.right').toggleClass('hide');
     
     
  //  })


  // displaying on click for proposed parks
   $('.menu-item').on('click', function(){
    $(this).find('.text').toggleClass('show');
    $(this).toggleClass('border');
    
    $(this).find('.down').toggleClass('see');
    $(this).find('.right').toggleClass('hide');
  })

 //smooth scroll
  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 2000);
  });
  
  })(jQuery);