(function ($) {
  
    // $('.menu-toggle').on('click', function (e) {
    //   e.preventDefault();
  
    //   $(".menu").toggleClass("menu-show").focus();
  
      
    // })
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
      
     
    
    })
   
   
    $('.owl-carousel').owlCarousel({
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
              nav:false
          },
          1000:{
              items:5,
              nav:true,
              loop:false
          }
      }
  });
    

  
  })(jQuery);