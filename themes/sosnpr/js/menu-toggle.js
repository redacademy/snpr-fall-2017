(function ($) {
  
    $('.menu-toggle').on('click', function (e) {
      e.preventDefault();
  
      $(".menu").toggleClass("menu-show").focus();
  
  
      
  
    })
    ;
  
    // $('.menu-toggle').on('blur', function(){
    //   $(".menu").toggleClass("menu-show");
  
    // });


  
  })(jQuery);