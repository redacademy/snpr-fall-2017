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
        {width:0}, 500);

        function showIcons(){
          $('.search-submit').toggleClass("search-bar-open");
          $('.menu-toggle').toggleClass("search-bar-open");
        }
        setTimeout(showIcons, 501);

       
  
    });




  // displaying on click for proposed parks
   $('.prop-item').on('click', function(){
    $(this).find('.text').toggleClass('show');
    $(this).toggleClass('border');
    
    $(this).find('.down').toggleClass('see');
    $(this).find('.right').toggleClass('hide');
  })


  
  })(jQuery);