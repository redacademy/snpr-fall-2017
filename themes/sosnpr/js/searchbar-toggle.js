(function ($) {
  
    $('.search-submit').on('click', function (e) {
      e.preventDefault();
  
      $('.search-field').stop().animate(
        {width:200},"slow").focus();
      $('.search-submit').toggleClass("search-bar-open");
      $('.search-field').toggleClass("search-bar-white");
  
  
      
  
    })
    ;
  
    $('.search-field').on('blur', function(){
      $('.search-field').stop().animate(
        {width:0},"slow");
        $('.search-submit').toggleClass("search-bar-open");
        $('.search-field').toggleClass("search-bar-white");
  
    });





   $('.menu-item').on('click', function(){
     $(this).children().toggleClass('show');
     $(this).toggleClass('border');
     
     $(this).find('.down').toggleClass('see');
     $(this).find('.right').toggleClass('hide');
     
     
   })
  
  })(jQuery);