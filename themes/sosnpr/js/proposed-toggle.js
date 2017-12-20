(function ($) {

  // displaying on click for proposed parks
  $('.title').on('click', function(){
    
 
     $(this).siblings().find('.text').toggleClass('show');
     $(this).parent().toggleClass('border');
     $(this).find('.down').toggleClass('see');
     $(this).find('.right').toggleClass('hide');
    
 
   $('.close-section').on('click', function(e){
     e.preventDefault();
     var activeContent =  $(this).parents().find('.show');
     
     activeContent.removeClass('show');
     
     $('.prop-item').removeClass('border');
     $(this).parents().find('.down').removeClass('see');
     $(this).parents().find('.right').removeClass('hide');
     
     window.scrollTo(0, 500);
   });
 
 });

})(jQuery);