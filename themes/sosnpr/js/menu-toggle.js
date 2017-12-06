(function ($) {
  
    // $('.menu-toggle').on('click', function (e) {
    //   e.preventDefault();
  
    //   $(".menu").toggleClass("menu-show").focus();
  
      
    // })
    $('.menu-toggle').click(function() {
      
      
          $('.menu').toggleClass('menu-show');
          // Remove the bind as it will be bound again on the next span click
          $('.menu').unbind('click');
      
     
    
    });

    
    
    $('.site-content').click(function(e) {
      // If the click was not inside the active span
      if(!$(e).hasClass("menu-show")) {
          $('.menu').removeClass('menu-show');
          // Remove the bind as it will be bound again on the next span click
          $('.menu').unbind('click');
      }
      
     
    
    })
   
    


  
  })(jQuery);