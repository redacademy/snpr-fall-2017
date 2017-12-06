(function ($) {
  
    $('.search-submit').on('click', function (e) {
      e.preventDefault();
  
      $('.search-field').stop().animate(
        {width:200},"slow").focus();
      $('.search-submit').toggleClass("search-bar-open")
  
  
      
  
    })
    ;
  
    $('.search-field').on('blur', function(){
      $('.search-field').stop().animate(
        {width:0},"slow");
        $('.search-submit').toggleClass("search-bar-open");
  
    });
  
  })(jQuery);