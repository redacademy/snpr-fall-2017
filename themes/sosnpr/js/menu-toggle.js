(function ($) {
  
    $('.menu-item-106 a').on('click', function (e) {
      e.preventDefault();
  
      
  
      
    });
    $('.menu-item-106').addClass('subcribe-button');

    $('.menu-toggle').click(function() {
      
      
          $('.menu1').toggleClass('menu-show');
          // Remove the bind as it will be bound again on the next span click
          $('.menu1').unbind('click');
      
     
    
    });

    
    
    $('.site-content').click(function(e) {
      // If the click was not inside the active span
      if(!$(e).hasClass("menu-show")) {
          $('.menu1').removeClass('menu-show');
          // Remove the bind as it will be bound again on the next span click
          $('.menu1').unbind('click');
      }
      
     
    
    });
    
   
   
    

  
  })(jQuery);