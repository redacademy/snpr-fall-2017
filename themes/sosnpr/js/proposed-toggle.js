(function ($) {

  // displaying on click for proposed parks
  $('.title').on('click', function(){
    
 
     $(this).siblings().find('.text').addClass('show');
     $(this).parent().addClass('border');
     $(this).find('.down').addClass('see');
     $(this).find('.right').addClass('hide');
    
 
   $('.close-section').on('click', function(e){
     e.preventDefault();
     var activeContent =  $(this).parents().find('.show');
     
     activeContent.removeClass('show');
     
     $('.prop-item').removeClass('border');
     $(this).parents().find('.down').removeClass('see');
     $(this).parents().find('.right').removeClass('hide');
     
   });
 
 });

})(jQuery);