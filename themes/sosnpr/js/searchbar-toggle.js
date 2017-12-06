(function ($) {
  
    $('.search-submit').on('click', function (e) {
      e.preventDefault();
  
      $('.search-field').stop().animate(
        {width:200},"slow").focus()
  
  
      
  
    });
  
    $('.search-field').on('blur', function(){
      $('.search-field').stop().animate(
        {width:0},"slow")
  
    });





   $('.menu-item').on('click', function(){
     $(this).children().toggleClass('show');
   })
  
  })(jQuery);